document.addEventListener('DOMContentLoaded', () => {

    // RELOJ EN TIEMPO REAL
    const reloj = document.getElementById('reloj');

    function actualizarReloj() {
        reloj.textContent = new Date().toLocaleTimeString('es-PE', { hour12: false });
    }

    actualizarReloj();
    setInterval(actualizarReloj, 1000);

    // BARCODE INPUT
    const input = document.getElementById('codigo');

    input.addEventListener('keydown', (e) => {
        if (e.key !== 'Enter') return;

        const codigo = input.value.trim();
        if (!codigo) return;

        input.value = '';
    });

});
