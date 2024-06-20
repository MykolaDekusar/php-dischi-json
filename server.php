<?php
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

// creo un file json con il mio array di bande
// $file_json = json_encode($data);
// file_put_contents('bands.json', $file_json);

// specifico il tipo di info
// header('Content-Type: application/json');
// echo json_encode($data);


// INVIO IL DATO DAL SERVER PRESO DA UN .JSON
header('Content-Type: application/json');
echo $json_string = file_get_contents('bands.json');
