<?php

function registrarRotas(Router $routes): void {
    $route -> get("/", function () {
        echo "login";
    });
}
