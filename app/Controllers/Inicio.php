<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\ProductoModel;
use App\Models\VentaModel;

class Inicio extends BaseController
{
    protected $session;
    protected $usuario;
    protected $producto;
    protected $venta;

    public function __construct()
    {
        if (empty(session('loggin_in'))) {
            header('Location: ' . base_url() . '/login');
            die();
        }

        $this->usuario = new UsuarioModel();
        $this->producto = new ProductoModel();
        $this->venta = new VentaModel();

        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data["contenido"] = "dashboard/dashboard";
        $data['cant_usuarios'] = $this->usuario->cantUsuarios();
        $data['cant_clientes'] = $this->usuario->cantClientes();
        $data['cant_producto'] = $this->producto->cantProductos();
        $data['cant_ventas'] = $this->venta->cantVentas();
        $data["usuario"] = $this->usuario->findAll();

        return view('index', $data);
    }
}
