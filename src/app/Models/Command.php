<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date',
        'number',
        'price',
    ];

    /**
     * Get the client that owns the command.
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the command lines for command.
     */
    public function commandLines()
    {
        return $this->hasMany(CommandLine::class);
    }
}
