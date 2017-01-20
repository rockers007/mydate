<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Rockers\MYDATE\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class MYDATEController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('weight') && $request->has('high')) {
            $weight = $request->get('weight');
            $high = $request->get('high');
            $bmi = round($weight / ($high * $high),1);
        }
        return view('bmi::index', compact('bmi'));
    }
}