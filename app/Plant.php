<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the waterings for the plant.
     */
    public function waterings()
    {
        return $this->hasMany('App\Watering')->orderBy('created_at', 'desc');
    }
}
