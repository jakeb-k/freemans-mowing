<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mail; 
use App\Mail\ContactMail; 

class Contact extends Model
{
    use HasFactory;
     public $fillable = ['name', 'email', 'note'];
        public static function boot() {

  

        parent::boot();

  

        static::created(function ($item) {

                

            $adminEmail = "freemanslawns2022@gmail.com";

            Mail::to($adminEmail)->send(new ContactMail($item));

        });

    }
}
