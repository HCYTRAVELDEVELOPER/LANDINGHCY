// Nueva lógica para deshabilitar el botón de registro si las contraseñas no cumplen con las validaciones
document.getElementById('registrationForm').addEventListener('input', function () {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    const registerButton = document.querySelector('input[type="submit"]');
    const specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;

    let valid = true;

    if (!specialCharPattern.test(password)) {
        passwordError.style.display = 'block';
        valid = false;
    } else {
        passwordError.style.display = 'none';
    }

    if (password !== confirmPassword) {
        confirmPasswordError.style.display = 'block';
        valid = false;
    } else {
        confirmPasswordError.style.display = 'none';
    }

    registerButton.disabled = !valid;
});


