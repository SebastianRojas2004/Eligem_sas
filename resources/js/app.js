import './bootstrap';

document.getElementById("miSelect").onchange = function() {
    var inputOpcion2 = document.getElementById("inputOpcion2");
    
    if (this.value == "otro") {
      inputOpcion2.style.display = "block";
    } else {
      inputOpcion2.style.display = "none";
    }
  }

document.getElementById("miSelect1").onchange = function() {
    var inputOpcion3 = document.getElementById("inputOpcion3");
    
    if (this.value == "otro") {
      inputOpcion3.style.display = "block";
    } else {
      inputOpcion3.style.display = "none";
    }
  }