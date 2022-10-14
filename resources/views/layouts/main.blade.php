<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Рассчитать расстояние</title>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
</head>
<body>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#address").suggestions({
                token: "fbc34e0e4203136a4c33c16edd0a69f2433e01a9",
                type: "ADDRESS",
                onSelect: function(suggestion) {
                    //console.log(suggestion);
                    $('#geo_lat').val(suggestion.data.geo_lat);
                    $('#geo_lon').val(suggestion.data.geo_lon);
                }
            });
        })
    </script>
</body>
</html>
