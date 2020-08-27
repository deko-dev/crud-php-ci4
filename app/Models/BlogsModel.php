<?php namespace App\Models;


// Importamos la clase Model
use CodeIgniter\Model;

class BlogsModel extends Model {

    // Creamos la variable con el Nombre de la Tabla en nuestra Database
    protected $table = 'blogs';

    // Creamos la variable para que el modelo sepa que campos son permitidos
    protected $allowedFields = ['titulo', 'clave', 'fecha', 'contenido'];

    // Creamos el Método para obtener los Blogs desde nuestra Database
    public function getBlogs($id = false){

        // Evaluamos si el usuario desea ver todos los Blogs o uno solo
        if( $id === false ) {

            return $this->findAll();

        }

        // En caso de querer un Solo Blog
        return $this->asArray()
                    ->where(['id' => $id])
                    ->first();            

    }



}
