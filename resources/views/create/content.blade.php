<form method="POST" action="{{ route('create.image') }}" enctype="multipart/form-data">
    @csrf

    <h1>Crear Imagen</h1>

        <label for="title">Titulo</label>
        <input type="text" id="title" name="title"/>

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
