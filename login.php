<!DOCTYPE html>
<html>

<head>
    <title> login form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(199, 199, 243);
        }

        .box {
            width: 370px;
            margin: auto;
            padding:45px;
          background-color: rgb(147, 147, 236);
            border-radius: 10%;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 5px 15px;
            margin: 10px 0px;
            display: inline-block;
            border: 2px solid #ccc;
            box-sizing: border-box;
            border-radius: 10px;
        }

        label {
            color: white;
        }

        button {
            background-color: #04aa6d;
            color: white;
            padding: 8px 20px;
            margin: 8px 0;
            border-radius: 10px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.7;
        }

        .imgcontainer {
            text-align: center;
            margin: 20px 0 0 0;
        }

        img.login {
            width: 10%;
            border-radius: 20%;
        }

        .psd {
            float: left;
            padding: 18px;
            font-size: 20px;
            font-size: 18px;
            margin-bottom: 10px;
        }

        @media screen and (max-width: 300px) {
            span.psd {
                display: block;
                float: none;
            }
        }
     
    </style>
</head>

<body>
    <form action="/home.html" method="post">
        <div class="imgcontainer">
            <img src="img/login.png" alt="display" class="login">
        </div>
        <br>
        <div class="box">
            <div class="container">
                <label for="Uname"><b>User Name</b></label>
                <input type="text" placeholder="Enter user name" name="uname" required>
                <label for="psd"><b>Password</b></label>
                <input type="password" placeholder="Enter password" name="psd" required>
                <button type="submit"><a href="#" style="text-decoration: none;">Login</a></button>
           </div>
            <a href="#" style="font-size: 19px; margin: 38px; text-decoration: none;">Forget Password</a>
            <a href="registration.html" style="font-size: 19px; text-decoration: none;">Sign up Here</a>
        
        </div>
    </form>
    </form>
</body>

</html>