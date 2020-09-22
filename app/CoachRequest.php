<?php
 
 namespace App;
 
 use Illuminate\Database\Eloquent\Model;
  
 class CoachRequest extends Model
 {
     protected $fillable = [
         'user_id',
        'sport_id',
     ];
 }
