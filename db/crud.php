<?php
    class crud{
        //private database
        private $db;
        //constructor to initialize private to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        //function to insert a new record into the attendee database
        public function insert($fname, $lname, $dob, $email, $contact, $specialty){
        try {
                $sql = "INSERT INTO attendee VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
            }

        }
    }



?>