<?php

namespace App\Controller;

class PrincipalController extends AppController
{
    public function home(){
        $libros = $this->fetchTable('Libro')->find('all', [
        ])->toArray();

        $recomendados_top = [];
        $index = [];
        for ($i = 0; $i < 3; $i++){
            do{
                $aux_index = rand(0, count($libros)-1);
                $aux = $libros[$aux_index];
            }while(in_array($aux_index, $index));
            $recomendados_top[$i] = $aux;
            $index[$i] = $aux_index;
        }

        $recomendados_bot = [];
        $index = [];
        for ($i = 0; $i < 3; $i++){
            do{
                $aux_index = rand(0, count($libros)-1);
                $aux = $libros[$aux_index];
            }while(in_array($aux_index, $index));
            $recomendados_bot[$i] = $aux;
            $index[$i] = $aux_index;
        }

        $this->set(compact('recomendados_top','libros', 'recomendados_bot'));

        //$this-> viewBuilder()->setLayout('sesion'); Esto seria para algo como un iniciar sesion//quitar menu $this-> viewBuilder()->setLayout('ajax');
    }
    public function index(){
        
        return $this->redirect('/home');

    }
}