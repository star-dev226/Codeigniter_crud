<h2>Edit </h2>

<table>
    <thead>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Sex</td>
            <td>Address</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
    <?php
        foreach($edit_data as $list) {
            echo "<tr>";
            // echo $list->name." name ".$list->age." age ".$list->sex." sex ".$list->address." address ";
            echo "<td><input class='name' type='text' value='".$list->name."'></td>";
            echo "<td><input class='age' type='text' value='".$list->age."'></td>";
            echo "<td><input class='sex' type='text' value='".$list->sex."'></td>";
            echo "<td><input class='address' type='text' value='".$list->address."'></td>";
            echo "<td><button class='btn-save' href=".base_url().'save/'.$list->id.">Save</button></td>";
            echo "<td><a class='btn-delete' href=".base_url().'student_list'.">Back</a></td>";
            echo "</tr>";
        }

    ?>
    </tbody>
    
    
</table>