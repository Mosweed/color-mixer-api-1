<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MixColorsController extends Controller
{
    public function mix(Request $request)
    {
        $color1 = $request->query('color1');
        $color2 = $request->query('color2');

        // Validatie
        if (!$color1 || !$color2) {
            return response()->json([
                'error' => 'Beide kleuren (color1 en color2) zijn verplicht.'
            ], 400);
        }

        if (!$this->isValidHex($color1)) {
            return response()->json([
                'error' => 'De kleur color1 is ongeldig. Gebruik een geldige hex-kleur zoals #ff0000.'
            ], 400);
        }

        if (!$this->isValidHex($color2)) {
            return response()->json([
                'error' => 'De kleur color2 is ongeldig. Gebruik een geldige hex-kleur zoals #0000ff.'
            ], 400);
        }

        // RGB extractie
        $rgb1 = $this->hexToRgb($color1);
        $rgb2 = $this->hexToRgb($color2);

        // Mixen door gemiddelde te nemen
        $mixedRgb = [
            'r' => intval(($rgb1['r'] + $rgb2['r']) / 2),
            'g' => intval(($rgb1['g'] + $rgb2['g']) / 2),
            'b' => intval(($rgb1['b'] + $rgb2['b']) / 2),
        ];

        $mixedHex = $this->rgbToHex($mixedRgb);

        return response()->json([
            'color1' => $this->normalizeHex($color1),
            'color2' => $this->normalizeHex($color2),
            'mixed' => $mixedHex
        ]);
    }

    private function hexToRgb($hex)
    {
        $hex = ltrim($hex, '#');
        return [
            'r' => hexdec(substr($hex, 0, 2)),
            'g' => hexdec(substr($hex, 2, 2)),
            'b' => hexdec(substr($hex, 4, 2)),
        ];
    }

    private function rgbToHex($rgb)
    {
        return sprintf("#%02x%02x%02x", $rgb['r'], $rgb['g'], $rgb['b']);
    }

    private function isValidHex($hex)
    {
        $hex = trim($hex);
        return preg_match('/^#?[0-9A-Fa-f]{6}$/', $hex);
    }

    private function normalizeHex($hex)
    {
        // Zorg ervoor dat kleur altijd begint met een #
        $hex = ltrim(strtolower(trim($hex)), '#');
        return '#' . $hex;
    }
}
