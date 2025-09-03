class LightBulbsEffect {
    constructor(options = {}) {
        this.container = options.container || document.body;
        this.count = options.count || 20;
        this.size = options.size || 20;
        this.colors = options.colors || ['#ffcc00', '#ff6600', '#ffff00'];
        this.duration = options.duration || 2000;
        this.bulbs = [];
        this.canvas = null;
        this.ctx = null;
        
        this.init();
    }
    
    init() {
        this.canvas = document.createElement('canvas');
        this.canvas.id = 'light-bulbs-canvas';
        this.canvas.style.position = 'fixed';
        this.canvas.style.top = '0';
        this.canvas.style.left = '0';
        this.canvas.style.width = '100%';
        this.canvas.style.height = '100%';
        this.canvas.style.zIndex = '-1';
        this.container.appendChild(this.canvas);
        
        this.ctx = this.canvas.getContext('2d');
        
        // Resize canvas to match container
        this.resize();
        window.addEventListener('resize', () => this.resize());
        
        // Create bulbs
        for (let i = 0; i < this.count; i++) {
            this.bulbs.push({
                x: Math.random() * this.canvas.width,
                y: Math.random() * this.canvas.height,
                radius: this.size / 2 + Math.random() * this.size,
                color: this.colors[Math.floor(Math.random() * this.colors.length)],
                alpha: 0,
                targetAlpha: 0,
                delay: Math.random() * this.duration
            });
        }
        
        // Start animation
        this.animate();
    }
    
    resize() {
        this.canvas.width = this.container.clientWidth;
        this.canvas.height = this.container.clientHeight;
    }
    
    animate() {
        requestAnimationFrame(() => this.animate());
        
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        
        const now = Date.now();
        
        this.bulbs.forEach(bulb => {
            // Randomly change target alpha to simulate flickering
            if (Math.random() < 0.01) {
                bulb.targetAlpha = Math.random();
            }
            
            // Smooth transition to target alpha
            bulb.alpha += (bulb.targetAlpha - bulb.alpha) * 0.1;
            
            // Draw bulb
            this.ctx.beginPath();
            this.ctx.arc(bulb.x, bulb.y, bulb.radius, 0, Math.PI * 2);
            
            // Create glow effect
            const gradient = this.ctx.createRadialGradient(
                bulb.x, bulb.y, 0,
                bulb.x, bulb.y, bulb.radius * 2
            );
            gradient.addColorStop(0, bulb.color);
            gradient.addColorStop(1, 'transparent');
            
            this.ctx.fillStyle = gradient;
            this.ctx.globalAlpha = bulb.alpha;
            this.ctx.fill();
        });
    }
}

// Initialize effect when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new LightBulbsEffect({
        count: 30,
        size: 30,
        duration: 3000
    });
});