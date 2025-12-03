// SELECT ELEMENTS
const canvas = document.getElementById("canvas1");
const ctx = canvas.getContext("2d");
const box = document.getElementById("particle-box");

// SET CANVAS SIZE TO BOX SIZE ONLY
function resizeCanvas() {
    canvas.width = box.clientWidth;
    canvas.height = box.clientHeight;
}
resizeCanvas();

// MOUSE TRACKING ONLY INSIDE BOX
let mouse = {
    x: undefined,
    y: undefined,
    radius: canvas.width < 1080 ? 40 : 60
};

box.addEventListener("mousemove", (e) => {
    const rect = box.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
});

box.addEventListener("mouseleave", () => {
    mouse.x = undefined;
    mouse.y = undefined;
});

// UPDATE ON WINDOW RESIZE
window.addEventListener("resize", () => {
    resizeCanvas();
    createParticles();
});

// PARTICLE CLASS
class Particle {
    constructor(x, y, vx, vy, size) {
        this.x = x;
        this.y = y;
        this.velX = vx;
        this.velY = vy;
        this.size = size;
    }

    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fillStyle = "#8c5523";
        ctx.fill();
    }

    update() {
        // Bounce inside box
        if (this.x > canvas.width || this.x < 0) this.velX *= -1;
        if (this.y > canvas.height || this.y < 0) this.velY *= -1;

        // Mouse interaction ONLY inside the card
        if (mouse.x !== undefined && mouse.y !== undefined) {
            const dx = mouse.x - this.x;
            const dy = mouse.y - this.y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < mouse.radius + this.size) {
                const force = 10; // push strength

                if (mouse.x < this.x && this.x < canvas.width - this.size * 10)
                    this.x += force;
                if (mouse.x > this.x && this.x > this.size * 10)
                    this.x -= force;
                if (mouse.y < this.y && this.y < canvas.height - this.size * 10)
                    this.y += force;
                if (mouse.y > this.y && this.y > this.size * 10)
                    this.y -= force;
            }
        }

        // Move particle
        this.x += this.velX;
        this.y += this.velY;

        this.draw();
    }
}

let particlesArray = [];

// GENERATE PARTICLES INSIDE CANVAS
function createParticles() {
    particlesArray = [];

    // particle count logic
    let count;
    if (canvas.width < 500) {
        count = 100;
    } else if (canvas.width < 900) {
        count = 200;
    } else {
        count = 200;
    }

    // speed control
    let speedMultiplier = 1;
    if (canvas.width < 1080) {
        speedMultiplier = 0.4;   // slow down to 40%
    }

    for (let i = 0; i < count; i++) {
        const size = Math.random() * 5 + 1;

        const x = Math.random() * (canvas.width - size * 2) + size * 2;
        const y = Math.random() * (canvas.height - size * 2) + size * 2;

        const vx = (Math.random() * 5 - 2.5) * speedMultiplier;
        const vy = (Math.random() * 5 - 2.5) * speedMultiplier;

        particlesArray.push(new Particle(x, y, vx, vy, size));
    }
}


// DRAW CONNECTION LINES
function connectParticles() {
    const maxDistance = (canvas.width * canvas.height) / 81;

    for (let a = 0; a < particlesArray.length; a++) {
        for (let b = a; b < particlesArray.length; b++) {
            const dx = particlesArray[a].x - particlesArray[b].x;
            const dy = particlesArray[a].y - particlesArray[b].y;
            const distance = dx * dx + dy * dy;

            if (distance < maxDistance) {
                const opacity = 1 - distance / 25000;
                ctx.strokeStyle = `rgba(140,85,31,${opacity})`;
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                ctx.stroke();
            }
        }
    }
}

// ANIMATION LOOP
function animate() {
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    particlesArray.forEach((p) => p.update());
    connectParticles();
}

createParticles();
animate();
