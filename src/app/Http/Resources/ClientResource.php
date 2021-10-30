<?php

namespace App\Http\Resources;

use App\Models\Client;
use Illuminate\Database\Eloquent\Collection;

class ClientResource extends ExportResource
{
    public function __construct()
    {
        $this->dataHeaders = ["Prénom", "Nom", "Email", "Téléphonne", "Nombre de commandes"];
    }

    public function setData(Collection $collection): void
    {
        $this->data = [];

        /** @var Client $item */
        foreach ($collection as $client)
        {
            $this->data[] = [
                $client->firstName,
                $client->lastName,
                $client->email,
                $client->phoneNumber,
                $client->commands->count()
            ];
        }
    }
}
