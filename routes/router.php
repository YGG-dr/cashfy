<?php
class Router {
    private array $rotas = [];
    
    public function get(
        string $path, 
        callable $handler
    ): void {
        $this -> addRoute('GET', $path, $handler);
    }
    
    public function post(
        string $path,
        callable $handler
    ): void {
        $this -> addRoute('POST', $path, $handler);
    }
    
    private function addRoute(
        string $method,
        string $path,
        callable $handler
    ): void {
        this -> routes[$method][$path] = $handler;
    }
    
    public function dispatch(string $uri, string $method): void {
        $path = parse_url($uri, PHP_URL_PATH);
        
        if (isset($this -> routes[$method][$path])) {
            call_user_func($this -> routes[$method[$path]]);
            return;
        }
        
        http_response_code(404);
        echo "404 - Não encontrado!";
    }
    
}
