<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:title" content="Royal Roshan Travels and Tours">
        <meta property="og:description" content="Explore the best tours and travel packages with us!">
        <meta property="og:image" content="https://royalroshantravelsandtours.com.np/roshan.png">
        <meta property="og:url" content="https://royalroshantravelsandtours.com.np">
        <meta property="og:type" content="website">

        <!-- Link to the new favicon -->
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
        @vite('resources/js/app.js')
        @inertiaHead
        @routes
    </head>

    <body>
        @inertia
    </body>

</html>
