function isIPhone() {
    return /iPhone|iPod|iPad/.test(navigator.userAgent);
}

if (isIPhone()) {
    // Si es un iPhone, oculta las animaciones o ejecuta una versión simplificada
    document.getElementByClass("image-37").style.filter.blur = "0";
}