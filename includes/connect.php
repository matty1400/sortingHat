<?php
    function makeDbConnection() {
        // Credentials om te connecteren met een database
            $hostname = "ID367858_sortinghat.db.webhosting.be"; //ID362590_IMS1.db.webhosting.be -- OP COMBELL
            $user = "ID367858_sortinghat"; //ID362590_IMS1 -- OP COMBELL
            $password = "Babelut3"; //combellpassword
            $database = "ID367858_sortinghat"; //ID362590_IMS1
            
        // Make the connection
        $conn = mysqli_connect($hostname, $user, $password, $database);

        // Check if the connection is working
        if ($conn == false) {
            // Stop met de php code
            die("Geen database connectie");
        }

        return $conn;
    };

    

    function closeConnection($conn) {
        // Connection mySql server
        $conn->close();
    }

   

    function getQuery($sqlQuery) {
        // Make connection
        $conn = makeDbConnection();

        // Prepare the sql statement
        $result = mysqli_query($conn, $sqlQuery);

        // Close the connection
        closeConnection($conn);

        // Return associated array of the results
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($sqlQuery) {
        // Add product
        $conn = makeDbConnection();

        // Prepare the sql statement
        $result = mysqli_query($conn, $sqlQuery);

        // Connection close
        closeConnection($conn);

        return $result;
    }

    function procedure($sqlQuery) {
          // Add product
          $conn = makeDbConnection();

          // Prepare the sql statement
          $result = mysqli_query($conn, $sqlQuery);
  
          // Connection close
          closeConnection($conn);
  
          return $result;
    }

    function ceiling(){

       
   
   
        $ceiling = getQuery("select max(personId)
        from person;
        ");
        
       
       $count = (int) $ceiling[0]["max(personId)"];
       
        return $count;
    }
    function rndUser(){

        $currentUser= random_int(1,Ceiling());
   
   
        $rnd = getQuery("select personId
        from person where personId= $currentUser ;
        ");
        
       
       $rndId = (int) $rnd[0]["personId"];
       
        return $rndId;
    }

  
  
   
    

   
   
    




 
  
