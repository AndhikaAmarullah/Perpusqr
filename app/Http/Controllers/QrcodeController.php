<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qrcode;
use Carbon\Carbon;

class QrcodeController extends Controller
{
    public function store(Request $request) {
        Qrcode::create([
            "code" => uniqid(),
            "tanggal" => Carbon::now()->format('d-m-y'),
        ]);

        return redirect('/');
    }
}
