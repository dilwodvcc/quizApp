document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;

        if (email && password) {
            alert(`Welcome back, ${email}!`);
            // Replace the alert with actual authentication logic
        } else {
            alert('Please fill in both fields.');
        }
    });
});
