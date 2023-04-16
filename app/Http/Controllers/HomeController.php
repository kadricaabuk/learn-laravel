<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $age = 25;
        $person = new \stdClass();
        $person -> age = $age;
        $person -> name = "Kadri";
//        return view("front.index", ['age' => $age]);
//        return view("front.index", compact("age"));
//        return view("front.index") -> with('age', $age) -> with('name', 'kadri');
//        return view("front.index") -> with(['age' => $age, 'name' => 'kadri']);
        return view("front.index", compact("person"));
//        return view("front.index");
    }

    public function about(){
        // return redirect(route("contact"));
        // return redirect() -> route("contact");
        return Redirect::route("contact");
    }
    public function contact(){
        return view("front.contact");
    }
}
