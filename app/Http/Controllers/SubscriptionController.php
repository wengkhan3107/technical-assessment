<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function __construct(SubscriptionRepository $subscriptions)
    // {
    //     $this->middleware('auth');

    //     $this->subscriptions = $subscriptions;
    // }

    /**
     * Display a list of all of the user's subscription.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        $subscriptions = Subscription::orderBy('id', 'asc')->get();
 
        return view('subscriptions.index', [
            'subscriptions' => $subscriptions
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',

        ]);


        Subscription::create($request->all());

        return redirect('/subscriptions');
    }

    public function destroy(Request $request, Subscription $subscription)
    {

        $subscription->delete();

        return redirect('/subscriptions');
    }


}
