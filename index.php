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
    <div id="app" v-cloak>
        <header>
            <h1>{{title}}</h1>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <ul>
                        <li v-for="card in data">
                            <div class="card">
                                <div class="img-cont">
                                    <img :src="card.cover" alt="">
                                </div>
                                <div class="card-content">
                                    <h2 class="card-title">{{card.name}}</h2>
                                    <h3 class="album-name">{{card.album_name}}</h3>
                                    <p class="score">{{card.score}}</p>
                                    <p class="album-year">{{card.year}}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <footer>
            <p>Copyright||Created by <span class="creator">Draeknes</span></p>
        </footer>
    </div>

    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- my script -->
    <script src="./main.js"></script>

</body>

</html>