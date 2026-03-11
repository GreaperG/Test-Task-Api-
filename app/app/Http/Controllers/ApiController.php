<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function sales(Request $request)
    {
        $date_from = $request->input('dateFrom');
        $date_to = $request->input('dateTo');
     $response = Http::get(env('API_HOST') . '/api/sales',[
          'dateFrom' => $date_from,
          'dateTo' => $date_to,
          'key' => env('API_KEY')
      ]);
     return response()->json($response->json());
    }

    public function orders(Request $request)
    {
        $date_from = $request->input('dateFrom');
        $date_to = $request->input('dateTo');
        $response = Http::get(env('API_HOST') . '/api/orders',[
            'dateFrom' => $date_from,
            'dateTo' => $date_to,
            'key' => env('API_KEY')
        ]);
        return response()->json($response->json());
    }

    public function stocks(Request $request)
    {
        $date_from = $request->input('dateFrom');
        $response = Http::get(env('API_HOST') . '/api/stocks',[
            'dateFrom' => $date_from,
            'key' => env('API_KEY')
        ]);
        return response()->json($response->json());
    }

    public function incomes(Request $request)
    {
        $date_from = $request->input('dateFrom');
        $date_to = $request->input('dateTo');
        $response = Http::get(env('API_HOST') . '/api/incomes',[
            'dateFrom' => $date_from,
            'dateTo' => $date_to,
            'key' => env('API_KEY')
        ]);
        return response()->json($response->json());
    }
}
