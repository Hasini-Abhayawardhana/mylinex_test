<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'message',
    ];

    public function post(){
        return $this->belongsTo(Post::class , 'post_id' , 'id');
    }

}
