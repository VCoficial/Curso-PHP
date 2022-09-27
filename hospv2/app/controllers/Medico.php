<?php


class Medico extends Controller
{

    public function __construct()
    {

        /* if (!isset($_SESSION['id_user'])) {
            redirect('User/login');
        }; */
        //configuramos el modelo correspondiente a este controlador
        $this->medicoModel = $this->getModel('MedicoModel');
    }


    //carga tabla inicial con paginación
    //public function index(//$currentPage = 1)
    public function index()
    {
        /*    $perPage = 15;
        $totalCount = $this->medicoModel->totalMedicos();
        $pagination = new Paginator($currentPage, $perPage, $totalCount);
        $offset = $pagination->offset();
        $medicos = $this->medicoModel->totalPages($perPage, $offset);
 */
        $data = [
            /*      'medicos' => $medicos,
            'previous' => $pagination->previous(),
            'next' => $pagination->next(),
            'total' => $pagination->totalPages(),
            'currentPage' => $currentPage */];
        //redirect('Medico/MedicoInicio');
        $this->renderView('Medico/MedicoInicio', $data);
    }


    public function getAll()
    {
        $data = $this->medicoModel->getAll();
        echo json_encode($data);
        
    }

    public function formAdd()
    {
        $data = [];
        $this->renderView('Medico/MedicoAgregar', $data);
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // sanitizamos los datos
            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $data = [
                'nombreMedico' => trim($_POST['nombreMedico']),
                'apellidosMedico' => trim($_POST['apellidosMedico']),
                'emailMedico' => trim($_POST['emailMedico']),
                'especialidadMedico' => trim($_POST['especialidadMedico'])
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
    }

    //TODO: falta la validacion de entrada de datos    
    /**
     * update
     *
     * @param  mixed $id
     * @return void
     */
    public function update($id)
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
                //FIXME: esto pinta la vista con la tabla vacia revisar el helper de url   
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
    }
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idMedico' => $id
            ];

            if ($this->medicoModel->delete($data)) {
                echo 'borrado';
                /* $data = [];
                $this->renderView('Inicio', $data); */
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
    }

    public function ImprimirListado()
    {
        $data = $this->medicoModel->getAll();
        //$data = [];
        $this->renderView('Medico/rptListadoMedicos', $data);
    }


    //buscar resgistros por apellido
    public function search()
    {
        $data = [
            "valor" => $_POST['valor']
        ];

        $data = $this->medicoModel->search($data);
        $this->renderView('Medico/MedicoInicio', $data);
    }
}
