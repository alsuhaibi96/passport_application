<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $fillable=[
        'applicationNumber',
        'passportNumber',
        'nationality',
        'dateOfBirth',
        'sex',
        'countryOfBirth',
        'passportExpiryDate',
        'englishName',
        'arabicName',
        'sponsorName',
        'visaNumber',
        'visaIssueDate',
        'visaExpiryDate',
        'visaStatus',
        'periodOfStay',
        'numberOfEntries',

     ];
}
