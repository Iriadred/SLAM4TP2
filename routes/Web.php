<?php

namespace routes;

use controllers\Account;
use controllers\SampleWebController;
use controllers\VideoWeb;
use routes\base\Route;
use utils\SessionHelpers;
use controllers\clientController;
use models\ClientsModele;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $liste = new clientController();
        $search = new ClientsModele();

        //Route::Add('/', [$main, 'home']);
        Route::Add('/client/{id}', [$main, 'client']);
        Route::Add('/', [$liste, 'liste']);
        Route::Add('/{page}', [$liste, 'liste']);
        


        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

