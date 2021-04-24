<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients_Backup extends Model
{
    use HasFactory;
    protected $table = "clients__backups";
    protected $fillable = [
        'name', 'email', 'order_number', 'file'
    ];
}
