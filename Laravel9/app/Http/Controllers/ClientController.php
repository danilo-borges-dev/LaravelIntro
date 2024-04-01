<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientList()
    {
        return 'Lista de Clientes';
    }

    public function client($id)
    {
        return 'Cadastro de Cliente ' . $id;
    }

    public function showTagsClient($id)
    {
        return 'Tags do Cliente ' . $id;
    }
}
