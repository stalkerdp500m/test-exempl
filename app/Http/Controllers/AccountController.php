<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessAccountNotify;
use App\Models\Account;
use App\Notifications\AccountNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AccountController extends Controller
{

    public function index(Account $account)
    {
        $masage = "$account->name, Hello from test massage";
        Notification::send($account->activeSimCards, new AccountNotification($masage));
    }
}
