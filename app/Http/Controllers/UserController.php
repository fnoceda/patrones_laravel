<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use App\Services\DatatableDirector;
use App\Services\PersonDatatableBuilder;
use App\Services\UserDatatableBuilder;
use Illuminate\Support\Facades\Log;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function index(){
        $user = Datatables::of(User::query());

        return $user->make(true);
    }


    public function users(){
        Log::info(__FILE__.'/'.__FUNCTION__);
        return DatatableDirector::makeFrom(new UserDatatableBuilder(User::query()));
    }


    public function persons(){
        Log::info(__FILE__.'/'.__FUNCTION__);
        return DatatableDirector::makeFrom(new PersonDatatableBuilder(Person::query()));
    }
}
