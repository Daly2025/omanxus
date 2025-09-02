const canvas = document.getElementById('matrixCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const katakana = 'アァカサタナハマヤラワガザダバパイィキシチニヒミリヰギジヂビピウゥクスツヌフムユルグズヅブプエェケセテネヘメレヱゲゼデベペオォコソトノホモヨロヲゴゾドボポヴッン';
const latin = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
const nums = '0123456789';
const alphabet = katakana + latin + nums;

const fontSize = 16;
const columns = canvas.width / fontSize;

const drops = [];
for (let i = 0; i < columns; i++) {
    drops[i] = 1;
}

let animationInterval;

function startMatrixEffect() {
    // Asegúrate de que el canvas esté visible al iniciar el efecto
    canvas.style.display = 'block';
    // Reinicia las gotas para un nuevo efecto
    for (let i = 0; i < drops.length; i++) {
        drops[i] = 1;
    }

    // Limpia cualquier intervalo anterior para evitar múltiples ejecuciones
    if (animationInterval) {
        clearInterval(animationInterval);
    }

    animationInterval = setInterval(draw, 30);

    // Detiene el efecto Matrix y oculta el canvas después de 2 segundos (2000 milisegundos)
    setTimeout(() => {
        clearInterval(animationInterval);
        canvas.style.display = 'none';
    }, 2000); // Cambia este valor para ajustar la duración (ej. 1000 para 1 segundo)
}

function draw() {
    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.fillStyle = '#00F'; // Blue text (puedes usar '#00F' para azul puro, o un tono como '#00FFFF' para cian, o '#00BFFF' para azul cielo)
    ctx.font = fontSize + 'px monospace';

    for (let i = 0; i < drops.length; i++) {
        const text = alphabet.charAt(Math.floor(Math.random() * alphabet.length));
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);

        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
            drops[i] = 0;
        }
        drops[i]++;
    }
}

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    const columns = canvas.width / fontSize;
    drops.length = 0; // Clear existing drops
    for (let i = 0; i < columns; i++) {
        drops[i] = 1;
    }
});