<?php

namespace App\Modules\Billing\Models;

use Database\Factories\BillingFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return BillingFactory::new();
    }
}
