@extends('layouts.app')

@section('title','Home')

@section('content')
 <main class="cardsbg pb-5">
    <section id="cardscontent" class="container cardspop">
        <div class="bg-info currentser">
            <h3 class="text-white fs-4">CURRENT SERIES</h3>
        </div>
        <div class="d-flex justify-content-center" >
            <form class="ms-5" action="{{route('comics.index')}}" method="GET">
             <input type="text" name="search" id="search" placeholder="cerca">
             <button type="submit" class="btn btn-danger ms-3">Cerca</button>
            </form>
        </div>
        <div class="row">
            @if (session()->has('message'))
            <div class="alert alert-danger">{{session('message')}}</div>
            @endif

            @foreach ($comics as $key=>$comic)
            <div class="col-12 col-md-4  col-lg-2 mt-5">
                <div class="cards">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <h5 class="card-title text-white  fs-6">{{$comic->name}}</h5>
                <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">Vedi dettaglio</a>
                <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cancel-button btn btn-danger" data-item-title="{{$comic->title}}"> Elimina {{$comic->title}}</button>

                </form>

            </div>
            @endforeach
        </div>
        <div>
            <button class="mt-4 btn bg-danger text-white"><a href="{{route('comics.create')}}">Aggiungi fumetto</a></button>
            <form action="{{route('comics.index')}}" method="GET">
            <select name="" id=""></select>
            </form>
        </div>
    </section>
 </main>
 @include('../layouts.partials.merch')
@endsection

@section('info')
<div class="maindc">
    <div class="container d-flex pb-5">
       <div class="col-3 col-md-1">
          <h2 class="fs-6 text-white mt-5 ">DC COMICS</h2>
          <ul class="list-unstyled">
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>
              <li>Games</li>
              <li>Video</li>
              <li>News</li>
          </ul>
          <div class="col-3 col-md-1">
              <h2 class="fs-6 text-white mt-3">DC COMICS</h2>
              <ul class="list-unstyled">
              <li>Shop Dc</li>
              <li>Shop Dc collectibles</li>
          </ul>
          </div>
       </div>
       <div class="col-3 col-md-1">
          <h2 class="fs-6 text-white mt-5 ms-5">DC</h2>
          <ul class="list-unstyled ms-5 ">
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>
              <li>Games</li>
              <li>Video</li>
              <li>News</li>
              <li>Games</li>
              <li>Video</li>
              <li>News</li>
          </ul>
       </div>
       <div class="col-3 col-md-1">
          <h2 class="fs-6 text-white mt-5 ms-5 ps-3">SITES</h2>
          <ul class="list-unstyled ms-5 ps-3">
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>

          </ul>
       </div>
       <div class="imglog">
          <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
       </div>
    </div>

  </div>
  @include('layouts.partials.modal_delete')
@endsection

