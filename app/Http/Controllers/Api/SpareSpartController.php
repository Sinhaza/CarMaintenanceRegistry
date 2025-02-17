<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class SpareSpart
{
    protected string $apiUrl;
    
    public function __construct()
    {
        $this->apiUrl = config('imagine.some.cool.url');
    }

    /**
     * Fetch spare part details in real-time from an external API.
     *
     * @param string $partNumber
     * @return array|null
     */
    public function getPart(string $partNumber): ?array
    {
        $response = Http::get("{$this->apiUrl}/spareparts/{$partNumber}");

        if ($response->successful()) {
            return $response->json();
        }

        return response()->json(['error' => 'API request failed'], 500);
    }
}
