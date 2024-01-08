@extends('layouts.app')

@section('title','about')

@section('content')

ABOUT US
<div class="container">
    <div class="row flex-wrap">
        @for ($i = 0; $i < 6; $i++)
        <div class="col-md-4 col-12 mt-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas vel vero veritatis ratione eos culpa corrupti repellat porro quos modi.
        </div>
        @endfor

    </div>

</div>

@endsection

