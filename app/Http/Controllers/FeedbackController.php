<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(['author' => ['required', 'string', 'max:255'], 'feedback' => ['required', 'string']]);
        Feedback::create(['author' => $validated['author'], 'feedback' => $validated['feedback']]);

        try {
            Http::post('https://discord.com/api/webhooks/1134969129783283802/wjIxVvwfOJh-UuoENHOc7rfwY6FHcDgtiWr5LuHdWLHdhSnPxBlixBJ8rGwvlP3pyjdx', [
                'content' => "Alguien mandó un feedback"
            ]);
        } catch (\Exception $e) {
            Log::error($e);
        }

        return "ok";
    }
}
