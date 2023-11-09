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
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <input type="number" value="" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <select class="plate_code">
                                    <option value="" selected disabled="disabled">Plate Code</option>
                                    <option value="7">Blue</option>
                                    <option value="9">Gray</option>
                                    <option value="8">Green</option>
                                    <option value="6">Red</option>
                                    <option value="99">01</option>
                                    <option value="106">2</option>
                                    <option value="10">4</option>
                                    <option value="11">5</option>
                                    <option value="12">6</option>
                                    <option value="13">7</option>
                                    <option value="14">8</option>
                                    <option value="15">9</option>
                                    <option value="16">10</option>
                                    <option value="17">11</option>
                                    <option value="18">12</option>
                                    <option value="19">13</option>
                                    <option value="20">14</option>
                                    <option value="21">15</option>
                                    <option value="22">16</option>
                                    <option value="96">17</option>
                                    <option value="107">18</option>
                                    <option value="98">50</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" pattern="[0-9]" maxlength="5" placeholder="Plate Number"
                                    class="plate_number">
                            </div>
                            <div class="form-group d-flex align-items-center select-design">
                                <div class="w-50 d-flex align-items-center gap-2">
                                    <input type="radio" value="classic" id="classic_design"
                                        class="w-mxc number_plate mb-0" checked name="select_design"
                                        placeholder="Plate Number">
                                    <label for="classic_design" class="cursor">Classic Design</label>
                                </div>
                                <div class="w-50 d-flex align-items-center gap-2 cursor">
                                    <input type="radio" value="new" id="new_design" class="w-mxc number_plate mb-0"
                                        name="select_design" placeholder="Plate Number">
                                    <label for="new_design" class="cursor">New Design</label>
                                </div>
                            </div>
                            <div class="number-plate-box abudhabi position-relative">
                                <img src="assets/images/number-plate.png" class="w-100 number-plate-img" alt="image">
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
                                <a href="checkout.php" class="btn-theme w-100 text-decoration-none d-block hover-none-white btn-next">Next</a>
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
        $('.number_plate').change(function () {
            var plate = $(this).val();

            // For Abudhabi
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
    </script>
    <script src="assets/js/main.js"></script>
</body>

</html>