<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcionista extends Model
{
    use HasFactory;
    protected $table = 'recepcionistas';

    protected $fillable = ['nombre', 'dni'];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }
}
