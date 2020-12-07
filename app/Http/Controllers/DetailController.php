<?php

namespace App\Http\Controllers;

use App\Models\Image;

class DetailController extends Controller
{

    public function detail($id)
    {
        $data = Image::find($id);

        return view('detail.content',[
            'data' => $data
        ]);
    }
}
