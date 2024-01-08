@extends('layouts.app')

@section('title', 'fumetto')

@section('content')
<main>
    <section class="container">
        <h1>Products</h1>
        <div class="row gy-4">
          <div class="d-flex">
            <div class="col-4">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['price']}}</h5>
                        <p class="card-text">{!! $comic['description'] !!}</p>

                    </div>
                </div>
            </div>
            <div class="align-self-center ">
                <h1>acquista ora</h1>
            </div>
        </div>
        </div>

    </section>

</main>

@endsection
