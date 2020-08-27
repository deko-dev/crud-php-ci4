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

            $data['estado'] = 'Creado';

            // Mostramos que el Blog se salvo correctamente
            echo view('templates/header');
            echo view('blogs/success', $data);
            echo view('templates/footer');

        } else {

            // Mostramos a vista en la Página blogs.php
            echo view('templates/header');
            echo view('blogs/crear');
            echo view('templates/footer');

        }
    }


    // Metodo para eliminar un Blog
    public function borrar($id = false){

        // Evaluamos si no se envio ningun id por la URL
        if( $id === false ){

            // Se retorna el Metodo index()
            return $this->index();

        }

        // Se crea la instancia del modelo
        $model = new BlogsModel();

        $model->delete($id);

        $data['estado'] = 'Eliminado';

         // Mostramos que el Blog se salvo correctamente
         echo view('templates/header');
         echo view('blogs/success', $data);
         echo view('templates/footer');

    }


    // Método para editar un Blog
    public function editar($id = false){

        
        
        // Creamos la instancia del modelo
        $model = new BlogsModel();

        $blog['blog'] = $model->getBlogs($id);

        
        echo view('templates/header');
        echo view('blogs/editar', $blog);
        echo view('templates/footer');

    }


    public function editado($id = false) {

        $model = new BlogsModel();

        // Evaluamos que el metodo que fue enviao en el Formulario sea de tipo Post y de que este sea valido
        if( $this->request->getMethod() === 'post' && $this->validate([
            'titulo' => 'required',
            'clave' => 'required',
            'fecha' => 'required',
            'contenido' => 'required'
        ])) {

            // Editamos el Blog
           $res = $model->update($id, [
                'titulo' => $this->request->getPost('titulo'),
                'clave' => $this->request->getPost('clave'),
                'fecha' => $this->request->getPost('fecha'),
                'contenido' => $this->request->getPost('contenido')
            ]);

            $data['estado'] = 'Editado';

            // Mostramos que el Blog se salvo correctamente
            echo view('templates/header');
            echo view('blogs/success', $data);
            echo view('templates/footer');

        }

    }


}
