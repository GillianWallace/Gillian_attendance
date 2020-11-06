<?php 
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    ?>
   
        <!--
            -First Name
            -Last Name
            -Date of Birth (Use DatePicker)
            -Speciality (Database Admin, Software Developer, Web Administrator, Other)
            -Email Address
            -Contact Number
        -->
    <h1 class="text-center">Registration for IT Conference </h1>

    <form method="post" action="success.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="DOB">Date Of Birth</label>
            <input type="text" class="form-control" id="DOB" name="DOB">
        </div>
        <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <div class="form-group">
    <select class="form-control" id="specialty" name="specialty">
      <option>Database Admin</option>
      <option>Software Developer</option>
      <option>Web Administrator</option>
      <option>Other</option>
    </select>
    </div>
    <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" 
            aria-describedby="emailhelp"> 
            <small id="emailhelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" 
            aria-describedby="phonehelp">
            <small id="phonehelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>

<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>