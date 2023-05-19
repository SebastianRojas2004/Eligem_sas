import './bootstrap';

function mostrarInput() {
  var selectElement = document.getElementById("miSelect");
  var inputOpcion2 = document.getElementById("inputOpcion2");
  var textoOpcion2 = document.getElementById("textoOpcion2");

  if (selectElement.value === "otro") {
    inputOpcion2.style.display = "block";
    textoOpcion2.setAttribute("name", "empresaContrato");
  } else {
    inputOpcion2.style.display = "none";
    textoOpcion2.removeAttribute("name");
  }
}

function mostrarInput() {
  var selectElement = document.getElementById("miSelect1");
  var inputOpcion3 = document.getElementById("inputOpcion3");
  var textoOpcion3 = document.getElementById("textoOpcion3");

  if (selectElement.value === "otro") {
    inputOpcion3.style.display = "block";
    textoOpcion3.setAttribute("name", "motivo");
  } else {
    inputOpcion3.style.display = "none";
    textoOpcion3.removeAttribute("name");
  }
}
