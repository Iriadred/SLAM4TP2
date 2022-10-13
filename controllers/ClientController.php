<?php
namespace controllers;

use utils\Template;
use models\ClientsModele;
use controllers\base\WebController;


class ClientController extends WebController
{

    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    
    function liste($page = 0,$key="",$limite =10): string
    {
        if($key!= ""){
            $clients = $this->clientModele->recherche($key,10,$page);
        }
        else{
        $clients = $this->clientModele->liste(10, $page);
        }
        return Template::render(
            "views/liste/client.php",
            array("page" => $page, "clients" => $clients, "limite"=>$limite)
        );
    }

}