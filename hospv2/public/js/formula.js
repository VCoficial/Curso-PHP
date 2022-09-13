/* 

function agregarDetalle(id) {
  let detalle = document.getElementById("detalle");
  let valorOption = document.getElementById("valorOption");
  let valor = valorOption.options[valorOption.selectedIndex].value;
  console.log(valor);
  let fila = `
    <tr>
    
      <td><input type="text" value ="hola" name="iditem[]"> </td>  
      <td><input type="text" name="descripcion[]" id="descripcion[]" value='valor'></td>
      <td><input type="number" name="cantidad[]" id="cantidad[]" value="'cantidad'"></td>
      <td><input type="text" name="posologia[]" id="posologia[]" value="'posologia'"></td>
      
    </tr>    
    `;
  detalle.innerHTML += fila;
}

function leerItem() {
  fetch(URLROOT + "Item/getALL")
    .then((response) => response.json())
    .then((data) => {
      let valorOption = document.getElementById("valorOption");
      for (let i = 0; i <= data.length; i++) {
        valorOption.options[i] = new Option(data[i].descripcion);
      }
    })
    //Then con el error generado...
    .catch((error) => {
      console.error("Error:", error);
    });
}
function llenarMedico() {
  fetch(URLROOT + "Medico/getALL")
    .then((response) => response.json())
    .then((data) => {
      let medico = document.getElementById("medico");
      for (let i = 0; i <= data.length; i++) {
        medico.options[i] = new Option(
          data[i].nombreMedico + " " + data[i].apellidosMedico
        );
      }
    })
    //Then con el error generado...
    .catch((error) => {
      console.error("Error:", error);
    });
}

leerItem();
llenarMedico();

/* window.addEventListener(
  "load",
  function () {
    // do something here ...
  },
  false
);
 */
const URLROOT = "http://localhost/Cphp/hospv2/";
function llenarMedico() {
  fetch(URLROOT + "Medico/getALL")
    .then((response) => response.json())
    .then((data) => {
      let medico = document.getElementById("medico");
      for (let i = 0; i <= data.length; i++) {
        medico.options[i] = new Option(
          /*  data[i].nombreMedico + " " + data[i].apellidosMedico */
          data[i].nombreMedico + "  " + data[i].apellidosMedico
        );
      }
    })
    //Then con el error generado...
    .catch((error) => {
      console.error("Error:", error);
    });
}
llenarMedico();

$(document).ready(function () {
  var table = $("#tblItems").DataTable({
    autoWidth: false,
    ajax: {
      url: "http://localhost/Cphp/hospv2/Formula/getItems",
      dataSrc: "",
    },
    columns: [
      {
        data: null,
        defaultContent:
          "<button type='button' class='btn btn-primary btn-sm shadow-sm' id='agregar'>Agregar +</button>",
      },
      { data: "idItem" },
      { data: "descripcion" },
    ],
  });

  $("#tblItems tbody").on("click", "#agregar", function () {
    var data = table.row($(this).parents("tr")).data();
    agregarDetalle(data.idItem, data.descripcion);
    //alert(data.idItem + "'s salary is: " + data.descripcion);
  });
});

function agregarDetalle(idItem, descripcion) {
  detalle = document.getElementById("detalle");
  fila = `
  <tr> 
  <td><input type="text" name="idItem[]" value ="${idItem}" class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="descripcion[]" value ="${descripcion}" class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="cantidad[]"  class="form-control form-control-sm" required></td>
  <td><input type="text" name="posologia[]" class="form-control form-control-sm" required></td>
  </tr>
  `;
  detalle.innerHTML += fila;
  //alert("id:" + idItem + "descripcion:" + descripcion);
}
