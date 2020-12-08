@extends('layouts.app')

@section('content')
    <div class="container box">
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            @foreach($listData as $data)
                <div class="col-md-4">
                    <p class="title-category">{{ $data['title'] }}</p>
                    <img src="{{ $data['url'] }}" id="url-list" alt="image">
                    <p>
                        <a href="{{ route('detail', ['id' => $data['id']]) }}" type="submit" class="btn btn-block btn-flat btn-info">
                            <i class="fa fa-eye"></i>
                            <span>Detalle</span>
                        </a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
