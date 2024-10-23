<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Adicione isso
use Illuminate\Database\Eloquent\Model;

class Mizeraveis extends Model
{
    use HasFactory; // Inclua a trait aqui

    public $timestamps = false; // Desativa timestamps
}
