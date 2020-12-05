<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImagesController extends Controller
{
    public function index()
    {
        return view('images.list', [
//            'api' => $this->getApiExternal()
        ]);
    }

    public function getApiExternal()
    {
        $url_api = "http://internal.ossian.tech/api/Sample";
        $convert_json = file_get_contents($url_api);
        $decode_json = json_decode($convert_json);
        $results = $decode_json->result;

        foreach ($results as $data){
            $images = new Image([
                'title' => $data->title,
                'category' => $data->category,
                'description' => $data->description,
                'url' => $data->url,
            ]);
            $images->save();
        }

        return response()->json('Successfully added');

    }
}
