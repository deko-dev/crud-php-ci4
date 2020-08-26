<?php namespace App\Models;


// Importamos la clase Model
use CodeIgniter\Model;

class BlogsModel extends Model {

    // Creamos la variable con el Nombre de la Tabla en nuestra Database
    protected $table = 'blogs';

    // Creamos el Método para obtener los Blogs desde nuestra Database
    public function getBlogs($clave = false){

        // Evaluamos si el usuario desea ver todos los Blogs o uno solo
        if( $clave === false ) {

            return $this->findAll();

        }

        // En caso de querer un Solo Blog
        return $this->asArray()
                    ->while(['calve' => $clave])
                    ->first();            

    }

}
