<h2>Login Page</h2>
<form id="login_info" action="<?= base_url(); ?>/login_auth" method="post" >

    <br>
    <label for="username">Username:</label><input type="text" name="username" id="username" value="">
    <br><br>
    <label for="password">Password:</label><input type="text" name="password" id="password" value="">
    <br><br>
    <input type="submit" value="Login" id="login_submit">
    <a href="register_view">create new account</a>

</form>