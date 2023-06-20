<?php

// Tipe Data String
$namaDepan = 'Rebly';
$namaBelakang = 'Tabuni';
$apk_name = 'Tipe Data PHP';

// Tipe Data Integer
$a = 20;
$b = 10;

// penjumlahan
$c = $a + $b;
$d = $a - $b;
$e = $a / $b;
$f = $a * $b;

// tipe data float
$float = 11.23;

// Tipe Data Boolen
//1
$true = true;
//0
$false = false;
$and = $true && $false;
$or = $true || $false;

// Tipe Data Array
$nama = array('Sam', 'Billy', 'Anjas', 'Alpais');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Tipe Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- HEADER START -->
    <header class="bg-dark">
        <div class="row p-3 text-center">
            <div class="col">
                <h3 class="text-white"><?= $apk_name; ?></h3>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <div class="col mt-5">
                <h5>Tipe Data String</h5>
                <p>Welcome <?= $namaDepan . ' ' . $namaBelakang ?></p>
            </div>
        </div>
        <!-- .row end -->

        <!-- .row start -->
        <div class="row">
            <div class="col mt-5">
                <h5>Tipe Integer</h5>
                <p class="0">Variabel A = <?= $a ?></p>
                <p>Variabel B = <?= $b ?></p>
                <p class="mb-0">
                    <?= $a . '+' . $b . '=' . $c ?>
                </p>
                <p class="mb-0">
                    <?= $a . '-' . $b . '=' . $d ?>
                </p>
                <p class="mb-0">
                    <?= $a . '/' . $b . '=' . $e ?>
                </p>
                <p class="mb-0">
                    <?= $a . '*' . $b . '=' . $f ?>
                </p>
            </div>
        </div>
        <!-- .row end -->
        <!-- .row start -->
        <div class="row">
            <div class="col mt-5">
                <h5>Tipe Data Float</h5>
                <p><?php var_dump($float); ?></p>
            </div>
        </div>
        <!-- .row end -->
        <!-- .row start -->
        <div class="row">
            <div class="col mt-5">
                <h5>Tipe Data Float</h5>
                <p><?php var_dump($and); ?></p>
                <p><?php var_dump($or); ?></p>
            </div>
        </div>
        <!-- .row end -->
        <!-- .row start -->
        <div class="row">
            <div class="col mt-5">
                <h5>Tipe Data Array</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                    <?php
                    $no = 0;
                    foreach ($nama as $n) : ?>
                        <tr>
                            <td><?= ++$no; ?></td>
                            <td><?= $n ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- CONTENT START -->

    <!-- CONTENT END -->

    <!-- FOOTER START -->

    <!-- FOOTER END -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>