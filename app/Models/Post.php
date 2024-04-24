<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post 
{

    public static function all(){
        $response = Http::get('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pkmqdbd/endpoint/getAllNews');
        // mengubah nya menjadi colection untuk mendapatkan bebrapa method pada colection laravel

        if ($response->successful()) {
            // Mengembalikan data dalam bentuk array
            return $response->json();
        } else {
            // Jika terjadi kesalahan, kembalikan array kosong
            return [];
        }
    }

    public static function find($_id){

        $databaseblog = static::all();
    //     $hasil = [];
    //     foreach ($databaseblog as $posts){
    //     if ($posts["idblogdb"] === $idblogdb) {
    //         $hasil = $posts ;
    //     }
    // }

    // return $hasil;
    return collect($databaseblog)->firstWhere('_id',$_id);
    }
   
}
