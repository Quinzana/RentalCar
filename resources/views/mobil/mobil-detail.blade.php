@extends('master')

@section('title', 'Home')

@section('body')
    <div class="container bg-danger mt-5 text-capitalized">
        <div class="row">
            <img src="https://static.bangkokpost.com/media/content/20200316/3566445.jpg" class="mt-5 float-start me-3" style="max-width: 400px" alt="">
            <div class="col ms-2 mt-3 pt-4 fs-5">
                <h1 class="mt-4">{{ $mobilList->nama_mobil }}</h1>
                <p>
                    {{ $mobilList->tahun_mobil }} <br>
                    {{ $mobilList->warna_mobil }} <br>
                    {{ $mobilList->kapasitas }} orang || {{ $mobilList->bagasi }} bagasi <br>
                    {{ $mobilList->transmisi }}
                </p>
            </div>
        </div>
        <div class="row mt-3">
            kebijakan rental: <br>
            1. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe a, voluptates ratione incidunt cum, commodi quod sit atque labore quaerat cupiditate! Animi velit suscipit ex maiores aperiam dolores vel alias cum esse minus. Soluta exercitationem eos molestiae doloremque autem iste obcaecati ea quod magnam ducimus saepe nostrum vero praesentium qui impedit quae omnis alias ratione, optio odio! Aperiam repellendus cupiditate deleniti beatae sequi voluptas, rem provident officiis nam voluptatum ducimus ea maxime dicta cumque numquam repellat assumenda nisi impedit molestiae unde. Doloribus a repellat eius magnam voluptatibus omnis, quos molestiae aspernatur ex dolorum ratione temporibus? Doloremque, earum quis. Harum, ut!
        </div>
    </div>
    <div class="col mt-5 text-center">
            <hr>
            <h3>Total Rental :</h3>
            <h1>{{ $mobilList->harga_sewa }}</h1>
            <a class="btn btn-primary" href="#" role="button">Link</a>
        </div>
@endsection