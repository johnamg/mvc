<h1>User: Edit</h1>

<?php
// print_r($this->user);


?>

<form id="note" method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
    <label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" /><br />
    <label>Password</label><input type="password" name="password" /><br />
    <label>Role</label>
        <select name="role">
            <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="owner" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
        </select>
        <br />
        <label>&nbsp;</label><input type="submit" name="submit" value="Submit" />
        <label>&nbsp;</label><input type="submit" name="submit" value="Cancel" />
</form>
