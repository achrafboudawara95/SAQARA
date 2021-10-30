<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Command;
use App\Models\CommandLine;
use Database\Factories\ClientFactory;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()
            ->has(
                Command::factory()
                    ->has(CommandLine::factory()
                        ->count(3))
                    ->count(10)
            )
            ->count(100)
            ->create();
    }
}
