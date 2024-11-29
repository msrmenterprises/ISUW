    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $db = rkumaris_isgwmain;
        $tableName = vote;
        $conn = mysqli_connect("localhost", "rkumaris_igwmn", "UphACrKL,aO+", "rkumaris_isgwmain");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 3 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $organization = $_REQUEST['organization'];
        $category = $_REQUEST['category'];
        $subcategory = $_REQUEST['subcategory'];
         //$result = [];
         
//if(!isEmailValid($email)):
 //   $result['has_error'] = 1;
 //   $result['response'] = "Email address is invalid.";
 //   endif;
    
$select = mysqli_query($conn, "SELECT * FROM vote WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('This email address is already used!');
}
  
        
//        function isEmailExists($db, $tableName, $email)
//{
        // SQL Statement
//        $sql = "SELECT * FROM vote WHERE email='".$email."'";

        // Process the query
//        $results = $db->query($sql);

        // Fetch Associative array
//        $row = $results->fetch_assoc();

        // Check if there is a result and response to  1 if email is existing
  //      return (is_array($row) && count($row)>0);
//}

//if(isEmailExists($db, $tableName, $email)):
//    $result['has_error'] = 1;
 //   $result['response'] = "Email address is already exists.";
//endif;


         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO vote  VALUES ('$name','$email','$organization','$category','$subcategory')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for your vote.</h3>";
 
            echo nl2br("$name\n $email\n $organization\n $category\n $subcategory");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>