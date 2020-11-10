<?php
namespace app\model;
use app\core\Model;

class M_Client extends Model{
      public function __construct(){
            parent::__construct();
      }

      public function list(){
            $sql = "SELECT * FROM `client`";
            $qry = $this->db->query($sql);

            return $qry->fetchAll();
      }
}