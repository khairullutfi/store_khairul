<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(){
        $transaction = Transaction::count();
        $revenue = transaction::sum('total_price');
        $customer = User::count();

        return view('pages.admin.dashboard',[
            'customer' => $customer,
            'revenue' => $revenue,
            'transaction' => $transaction
        ]);
    }
}
