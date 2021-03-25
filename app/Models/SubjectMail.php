<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectMail extends Model
{
    use HasFactory;
    public function mails(){
        return $this->hasMany(Mail::class);
    }
}
