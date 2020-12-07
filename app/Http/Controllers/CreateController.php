<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CreateController extends Controller
{
    public function index()
    {
        return view('create.content');
    }

    public function create(Request $request)
    {
        $create = new Image;

        $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'category' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
        ]);

        $title = $request->input('title');
        $category = $request->input('category');
        $description = $request->input('description');
        $url = $request->input('url');

        $create->title = $title;
        $create->category = $category;
        $create->description = $description;
        $create->url = $url;

        $create->save();

        return redirect()->route('image.detail', ['id' => $create->id])->with(['message'=>'Imagen creada correctamente']);
    }
}
