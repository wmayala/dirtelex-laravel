<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=[
        'institution_id',
        'category_id',
        'subcategory_id',
        'division_id',
        'contact',
        'position',
        'code',
        'phone',
        'extension',
        'mobile',
        'fax',
        'specialFeature',
        'clarification',
        'address',
        'typeContact',
        'language',
        'status',
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

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
        return $this->belongsTo(Division::class, 'division_id');
    }
}
