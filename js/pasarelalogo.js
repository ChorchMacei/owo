// script.js
window.addEventListener('load', () => {
    const container = document.getElementById('logos-container');
    const logos = container.children;
    const logosContainerWidth = container.scrollWidth;
    
    container.style.setProperty('--animation-duration', `${logosContainerWidth / 100}s`);

    const cloneLogos = () => {
        for (let i = 0; i < logos.length; i++) {
            let clone = logos[i].cloneNode(true);
            container.appendChild(clone);
        }
    };

    cloneLogos();
});
