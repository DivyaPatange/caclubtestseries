<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerSheet extends Model
{
    use HasFactory;

    protected $table = "answer_sheets";

    protected $fillable = ['user_id', 'name', 'file'];
}
