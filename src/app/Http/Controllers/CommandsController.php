<?php

namespace App\Http\Controllers;

use App\Models\Command;
use Illuminate\Routing\Controller as BaseController;

class CommandsController extends BaseController
{
    /**
     * display commands
     */
    public function index()
    {
        $commands = Command::take(50)->get();
        return view('commands', compact("commands"));
    }
}
