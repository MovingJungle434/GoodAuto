
const emailInput = document.getElementById('email');
const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');

const emailError = document.getElementById('email-error');
const nameError = document.getElementById('name-error');
const phoneError = document.getElementById('phone-error');

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validateName(name) {
    return name.trim() !== '';
}


function validateForm() {
    let isValid = true;

    if (!validateEmail(emailInput.value)) {
        emailError.textContent = 'Please enter a valid email address';
        isValid = false;
    } else {
        emailError.textContent = '';
    }

    if (!validateName(nameInput.value)) {
        nameError.textContent = 'Please enter your name';
        isValid = false;
    } else {
        nameError.textContent = '';
    }

    if (!validatePhone(phoneInput.value)) {
        phoneError.textContent = 'Please enter a valid phone number';
        isValid = false;
    } else {
        phoneError.textContent = '';
    }

    return isValid;
}

emailInput.addEventListener('input', () => {
    emailError.textContent = '';
});

nameInput.addEventListener('input', () => {
    nameError.textContent = '';
});

phoneInput.addEventListener('input', () => {
    phoneError.textContent = '';
});
