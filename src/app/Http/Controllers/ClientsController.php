<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Routing\Controller as BaseController;

class ClientsController extends BaseController
{
    /**
     * display clients view
     */
    public function index()
    {
        $clients = Client::withCount('commands')->get();
        return view('clients', compact("clients"));
    }
}
