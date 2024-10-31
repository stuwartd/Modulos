const circle = document.getElementById('circle');
const volumeBar = document.getElementById('volumeBar');

function moveCircle(event) {
    const rect = volumeBar.getBoundingClientRect();
    const x = event.clientX - rect.left; // posición del clic en la barra
    const width = volumeBar.clientWidth;

    // Asegúrate de que el círculo no se salga de los límites
    const left = Math.max(0, Math.min(x - circle.clientWidth / 2, width - circle.clientWidth));

    circle.style.left = `${left}px`;

    // Redirigir según la posición del círculo
    if (left < width / 2) {
        window.location.href = "Administrativo/adminindex.php"; // Cambia a tu URL
    } else {
        window.location.href = "Usuario/userindex.php"; // Cambia a tu otra URL
    }
}
