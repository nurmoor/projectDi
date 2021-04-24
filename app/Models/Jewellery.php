<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewellery extends Model
{
    use HasFactory;
    protected $table = 'jewelleries';
    protected $fillable = [
        'jewelleries', 'clients_id'
    ];
    public function clients(){
        return $this->belongsTo('App\Models\Clients');
    }
}
