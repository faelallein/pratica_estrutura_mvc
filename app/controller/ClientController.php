<?php

namespace app\controller;
use app\core\Controller;
use app\model\M_Client;

class ClientController extends Controller
{
    public function Index()
    {
        $clients = new M_Client();
        $data["clients"] = $clients->list();
        $this->load("v_client", $data);
    }    
}
