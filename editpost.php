<?php 

require_once 'db/conn.php';

//Get values from post operation
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['DOB'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination ="$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$destination);

    //Call Crud funstion
    $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty,$destination);
    //Redirect to index.php
    if($result){
        header("Location: viewrecords.php");
    }
    else {
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
}
else{
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
}

?>