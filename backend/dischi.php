<?php
$dischi = [
    [
        'titolo' => 'AAAA',
        'genere' => 'GEN-AAAA',
        'band' => 'BAND-AAAA',

    ],
    [
        'titolo' => 'BBBB',
        'genere' => 'GEN-BBBB',
        'band' => 'BAND-BBBB',

    ],
    [
        'titolo' => 'CCCC',
        'genere' => 'GEN-CCCC',
        'band' => 'BAND-CCCC',

    ],
    [
        'titolo' => 'DDDD',
        'genere' => 'GEN-DDDD',
        'band' => 'BAND-DDDD',

    ],
];

header('Content-Type: application/json');
echo json_encode($dischi);
// arrivato al minuto 14.50



?>