<?php

header("Location:index.php");

// Obtén el contenido del formulario
if(isset($_POST['notas'])){
    $notas = $_POST['notas'];
    //var_dump($notas);

    // Define el nombre del archivo donde se guardarán las notas
    $archivo_notas = 'notas.txt';

    // Abre el archivo en modo de escritura (si no existe, lo crea)
    $gestor_archivo = fopen($archivo_notas, 'a');

    // Escribe la nota en el archivo
    fwrite($gestor_archivo, $notas . "<br>" . PHP_EOL);

    // Cierra el archivo
    fclose($gestor_archivo);
}   

// Verifica si se envió una nota
/*if (!empty($notas)) {
    // Define el nombre del archivo donde se guardarán las notas
    $archivo_notas = 'notas.txt';

    // Abre el archivo en modo de escritura (si no existe, lo crea)
    $gestor_archivo = fopen($archivo_notas, 'a');

    // Escribe la nota en el archivo
    fwrite($gestor_archivo, $notas . PHP_EOL);

    // Cierra el archivo
    fclose($gestor_archivo);

    echo 'Nota guardada correctamente.';
} else {
    echo 'Por favor, ingresa una nota.';
}*/
?>
