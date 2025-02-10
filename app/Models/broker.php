<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class broker extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'bc_name',
        'bc_number',
        'b_city',
        'b_pass',
        'b_name',
        'b_sname',
        'b_email',
        'b_phoneno',
        'is_member_of_fmi',
        'b_working_area',
        'b_customer_area',
        'is_approved',
        'created_at'
    ];
}
