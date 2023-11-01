$('.plate_code').change(function () {
    var plate_code = $(this).val();
    $('#PlateCode').text(plate_code)
});
$('.plate_number').keyup(function () {

    var plate_number = $(this).val();
    $('#PlateNumber').text(plate_number)

});

$('.number_plate').change(function () {
    var plate = $(this).val();
    if (plate == 'new') {

        $('.number-plate-img').attr('src', `assets/images/${'Abu_Dhabi_New.png'}`)

        $('#PlateCode').css({
            top: '19%',
            left: '28%',
            color: '#424648'
        });

    } else {
        $('.number-plate-img').attr('src', `assets/images/${'number-plate.png'}`)
        $('#PlateCode').css({
            top: '15%',
            left: '47%',
            color: '#FFF'
        });

    }
});