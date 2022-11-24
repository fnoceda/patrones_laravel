<?php
namespace App\Facades;

use Carbon\Carbon;

class Invoice{
    public static function companyName(){
        return 'My Company Name LTD';
    }

    public static function currentDate(){
        return Carbon::now()->format('Y-m-d');
    }
}
