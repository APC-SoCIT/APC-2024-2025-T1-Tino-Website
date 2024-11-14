<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Curl\Curl;


class PaymentController extends Controller
{
    public function pay()
    {
        $data = [
            'data' => [
                'attributes' => [
                    'line_items' => [
                        [
                            'currency'      => 'PHP',
                            'amount'        => 1000,
                            'description'   => 'Test Product',
                            'name'          => 'Test Product',
                            'quantity'      => 1,
                        ]     
                    ],
                    'payment_method_types' => [
                        'card',
                    ],
                    'success_url' => 'https://humble-adventure-g959vx5grrrfwqw4-80.app.github.dev/success',
                    'cancel_url' => 'https://humble-adventure-g959vx5grrrfwqw4-80.app.github.dev/cancel',
                    'description' => 'Test Payment Description'
                ],
            ]
        ];

        // Set up the authorization header with your API key
        $authorization = 'Basic ' . base64_encode(env('AUTH_PAY') . ':');

        // Make the POST request to PayMongo API
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
            'Authorization' => $authorization
        ])->post('https://api.paymongo.com/v1/checkout_sessions', $data);
    }

    public function success()
    {
        $sessionId = \Session::get('session_id');

        dd($sessionId);
    }
}