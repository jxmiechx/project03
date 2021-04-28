<?php include 'header.php'; ?>
<?php
/*processPet.php does 2 things:
  1. moves the uploaded pet image to the images folder in our web_portfolio folder
  2. saves the pet info in a file read by viewAllPets.php
  */

  /*See what's in FILES array. 
This is what will print:
key is name and val is "name of file"
key is type and val is "file type eg. jpeg"
key is tmp_name and val is "location of where apache web server stores uploaded file by default"
key is error and val is 0
key is size and val is "size of file" */


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $type = $_POST["university_status"];
    $email = $_POST["email"];
    $major = $_POST["major"];
    
    //create students.txt if it doesn't exist
    $file = 'data/students.txt';
    if(!is_file($file)) {
        file_put_contents($file, "");        
    }
/*We get the current file contents and append the new student data */
// Open the file to get existing content
$current = file_get_contents($file);

// Append a new student to the file
$current .= "$fname,$lname,$type,$email,$major\n";

// Write the contents back to the file
file_put_contents($file, $current);

/* end PHP and begin html */
?>
    <caption>Student Info</caption>
    <table>
      <tr>
        <td>First Name</td>    
        <td><?php echo $fname; ?></td> 
      </tr>
      <tr>
        <td>Last Name</td>    
        <td><?php echo $lname; ?></td> 
      </tr>
      <tr>
        <td>Student Status</td>    
        <td><?php echo $type; ?></td> 
      </tr>
      <tr>
        <td>Student Email</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>Student Major</td>
        <td><?php echo $major; ?></td>
      </tr>
    </table>
    <p><a href="php.html" button type="button" class="btn btn-info">Go Back</button></a>
    
    <?php 
    /*this closes if request_method == POST */
    } 
    else {
        echo 'Sorry nothing to upload';
    }
  ?>
<div class="alert alert-success" role="alert">
  Your information has been added!
</div>
</main>       
</body>
</html>