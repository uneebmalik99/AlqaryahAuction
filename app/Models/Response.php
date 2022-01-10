<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    public $table = 'response';
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
