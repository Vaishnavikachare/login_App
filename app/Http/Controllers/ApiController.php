<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getApiData(){

        // \Log::info("hi");



        $client = new Client();
        $response = $client->get('https://opencontext.org/query/Asia/Turkey/Kenan+Tepe.json');
        $data = json_decode($response->getBody(), true);
        \Log::info($data);
        $ids = [];


        // foreach ( $data as $key => $value) { 
        //    if($key == 'id'){
        //     $ids[] = $value;
        //    }
        // }
        if (array_key_exists("id",$data)){
            $ids[] = $data['id'];
        }

        foreach($data as $datas){
            if (isset($datas['id'])){
                $ids[] = $datas;
            }
            foreach($datas as $newdata){
                if (isset($newdata)){
                    $ids[] = $newdata;
                }
            
            }
        }
        
        

        return view('apidata', compact('ids'));




        $client = new Client();
        $apiUrl = "https://opencontext.org/query/Asia/Turkey/Kenan+Tepe.json";

        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            return view('apidata', ['apidata' => $data]);
        } catch (\Exception $e) {
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}
