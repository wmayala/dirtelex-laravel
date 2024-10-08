<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable=[
        'institution',
        'acronym',
        'description',
        'category_id',
        'subcategory_id',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function division()
    {
        return $this->hasMany(Division::class, 'institution_id');
    }

    public function contact()
    {
        return $this->hasMany(Contact::class, 'institution_id');
    }
}
