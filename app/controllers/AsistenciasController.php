<?php
require_once __DIR__ . '/../core/Controller.php';

// Controlador del módulo de asistencias.
class AsistenciasController extends Controller {

    // Página pública: los empleados marcan asistencia sin login.
    // Ejemplo: /asistencias
    public function index(): void {
        $this->view('asistencias/index');
    }

    public function buscar(): void{
        $dni_variable = $_POST['dni'];
        echo "AQUI ESTA MI DNI ".$dni_variable;
        print_r($dni_variable);
    }

    // Reporte de asistencias: requiere sesión activa.
    // Ejemplo: /asistencias/reporte
    public function reporte(): void { //esto de aqui es un funcion reporte() pero yo estoy creando no se vincula con ningun archivo
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $this->view('asistencias/reportes', [
            'usuario' => $_SESSION['usuario'],
        ]);
    }

    // Alias para que funcione también /asistencias/reportes
    public function reportes(): void {  //este reportes se vincula con el archivo asistencias/reportes.php (tienen que ser el mismo nombre) y lo que hace es llamar a la funcion reporte() para mostrar la vista reportes.php
        $this->reporte();
    }

    // Ejemplo: /asistencias/ejemplo_hoja
    public function ejemplo_hoja(): void {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        $this->view('asistencias/ejemplo_hoja', [
            'usuario' => $_SESSION['usuario'],
        ]);
    }
}
