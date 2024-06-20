<?php
$data = [
    [
        'cover' => 'https://metalstorm.net/images/albums/1/1118.jpg',
        'name' => 'Megadeth',
        'album_name' => 'Rust In Peace',
        'year' => '1990',
        'score' => '9.26'
    ],
    [
        'cover' => 'https://metalstorm.net/images/albums/9/908.jpg',
        'name' => 'Judas Priest',
        'album_name' => 'Painkiller',
        'year' => '1990',
        'score' => '9.26'
    ],
];

// specifico il tipo di info
header('Content-Type: application/json');
echo json_encode($data);
