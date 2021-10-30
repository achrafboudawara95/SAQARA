<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandLine extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'ref',
        'quantity',
        'price',
    ];

    /**
     * Get the command that owns the command line.
     */
    public function command()
    {
        return $this->belongsTo(Command::class);
    }
}
