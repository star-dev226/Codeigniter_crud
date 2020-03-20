<h2>Student Data </h2>
<a style="float: right" href="<?php echo base_url(); ?>new_student">Add New</a>
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

        foreach($student_lists as $list) {
            echo "<tr>";
            // echo $list->name." name ".$list->age." age ".$list->sex." sex ".$list->address." address ";
            echo "<td>".$list->name."</td>";
            echo "<td>".$list->age."</td>";
            echo "<td>".$list->sex."</td>";
            echo "<td>".$list->address."</td>";
            echo "<td><a href=".base_url().'edit/'.$list->id.">Edit</a></td>";
            echo "<td><a href=".base_url().'delete/'.$list->id.">Delete</a></td>";
            echo "</tr>";
        }

    ?>
    </tbody>
    
    
</table>
