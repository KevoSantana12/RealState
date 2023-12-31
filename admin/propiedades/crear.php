<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //Conexion a la base de datos
    require __DIR__ . '/../../includes/config/database.php';
    $db = conectarDB();

    require '../../includes/funciones.php';
    incluirTemplate('header');
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo"<prev>";
        var_dump($_POST);
        echo"</prev>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";


        echo $query;
        $db = conectarDB();
        $resultado = mysqli_query($db,$query);

        if($resultado){
            echo "Insertado correctamente";
        } else {
            echo "error en la consulta" . mysqli_error($db);
        }
    }
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices_fin/admin/index.php" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action = "/bienesraices_fin/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="imagen/jpeg, imageb/png"> 
                 
                
                <label for="descripcion">Descripcion:</label>
                <textarea id = "descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" max="9">
            
            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej. 1" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 2" min="1" max="9">
            
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="1">Jose Navas</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>