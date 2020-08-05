<?php

namespace Wisdmlabs\Todolist;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    public function setNameAttribute($value)
    {

    	$this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute($value)
    {
    	return strtoupper($value);

    }
}
