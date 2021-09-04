<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Ramsey\Uuid\Rfc4122\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class TransactionController extends Controller
{
    public function creditView(User $user)
    {
        return view('transaction.credit',compact('user'));
    }
    public function credit(User $user)
    {
    $user->credit(request()->amount);
    return redirect('home');
    }


    public function debitView(User $user)
    {
        return view('transaction.debit',compact('user'));
    }
    public function debit(User $user)
    {

    if (($user->balance) >= (request()->amount)) {
        $user->debit(request()->amount);

        return redirect('home')->with('success','success|Amount Debited Successfully.');
    }
    else{

     return redirect('/home')->with('error', 'Failed|Insufficient Amount in Account');
    }
    }


    public function transferView(User $user)
    {
        return view('transaction.transfer',compact('user'));
    }


    public function transfer(User $user)
    {

    if (($user->balance) >= (request()->amount)) {
                    $user->debit(request()->amount);
                    $user->save();
                    return redirect('home')->with('success','success|Amount transferred Successfully.');
    }
    else{
        // Session::flash('alert-warning', 'warning');

     return redirect('/home')->with('error', 'Failed|Insufficient Amount in Account');
    }

                        $receiver=User::find(request()->receiver_id);
                        $receiver->credit(request()->amount);
                        return redirect('home');
   }




            public function history(User $user)
   {
                $transactions=$user->transactions;
                return view('transaction.history', compact('user','transactions'));
   }



}
