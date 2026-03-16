document.addEventListener("DOMContentLoaded", function () {
  const canvases = document.querySelectorAll(".miniSparkleCanvas");

  canvases.forEach((canvas) => {
    const ctx = canvas.getContext("2d");
    let animationId;
    const particles = [];

    function resize() {
      canvas.width = canvas.offsetWidth * 2;
      canvas.height = canvas.offsetHeight * 2;
      ctx.scale(2, 2);
    }

    resize();
    window.addEventListener("resize", resize);

    const w = () => canvas.offsetWidth;
    const h = () => canvas.offsetHeight;

    for (let i = 0; i < 20; i++) {
      particles.push({
        x: Math.random() * w(),
        y: Math.random() * h(),
        size: Math.random() * 2.5 + 0.5,
        speedX: (Math.random() - 0.5) * 0.4,
        speedY: (Math.random() - 0.5) * 0.4,
        opacity: Math.random(),
        fadeDir: Math.random() > 0.5 ? 1 : -1,
        hue: 30 + Math.random() * 20,
      });
    }

    function animate() {
      ctx.clearRect(0, 0, w(), h());

      particles.forEach((p) => {
        p.x += p.speedX;
        p.y += p.speedY;

        p.opacity += p.fadeDir * 0.01;

        if (p.opacity >= 1) p.fadeDir = -1;
        if (p.opacity <= 0.1) p.fadeDir = 1;

        if (p.x < 0) p.x = w();
        if (p.x > w()) p.x = 0;
        if (p.y < 0) p.y = h();
        if (p.y > h()) p.y = 0;

        ctx.beginPath();

        const gradient = ctx.createRadialGradient(
          p.x,
          p.y,
          0,
          p.x,
          p.y,
          p.size * 3
        );
        gradient.addColorStop(0, `hsla(${p.hue},50%,85%,${p.opacity * 0.4})`);
        gradient.addColorStop(1, `hsla(${p.hue},50%,85%,0)`);

        ctx.fillStyle = gradient;
        ctx.arc(p.x, p.y, p.size * 3, 0, Math.PI * 2);
        ctx.fill();

        ctx.beginPath();
        ctx.fillStyle = `hsla(${p.hue},40%,95%,${p.opacity})`;
        ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
        ctx.fill();
      });

      animationId = requestAnimationFrame(animate);
    }

    animate();
  });
});
