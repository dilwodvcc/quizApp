<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <link href="/css/output.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="js/getUserInfo.js"></script>
</head>
<script>
    async function user() {
        const { default: apiFetch } = await import('../js/utils/apiFetch.js');
        await apiFetch('/users/getInfo', {method: 'GET'})
            .then((user) => {
                document.getElementById('userName').innerText = user.data.full_name;
            })
            .catch((error) => {
            });
    }
    user();
</script>
