<?php 
    $title = 'View Record';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    
    // Get attendee ny id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    }else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
    <div> <img class="rounded-circle" src="<?php echo empty ($result['avatar_path']) ? 'uploads/blank.png' : $result['avatar_path']; ?>" width="120&quot;" height="120&quot;"/></div>
        <h5 class="card-title">
            <?php echo $result['firstname'] .' ' . $result['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result['name'];  ?>
        </h6>
        <p class="card-text">
           Date of Birth: <?php echo $result['dateofbirth'];  ?>
        </p>
        <p class="card-text">
            Email Address: <?php echo $result['emailaddress'];  ?>
        </p>
        <p class="card-text">
            Contact Number: <?php echo $result['contactnumber'];  ?>
        </p>

        </div>
</div>
<br/>
    <a href="viewrecords.php" class=" btn btn-info">Back to List </a>
    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class=" btn btn-warning">Edit </a>
    <a onclick="return confirm('Are you Sure you want to Delete this Record')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class=" btn btn-danger">Delete </a>
                
    <?php } ?>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>