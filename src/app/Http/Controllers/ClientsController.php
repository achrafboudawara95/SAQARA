<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
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

    /**
     * export clients
     */
    public function exportCsv(ClientResource $clientResource)
    {
        $clientResource->setData(Client::all());

        return response()
            ->download(
                $clientResource->export("csv"),
                "clients.csv",
                [
                    "Content-Type" => "application/csv"
                ]
            );
    }
}
