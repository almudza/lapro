<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * -----------------------------------
     * --- Constrct Admin Guard middelware
     */

     public function __construct() 
     {
         $this->middelware('auth');
     }

     /**
      * =================================
      * ==== Admin Dashboard ============
      */
      public function index()
      {
          return view('backend.dashboard');
      }
}
