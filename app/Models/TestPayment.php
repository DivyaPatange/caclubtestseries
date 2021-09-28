<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPayment extends Model
{
    use HasFactory;

    protected $table = "test_payments";

    protected $fillable = ['user_id', 'name', 'email', 'mobile_no', 'course_name', 'test_series', 'group', 'status', 'amount', 'image'];
}
