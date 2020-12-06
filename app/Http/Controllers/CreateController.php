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
            'url' => ['required', 'image'],
        ]);

        $title = $request->input('title');
        $category = $request->input('category');
        $description = $request->input('description');
        $url = $request->file('url');

        $create->title = $title;
        $create->category = $category;
        $create->description = $description;

        if ($url){
            $url_name = time().$url->getClientOriginalName();

            Storage::disk('images')->put($url_name, File::get($url));

            $create->url = $url_name;
        }

        $create->save();

        return redirect()->route('create')->with(['message'=>'Imagen creada correctamente']);
    }
}
