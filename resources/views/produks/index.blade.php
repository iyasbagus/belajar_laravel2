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
                        <h3>List Produk</h3>
                    </center>
            </div>
            <div class="row mt-2">
                @foreach ($produk as $data)
                <div class="col-4 mt-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.rakitan.com/jsg-content/uploads/modules/produk/20221007122646.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->nama_produk}}</h5>
                            <p class="card-text ">{{$data->merek->nama_merek}}</p>
                            <a href="/produk/{{$data->id}}" class="btn btn-dark">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
