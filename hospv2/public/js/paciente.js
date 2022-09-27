$(document).ready(function () {
  $("#tblpaciente").DataTable({
    ajax: {
      url: "http://localhost/Aphp/hospv2/Paciente/getAll",
      dataSrc: "",
    },
    columns: [
      { data: "idPaciente" },
      { data: "nombrePaciente" },
      { data: "apellidosPaciente" },
      { data: "emailPaciente" },
      { data: "telefonoPaciente" },
      { data: "movilPaciente" },
      { data: "fechaNacimiento" },
    ],
  });
});
