<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {
            border: 3px solid #f1f1f1;
            padding: 40px 30px;
            position: absolute;
    }


        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .button {
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            text-decoration:none;
        }

        .button:hover {
            opacity: 0.8;
        }

        .buttonsins {
            background-color: #0449af;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            text-decoration:none;
        }

        .buttonsins:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .container {
            padding: 16px;
            width: 40%;
            align:center;
        }
        span.psw {
            float: right;
            padding-top: 16px;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }


        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
               display: block;
               float: none;
            }
            .cancelbtn {
               width: 100%;
            }
        }
        </style>
    </head>
    <body>
        <form method="post" class="connexion" action="valide_connexion.php">
            <div class="container">
                <h1>Se connecter</h1>
                
                <hr>
                <label for="uname"><b>Login</b></label>
                <input type="email" name="login" required="required" placeholder="Entrez votre login">

                <label for="psw"><b>Password</b></label>
                <input type="password" name="pass" required="required" placeholder="Entre votre mot de passe">

                <input class="button" type="submit" name="bconnexion" value="Connexion">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label><br/><br/>
                Vous n'avez pas de compte ?<br/><br/>
               <a class="buttonsins" href="sinscrire.php">S'inscrire</a>
            </div>
        </form>
    </body>
</html>
