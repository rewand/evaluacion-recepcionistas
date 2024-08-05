<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;
    protected $table = 'evaluaciones';


    protected $fillable = ['recepcionista_id', 'amabilidad', 'eficiencia', 'presentacion', 'conocimiento_menu', 'tiempo_espera'];

    public function recepcionista()
    {
        return $this->belongsTo(Recepcionista::class);
    }
}
