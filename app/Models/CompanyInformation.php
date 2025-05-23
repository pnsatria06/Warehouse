<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'corporate_name',
        'city',
        'address',
        'person_in_charge',
        'contact_information',
    ];
}
