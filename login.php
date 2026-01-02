<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MediPulse OPD Login</title>
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family: 'Segoe UI', sans-serif; }
body {
    display:flex; justify-content:center; align-items:center; height:100vh;
    background:blue;
}
.login-container {
    background:#fff; padding:40px 30px; border-radius:12px; width:360px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}
.login-container h2 {
    text-align:center; margin-bottom:30px; color:#1f2bd8;
}
.login-container form { display:flex; flex-direction:column; }
.login-container label { font-size:14px; margin-bottom:5px; color:#333; }
.login-container input[type="text"], input[type="password"] {
    padding:12px; margin-bottom:20px; border-radius:6px; border:1px solid #ccc;
    font-size:15px; transition:0.3s;
}
.login-container input:focus { border-color:#1f2bd8; outline:none; }
.login-container button {
    padding:12px; border:none; border-radius:6px; background:#1f2bd8;
    color:#fff; font-size:16px; cursor:pointer; transition:0.3s;
}
.login-container button:hover { background:#0a1aa0; }
.error-msg { color:red; font-size:14px; margin-bottom:15px; text-align:center; }
</style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
