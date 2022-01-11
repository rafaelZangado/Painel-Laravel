<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{

    protected $table = "SERVIDOR";
    protected $primaryKey = 'SERVIDOR_ID';
    public $timestamps = false;
    public static $snakeAttributes = false;
    protected $fillable = [
        'SERVIDOR_ORGAO',
        'SERVIDOR_MATRICULA',
        'SERVIDOR_NOME',
        'SERVIDOR_DT_RESCISAO',
        'SERVIDOR_DT_ADMISSAO',
        'SERVIDOR_CPF',
        'SERVIDOR_DT_EXTRACAO',
        'SERVIDOR_STATUS_ID',
        'USUARIO_ID',
    ];

    protected $casts = [
        'SERVIDOR_ID' => 'integer',
        'SERVIDOR_DT_RESCISAO' => 'datetime:Y-m-d',
        'SERVIDOR_DT_ADMISSAO' => 'datetime:Y-m-d',
        'SERVIDOR_DT_EXTRACAO' => 'datetime:Y-m-d',
        'SERVIDOR_STATUS' => 'integer',
        'USUARIO_ID' => 'integer',
    ];

    public function historicos()
    {
        return $this->hasMany(Historico::class, 'SERVIDOR_ID', 'SERVIDOR_ID');
    }

    public function fichasFinanceiras()
    {
        return $this->hasMany(FichaFinanceira::class, 'SERVIDOR_ID', 'SERVIDOR_ID');
    }

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'USUARIO_ID', 'USUARIO_ID');
    }

    public function status()
    {
        return $this->hasOne(ServidorStatus::class, 'SERVIDOR_STATUS_ID', 'SERVIDOR_STATUS_ID');
    }

    public static $relacionamento = [
        'historicos',
        'fichasFinanceiras.fichasFinanceirasItens',
        'usuario',
        'status',
    ];

    public static function listar($requisicao)
    {
        return self::with(self::$relacionamento)
            ->when($requisicao->SERVIDOR_NOME, function (Builder $query) use ($requisicao) {
                return $query->where('SERVIDOR_NOME', 'like', "%$requisicao->SERVIDOR_NOME%");
            });
    }


    public static function buscar($id)
    {
        return self::with(self::$relacionamento)
            ->find($id);
    }
}

