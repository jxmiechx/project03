<?php include 'header.php' ?>
<?php
/*this is used when we click on pet name in view all pets table */
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["fname"];
    $name = $_GET["lname"];
    $type = $_GET["university_status"];
    $email = $_GET["email"];
    $major = $_GET["major"];
    $cookieName = "studentPreference";
    $cookieValue = $_GET['type'];
    setcookie($cookieName, $cookieValue);
?>
 <table>
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
    <!--<p><a href="cutestPets.php">Back</a>--> 
<?php } 
?>
</main>       
</body>
</html>