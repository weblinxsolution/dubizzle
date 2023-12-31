<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubizzle</title>

    <!-- Bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawsome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="border-bottom py-2 text-center">
        <img src="https://motarey.com/wp-content/uploads/2023/08/mobile-logo.png" width="120px" alt="image">
    </div>


    <!-- Select Category Start -->
    <section>
        <div class="wrapper">
            <div class="row justify-content-center py-4 mx-0">
                <div class="plate-wrapper">
                    <h4 class="text-center">You’re almost there!</h4>
                    <p class="text-center small">Include as much details and pictures as possible, and set the right
                        price!</p>
                    <div class="plate-form">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <input type="number" value="" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <select class="plate_code">
                                    <option value="" selected disabled="disabled">Plate Code</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="H">H</option>
                                    <option value="K">K</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" pattern="[0-9]" maxlength="5" placeholder="Plate Number"
                                    class="plate_number">
                            </div>
                            <div class="number-plate-box ajman-private position-relative">
                                <img src="assets/images/Ummel_Quwain.png" class="w-100 number-plate-img" alt="image">
                                <div id="PlateCode"></div>
                                <div id="PlateNumber"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" value="" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <textarea name="" rows="9" placeholder="Describe your item"></textarea>
                            </div>
                            <div class="form-group">
                                <a href="checkout.php" class="btn-theme d-block text-decoration-none hover-none-white w-100 btn-next">Next</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Select Category End -->

    <!-- Custom Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        $('.dubai-plate-code').change(function () {
            if ($(this).val() != '') {
                $('#PlateNumber').css({
                    left: '42%'
                })
            } else {
                $('#PlateNumber').css({
                    left: '37%'
                })
            }
        })
        $('.number_plate').change(function () {
            var plate = $(this).val();

            // For Abudhabi
            if (plate == 'new') {
                $('.number-plate-img').attr('src', `assets/images/${'Dubai_New.png'}`)

            } else {
                $('.number-plate-img').attr('src', `assets/images/${'dubai.png'}`)

            }
        });
    </script>
    <script src="assets/js/main.js"></script>
</body>

</html>