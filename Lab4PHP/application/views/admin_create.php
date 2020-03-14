<h2>Creating User</h2>

<form action="<?php echo base_url('index.php?/Admin/store/');?>" method="post">
        <?= $msg ?>

        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="text" name="password"></p>

        <p>
            User Level:
            <select name="accesslevel">
                <option value="member">Member</option>
                <option value="editor">Editor</option>
                <option value="admin">Admin</option>
            </select>
        </p>

        <button class="btn btn-primary">Submit</button>
    </form>