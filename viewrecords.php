<?php 
    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    $result = $crud->getAttendees();
?>

<table class="table">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of birth</th>
                <th>Email Address</th>
                <th>Contact Number</th>
                <th>Specialty</th>
            </tr>

            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $r['attendee_id'] ?></td>
                    <td><?php echo $r['firstname'] ?></td>
                    <td><?php echo $r['lastname'] ?></td>
                    <td><?php echo $r['dateofbirth'] ?></td>
                    <td><?php echo $r['emailaddress'] ?></td>
                    <td><?php echo $r['contactnumber'] ?></td>
                    <td><?php echo $r['name'] ?></td>
                    </tr>
                        <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class=" btn btn-primary">View </a>
                        <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class=" btn btn-warning">Edit </a>
                        <a onclick="return confirm('Are you Sure you want to Delete this Record')" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class=" btn btn-danger">Delete </a>
                    </td>
                </tr>
            <?php } ?>

        </table>


<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>
