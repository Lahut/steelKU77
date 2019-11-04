<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role === "ADMIN" || Auth::user()->role === "CREATOR") {
            $orders = Order::orderBy('created_at', 'desc')->paginate(5);
        }
        else {
            $orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        }
        return view('orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function confirm(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => ['required', 'numeric'],
            'address' => ['required', 'max:255'],
            'detail' => ['required', 'max:255']
        ]);


        $order = new Order();
        $order->product_id = $request->product_id;
        $order->user_id = Auth::id();
        $order->amount = $validatedData['amount'];
        $order->address = $validatedData['address'];
        $order->detail = $validatedData['detail'];
        //$order->save();

        return view('products.confirm', ['order' => $order]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => ['required', 'numeric'],
            'address' => ['required', 'max:255'],
            'detail' => ['required', 'max:255']
        ]);


        $order = new Order();
        $order->product_id = $request->product_id;
        $order->user_id = Auth::id();
        $order->amount = $validatedData['amount'];
        $order->address = $validatedData['address'];
        $order->detail = $validatedData['detail'];
        $order->save();

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $this->authorize('create', $order);
        return view('orders.reply', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        if (isset($_POST["dismiss"])) {
            $order->reply = "คำสั่งซื้อถูกยกเลิกโดยผู้ใช้แล้ว";
            $order->status = "ยกเลิกคำสั่งซื้อ";
            $order->save();
            return redirect('/orders');
        }
        $validatedData = $request->validate([
            'reply' => ['required', 'max:255']
        ]);

        $reply = $validatedData['reply'];
        $order->reply = $reply;
        if (isset($_POST["confirm1"])) {
            $order->status = "ยืนยันเสร็จสิ้น โปรดทำการชำระเงิน";
        }
        if (isset($_POST["confirm2"])) {
            $order->status = "ยืนยันการชำระเงิน";
        }
        if (isset($_POST["refuse"])) {
            $order->status = "ปฏิเสธคำสั่งซื้อ";
        }

        $order->save();
        return redirect('/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
