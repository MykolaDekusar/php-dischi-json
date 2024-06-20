<?php
require __DIR__ . '/server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Musicale</title>
    <!-- css -->
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div id="app">
        <h1>{{title}}</h1>
    </div>

    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- my script -->
    <script src="./main.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>