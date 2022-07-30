<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function redirectToApp(): RedirectResponse
    {
        return redirect()->route('app');
    }

    public function renderApp(): Response
    {
        return Inertia::render('Dashboard');
    }
}
