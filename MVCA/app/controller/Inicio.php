<?php

class Inicio extends Controller{
    public function __construct()
    {
        
    }
    public function index()
    {
        $data=[]; //temporal por que no hay
        $this->getView('inicio',$data);
    }
}