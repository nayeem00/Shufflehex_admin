$(document).ready(function () {
    $('#categories-category').change(function () {
        console.log($('#categories-category').val());
        $('#categories-shortcode').val($('#categories-category').val().toUpperCase());
    })
})