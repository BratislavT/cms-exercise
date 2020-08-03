<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Front\Subscription;


class SubscriptionController extends Controller
{
    public function index(){

        // Read json.form from storage
        // $frontEndJson = file_get_contents(storage_path('json/frontEndJson.json'));
        $elementsJson = file_get_contents(storage_path('json/elements.json'));
        $elementsArray = json_decode($elementsJson);

        //echo "<pre>" . print_r($elementsArray, true) . "</pre>"; die();

        return view('front.pages.subscription.subscription')->with('elements', $elementsArray);
    }

    public function store(Request $request)
    {
        $subscription = new Subscription;
        $subscription->id = $request->id;
        $subscription->gender = $request->gender;
        $subscription->name = $request->name; 
        $subscription->surname = $request->surname;
        $subscription->email = $request->email;
        $subscription->country = $request->country;
        $subscription->postcode = $request->postcode;
        $subscription->city = $request->city;
        $subscription->address = $request->address;
        $subscription->save();

        //return redirect()->route('subscription.index');

        
        if($request->isMethod('post'))
        {
           
            $data = $request->all();
            // Check if Subscriber already exists
            $subscribersCount = Subscription::where('email', $data['email'])->count();
            dd($subscribersCount);

            if($subscribersCount>0)        
            {
                return redirect()->back()->with('flash_message_error','Email already exists!');
            }
            else
            {
                $subscription->save();
                return redirect()->back()->with('flash_message_success','You are now subscribed. Congratulations!');    
            }
        }
        

    }

    public function checkEmail(Request $request){
        $data = $request->all();
        // Check if Subscriber already exists
        $subscribersCount = Subscription::where('email', $data['email'])->count();

        if($subscribersCount>0)        
        {
            echo 'false';
        }
        else
        {
            echo 'true';    
        }
    }

}
