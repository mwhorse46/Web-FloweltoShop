<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\HeaderTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index() {
        // $this->authorize('is_user', HeaderTransaction::class);

        return view('transaction.index', [
            //
        ]);
    }

    public function show($id) {
        // $this->authorize('is_user', HeaderTransaction::class);

        return view('transaction.show', [
            //
        ]);
    }

    public function cart() {
        // $this->authorize('is_user', HeaderTransaction::class);

        return view('transaction.cart', [
            //
        ]);
    }

    public function update($id, $qty) {
        // $this->authorize('is_user', HeaderTransaction::class);

        return redirect()->back();
    }
}
