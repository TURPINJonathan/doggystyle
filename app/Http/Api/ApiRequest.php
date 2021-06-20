<?php

namespace App\Http\Api;

use Illuminate\Support\Facades\Http;

class ApiRequest
{
    public static function get(string $baseUrl, string $endpoint, $data = null)
    {
        try {
            $response = Http::get($baseUrl . $endpoint, $data);
        } catch (\Exception $e) {
            info($e->getMessage());
            abort(503);
        }
        return $response->json();
    }

}
