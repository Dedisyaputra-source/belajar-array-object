<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h2>Data Array</h2>";
    $person = [
        'nama' => 'Dedi syaputra',
        'asal' => 'Natuna',
        'umur' => 22,
        'alamat' => [
            'kota' => 'Ranai',
            'jalan' => 'Pattimura',
            'kode pos' => [
                'bunguran tengah' => 2015,
                'bunguran barat' => 2078,
                'bunguran timur laut' => 2138,
                'bunguran timur' => [
                    'ranai kota' => 2117,
                    'bandarsyah' => 2114,
                ],
            ],
        ],
    ];
    echo "<pre>";
    print_r($person);
    echo "</pre>";
    echo "<h2>Data object</h2>";
    $person = (object)[
        'nama' => 'Dedi syaputra',
        'asal' => 'Natuna',
        'umur' => 22,
        'alamat' => [
            'kota' => 'Ranai',
            'jalan' => 'Pattimura',
            'kode_pos' => [
                'bunguran tengah' => 2015,
                'bunguran barat' => 2078,
                'bunguran timur laut' => 2138,
                'bunguran_timur' => [
                    'ranai kota' => 2117,
                    'bandarsyah' => 2114
                ],
            ],
        ],
    ];
    $person->alamat = (object)$person->alamat;
    $person->alamat->kode_pos = (object)$person->alamat->kode_pos;
    $person->alamat->kode_pos->bunguran_timur = (object)$person->alamat->kode_pos->bunguran_timur;
    echo "<pre>";
    print_r($person);
    echo "</pre>";
    ?>
</body>

</html>