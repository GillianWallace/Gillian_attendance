<?php 
    $title = 'Edit Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $result = $crud->getSpecialties();
    
    ?>
   
        <!--
            -First Name
            -Last Name
            -Date of Birth (Use DatePicker)
            -Speciality (Database Admin, Software Developer, Web Administrator, Other)
            -Email Address
            -Contact Number
        -->
    <h1 class="text-center">Edit Record </h1>
    
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
                <label for="speciality">Area of Expertise</label>
                <select class="form-control" id="specialty" name="specialty" >
                    <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?php echo $r['specialty_id']; ?>"><?php echo $r['name']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" 
                >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="phone">Contact</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your Contact Number with anyone else.</small>
            </div>


            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        
        </form>

<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>