<?php

namespace App\Http\Controllers;

use App\Http\Services\FrontendServices;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $frontendServices;

    public function __construct(FrontendServices $frontendServices){
        $this->frontendServices = $frontendServices;
    }

    public function index(){
        return $this->frontendServices->index();
    }
}
