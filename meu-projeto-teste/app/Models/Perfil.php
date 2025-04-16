<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfils';
    protected $fillable = ['bio', 'pessoa_id'];

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
