<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donor_index()
    {
    	return view('Donor.pages.index');
    }
}