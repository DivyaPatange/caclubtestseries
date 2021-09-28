<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadPaper extends Model
{
    use HasFactory;

    protected $table = "upload_papers";

    protected $fillable = ['course', 'file'];
}
