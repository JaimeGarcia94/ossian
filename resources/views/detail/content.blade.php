@extends('layouts.app')

@section('content')
    <div class="container detail-box">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <span class="nav-title">Detalle</span>
                        <button onclick="returnBack()" id="buttonBack">
                            <i class="fa fa-sign-out fa-2x"></i>
                        </button>
                    </div>
                </nav>

                <div class="col-12 title-category">
                    <span>{{ $data->title }}</span> | <span>{{ $data->category }}</span>
                </div>

                <div class="col-12">
                    <img src="{{ $data->url }}" id="url-image" alt="image-detail">
                </div>

                <div class="col-12 text-justify">
                    <p>{{ $data->description }}</p>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 button-edit">
                        <a href="{{ route('edit', ['id' => $data['id']]) }}" type="submit" class="btn btn-block btn-flat btn-warning">
                            <i class="fa fa-pencil-square-o"></i>
                            <span>Editar</span>
                        </a>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="{{ route('delete', ['id' => $data['id']]) }} " type="submit" class="btn btn-block btn-flat btn-danger">
                            <i class="fa fa-trash"></i>
                            <span>Eliminar</span>
                        </a>
                    </div>
                </div>
            </div>
{{--            <h1>Detalle</h1>--}}
            @if(session('message'))
                <div>
                    {{ session('message') }}
                </div>
            @endif





            {{--boton volver atras o a la lista--}}
        </div>
    </div>

@endsection
<script>
    function returnBack()
    {
        window.location = "http://localhost/ossiantech/public/list";
    }
</script>
