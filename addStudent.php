<?php include 'header.php';?>
<form method="post" enctype="multipart/form-data" action="processStudent.php">
      <h3>Add Student Details</h3>
        <p>First Name<br/>
            <input type="text" name="fname">
        </p>
        <p>Last Name</p>
            <input type="text" name="lname">
       </p>
       <p>University Status<br/>
           <select type="university_status">
              <option>Choose status</option> 
              <option>1st Year</option>
              <option>2nd Year</option>
              <option>3rd Year</option>
              <option>4th Year</option>
           </select>
       </p>
       <p>Email</p>
            <input type="text" name="email">
       </p>
       </p> 
          <input type="submit"> 
          <input type="reset" value="Clear Form">      
</form>
    <p><a href="php.html" button type="button" class="btn btn-info">Go Back</button></a>
</body>
</html>
