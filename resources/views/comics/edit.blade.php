@extends('layouts.app')

@section('title','Edit')

@section('content')
    <form action="{{route('comics.update',$comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="form-label">titolo:</label>
            <input type="text" value="{{old('title',$comic->name)}}" id="title" name="title"  class="form-control" >
        </div>
        <div>
            <label for="description" class="form-label">Description:</label>
            <input type="text"  id="description" value="{{old('title',$comic->description)}}" name="description" placeholder="inserisci una descrizione" class="form-control ">
        </div>

        <input type="text" id="price" name="price" value="{{old('title',$comic->price)}}" placeholder="inserisci prezzo" class="form-control ">
        <input type="text" id="type" value="{{old('title',$comic->type)}}" name="type" placeholder="inserisci tipo" class="form-control ">
        <input type="text"  id="sales_date" value="{{old('title',$comic->sales_date)}}" name="sales_date" placeholder="inserisci data" class="form-control ">
        <input type="text" id="series" value="{{old('title',$comic->series)}}" name="series" placeholder="inserisci tipo" class="form-control ">

        <button type="submit">invia</button>

    </form>
@endsection
