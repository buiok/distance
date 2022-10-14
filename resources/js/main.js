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