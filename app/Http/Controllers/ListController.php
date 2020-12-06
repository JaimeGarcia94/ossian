<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        return view('list.content',[
            'listData' => $this->getData()
        ]);
    }

    public function getData()
    {
        $listData = Image::all();

        foreach ($listData as $data) {
            $arrayData[] = array(
               'title' => $data->title,
               'category' => $data->category,
               'description' => $data->description,
               'url' => $data->url,
            );
        }

        return $arrayData;
    }

//    public function getImage($filename)
//    {
//        $file = Storage::disk('images')->get($filename);
//
//        return new Response($file, 200);
//    }
}
