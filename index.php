<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://api4.windy.com/assets/libBoot.js"></script>
    <title>Cuaca</title>
    <style>
        #windy {
            width: 100%;
            height: 300px;
        }
    </style>
</head>

<body>

    <section>
        <div class="container py-5">
            <h4 class="text-center mb-5">Cuaca</h4>
            <div id="windy"></div>
        </div>
    </section>

    <!-- bfyuXdiav7SKzrLyMgaTATUXqPs1NNYO -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        const options = {
            // Required: API key
            key: 'bfyuXdiav7SKzrLyMgaTATUXqPs1NNYOI', // REPLACE WITH YOUR KEY !!!

            // Put additional console output
            verbose: true,

            // Optional: Initial state of the map
            lat: -7.0508,
            lon: 108.8749,
            zoom: 5,
        };

        // Initialize Windy API
        windyInit(options, windyAPI => {
            // windyAPI is ready, and contain 'map', 'store',
            // 'picker' and other usefull stuff

            const {
                map
            } = windyAPI;
            // .map is instance of Leaflet map

            L.popup()
                .setLatLng([50.4, 14.3])
                .setContent('Hello World')
                .openOn(map);
        });
    </script>
</body>

</html>