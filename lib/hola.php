<?php
 // Autor:Javier D<javierdia@...>
    print "Introduce tu nombre: ";
    $nombre = isset($argv[1]) ? $argv[1] : "mundo";
    @print "hola {$nombre}\n"
?>