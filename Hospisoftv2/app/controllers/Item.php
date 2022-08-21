<?php


class Item extends Controller
{

    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this->itemModel = $this->getModel('ItemModel');
    }

    public function getAll()
    {
        $data = $this->itemModel->getAll();
        $data = json_encode($data);
        echo $data;
    }


    //carga tabla inicial con paginación
    /*  public function index($currentPage = 1)
    {
        $perPage = 15;
        $totalCount = $this->medicoModel->totalMedicos();
        $pagination = new Paginator($currentPage, $perPage, $totalCount);
        $offset = $pagination->offset();
        $medicos = $this->medicoModel->totalPages($perPage, $offset);

        $data = [
            'medicos' => $medicos,
            'previous' => $pagination->previous(),
            'next' => $pagination->next(),
            'total' => $pagination->totalPages(),
            'currentPage' => $currentPage

        ];

        $this->renderView('Medico/MedicoInicio', $data);
    } */
    /* 
    public function formAdd()
    {
        $data = [];
        $this->renderView('Medico/MedicoAgregar', $data);
    }
 */

    /* public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nombreMedico' => $_POST['nombreMedico'],
                'apellidosMedico' => $_POST['apellidosMedico'],
                'emailMedico' => $_POST['emailMedico'],
                'especialidadMedico' => $_POST['especialidadMedico']
            ];
            $resultado = $this->medicoModel->add($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->renderView('Medico/MedicoAgregar', $data);
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->renderView('Medico/MedicoAgregar', $data);
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }
    } */


    /*  public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idMedico' => $id,  //$id
                'nombreMedico' => $_POST['nombreMedico'],
                'apellidosMedico' => $_POST['apellidosMedico'],
                'emailMedico' => $_POST['emailMedico'],
                'especialidadMedico' => $_POST['especialidadMedico']
            ];

            if ($this->medicoModel->update($data)) {
                $data = [];
                $this->renderView('Inicio', $data);
            } else {
                die('ocurrió un error en la inserción !');
            };
        } else {
            $medico = $this->medicoModel->getOne($id);
            $data = [
                'idMedico' => $medico->idMedico,
                'nombreMedico' => $medico->nombreMedico,
                'apellidosMedico' => $medico->apellidosMedico,
                'emailMedico' => $medico->emailMedico,
                'especialidadMedico' => $medico->especialidadMedico
            ];
            $this->renderView('Medico/MedicoEditar', $data);
        }
    } */
    /*  public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idMedico' => $id
            ];

            if ($this->medicoModel->delete($data)) {
                echo 'borrado';
               
            } else {
                die('ocurrió un error !');
            };
        } else {
            $medico = $this->medicoModel->getOne($id);
            $data = [
                'idMedico' => $medico->idMedico,
                'nombreMedico' => $medico->nombreMedico,
                'apellidosMedico' => $medico->apellidosMedico,
                'emailMedico' => $medico->emailMedico,
                'especialidadMedico' => $medico->especialidadMedico
            ];
            $this->renderView('Medico/MedicoBorrar', $data);
        }
    } */

    /*  public function ImprimirListado()
    {
        $data = $this->medicoModel->getAll();
        //$data = [];
        $this->renderView('Medico/rptListadoMedicos', $data);
    } */


    //buscar resgistros por apellido
    /*   public function search()
    {
        $data = [
            "valor" => $_POST['valor']
        ];

        $data = $this->medicoModel->search($data);
        $this->renderView('Medico/MedicoInicio', $data);
    } */
}
