<?php

namespace App\Http\Controllers\Pin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $pinLength = config('custom.default_pin_length');
        if(is_numeric($pinLength) && $pinLength >= 2 && $pinLength <= 6) {
            $pinStart = str_pad(1, $pinLength, 0, STR_PAD_RIGHT);
            $pinEnd = str_pad(9, $pinLength, 9, STR_PAD_RIGHT);
            $pin = random_int(intval($pinStart), intval($pinEnd));
            session()->put('pin', $pin);
            return view('pin.index', ['pinLength' => $pinLength, "pin" => $pin]);
        }
        return view('pin.error', ['message' => "Pin length should consist of min:2 max:6 digits"]);
    }
}
