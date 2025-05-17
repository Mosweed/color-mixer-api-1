<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorMixerController extends Controller
{
   public function mix(Request $request)
{
    $request->validate([
        'colors' => 'required|array|min:2',
        'colors.*' => ['regex:/^#?[0-9A-Fa-f]{6}$/']
    ]);

    $colors = $request->input('colors');
    $r = $g = $b = 0;

    foreach ($colors as $hex) {
        $hex = ltrim($hex, '#');
        $r += hexdec(substr($hex, 0, 2));
        $g += hexdec(substr($hex, 2, 2));
        $b += hexdec(substr($hex, 4, 2));
    }

    $count = count($colors);
    $r = intval($r / $count);
    $g = intval($g / $count);
    $b = intval($b / $count);

    $mixed = sprintf("#%02x%02x%02x", $r, $g, $b);

    return response()->json([
        'mixed_color' => strtoupper($mixed)
    ]);
}

}