<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\FlowerCategory;
use App\HeaderTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index() {
        $this->authorize('customer', HeaderTransaction::class);

        $transactions = HeaderTransaction::where('user_id', Auth::id())
            ->whereNotNull('date')
            ->get();

        return view('transaction.index', [
            'headercategories' => FlowerCategory::all(),
            'transactions' => $transactions,
        ]);
    }

    public function show($id) {
        $this->authorize('customer', HeaderTransaction::class);

        return view('transaction.show', [
            'headercategories' => FlowerCategory::all(),
            'items' => HeaderTransaction::find($id)->items,
        ]);
    }

    public function cart() {
        $this->authorize('customer', HeaderTransaction::class);

        return view('transaction.cart', [
            'headercategories' => FlowerCategory::all(),
            'items' => HeaderTransaction::find($this->findCartId())->items,
        ]);
    }

    public function update(Request $request) {
        $this->authorize('customer', HeaderTransaction::class);

        $this->validate($request, [
            'qty' => [ 'required', 'numeric', 'min:0' ],
        ]);

        $cart_id = $this->findOrCreateCartId();
        $item = $this->findOrCreateItem($request, $cart_id);

        if ($request->qty === "0") {
            return $this->destroy($item->id);
        }

        $item->qty = $request->qty;
        $item->save();

        return redirect()->route('transaction.cart');
    }

    public function checkout() {
        $this->authorize('customer', HeaderTransaction::class);

        $id = $this->findCartId();

        $cart = HeaderTransaction::find($id);
        $cart->date = date("Y-m-d H:i:s");
        $cart->save();

        return redirect()->route('transaction.index');
    }

    // cart related function

    private function findCartId() {
        $ids = HeaderTransaction::where('user_id', Auth::id())->whereNull('date');

        if ($ids->count() === 0) {
            return null;
        }

        return $ids->get()[0]->id;
    }

    private function findOrCreateCartId() {
        $cart_id = $this->findCartId();

        if ($cart_id === null) {
            $cart = new HeaderTransaction;
            $cart->user_id = Auth::id();
            $cart->save();

            $cart_id = $cart->id;
        }

        return $cart_id;
    }

    private function findOrCreateItem($request, $cart_id) {
        $item = DetailTransaction::find($request->id);

        if ($item === null) {
            $items = DetailTransaction::where('transaction_id', $cart_id)
                ->where('flower_id', $request->flower_id);

            if ($items->count() > 0) {
                $item = $items->get()[0];
            }
        }

        if ($item === null) {
            $this->validate($request, [
                'qty' => [ 'min:1' ],
            ]);

            $item = new DetailTransaction;
            $item->qty = $request->qty;
            $item->transaction_id = $cart_id;
            $item->flower_id = $request->flower_id;
            $item->save();
        }

        return $item;
    }

    private function destroy($id) {
        DetailTransaction::destroy($id);
        return redirect()->back();
    }
}
