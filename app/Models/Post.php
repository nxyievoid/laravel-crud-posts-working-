<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    // Pievienojam 'status' pie atļautajiem laukiem
    protected $fillable = ['title', 'content', 'status'];

    /**
     * Ja nākotnē postam būs komentāri vai cita saistīta informācija, 
     * šeit varat definēt attiecības.
     */
}