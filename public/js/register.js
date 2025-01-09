async function register()
{
    let form = document.getElementById("form"),
        formData = new FormData(form);

    fetch("http://localhost:8080/api/register",
        {
            method: "POST",
            body: formData,
        })
        .then(function (response)
        {
            if (response.ok)
            {
                return response.json();
            }
            return Promise.reject(response);
        })
        .then(function (data)
        {
            localStorage.setItem('Token', data.token);
            console.log(localStorage.getItem('Token'));
        })
        .catch(function (error)
        {
            console.error(error)
        });
}
