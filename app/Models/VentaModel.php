<?php

namespace App\Models;

use CodeIgniter\Model;

class VentaModel extends Model
{

    protected $table      = 'venta';
    protected $primaryKey = 'idVenta';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['comprobante','subTotal','Total','idpersona','idtipopago'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_registro';
    protected $updatedField  = null;
    protected $deletedField  = null;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

 

   public function cantVentas()
    {
        //  $sql = "SELECT COUNT(*) as total FROM pedido ";
        $this->select("count(idVenta) as cant");
        $query = $this->first();
        return $query['cant'];
    }

    public function getVenta()
    {
        //  $sql = "SELECT COUNT(*) as total FROM pedido ";
        $this->select("venta.idVenta,
                       venta.comprobante,
                       venta.subTotal,
                       venta.Total,
                       venta.fecha_registro,
                       persona.nombres,
                       tipopago.tipopago");
        $this->join("persona", "persona.idpersona = venta.idpersona");
        $this->join("tipopago", "tipopago.idtipopago = venta.idtipopago");


        $query = $this->findAll();
        return $query;
    }

    public function getIdVenta($id)
    {
        //  $sql = "SELECT COUNT(*) as total FROM pedido ";
        $this->select("venta.idVenta,
                       venta.comprobante,
                       venta.subTotal,
                       venta.Total,
                       venta.fecha_registro,
                       persona.nombres,
                       tipopago.tipopago");
        $this->join("persona", "persona.idpersona = venta.idpersona");
        $this->join("tipopago", "tipopago.idtipopago = venta.idtipopago");
        $this->where("idVenta",$id);


        $query = $this->findAll();
        return $query;
    }
}