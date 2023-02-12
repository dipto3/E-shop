<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    'name','cat_id','unit_id','size_id','color_id','price','image','status ','description'];


    public function category(){
        return $this->belongsTo(Catogory::class,'cat_id'); 
    }
    public function size(){
        return $this->belongsTo(Size::class,'size_id'); 
    }

    public function color(){
        return $this->belongsTo(Color::class,'color_id'); 
    }
    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id'); 
    }





}
