<h2>Admin</h2>

<p>This page is only accessible by admins - no others!</p>

<a href="<?php echo base_url('index.php?/Admin/create')?>">Create</a>
<table>
    <thead>
        <th>Username</th>
        <th>Delete</th>
        <th>Freeze/Unfreeze</th>
    </thead>
    <tbody>
        <?php foreach($users as $user):?>
            <tr>
                <td><?php echo $user->username?></td>
                <td><a href="<?php echo base_url('index.php?/Admin/delete/'.$user->compid);?>">Delete</a></td>
                <td>
                <?php if ($user->frozen == 0): ?>
                    <a href="<?php echo base_url('index.php?/Admin/freeze/'.$user->compid);?>">Freeze</a>
                <?php else: ?>
                    <a href="<?php echo base_url('index.php?/Admin/unfreeze/'.$user->compid);?>">Unfreeze</a>
                <?php endif;?>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>