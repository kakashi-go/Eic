<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Sports extends Model
{
    protected $fillable = [
        'title',
        'coach',
    ];
}