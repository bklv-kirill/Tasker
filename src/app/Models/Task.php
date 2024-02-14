<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        "title",
        "discription",
        "user_id",
    ];
}
