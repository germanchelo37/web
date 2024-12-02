<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 *
 * @property $id
 * @property $titulo
 * @property $subtitulo
 * @property $isbn
 * @property $año_publicacion
 * @property $estado
 * @property $tipo
 * @property $numero_paginas
 * @property $autor_id
 * @property $editorial_id
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autore $autore
 * @property Categoria $categoria
 * @property Editoriale $editoriale
 * @property Prestamo[] $prestamos
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiale extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['titulo', 'subtitulo', 'isbn', 'año_publicacion', 'estado', 'tipo', 'numero_paginas', 'autor_id', 'editorial_id', 'categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autore()
    {
        return $this->belongsTo(\App\Models\Autore::class, 'autor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'categoria_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editoriale()
    {
        return $this->belongsTo(\App\Models\Editoriale::class, 'editorial_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestamos()
    {
        return $this->hasMany(\App\Models\Prestamo::class, 'id', 'material_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany(\App\Models\Reserva::class, 'id', 'material_id');
    }
    
}
