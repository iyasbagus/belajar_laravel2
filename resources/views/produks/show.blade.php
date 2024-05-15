<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Produk</title>
</head>

<body>
    {{-- awal navbar --}}

    @include('layouts.navbar')

    {{-- akhir navbar --}}

    {{-- awal content --}}

    <div class="section">
        <div class="container">
            <div class="row mt-5 justify-content-center">

                    <center>
                        <h3>Show Produk</h3>
                    </center>
            </div>
            <div class="row mt-2">
                <div class="col-4 mt-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGdU_4f7sFCc5e-kbBoEVC16JOLsohogkA87nsCr_5Fw&s  " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$produk->nama_produk}}</h5>
                            <p class="card-text ">{{$produk->merek->nama_merek}}</p>
                            <p class="card-text ">Stok Tersisa :{{$produk->jumlah}}</p>
                            <p class="card-text">tanggal produksi :{{$produk->tanggal_produksi}}</p>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-dark">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- akhir content --}}

    {{-- awal footer --}}

    @include('layouts.footer')

    {{-- akhir footer --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
