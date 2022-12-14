<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casefile extends Model
{
    use HasFactory;

    protected $table = 'casefiles';


    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
