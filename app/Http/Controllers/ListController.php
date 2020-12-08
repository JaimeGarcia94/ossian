<?php

namespace App\Http\Controllers;

use App\Models\Image;

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
               'id' => $data->id,
               'title' => $data->title,
               'category' => $data->category,
               'description' => $data->description,
               'url' => $data->url,
            );
        }

        return $arrayData;
    }

}
