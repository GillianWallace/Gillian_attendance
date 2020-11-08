<?php
    class crud{
        //private database
        private $db;

        //constructor to initialize private to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

       //function to insert a new record into the attendee database
    public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty)
    {
        try {
            //define all sql statemnet to be execution
            $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailaddress,contactnumber,specialty_id) VALUES (:fname, :lname, :DOB, :email, :contact,:specialty)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //biind all placeholderto the actual values
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':DOB', $dob);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':specialty', $specialty);
            //Execute Statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
     
        public function getSpecialtyByID($id){
            try {
                $sql = "SELECT * FROM specialties WHERE specialty_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getAttendees()
    {
        try {
            $sql = "SELECT * FROM `attendee` a inner join `specialties` s on a.specialty_id = s.specialty_id";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendeeDetails($id){
        $sql= "select * from attendee a inner join `specialties` s on a.specialty_id = s.specialty_id where attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $result = $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function getSpecialties(){
            $sql = "SELECT * FROM `specialties`";
            $result = $this->db->query($sql);
            return $result;
    }

    }
        
?>





           
        

        
            
                
     
        

        

        
           
                

            
                