<h2>Register Page</h2>
<form id="register_info" action="<?= base_url(); ?>/register_user" method="post" >

    <br>
    <label for="username">Username:</label><input type="text" name="username" id="username" value="">
    <br><br>
    <label for="password">Password:</label><input type="text" name="password" id="password" value="">
    <br><br>
    <input type="submit" value="Register" id="register_submit">

</form>