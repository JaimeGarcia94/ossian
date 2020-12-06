<?php

namespace App\Http\Controllers;

use App\Models\Image;
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
               'category' => $data->caregory,
               'description' => $data->description,
               'url' => $data->url,
            );
        }

        return $arrayData;
    }
}
