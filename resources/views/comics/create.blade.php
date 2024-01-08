@extends('layouts.app')

@section('title','Home')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <input type="text" id="title" name="title" placeholder="inserisci titolo" class="form-control ">
        <input type="text" id="discription" name="description" placeholder="inserisci una descrizione" class="form-control ">
        <input type="text" id="price" name="price" placeholder="inserisci prezzo" class="form-control ">
        <input type="text" id="type" name="type" placeholder="inserisci tipo" class="form-control ">
        <input type="text" id="sales_date" name="sales_date" placeholder="inserisci data" class="form-control ">
        <input type="text" id="series" name="series" placeholder="inserisci tipo" class="form-control ">

        <button type="submit">invia</button>

    </form>
@endsection

