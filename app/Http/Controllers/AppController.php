<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function currentCompetitions()
    {
        return view('current-competitions');
    }

    public function currentTechCompetitions()
    {
        return view('current-tech-competitions');
    }

    public function cashCompetitions()
    {
        return view('cash-competitions');
    }

    public function winners()
    {
        return view('winners');
    }

    public function drawResults()
    {
        return view('draw-results');
    }

    public function faq()
    {
        return view('faq');
    }

    public function cart()
    {
        return view('cart');
    }

    public function myAccount()
    {
        return view('my-account.index');
    }

    public function checkout(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address1' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postcode' => 'required',
                'country' => 'required',
                'dob_day' => 'required',
                'dob_month' => 'required',
                'dob_year' => 'required'
            ]);

            // check if email already exists
            $user = User::where('email', $request->email)->first();
            if (empty($user)) {
                $user = new User;
            }

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address1 = $request->address1;
            $user->address2 = $request->address2;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->postcode = $request->postcode;
            $user->country = $request->country;
            $user->dob_day = $request->dob_day;
            $user->dob_month = $request->dob_month;
            $user->dob_year = $request->dob_year;

            $user->save();

            $cartData = $request->input('cart');

            if(!empty($cartData)) {
                $cart = json_decode($cartData, true);

                foreach ($cart as $item) {
                    $user->tickets()->create([
                        'prize_id' => $item['product_id'],
                        'number' => $item['product_id'] . rand(100000, 999999),
                        'amount' => $item['product_total'],
                        'quantity' => $item['ticket_total'],
                    ]);
                }
            }

            return redirect()->route('app.checkout-2');
        }

        return view('checkout');
    }

    public function checkout2()
    {
        return view('checkout2');
    }

    public function checkCert()
    {
        $pfx = file_get_contents(public_path() . '/smartisp.animeinterface.xyz.pfx');
        $password = "smartisp123";

        return response()->json(openssl_pkcs12_read($pfx, $certs, $password));
    }
}
