<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'website', 'logo_path'];

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
