$(document).ready(function () {
  $("#tblPacientes").DataTable({
    ajax: {
      url: "http://localhost/php227/hospv2/Paciente/dataTable",
      dataSrc: "",
    },
    columns: [
      { data: "idPaciente" },
      { data: "nombrePaciente" },
      { data: "apellidosPaciente" },
      { data: "emailPaciente" },
      { data: "telefonoPaciente" },
    ],
  });
});
