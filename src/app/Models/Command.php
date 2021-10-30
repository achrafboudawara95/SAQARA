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
    ];

    protected $appends = [
        'price'
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

    public function getPriceAttribute()
    {
        // If relation is not loaded already, let's do it first
        if ( ! $this->relationLoaded('commandLines'))
            $this->load('commandLines');

        /** @var CommandLine $commandLines */
        $commandLines = $this->getRelation('commandLines');

        $price = 0;
        foreach ($commandLines as $commandLine)
        {
            $price += $commandLine->price * $commandLine->quantity;
        }
        return $price;
    }
}
