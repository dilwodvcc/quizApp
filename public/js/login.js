async function login() {
    let form = document.getElementById("form"),
        formData = new FormData(form);
    const { default: apiFetch } = await import("./utils/apiFetch.js");

    document.getElementById("error").innerHTML = "";

    await apiFetch('/login', { method: 'POST', body: formData })
        .then((data) =>
        {
            localStorage.setItem('token',data.token);
            window.location.href = '/dashboard';
        })
        .catch(error => {
            console.log(error.data);
            console.error(error.data.errors);

            Object.keys(error.data.errors).forEach(key => {
                document.getElementById("error").innerHTML += `<p class="text-red-600 mt-1">${error.data.errors[key]}</p>`;
            });
        });
}
