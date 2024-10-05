<div class="loginBox">
    <h3>Sign in here</h3>
    <form action="login.php" method="post">
        <div class="inputBox">
            <input id="uname" type="text" name="Username" placeholder="Username">
            <input id="pass" type="password" name="Password" placeholder="Password">
        </div>
        <input type="submit" value="Login">
    </form>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        background: url(https://i.ibb.co/VQmtgjh/6845078.png) no-repeat center center;
        background-size: cover;
        height: 100vh;
        font-family: sans-serif;
        overflow: hidden;
    }

    @media screen and (max-width: 600px) {
        body {
            background-size: cover;
        }

        .loginBox {
            width: 90%;
            padding: 20px;
        }
    }

    .loginBox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        background: #000;
        border-radius: 10px;
        padding: 40px;
        box-sizing: border-box;
    }


    h3 {
        color: #59238F;
        text-align: center;
        margin-bottom: 20px;
    }

    .loginBox input {
        width: 100%;
        margin-bottom: 20px;
    }

    .loginBox input[type="text"], .loginBox input[type="password"] {
        border: none;
        border-bottom: 2px solid #262626;
        outline: none;
        height: 40px;
        color: #fff;
        background: transparent;
        font-size: 16px;
        padding-left: 20px;
        box-sizing: border-box;
    }

    .loginBox input[type="text"]:hover, .loginBox input[type="password"]:hover {
        color: #42F3FA;
        border: 1px solid #42F3FA;
        box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black;
    }

    .loginBox input[type="text"]:focus, .loginBox input[type="password"]:focus {
        border-bottom: 2px solid #42F3FA;
    }

    .loginBox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        font-size: 16px;
        background: #59238F;
        color: #fff;
        border-radius: 20px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .loginBox input[type="submit"]:hover {
        background: #431F6E;
    }

    .loginBox a {
        color: #262626;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        display: block;
        margin-top: 10px;
    }

    a:hover {
        color: #00ffff;
    }

    .text-center p {
        color: #0000ff;
        margin-top: 10px;
        cursor: pointer;
    }

    .text-center p:hover {
        color: #431F6E;
    }
</style>
