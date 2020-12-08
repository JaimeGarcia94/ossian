@extends('layouts.welcome')

@section('content')
    <h1 class="title">Welcome Ossian Tech</h1>
    <div class="button">
        <a href="{{ route('load') }}" type="button" class="btn btn-block btn-flat btn-primary">Carga las imágenes</a>
    </div>
@endsection
