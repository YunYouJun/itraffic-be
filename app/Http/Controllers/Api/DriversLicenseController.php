<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\DriversLicense;
use Illuminate\Http\Request;

class DriversLicenseController extends Controller
{
    public function show(Request $request) {
        $DriversLicenseInfo = DriversLicense::where([
            'identity' => $this->user()->identity,
        ])->first();
        return $DriversLicenseInfo;
    }
}