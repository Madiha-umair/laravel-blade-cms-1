<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Qualification;

class QualificationsController extends Controller
{
    public function list()
    {
        return view('qualifications.list', [
            'qualifications' => Qualifiction::all()
        ]);
    }
}
