<?php
 namespace App\Http\Controllers;

 use View;
 use Illuminate\Http\Request;

 class ActiveMenuComposer
 {
     protected $request;

     /**
      * ActiveMenuComposer constructor.
      * @param Request $request
      */
     public function __construct(Request $request)
     {
         $this->request = $request;
     }

     public function compose(View $view)
     {

     }
 }