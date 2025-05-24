document.getElementById('contact').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        const formData = new FormData(this);

        fetch('send_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Muestra el mensaje de éxito o error
            this.reset(); // Reinicia el formulario
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al enviar el mensaje.');
        });
    });