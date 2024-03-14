<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function colocarCursor() {
            // Obtiene el textarea
            var textarea = document.getElementById("notas");

            // Coloca el cursor al inicio del textarea
            textarea.focus();
            textarea.setSelectionRange(0, 0);
        }
    </script>
</head>
<body>
    <h2>Notas</h2>
    <form action="notas.php" method="POST">
        <label for="notas">Introduce notas: </label>
        <!--<input type="text" id="notas" name="notas" />-->
        <br/>
        <br/>
        <textarea id="notas" name="notas" rows="7" cols="50" onclick="colocarCursor()">
        </textarea>
        <br/>
        <br/>
        <input type="submit" value="Guardar notas">
    </form>

    <div id="notasGuardadas">
        <?php include 'notas.txt'; ?>
    </div>
</body>
</html>