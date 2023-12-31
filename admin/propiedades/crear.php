<?php 
    //Conexion a la base de datos
    require __DIR__ . '/../../includes/config/database.php';
    $db = conectarDB();

    require '../../includes/funciones.php';
    incluirTemplate('header');
    
    echo"<prev>";
    var_dump($_POST);
    echo"</prev>";
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices_fin/admin/index.php" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action = "/bienesraices_fin/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="imagen/jpeg, imageb/png"> 
                 
                
                <label for="descripcion">Descripcion:</label>
                <textarea id = "descripcion"></textarea>
            </fieldset>

            <fieldset>
            <legend>Informacion Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Ej. 3" min="1" max="9">
            
            <label for="banos">Baños:</label>
            <input type="number" id="banos" placeholder="Ej. 1" min="1" max="9">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" placeholder="Ej. 2" min="1" max="9">
            
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select>
                    <option value="1">Jose Navas</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>