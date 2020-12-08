@extends('layouts.app')

@section('content')

@if(session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>LISTADO DE IMÁGENES</h3>
            @foreach($listData as $data)
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <p>{{ $data['title'] }}</p>
                        <p>{{ $data['category'] }}</p>
                        <img src="{{ $data['url'] }}" alt="image">
                        <div class="detalle">
                            <a href="{{ route('detail', ['id' => $data['id']]) }}">ver detalle</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>




@endsection
