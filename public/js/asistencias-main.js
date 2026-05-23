document.addEventListener("DOMContentLoaded", () => {
  // RELOJ EN TIEMPO REAL
  const reloj = document.getElementById("reloj");
  function actualizarReloj() {
    reloj.textContent = new Date().toLocaleTimeString("es-PE", {
      hour12: false,
    });
  }
  actualizarReloj();
  setInterval(actualizarReloj, 1000);
  // BARCODE INPUT
  const inputdni = document.getElementById("codigo");
  const name_employer = document.getElementById("empleado-nombre")
  const msj = document.getElementById("msj")

  inputdni.addEventListener("input", function () {
    if (inputdni.value.length === 8) {
      let dninuevo = inputdni.value //este es el DNI ya validado y correcto.
      buscarEmpleado(dninuevo); //guardo en el argumento de la función
      inputdni.value = ""; //luego limpio el input del DNI
    }
  });

  document.addEventListener("click", function () {
    inputdni.focus();
  });

  //Funcion para consultar o buscar DNI del empleado.
  function buscarEmpleado(dni_parametro){
    //Enviamos los datos mediante ajax-fetch
    fetch(BASE_URL + "/asistencias/buscar", {
        method: 'POST',
        headers: {'Content-Type':'application/x-www-form-urlencoded'},
        body: 'dni='+dni_parametro
    }).then(function(respuesta){
        console.log(respuesta)
    }).then(function(datos){
        console.log(datos)
    })
    
  }

});
