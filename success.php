<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once "sendemail.php";

    if (isset($_POST['submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['DOB'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        // $orig_file = $_FILES["avatar"]["tmp_name"];
        // $ext = pathinfo($_FILES['avatar']["name"], PATHINFO_EXTENSION);
        // $target_dir = 'uploads/';
        // $destination ="$target_dir$contact.$ext";
        // move_uploaded_file($orig_file,$destination);


        //call functionto insert and track is success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty, $destination);
        $specialtyName = $crud->getSpecialtyById($specialty);
    
        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to IT Conference 2020', 'Dear ' . $fname . ' '.$lname.',<br><br>This letter is the confirmation of your reservation for the Annual Conference held by the International Computer Association.<br/>This year the conference would be from December 6, 2020, to December 8, 2020.<br/><br/>You have a reserved seat in all the four workshops for the treatment of substance abuse.<br><br/>For any further queries, feel free to write to us or give us a call.<br/><br>Regards. <br/><br>IT Conference Team<br>');

            include 'includes/sucessmessage.php';
        }
        else{
            include 'includes/errormessage.php';  
        }
    }
?>

    <!--This prints out values that were passed to the action page using method ="get"--> 
   <!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php //echo $_GET['firstname'] .' ' . $_GET['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php //echo $_GET['specialty'];  ?>
        </h6>
        <p class="card-text">
           Date of Birth: <?php //echo $_GET['DOB'];  ?>
        </p>
        <p class="card-text">
            Email Address: <?php //echo $_GET['email'];  ?>
        </p>
        <p class="card-text">
            Contact Number: <?php //echo $_GET['phone'];  ?>
        </p>

        </div>
</div> -->

<div class="card" style="width: 18rem;">
    <div class="card-body">
    <div> <img class="rounded-circle" src="<?php echo $destination ?>" width="120&quot;" height="120&quot;"/></div>
        <h5 class="card-title">
            <?php echo $_POST['firstname'] .' ' . $_POST['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
        <?php echo $specialtyName['name'] ?>
        </h6>
        <p class="card-text">
           Date of Birth: <?php echo $_POST['DOB'];  ?>
        </p>
        <p class="card-text">
            Email Address: <?php echo $_POST['email'];  ?>
        </p>
        <p class="card-text">
            Contact Number: <?php echo $_POST['phone'];  ?>
        </p>

        </div>
    
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>