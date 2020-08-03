<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SubscriptionController extends Controller
{
    public function index(){

        // Read json.form from storage
        $formSettings = file_get_contents(storage_path('json/form.json'));

        //return view('admin.subscription');
        return view('admin.pages.subscription.subscription')->with('formSettings', $formSettings);
    }

    
    public function store(Request $request)
    {
        // Read form.json from storage in the array format
        $formSettings = json_decode(file_get_contents(storage_path('json/form.json')));

        // json to be rendered on Front end
        $frontEndJson = json_decode(file_get_contents(storage_path('json/form.json')));

        //print_r($request->all());

        for ($i = 0; $i < count($formSettings); $i++) {
            if ($formSettings[$i]->type == "checkbox") {

                // Don't show checkboxes on Front end & Name if button on Front end is Submit;
                $frontEndJson[$i]->type = "hidden";
                $frontEndJson[$i+1]->name = "Submit";

                for ($k = 0; $k < count($formSettings[$i]->values); $k++) {

                    $control=false;
                    
                    // $request->all() vraća u ovom slučaju info o poljima koja su ostala čekirana na Beckend-u
                    foreach($request->all() as $key => $value) {
                        if ($key == $formSettings[$i]->values[$k]->name) {
                            $control=true;
                        } 
                    }
                    
                    if ($control) {
                        $formSettings[$i]->values[$k]->checked = true;
                    } else {
                        $formSettings[$i]->values[$k]->checked = false;

                        // Not checked field need to be hidden on Front end.
                        $frontEndJson[$k]->type = "hidden";
                    }

                }
            }
        }

        // Save new version of json to be rendered on Front end page
        $frontEndJson = json_encode($frontEndJson);
        file_put_contents('/var/www/template.com/storage/json/frontEndJson.json', $frontEndJson);
       
        // Save new version of json to be rendered on Back end page, after checkboxes checked/unchecked
        $newJsonString = json_encode($formSettings);
        file_put_contents('/var/www/template.com/storage/json/form.json', $newJsonString);

        return redirect()->route('subscription.index');
    }
}

?>

