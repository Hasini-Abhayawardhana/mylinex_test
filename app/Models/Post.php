<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $fillable = [
        'description'
    ];

    public function comments(){
        return $this->hasMany(Comments::class , 'post_id' , 'id');
    }

    public function scopeSearch($query , $text){

        if ($text != '') {

            $query->where(DB::raw('BINARY `description`'), 'LIKE', '%'.$text.'%')
            ->orWhereHas('comments', function($q) use($text){
                $q->where(DB::raw('BINARY `message`'), 'LIKE', '%'.$text.'%');
            });

        }
        return $query;
    }
}
