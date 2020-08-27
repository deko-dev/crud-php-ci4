
    <!-- Creamos el Titulo de la Página -->
    <div class="container">
        <div class="col-8">
            <h3 class="mt-4 mb-5">Crud de Blogs echa con PHP y CodeIgniter v<?= CodeIgniter\CodeIgniter::CI_VERSION ?></h3>
        </div>

        <div class="col-4">
            <button class="btn btn-outline-primary">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
        </div>

    </div>

    <hr>
    
    <div class="container">
        
        <div class="ml-4 row row-cols-1 row-cols-md-3 g-4 mt-3"> <!-- Inicio container de Blogs -->
    
            <!-- Iniciamos el if evaluando que hayan blogs en el Array y si este de verdad es un Array -->
            <?php if( ! empty($blogs) && is_array($blogs) ) : ?>
    
                <!-- Iniciamos a recorrer los blogs -->
                <?php foreach ( $blogs as $blog ) : ?>
    
            <div class="col">
    
                <div class="card mb-4" style="width: 18rem;"> <!-- Card del blog -->
        
                    <div class="card-body"> <!-- Cuerpo del card -->
                    
                        <h5 class="card-title"><?= esc($blog['titulo'] ) ?></h5> <!-- Titulo del Blog -->
        
                        <h6 class="card-subtitle mb-2 text-muted"><?= esc($blog['fecha'] ) ?></h6> <!-- Fecha de Publicación -->
        
                        <p class="card-text"><?= esc($blog['contenido'] ) ?></p> <!-- Contenido del Blog -->
        
                        <a class="btn btn-primary"  href="/blogs/<?= esc($blog['clave'], 'url' ) ?>" class="card-link">
                            <i class="fas fa-edit"></i>
                        </a> <!-- Link para Leer el Blog completo -->
        
                        <a class="btn btn-danger"  href="/blogs/<?= esc($blog['clave'], 'url' ) ?>" class="card-link">
                            <i class="fas fa-trash-alt"></i>    
                        </a> <!-- Link para Leer el Blog completo -->
        
        
                    </div><!-- Cuerpo del card -->
        
                </div> <!-- Card del blog -->
    
            </div>
    
                <!-- Finalizamos el Foreach -->
                <?php endforeach ?>
    
                <!-- Evaluamos en caso de no haber pasado el filtro anterior -->
            <?php else : ?>
    
                <!-- Ponemos un Alert avisando que no hay Blogs -->
                <div class="alert alert-warning" role="alert">
                  No existen Blogs en el Momento
                </div>
                
            <?php endif ?>
                
        </div> <!-- Final container de Blogs -->
    </div>

