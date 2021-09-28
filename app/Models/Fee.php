<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $table = "fees";

    protected $fillable = ['course', 'test_series', 'group_name', 'fees', 'reduced_fee'];
}
