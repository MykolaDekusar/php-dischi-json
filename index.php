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
        <div :class="{overflow: !hide}">
            <header>
                <h1>{{title}}</h1>
            </header>
            <main>
                <div class="container">
                    <div class="row">
                        <ul>
                            <li v-for="cards in data">
                                <div class="card" @click="cardSearch(cards.id)">
                                    <div class="img-cont">
                                        <img :src="cards.cover" :alt="cards.album_name">
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title">{{cards.name}}</h2>
                                        <h3 class="album-name">{{cards.album_name}}</h3>
                                        <p class="score">Score: {{cards.score}}</p>
                                        <p class="album-year">{{cards.year}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </main>
            <div class="container-pop" :class="{hide: hide}">
                <div class="contenuto">
                    <div class="inside"><img :src="cardData.cover" :alt="cardData.name">
                        <div class="card-content-pop">
                            <h2 class="card-title">{{cardData.name}}</h2>
                            <h3 class="album-name">{{cardData.album_name}}</h3>
                            <p class="score">Score: {{cardData.score}}</p>
                            <p class="album-year">{{cardData.year}}</p>
                        </div>
                    </div>

                    <div class="close" @click="showHide">X</div>
                </div>

            </div>
            <footer>
                <p>Copyright||Created by <span class="creator">Draeknes</span></p>
            </footer>
        </div>
    </div>

    <!-- vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- my script -->
    <script src="./main.js"></script>

</body>

</html>