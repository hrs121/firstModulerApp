<?php

namespace App\Modules\FirstModule\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\FirstModule\Models\FirstModule;

class FirstModuleController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("FirstModule::welcome");
    }

    public function submit(Request $request){
        $info = new FirstModule();
        $info->name = $request->name;
        $info->email = $request->email;

        $info->save();

        return redirect()->back()->with('success', 'User created successfully!');
    }
}
