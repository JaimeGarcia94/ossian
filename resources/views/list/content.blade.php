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
    <div class="detalle">
        <a href="{{ route('image.detail', ['id' => $data['id']]) }}">ver detalle</a>
    </div>
@endforeach

