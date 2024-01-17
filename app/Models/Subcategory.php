<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable=[
        'subcategory',
        'description',
        'category_id',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function institution()
    {
        return $this->hasMany(Institution::class, 'subcategory_id');
    }

    public function contact()
    {
        return $this->hasMany(Contact::class, 'subcategory_id');
    }
}
