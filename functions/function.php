<?php
function serverAnswer($data)
{
    return [
        'id' => $data['id'],
        'cover' => $data['cover'],
        'name' => $data['name'],
        'album_name' => $data['album_name'],
        'year' => $data['year'],
        'score' => $data['score'],
    ];
};
