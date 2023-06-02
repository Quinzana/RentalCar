@extends('master')

@section('title', 'Home')

@section('body')
    <div id="carouselExampleCaptions" class="carousel slide mx-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://www.selectcarhire.co.za/images/cars2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h3>ACE RENTAL CAR</h3>
                    <p>Menyediakan berbagai pilihan mobil untuk berbagai kebutuhan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://carhiremombasa.co.ke/wp-content/uploads/Car-Hire-Mombasa-Rentals.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-dark">
                    <h3>BERBAGAI PILIHAN MOBIL</h3>
                    <p>Memiliki berbagai macam mobil dengan tipe dan warna yang bervariasi</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://4.bp.blogspot.com/-CHhzI8TuTDg/VnfeYdzxI-I/AAAAAAAAABY/bjAtvB0bexk/s1600/car%2Brentals%2Bislamabad.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-dark">
                    <h3>PENYEWAAN MOBIL DENGAN PROCESS CEPAT</h3>
                    <p>Terdapat berbagai mobil yang tersedia untuk penggunaan dengan proses cepat.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto border border-dark-subtle my-3 w-75 rounded-3 py-4">
                <h2 class="pb-2 text-center">Pilih Tanggal</h2>
                <div class="row justify-content-md-center">
                    <div class="card bg-danger w-75">
                        hello
                    </div>
                </div>
                ini utk button
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-default">
            <tbody>
                @foreach($mobilList as $data)
                    <tr>
                        <td class="ps-5 w-25"><img src="https://static.bangkokpost.com/media/content/20200316/3566445.jpg" alt="" style="max-width: 150px"></td>
                        <td>
                            <h3>{{ $data->nama_mobil }}</h3>
                            {{ $data->kapasitas }} orang || {{ $data->bagasi }} bagasi <br>
                            {{ $data->transmisi }}
                        </td>
                        <td class="float-end pe-5">
                            <span class="fs-3">{{ $data->harga_sewa }}</span> / hari <br>
                            ini buat button
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection