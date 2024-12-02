<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $nombre_usuario
 * @property $material_id
 * @property $fecha_prestamo
 * @property $fecha_vencimiento
 * @property $fecha_devolucion
 * @property $created_at
 * @property $updated_at
 *
 * @property Materiale $materiale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_usuario', 'material_id', 'fecha_prestamo', 'fecha_vencimiento', 'fecha_devolucion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materiale()
    {
        return $this->belongsTo(\App\Models\Materiale::class, 'material_id', 'id');
    }
    
}
