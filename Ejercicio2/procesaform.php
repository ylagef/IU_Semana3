<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $getpost = $_POST;
} else {
    $getpost = $_GET;
}

$formAux = $getpost["form"];
$form = unserialize($formAux);

foreach ($form as $array) {
    foreach ($array as $item) {

        if (($item == "input") && ($array[1] != "submit") && ($array[1] != "reset")) {
            echo "<p>" . $array[3] . ": " . $getpost[$array[2]] . "</p>";
        }

    }
}

?>

</body>

</html>