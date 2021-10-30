<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'lastName',
        'firstName',
        'email',
        'phoneNumber',
    ];

    /**
     * Returns client full name
     */
    public function getFullNameAttribute()
    {
        return $this->lastName." ".$this->firstName;
    }

    /**
     * Get the commands for client.
     */
    public function commands()
    {
        return $this->hasMany(Command::class);
    }
}
