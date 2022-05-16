<?php


namespace Modules\PaymentManagement\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'nic',
        'amount',
        'card_number',
        'name_on_card',
        'email',
        'bank',
        'cvc',
        'address',
        'expire_year',
        'expire_month'
    ];
}
