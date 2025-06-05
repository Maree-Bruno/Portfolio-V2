import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
function isLightBackground(bgColor) {
    const [r, g, b] = bgColor.match(/\d+/g).map(Number);
    return (r + g + b) / 3 > 127;
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.single-project-colors-item').forEach(item => {
        const bg = getComputedStyle(item).backgroundColor;
        const isLight = isLightBackground(bg);
        item.classList.add(isLight ? 'light-bg' : 'dark-bg');

    });

});

function fancybox() {
    document.addEventListener("DOMContentLoaded", function () {
        Fancybox.bind('[data-fancybox="gallery"]', {});
    });
}

fancybox();
