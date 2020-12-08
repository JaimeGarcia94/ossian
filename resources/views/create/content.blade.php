@extends('layouts.form')

@section('content')
    <form method="POST" action="{{ route('create.image') }}" enctype="multipart/form-data">
        @csrf
        <h1 class="form-box-title">Crear Imagen</h1>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus placeholder="Titulo">

            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" required autocomplete="category" autofocus placeholder="Categoría">

            @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus placeholder="Descripción"></textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" required autocomplete="url" autofocus placeholder="Copiar dirección de imagen">

            @error('url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-xs-12">
            <button type="submit" class="btn btn-block btn-flat btn-submit">
                {{__('Crear')}}
            </button>
        </div>
    </form>
@endsection
