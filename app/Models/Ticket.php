<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ticket extends Model
{
protected $fillable = ['user_id', /* inne pola, które chcesz umożliwić do masowego przypisania */];

    use HasFactory;
}
