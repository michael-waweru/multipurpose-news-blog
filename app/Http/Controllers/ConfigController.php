<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function index(): RedirectResponse
    {
        Artisan::call('optimize:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('storage:link');
        toastr()->success('Operation Completed Successfully');
        return redirect()->back();
    }
}
