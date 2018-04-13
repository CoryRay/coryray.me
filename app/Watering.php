<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watering extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['plant_id'];

    /**
     * Get the plant that owns the watering.
     */
    public function plant()
    {
        return $this->belongsTo('App\Plant');
    }
}
