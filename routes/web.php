<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di webapp saya<br>'
        . 'laravel, memang bagus banget'

        . '<h1>Biodata<h1>'
        . '<table>'
        . '<tr>'
        . '<td>Nama'
        . '<td>:'
        . '<td>Iyas Bagus'
        . '</tr>'
        . '<tr>'
        . '<td>Umur'
        . '<td>:'
        . '<td>16'
        . '</tr>'
        . '<tr>'
        . '<td>Tanggal lahir'
        . '<td>:'
        . '<td>29 Mei 2007'
        . '</tr>'
        . '<tr>'
        . '<td>Agama'
        . '<td>:'
        . '<td>Islam'
        . '</tr>'
        . '</table>';
});

Route::get('/animals', function () {
    $king = 'lion';
    $hewan = ["monkey", "dragonfly", "tiger", "bird", "cat"];
    return view("animals_page", compact("king", "hewan"));
});

Route::get('/vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view("vegetables_page", ['buah' => $fruit]);
});

Route::get('name/{name}/{berat}/{tinggi}', function ($name, $berat, $tinggi) {
    $bmi = $berat / (($tinggi / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Anda Obesitas";
    } elseif ($bmi > 25) {
        $ket = "Anda Kelebihan Berat Badan";
    } elseif ($bmi > 18.5) {
        $ket = "Berat Badan Anda Ideal";
    } elseif ($bmi < 18.5) {
        $ket = "Anda Kekurangan Berat Badan";
    }

    return '<h2>Berat badan test</h2>'
        . "Nama : $name <br>"
        . "Berat Badan : $berat Kg<br>"
        . "Tinggi Badan : $tinggi Cm<br>"
        . "BMI : $bmi <br>"
        . "Keterangan : <b>$ket<b> <br>";
});

// Route optional parameter
Route::get('myname/{name?}', function ($name = "Abdu") {
    return "My name is $name";
});

//menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Barang::all();
    return $data;
});
