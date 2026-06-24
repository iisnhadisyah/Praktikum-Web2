<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'date_start',
        'date_end',
    ];

     protected function casts(){
        return [
            'date_start' => 'date',
            'date_end' => 'date'
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
