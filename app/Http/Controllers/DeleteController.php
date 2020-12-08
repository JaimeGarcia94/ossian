<?php

namespace App\Http\Controllers;

use App\Models\Image;

class DeleteController extends Controller
{
    public function remove($id)
    {
        $remove = Image::find($id);
        $remove->delete();

        return redirect()->route('list')->with(['message'=>'La imagen se ha borrado correctamente']);
    }
}
