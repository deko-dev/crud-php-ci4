<?php namespace App\Controllers;

// Importamos el Modelo de los Blogs
use App\Models\BlogsModel;

// Importamos la clase Controller
use CodeIgniter\Controller;

// Creamos la clase Blogs que extiende de la clase Controller
class Blogs extends Controller {

    // Método para obtener todos los Blogs
    public function index(){

        // Creamos la instancia del Modelo
        $model = new BlogsModel();

        // Creamos un array para guardar los resultados de la clase BlogsModel
        $data['blogs'] = $model.getBlogs();

        // Mostramos a vista en la Página blogs.php
        echo view('templates/header', $data);
        echo view('pages/blogs', $data);
        echo view('templates/footer', $data);


    }


}
