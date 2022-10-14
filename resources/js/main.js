$(document).ready(function () {
    $("#address1").suggestions({
        token: "fbc34e0e4203136a4c33c16edd0a69f2433e01a9",
        type: "ADDRESS",
        onSelect: function(suggestion) {
            //console.log(suggestion);
            $('#geo_lat1').val(suggestion.data.geo_lat);
            $('#geo_lon1').val(suggestion.data.geo_lon);
        }
    });
    $("#address2").suggestions({
        token: "fbc34e0e4203136a4c33c16edd0a69f2433e01a9",
        type: "ADDRESS",
        onSelect: function(suggestion) {
            //console.log(suggestion);
            $('#geo_lat2').val(suggestion.data.geo_lat);
            $('#geo_lon2').val(suggestion.data.geo_lon);
        }
    });
})