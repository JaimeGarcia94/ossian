<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index()
    {
        return view('images.list', [
            'api' => $this->getApiExternal()
        ]);
    }

    public function getApiExternal()
    {
        $url = "http://internal.ossian.tech/api/Sample";
        $json = file_get_contents($url);
        $arraydata = json_decode($json);
        $results = $arraydata->result;

        foreach ($results as $data){
            $arrayresult[] = $data->title;
        }

        var_dump($arrayresult);

//        return $arraydata;
    }
}
