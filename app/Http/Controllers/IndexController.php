<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render(
            'index/index',
                [
                // valores a serem passados para o componente
                'message' => 'Hello, World!'
                ]
        );
    }
    public function show()
    {
        return Inertia::render('index/show');
    }
}
