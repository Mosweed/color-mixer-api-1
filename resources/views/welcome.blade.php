<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welkom bij Mix-colors</title>
    <link href="https://fonts.bunny.net/css?family=inter:400,600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            color: #111827;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 700px;
            padding: 2rem;
            border-radius: 1rem;
            background-color: #ffffff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
        }

        h1 {
            font-size: 2.25rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.125rem;
            color: #4b5563;
            margin-bottom: 1rem;
        }

        code {
            background-color: #f9fafb;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-family: monospace;
            font-size: 0.95rem;
            display: inline-block;
        }

        .paars {
            background-color: #7f007f;
            color: #ffffff;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-weight: bold;
        }
         .rood {
            background-color: #ff0000;
            color: #ffffff;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-weight: bold;
        }
         .blauw {
            background-color: #0000ff;
            color: #ffffff;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎨 Welkom bij Mix-colors</h1>

        <p>Mix-colors is een eenvoudige API waarmee je twee hex-kleuren combineert tot één gemengde kleur.</p>

        <p>Stuur twee kleuren (bijv. <code class="rood" >#ff0000</code> en <code  class="blauw" >#0000ff</code>) via een <strong>GET-verzoek</strong>, en je ontvangt de gemengde kleur terug, bijvoorbeeld <code class="paars">#7f007f</code>.</p>

        <p>Voorbeeld: <br>
            <code class="rood" >#ff0000</code> (rood) + <code  class="blauw" >#0000ff</code> (blauw) ⇒ <code class="paars">#7f007f</code> (paars)
        </p>

        <p>🔗 Voorbeeld API-aanroep:</p>
        <code>/api/mix-colors?color1=ff0000&color2=0000ff</code>

        <p>De API gebruikt het gemiddelde van RGB-waarden voor een visueel mooie kleurmix.</p>

        <p>🚀 Probeer het uit in je browser, Postman of een frontend!</p>
    </div>
</body>
</html>
