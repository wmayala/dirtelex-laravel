<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //protected $table='categories';

    protected $fillable=[
        'category',
        'description',
        'status',
    ];

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }

    public function institution()
    {
        return $this->hasMany(Institution::class, 'category_id');
    }
}
