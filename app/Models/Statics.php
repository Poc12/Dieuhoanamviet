<?php

namespace App\Models;

class Statics extends BaseModel
{
    protected $table = 'statics';
    public $timestamps = false;

    function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    function comment(): \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(Comment::class, 'static_id', 'id');
    }
}