@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="cards">

            @foreach ($products as $product)
                <div class="card">
                    <div class="img">
                        <img class="model" src="/assets/{{ $product['frontImage'] }}" alt="1.webp">
                        <img class="model-2" src="/assets/{{ $product['backImage'] }}" alt="1b.webp">
                        <span class="heart"><i class="fa-solid fa-heart"></i></span>
                        <span class="discount">-50%</span>
                        <span class="eco">Sostenibilità</span>
                    </div>
                    <div class="bio">
                        <h4>{{ $product['brand'] }}</h4>
                        <h3>{{ $product['name'] }}</h3>
                        <div class="price">
                            <span class="low-price"><strong>{{ $product['price'] }}</strong></span>
                            <span class="true-price"><strong>{{ $product['discountprice'] }}</strong></span>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
@endsection
