<h1>LISTADO</h1>
@if(session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif
<a href="{{ route('create') }}">Crear Imagen</a>
@foreach($listData as $data)
    <p>{{ $data['title'] }}</p>
    <p>{{ $data['category'] }}</p>
    <p>{{ $data['description'] }}</p>
    <img src="{{ $data['url'] }}" alt="image">
{{--    <img src="{{ route('create.avatar', ['filename' => $data['url']]) }}" alt="image" style="width: 200px; height: 200px">--}}
@endforeach
