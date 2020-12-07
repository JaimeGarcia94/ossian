<h1>Detalle</h1>
@if(session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif
<p>{{ $data->title }}</p>
<p>{{ $data->category }}</p>
<p>{{ $data->description }}</p>
<img src="{{ $data->url }}" alt="image-detail">
<a href="{{ route('edit', ['id' => $data['id']]) }}">Editar</a>
{{--boton volver atras o a la lista--}}
