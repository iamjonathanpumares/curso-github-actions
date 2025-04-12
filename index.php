<?php

$usuario = getenv('USERNAME');
$lenguajeFavorito = getenv('LANGUAGE') ?? 'PHP';

echo "Hola $usuario, tu lenguaje favorito es $lenguajeFavorito.";
