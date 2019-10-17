<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <div class="main">

        <div class="container">

            <form method="POST" id="signup-form" class="signup-form" action="#">

                <div>
                    <h3 class="text-info ">Registro Estudiante</h3>
                    <fieldset>
                        <input type="text" name="code" id="code" />
                        <label for="first_name" class="form-label">01 . Clave de registro ?</label>
                        <button type="button" class="btn btn-link" onclick="verificar(under)">Verificar Codigo</button>


                        <span id="mensaje"><!-- mensaje de verificación --></span>
                    </fieldset>

                    <h3></h3>
                    <fieldset>
                        <input type="text" name="first_name" id="first_name" />
                        <label for="first_name" class="form-label">01 . What is your first name ?</label>
                    </fieldset>

                    <h3></h3>
                    <fieldset>
                        <input type="text" name="last_name" id="last_name" />
                        <label for="last_name" class="form-label">02 . What is your last name ?</label>
                    </fieldset>

                    <h3></h3>
                    <fieldset>
                        <input type="email" name="email" id="email" />
                        <label for="email" class="form-label">03 . What is your Email ?</label>
                    </fieldset>

                    <h3></h3>
                    <fieldset>
                        <input type="text" name="password" id="password" />
                        <label for="password" class="form-label">04 . Create your password</label>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </fieldset>

                    <h3></h3>
                    <fieldset>
                        <input type="text" name="re_password" id="re_password" />
                        <label for="re_password" class="form-label">05 . Repeat your password </label>
                        <span toggle="#re_password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </fieldset>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="js/main.js"></script>

    <div>
        <button onclick="generarRandom()">Random</button>
        <script type="text/javascript">
            //<![CDATA[

            under = "Cde1614f26BCC00fA841";
            document.getElementById('code1').value = under;

            function verificar(v) {
                var p1 = document.getElementById('code');
                if (p1.value != v) {
                    document.getElementById('mensaje').innerHTML = "No coincide";
                } else {
                    document.getElementById('mensaje').innerHTML = "Ok";
                }
                console.log(under);
            }
            //]]>
        </script>
        </head>

        <body>

        </body>

</html>