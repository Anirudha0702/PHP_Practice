<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4088f999f7.js" crossorigin="anonymous"></script>

  <title>Login Page</title>
  
</head>
<style>
 *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Sans-serif';
        }
        body{
            font-size:1.2rem;
        }
        .wrapper{
            position: relative;
            margin:5rem auto;
            height:20rem;
            width:18rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 7px rgba(0, 0, 0, 0.342);
            overflow: hidden;
        }
        .wrapper .form_heading{
            position: relative;
            width:100%;
            height:7rem;
            background-color: #9018E7;
            text-align: center;
            color:#fff;
            font-size:1.3rem;
            padding-top: 2rem;
            border-bottom-right-radius:100px;
        }
        .wrapper .form_heading i{
            transform:scale(2);
            display:block;
            margin-bottom:1rem;
        }
        .form-wrapper{
            background:#9018E7;
        }
        form{
            text-align:center;
            position: relative;
            margin: auto;
            width:100%;
            background-color:#fff;
            height:10rem;
            border-top-left-radius:100px;
            padding-top:3.5rem;
        }

        input{
            width:90%;
            background-color: transparent;
            border: none;
            margin-bottom: 0.5rem;
            padding-left: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.336);
        }
        input::placeholder{
            font-size:1.0618rem;
        }
        input:focus{
            outline: none;
        }
        button{
            width:90%;
            height:2.5rem;
            display: block;
            margin: 0.5rem auto;
            background-color: #9018E7;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.336);
            border: none;
            padding: 0;
            color:#fff;
            border-radius: 20px;
            cursor:pointer;
        }
        button:hover{
            background-color:rgba(144, 24, 231,0.7);
        }
</style>
<body>
    <div class="wrapper">
        <div class="form_heading"><i class="fa-solid fa-user"></i>Login</div>
        <div class="form-wrapper">
            <form action="./checkUser.php" method="POST" class="form">
                <input type="text" name="user_name" id="D_id"  placeholder="Username">
                <input type="password" name="user_password" id="D_id" placeholder="password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
