<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function trackVisitor()
    {
   
        Visitor::firstOrCreate(['ip'=>request()->ip()]);
        $vCount = Visitor::count();
        return view('vsc', compact('vCount'));
    }
}

