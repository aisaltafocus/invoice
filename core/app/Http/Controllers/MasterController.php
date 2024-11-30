<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MasterController extends Controller
{
    function index()
    {
        return view('master');
    }

    function export()
    {
        $pdf = Pdf::loadView('invoice');
        return $pdf->stream();
    }

    function api($count)
    {
        $data = [];
        switch ($count) {
            case 1:
                $count = 1;
                break;
            case 2:
                $count = 5;
                break;
            case 3:
                $count = 10;
                break;
            case 4:
                $count = 50;
                break;
        }

        for ($i = 0; $i < $count; $i++) {
            $price = random_int(10000, 999999);
            $qty = random_int(1, 10);
            $discount = random_int(1000, 10000);
            $total = $price * $qty - $discount;
            $data[] = ["Item " . $i + 1, $price, $qty, $discount, $total];
        }

        return response()->json(['status' => 'success', 'data' => $data]);
    }
}
