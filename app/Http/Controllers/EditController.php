<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit($id)
    {
        $data = Image::find($id);

        return view('edit.content',[
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:100'],
            'category' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
        ]);

        $id = $request->input('id');
        $title = $request->input('title');
        $category = $request->input('category');
        $description = $request->input('description');
        $url = $request->input('url');

        $edit = Image::find($id);
        $edit->title = $title;
        $edit->category = $category;
        $edit->description = $description;
        $edit->url = $url;

        $edit->update();

        return redirect()->route('detail', ['id' => $edit->id])->with(['message'=>'Imagen editada correctamente']);
    }
}
