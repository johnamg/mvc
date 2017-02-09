<h1>Register</h1>
<p>Create a username and password here</p>
<form id="note" method="post" action="<?php echo URL;?>register/create">
    <label>Login</label><input type="text" name="login" /><br />
    <label>Password</label><input type="password" name="password" /><br />
    <label>Role</label>
        <select name="role">
            <option value="default">Default</option>
        </select><br />
    <label>&nbsp;</label><input type="submit" />
</form>
