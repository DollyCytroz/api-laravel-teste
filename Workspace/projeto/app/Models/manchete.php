<?php //  Abre a execução da linguagem PHP

namespace App\Models; // Ambiente de trabalho 

use Illuminate\Database\Eloquent\Model; // Está chamando o componente Model 

class manchete extends Model // A classe "Manchete" está herdando os metódos da classe Model
{
    protected $fillable = [ // Abre uma Array chamada fillable do tipo protegido
        'titulo',
        'conteudo',
        'data',
    ]; // Objetos da Array
}
