<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data!</h1>
    <?php
        $data = [
            [
                'nama' => 'Dimas',
                'umur' => 18,
                'pekerjaan' => 'Mahasiswa'
            ],
            [
                'nama' => 'Rini',
                'umur' => 35,
                'pekerjaan' => 'Ibu rumah tangga'
            ],
            [
                'nama' => 'Bejo',
                'umur' => 45,
                'pekerjaan' => 'Teknisi'
            ]
        ];

        function filteredbyNama($data, $nama){
            $filterednama = [];
            foreach($data as $datanama){
                if($datanama['nama'] === $nama){
                    $filterednama[] = $datanama;
                }
            }
            return $filterednama;
        }

        $nama = 'Dimas';
        $filteredData = filteredbyNama($data, $nama);
    ?>

    <ul>
        <?php foreach ($filteredData as $person) : ?>
            <li>
                <strong>Nama:</strong> <?= $person['nama'] ?><br>
                <strong>Umur:</strong> <?= $person['umur'] ?><br>
                <strong>Pekerjaan:</strong> <?= $person['pekerjaan'] ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>