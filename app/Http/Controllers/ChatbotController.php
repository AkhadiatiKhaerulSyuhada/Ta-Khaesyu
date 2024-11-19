<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function respond(Request $request)
    {
        $question = $request->input('question', '');
        $apiKey = env('AIzaSyBpVCMi1X6CSIl7Ia7t5Rp-DIGXFWCbcug'); // Pastikan API Key ada di .env

        $response = Http::post(
            "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent",
            [
                'question' => $question,
            ]
        );

        if ($response->successful()) {
            $data = $response->json();
            $answer = $data['answer'] ?? 'Maaf, saya tidak dapat menemukan jawaban saat ini.';
        } else {
            $answer = 'Ada masalah saat mengakses API.';
        }

        return response()->json(['answer' => $answer]);
    }
}
