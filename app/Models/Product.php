<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description','category','unit','size','color','status','price','image'];

        public function category(){
            return $this->belongsTo(Category::class,'category'); 
        }
        public function unit(){
            return $this->belongsTo(Unit::class,'unit'); 
        }
        public function size(){
            return $this->belongsTo(Size::class,'size'); 
        }
        public function color(){
            return $this->belongsTo(Color::class,'color'); 
        }
}
