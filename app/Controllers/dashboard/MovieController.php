<?php
namespace App\Controllers\dashboard;
use App\Controllers\BaseController;

class MovieController extends BaseController{

    public function index(){

        $dataHeader = [
                'title'=>'Listado del peliculas',
                'title2'=>'Titulo 2'
        ];
        $data = [
            'movies' =>array(0,1,2,3,4)
        ];
       echo view('dashboard/templates/header', $dataHeader);
       echo view('dashboard/movie/index',$data);
       echo view('dashboard/templates/footer');
    }

    public function test(){
        echo 'Hola mundo ci 4 test';
    }


}