<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Rental;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::get();
        return view('customer.index', compact('customers'));
    }

    public function take(Customer $customer)
    {
        $rentals = Rental::get();
        return view('customer.take', compact('customer','rentals'));
    }

    public function takeStore(Request $request)
    {
        $customer = Customer::where('no_hp', $request->no_hp)->first();
        $rentals = Rental::find($request->rental_id);
        $customer->rentals()->sync($rentals);

        return redirect()->route('customers.index')->with('message','Berhasil');
    }

    public function mobil()
    {
        $rentals = Rental::get();
        return view('mobil',compact('rentals'));
    }
}
