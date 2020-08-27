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
        $data['blogs'] = $model->getBlogs();

        // Mostramos a vista en la Página blogs.php
        echo view('templates/header', $data);
        echo view('blogs/blogs', $data);
        echo view('templates/footer', $data);


    }

    // Metodo para Crear un Blog
    public function crear() {

        // Creamos la instancia del modelo
        $model = new BlogsModel();

        // Evaluamos que el metodo que fue enviao en el Formulario sea de tipo Post y de que este sea valido
        if( $this->request->getMethod() === 'post' && $this->validate([
            'titulo' => 'required',
            'clave' => 'required',
            'fecha' => 'required',
            'contenido' => 'required'
        ])) {

            // Guardamos el Blog
            $model->save([
                'titulo' => $this->request->getPost('titulo'),
                'clave' => $this->request->getPost('clave'),
                'fecha' => $this->request->getPost('fecha'),
                'contenido' => $this->request->getPost('contenido')
            ]);

            // Mostramos que el Blog se salvo correctamente
            echo view('blogs/success');

        } else {

            // Mostramos a vista en la Página blogs.php
            echo view('templates/header');
            echo view('blogs/crear');
            echo view('templates/footer');

        }
    }



}
