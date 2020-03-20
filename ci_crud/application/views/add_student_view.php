<h2>Add New Student Data</h2>

<form id="create_info" action="<?= base_url(); ?>create_student" >

    <br>
    <label for="name">name:</label><input type="text" name="name" id="name" value="">
    <br><br>
    <label for="age">age:</label><input type="text" name="age" id="age" value="">
    <br><br>
    <label for="sex">sex:</label><input type="text" name="sex" id="sex" value="">
    <br><br>
    <label for="address">address:</label><input type="text" name="address" id="address" value="">
    <br><br>
    <button type="button" value="Create New" id="create_submit">Create New</button>

</form>