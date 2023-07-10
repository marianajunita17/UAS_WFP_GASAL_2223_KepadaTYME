<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function cart()
    {
        $this->authorize('customer-check');
        $cart = session('cart');
        return view(('public.cart'), compact('cart'));
    }

    function checkout()
    {
        $this->authorize('customer-check');
        if (session("cart")) {
            $t = new Transaction();
            $t->customer_id = Auth::user()->id;
            $t->transaction_date = Carbon::now()->toDateTimeString();
            $t->total = 0;
            $t->save();
            foreach (session("cart") as $key => $value) {
                $subtotal = $value["quantity"] * $value["price"];
                $t->products()->attach($key, [
                    "quantity" => $value["quantity"],
                    "subtotal" => $subtotal
                ]);
                $t->total += $subtotal;
            }
            $t->save();
            session()->forget("cart");
            return redirect("/product-page");
        } else {
            return redirect("/product-page");
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
