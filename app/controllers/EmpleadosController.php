<?php
require_once __DIR__ .'/../core/Controller.php';
require_once __DIR__ .'/../models/Empleado.php';
//Controlador para el módulo de empleados.
class EmpleadosController extends Controller {
    // Metodo por defecto.
    public function index(): void {
          //Instanciamos el objeto de la clase EMPLEADO;
    $modelo = new Empleado();
    $empleado = modelo->obtenerTodo();
        $this->view('empleados/reportes', [
            'usuario' => $_SESSION ['usuario'],
            'empleados' =>$variable_empleados
        ]);
    }
}
