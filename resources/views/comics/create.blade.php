@extends('layouts.app')

@section('title','Home')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <input type="text"   name="name" placeholder="inserisci titolo" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        <input type="text" id="discription" name="description" placeholder="inserisci una descrizione" class="form-control ">
        <input type="text" id="price" name="price" placeholder="inserisci prezzo" class="form-control @error('price') is-invalid @enderror">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        <input type="text" id="type" name="type" placeholder="inserisci tipo" class="form-control ">
        <input type="text" id="sale_date" name="sale_date" placeholder="inserisci data" class="form-control  @error('sale_date') is-invalid @enderror">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        <input type="text" id="series" name="series" placeholder="inserisci tipo" class="form-control ">

        <button type="submit">invia</button>

    </form>
@endsection

