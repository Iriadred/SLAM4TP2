<?php

namespace controllers;

use controllers\base\WebController;
use utils\Template;

class SampleWebController extends WebController
{
    function home(): string
    {
        return Template::render("views/global/home.php", array("date" => date("d-m-Y à H:i")));
    }
    function client($id)
    {
        return Template::render("views/global/id.php", array("id" => "$id"));
    }
}