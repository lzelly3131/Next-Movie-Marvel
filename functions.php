<?php
// forzar el tipado
declare(strict_types=1);


/* Si se requiere utilizar una variable global dentro de una funcion, se debe especificar
 la variable global con la palabra reservada global
 global $variable; */

// Funciones
// function get_data(string $url): array
// {
//     # Si solo se requiere hacer un GET a una API
//     $result = file_get_contents($url);
//     $data = json_decode($result, true);
//     return $data;
// }



function render_template(string $template, array $data = []): void
{
    extract($data);
    require "templates/$template.php";
}