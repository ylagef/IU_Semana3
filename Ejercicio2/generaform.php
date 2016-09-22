<?php

$form = array(
    array("action", "procesaform.php"), //action, nombre fichero action
    array("input", "text", "usergit", "Usuario en git"),//etiqueta input, type, name, texto introducción
    array("input", "email", "emailgit", "Email del usuario git"),//etiqueta input, type, name, texto introducción
    array("input", "date", "fechnacuser", "Fecha nacimiento usuario"),//etiqueta input, type, name, texto introducción
    array("input", "text", "grupopracticas", "Grupo Prácticas"),//etiqueta input, type, name, texto introducción
    array("input", "text", "nombreuser", "Nombre del usuario"),//etiqueta input, type, name, texto introducción
    array("input", "text", "apellidosuser", "Apellidos del usuario"),//etiqueta input, type, name, texto introducción
    array("input", "text", "cursoacademicouser", "Curso académico mas alto"),//etiqueta input, type, name, texto introducción
    array("input", "text", "titulacionuser", "Titulación del usuario"),//etiqueta input, type, name, texto introducción
    array("method", "get"), //method, valor de method
    array("input", "submit", "enviar") //etiqueta input, valor de type, value
);

$aTf = new arrayToForm();
$aTf->imprimeFormulario($form);

class arrayToForm
{

    function imprimeFormulario($form)
    {
        echo "<html lang='es'>
                <head>
                Formulario Práctica
                <meta charset='UTF-8'>
                </head>
                <body> 
             ";

        foreach ($form as $array) {
            foreach ($array as $item) {

                if ($item == "action") {
                    echo "<form action='" . $array[1] . "' ";
                }

                if ($item == "method") {
                    echo "method='" . $array[1] . "'>";
                }
            }
        }

        echo "<input type='hidden' name='form' value='" . serialize($form) . "'>";

        foreach ($form as $array) {
            foreach ($array as $item) {

                if (($item == "input") && ($array[1] != "submit") && ($array[1] != "reset")) {
                    echo "<p>" . $array[3];
                    echo " <input type='" . $array[1] . "' ";
                    echo "name='" . $array[2] . "'></p>";
                }

            }
        }

        foreach ($form as $array) {
            foreach ($array as $item) {

                if ($item == "submit") {
                    echo "<input type='submit' name='" . $array[2] . "'>";
                }

            }
        }

        echo "</form>
              </body>
              </html>";
    }
}

?>