<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Registration System</title>
    <style>
    div.container{
        padding: 2rem 1rem;
        border: 1px solid black;
        width: max-content;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: auto auto;
    }
    button{
        padding: 0.5rem 2rem;
        border: 1px gray solid;
        border-radius: 12px;
    }
    button.login-btn{
        background-color: aliceblue;
    }
    button.register-btn{
        background-color: blanchedalmond;
    }
</style>
<script>
    function navigateTo(page){
        window.location.href = page;
    }
</script>
</head>
<body>
    <div class="container">
        <h2>Login / Registration system</h2>
        <div>
            <button class="login-btn" onclick="navigateTo('login.php')">Login</button>
            <button class="register-btn" onclick="navigateTo('register.php')">Register</button>
        </div>
    </div>
</body>
</html>