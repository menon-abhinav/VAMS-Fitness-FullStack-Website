<html>
<head>
<title>Admin Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/admin_style.css">
<body>
    <div class="loginbox">
    <img src="img/avatar.png" class="avatar">
        <h1>Administrator</h1>
        <form method="POST" action = "/adminlogin">
            @csrf
            <p>Email</p>
            <input type="email" name="email" placeholder="abc@gmail.com">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
        </form>
        
    </div>

</body>
</head>
</html>