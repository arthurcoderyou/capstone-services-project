<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Service extends Model
{
    use HasFactory,Searchable;

    protected $table = "services";

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'service_category_id',
        'price',
        'discount',
        'discount_type',
        'image',
        'thumbnail',
        'description',
        'inclusion',
        'exclusion',
    ];

    public function category(){
        return $this->belongsTo(ServiceCategory::class,'service_category_id');
    }


    //return values that we want to include on the scout Search
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug ,
            'tagline' => $this->tagline ,
            'price' => $this->price ,
            'discount' => $this->discount ,
            'discount_type' => $this->discount_type ,
            'image' => $this->image ,
            'thumbnail' => $this->thumbnail ,
            'description' => $this->description ,
            'inclusion' => $this->inclusion ,
            'exclusion' => $this->exclusion ,
        ];
    }

}
