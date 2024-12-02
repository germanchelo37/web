<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Materiale[] $materiales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materiales()
    {
        return $this->hasMany(\App\Models\Materiale::class, 'id', 'categoria_id');
    }
    
}
