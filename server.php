<?php
require_once  __DIR__ . '/functions/function.php';
header('Content-Type: application/json');
// $data = [
//     [
//         'cover' => 'https://metalstorm.net/images/albums/1/1118.jpg',
//         'name' => 'Megadeth',
//         'album_name' => 'Rust In Peace',
//         'year' => '1990',
//         'score' => '9.26'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/9/908.jpg',
//         'name' => 'Judas Priest',
//         'album_name' => 'Painkiller',
//         'year' => '1990',
//         'score' => '9.26'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/5/553.jpg',
//         'name' => 'Death',
//         'album_name' => 'Symbolic',
//         'year' => '1995',
//         'score' => '9.25'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/9/95.jpg',
//         'name' => 'Opeth',
//         'album_name' => 'Blackwater Park',
//         'year' => '2001',
//         'score' => '9.25'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/1/1221.jpg',
//         'name' => 'Metallica',
//         'album_name' => 'Master Of Puppets',
//         'year' => '1986',
//         'score' => '9.25'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/1/1220.jpg',
//         'name' => 'Metallica',
//         'album_name' => 'Ride The Lightning',
//         'year' => '1984',
//         'score' => '9.24'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/2/269.jpg',
//         'name' => 'Black Sabbath',
//         'album_name' => 'Paranoid',
//         'year' => '1970',
//         'score' => '9.2'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/8/854.jpg',
//         'name' => 'Iron Maiden',
//         'album_name' => 'Powerslave',
//         'year' => '1984',
//         'score' => '9.16'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/5/554.jpg',
//         'name' => 'Death',
//         'album_name' => 'The Sound Of Perseverance',
//         'year' => '1998',
//         'score' => '9.15'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/2/2122.jpg',
//         'name' => 'Agalloch',
//         'album_name' => 'The Mantle',
//         'year' => '2002',
//         'score' => '9.15'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/8/852.jpg',
//         'name' => 'Iron Maiden',
//         'album_name' => 'The Number Of The Beast',
//         'year' => '1982',
//         'score' => '9.13'
//     ],
//     [
//         'cover' => 'https://metalstorm.net/images/albums/1/1953.jpg',
//         'name' => 'Edge Of Sanity',
//         'album_name' => 'Crimson',
//         'year' => '1996',
//         'score' => '9.13'
//     ],
// ];
// OTTENGO I DATI DA UN JSON
$json_string = file_get_contents('bands.json');
// DECRIPTO I DATI IN UNA STRINGA
$data = json_decode($json_string, true);
$result = $data;
// LEGGO UNA CARD
if (isset($_GET['action']) && $_GET['action'] === 'read') {
    // VERIFICO CHE CI SIA UN ID
    if (isset($_GET['id'])) {
        // CERCO PER COLONNA L'ID
        $data_position = array_search($_GET['id'], array_column($result, 'id'));
        // SE E' ANDATO TUTTO BENE RISPONDO CON L'OGGETTO CHE HA L'ID CERCATO
        if ($data_position !== false) {
            $result = $data[$data_position];
            echo json_encode($result);
            die();
        }
    } else {
        echo 'Error no id found';
    }
}
// DECIDO QUALI DATI RIMANDARE
$result = array_map('serverAnswer', $result);
// INVIO IL DATO DEL SERVER 
echo json_encode($result);
