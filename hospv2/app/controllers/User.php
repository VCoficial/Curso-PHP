<?php


class User extends Controller
{

    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this->userModel = $this->getModel('userModel');
    }


    public function index()
    {
        $data = [];
        $this->renderView('User/UserInicio', $data);
    }


    public function login()
    {
        // chequeamos si fue enviado por un formulario
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // sanitizamos los datos
            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password'])
            ];

            if ($this->userModel->findUserByEmail($data['email'])) {
                $usuario = $this->userModel->login($data['email'], $data['password']);
                if ($usuario) {
                    $this->crearSesionUsuario($usuario);
                } else {
                    $data['error'] = "Password Incorrecto";
                    $this->renderView('User/UserInicio', $data);
                };
            } else {
                $data['error'] = "no existe el usuario";
                $this->renderView('User/UserInicio', $data);
            }
        } else {
            $data = [
                'user' => '',
                'password' => '',
                'error' => 'Atención ! la información no se envió desde un formulario.'
            ];
            $this->renderView('User/UserInicio', $data);
        }
    }

    public function crearSesionUsuario($usuario)
    {
        session_start();
        $_SESSION['id_user'] = $usuario->iduser;
        $_SESSION['email'] = $usuario->email;
        $_SESSION['usuario'] = $usuario->userName;
        redirect('dashboard');
    }


    public function logout()
    {
        unset($_SESSION['id_user']);
        unset($_SESSION['email']);
        unset($_SESSION['usuario']);
        session_destroy();
        redirect('User/login');
    }
}
