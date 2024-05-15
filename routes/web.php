<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Barangg;
use App\Models\Pembeli;
use App\Models\Transaksi;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;


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

Route::get('/testmodel11', function () {
    $post = Post::all();
    return view('tampil_post', compact('post'));
});

//menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Barang::all();
    return $data;
});

//menampilkan data dari database
Route::get('/testmodel2', function () {
    $siswa = Siswa::all();
    return view('tampil_siswa', compact('siswa'));
    //$data = Siswa::where('nama','like','%Iyas Bagus%')->get();

    //tambah data
    // $data = new Siswa;
    // $data-> nama = "Jon Snow";
    // $data-> jenis_kelamin = "Pria";
    // $data-> alamat = "Winterfell";
    // $data-> agama = "Islam";
    // $data-> telepon = "1020";
    // $data-> email = "jonsnow123@gmail.com";
    // $data->save();

    //return $data;
});

Route::get('/testmodel20', function () {
    $pengguna = Pengguna::all();
    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/testmodel21', function () {
    $telepon = Telepon::all();
    return view('tampil_telepon', compact('telepon'));
});

Route::get('/testmodel22', function () {
    $merek = Merek::all();
    return view('tampil_merek', compact('merek'));
});

Route::get('/testmodel23', function () {
    $produk = Produk::all();
    return view('tampil_produk', compact('produk'));
});

Route::get('/testmodel24', function () {
    $transaksi = Transaksi::all();
    return view('tampil_transaksi', compact('transaksi'));
});

// Route::get('/template', function () {
    // $produk = Produk::all();
    // return view('template', compact('produk'));
// });

//controller
Route::get('post',[PostController::class,'menampilkan']);
Route::get('post/{id}',[PostController::class,'show']);

Route::get('produk', [ProdukController::class, 'menampilkan']);
Route::get('produk/{id}', [ProdukController::class, 'show']);

Route::get('merek', [MerekController::class, 'menampilkan']);
Route::get('merek/{id}', [MerekController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route untuk brand
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);