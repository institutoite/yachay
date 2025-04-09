document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('clienteForm');
    
    form.addEventListener('submit', function(e) {
        // Validación simple del lado del cliente
        const nombre = document.getElementById('nombre').value.trim();
        const correo = document.getElementById('correo').value.trim();
        const telefono = document.getElementById('telefono').value.trim();
        
        if (!nombre || !correo || !telefono) {
            alert('Por favor complete todos los campos');
            e.preventDefault();
            return false;
        }
        
        // Validación básica de email
        if (!correo.includes('@') || !correo.includes('.')) {
            alert('Por favor ingrese un correo electrónico válido');
            e.preventDefault();
            return false;
        }
        
        return true;
    });
});