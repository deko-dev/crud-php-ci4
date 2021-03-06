
    <!-- Creamos el Titulo de la Página -->
    <h3 class="mt-4 mb-5">Crud de Blogs echa con PHP y CodeIgniter v<?= CodeIgniter\CodeIgniter::CI_VERSION ?></h3>
    <hr>

    <?= \Config\Services::validation()->listErrors(); ?>

    <div class="container">
        
        <!-- Formulario para recolectar la información del Blog -->
        <form action="/blogs/editado/<?= esc($blog['id']) ?>" class="form-group" method="post">

            <!-- Input Id -->
            <div class="row mb-4" >
                <label class="col-1 form-label">
                    Id:
                </label>
                <div class="col-6">
                    <input type="text" class="form-control" value="<?= esc($blog['id']) ?>" name="titulo" disabled>
                </div>
            </div> 

            <!-- Input Titulo -->
            <div class="row mb-4">
                <label class="col-1 form-label">
                    Titulo:
                </label>
                <div class="col-6">
                    <input type="text" class="form-control" value="<?= esc($blog['titulo']) ?>" name="titulo">
                </div>
            </div>
    
            <!-- Input Clave -->
            <div class="row mb-4">
                <label class="col-1 form-label">
                    Clave:
                </label>
                <div class="col-6">
                    <input type="text" class="form-control" value="<?= esc($blog['clave']) ?>" name="clave">
                </div>
            </div>
    
            <!-- Input Fecha -->
            <div class="row mb-4">
                <label class="col-1 form-label">
                    Fecha:
                </label>
                <div class="col-6">
                    <input type="date" class="form-control" value="<?= esc($blog['fecha']) ?>" name="fecha">
                </div>
            </div>
    
            <!-- Text Area del Blog -->
            <div class="row mb-4">
                <label class="col-2 form-label">
                    Contenido:
                </label>
                <div class="col-6">
                    <textarea name="contenido" id="" cols="60" rows="10"><?= esc($blog['contenido']) ?></textarea>
                </div>
            </div>
    
            <div class="col-4 text-center">
                <button type="submit" class="btn btn-success btn-block mb-4 mt-5">
                    Guardar
                </button>
        
            </div>
        </form>
    </div>