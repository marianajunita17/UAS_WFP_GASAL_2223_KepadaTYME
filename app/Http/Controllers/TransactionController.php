<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $transaction = DB::table('transactions')->where('user_id', '=', $userid)->get();
        // dd($transaction);
        return view('public.transaction', compact('transaction'));
    }

    public function detail(Request $request){
        $id = $request['transactionid'];
        $transactions = DB::table('product_transaction')
                    ->select(['products.name', 'products.price', 'products.photourl', 'product_transaction.quantity', 'product_transaction.subtotal'])
                    ->join('products', 'product_transaction.product_id', '=', 'products.id')
                    ->where('product_transaction.transaction_id', '=', $id)
                    ->get();
        return view('public.detailtransaction', compact('transactions'));
    }


    /**
     * Summary of laporan
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function laporan(){
        // $laporan = DB::table('product_transaction')
        //         ->select('products.name', 'products.price', DB::raw('sum(product_transaction.quantity)'),'transactions.transaction_date'])
        //         ->join('products', 'product_transaction.product_id', '=', 'products.id')
        //         ->join('transactions', 'product_transaction.transaction_id', '=', 'transactions.id')
        //         ->where('transactions.transaction_date', 'LIKE', '%08%')
        //         ->groupBy('product_transaction.product_id')
        //         ->orderBy('product_transaction.quantity', 'DESC')
        //         ->get();


        $laporan = DB::select('SELECT products.name, products.price, SUM(product_transaction.quantity) as qty, transactions.transaction_date
        FROM `product_transaction`
        inner join products on product_transaction.product_id = products.id
        inner join transactions on product_transaction.transaction_id = transactions.id
        WHERE Month(transactions.transaction_date)=8
        GROUP by products.id, products.name, product_transaction.product_id, products.price, transactions.transaction_date
        ORDER BY qty DESC');
        // dd($laporan);
        return view('public.laporan', compact('laporan'));
    }

    public function formSubmit()
    {
        $this->authorize('customer-check');
        return view('public.checkout');
    }

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
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }


}
