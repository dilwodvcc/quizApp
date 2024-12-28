document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.querySelector('#name').value;
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;
        const confirmPassword = document.querySelector('#confirm-password').value;

        if (password !== confirmPassword) {
            alert('Passwords do not match. Please try again.');
            return;
        }

        if (!document.querySelector('#terms').checked) {
            alert('You must agree to the terms and conditions.');
            return;
        }

        alert(`Account created successfully for ${name}!`);
        // Replace the alert with actual registration logic
    });
});
