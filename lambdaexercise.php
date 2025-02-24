<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise</title>
</head>
<body>
    <?php
        $dataOrang = [
            [
                'nama' => 'Dimas',
                'pekerjaan' => 'Mahasiswa',
                'umur' => 18,
                'alamat' => 'Jl. ABC No. 123',
                'status' => 'Belum Menikah'
            ],
            [
                'nama' => 'Fadil',
                'pekerjaan' => 'Freelancer',
                'umur' => 25,
                'alamat' => 'Jl. DEF No. 456',
                'status' => 'Belum Menikah'
            ],
            [
                'nama' => 'Aulia',
                'pekerjaan' => 'PNS',
                'umur' => 35,
                'alamat' => 'Jl. GHI No. 789',
                'status' => 'Menikah'
            ],
            [
                'nama' => 'Rifqi',
                'pekerjaan' => 'Guru',
                'umur' => 29,
                'alamat' => 'Jl. JKL No. 012',
                'status' => 'Belum Menikah'
            ],
            [
                'nama' => 'Afrizal',
                'pekerjaan' => 'Dokter',
                'umur' => 40,
                'alamat' => 'Jl. MNO No. 345',
                'status' => 'Menikah'
            ],
            [
                'nama' => 'Rifki',
                'pekerjaan' => 'Pilot',
                'umur' => 37,
                'alamat' => 'Jl. PQR No. 678',
                'status' => 'Belum Menikah'
            ],
            [
                'nama' => 'Rizal',
                'pekerjaan' => 'Atlet',
                'umur' => 24,
                'alamat' => 'Jl. STU No. 901',
                'status' => 'Belum Menikah'
            ],
        ];

        $filteredDataOrang = array_filter($dataOrang, function($orang) {
            return $orang['status'] === 'Menikah';
        });
    ?> 
    
    <h1>Data!</h1>
    <ul>
        <?php foreach ($filteredDataOrang as $orang): ?>
            <li><?= $orang['nama']; ?> - <?= $orang['pekerjaan']; ?> - <?= $orang['umur']; ?> - <?= $orang['alamat']; ?> - <?= $orang['status']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>