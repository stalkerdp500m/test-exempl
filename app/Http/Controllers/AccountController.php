<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessAccountNotify;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index(Account $account)
    {

        // dd($account->activeSimCards);
        $masage = "$account->name Hello from test massage";
        ProcessAccountNotify::dispatch($masage, $account->activeSimCards);

        return view('account', $account);
    }
}
