<form method="POST" action="{{ route('update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <h1>Editar Imagen</h1>

    <label for="title">Titulo</label>
    <input type="text" id="title" name="title"/>

    <label for="category">Categoría</label>
    <input type="text" id="category" name="category"/>

    <label for="description">Descripción</label>
    <textarea id="description" name="description"></textarea>

    <label for="url">Imagen</label>
    <input type="text" id="url" name="url" placeholder="Copiar direccion de imagen"/>

    <button type="submit">
        Editar
    </button>


</form>
