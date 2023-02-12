<?php

namespace App\Http\Controllers\Pin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pin\VerificationRequest;

class VerificationController extends Controller
{
    public function __invoke(VerificationRequest $request): \Illuminate\Http\JsonResponse
    {
        $success = false;
        $params = $request->validated();
        if(session()->has('pin') && $params['code'] == session('pin')){
            $success = true;
        }
        return response()->json($success);
    }
}
