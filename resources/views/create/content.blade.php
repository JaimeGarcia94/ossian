@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('create.image') }}" enctype="multipart/form-data">
                @csrf

                <h1>Crear Imagen</h1>

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


{{--                <label for="title">Titulo</label>--}}
{{--                <input type="text" id="title" name="title"/>--}}

                <label for="category">Categoría</label>
                <input type="text" id="category" name="category"/>

                <label for="description">Descripción</label>
                <textarea id="description" name="description"></textarea>

                <label for="url">Imagen</label>
                <input type="text" id="url" name="url" placeholder="Copiar direccion de imagen"/>

                <button type="submit">
                    crear
                </button>

            </form>
        </div>
    </div>

@endsection
