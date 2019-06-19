<?php

namespace Ankitgupta\Testpackage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function DecToBin(Request $request) {
        $data = $request->input('in');
        $oldin = $data;
        $temp = $oldin;
        $result = '';
        while($temp>0)
        {
            $result = ($temp%2).$result;
            $temp = (int)($temp / 2);
        }
        $result = '0b'.$result;
        $to = 'Binary';
        return view('test::test', compact('oldin','result', 'to'));
    }

    public function DecToOct(Request $request) {
        $data = $request->input('in');
        $oldin = $data;
        $temp = $oldin;
        $result = '';
        while($temp>0)
        {
            $result = ($temp%8).$result;
            $temp = (int)($temp / 8);
        }
        $result = '0'.$result;
        $to = 'Octal';
        return view('test::test', compact('oldin','result', 'to'));
    }

    public function DecToHex(Request $request) {
        $data = $request->input('in');
        $oldin = $data;
        $temp = $oldin;
        $result = '';
        $char = '';
        while($temp>0)
        {
            $char = ($temp % 16 > 9) ? chr(ord('a') + $temp % 16 - 10) : $temp % 16;
            $result = $char.$result;
            $temp = (int)($temp / 16);
        }
        $result = '0x'.$result;
        $to = 'Hexadecimal';
        return view('test::test', compact('oldin','result', 'to'));
    }
}
