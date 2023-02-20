<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ViaCepService
{
    public static function handle(string $zipcode): array
    {
        return Http::get("https://viacep.com.br/ws/$zipcode/json/")->json();
    }
}
