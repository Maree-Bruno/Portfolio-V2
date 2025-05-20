function setOptimalTextColor(backgroundColor) {
    function hexToRgb(hex) {
        hex = hex.replace(/^#/, '');
        if (hex.length === 3) {
            hex = hex.split('').map(c => c + c).join('');
        }
        const bigint = parseInt(hex, 16);
        const r = (bigint >> 16) & 255;
        const g = (bigint >> 8) & 255;
        const b = bigint & 255;
        return { r, g, b };
    }

    function luminance({ r, g, b }) {
        const a = [r, g, b].map(v => {
            v /= 255;
            return v <= 0.03928
                ? v / 12.92
                : Math.pow((v + 0.055) / 1.055, 2.4);
        });
        return a[0] * 0.2126 + a[1] * 0.7152 + a[2] * 0.0722;
    }

    const bgRgb = hexToRgb(backgroundColor);
    const bgLum = luminance(bgRgb);

    function contrastRatio(l1, l2) {
        return (Math.max(l1, l2) + 0.05) / (Math.min(l1, l2) + 0.05);
    }

    const contrastWithBlack = contrastRatio(bgLum, 0);
    const contrastWithWhite = contrastRatio(bgLum, 1);

    return contrastWithBlack > contrastWithWhite ? '#000000' : '#ffffff';
}

// Applique automatiquement la bonne couleur de texte
document.addEventListener('DOMContentLoaded', () => {
    const colorItems = document.querySelectorAll('.single-project-colors-item');

    colorItems.forEach(item => {
        const bgColor = window.getComputedStyle(item).backgroundColor;

        // Convert rgb to hex
        const rgb = bgColor.match(/\d+/g);
        if (!rgb) return;
        const hex = "#" + rgb.map(x => {
            const hex = parseInt(x).toString(16);
            return hex.length === 1 ? "0" + hex : hex;
        }).join('');

        item.style.color = setOptimalTextColor(hex);
    });
});


