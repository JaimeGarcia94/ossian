@extends('layouts.form')

@section('content')
    <form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <h1 class="form-box-title">Editar Imagen</h1>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
            </div>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $data['title'] }}" required autocomplete="title" autofocus placeholder="Titulo">

            @error('title')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
            </div>
            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $data['category'] }}" required autocomplete="category" autofocus placeholder="Categoría">

            @error('category')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-pencil-square-o"></i>
                    </span>
            </div>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus placeholder="Descripción">{{ $data['description'] }}</textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-picture-o"></i>
                    </span>
            </div>
            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $data['url'] }}" required autocomplete="url" autofocus placeholder="Copiar dirección de imagen">

            @error('url')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-xs-12">
            <button type="submit" class="btn btn-block btn-flat btn-warning">
                <i class="fa fa-pencil-square-o"></i>
                <span>Editar</span>
            </button>
        </div>
    </form>
@endsection
