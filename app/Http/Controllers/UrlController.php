<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('shorten-url');
    }

    public function shorten(Request $request)
    {
        $data = $request->validate([
            'original_url' => ['required', 'url'],
        ]);

        $code = $this->uniqueCode();

        $url = Url::create([
            'original_url' => $data['original_url'],
            'short_code'   => $code,
        ]);

        return back()->with('shortened_url', url($url->short_code));
    }

    public function redirect($shortCode)
    {
        $url = Url::where('short_code', $shortCode)->firstOrFail();
        $url->increment('visits');
        return redirect()->away($url->original_url);
    }

    public function admin()
    {
        $urls = Url::latest()->get();
        return view('admin-urls', compact('urls'));
    }

    private function uniqueCode(int $length = 6): string
    {
        do {
            $code = Str::random($length);
        } while (Url::where('short_code', $code)->exists());

        return $code;
    }
}
