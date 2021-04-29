<?php include 'header.php';?>
<form method="post" enctype="multipart/form-data" action="processStudent.php">

<!--privacy alert-->
<div class="alert alert-warning" role="alert">
  Please note: By filling out this form, you are agreeing to share your information with other students
  for the purpose of being able to contact one another. If you do not agree, please do not fill out this
  form. Thank you.
</div>
      <h3>Add Your Student Details</h3>
        <p>First Name<br/>
            <input type="text" name="fname">
        </p>
        <p>Last Name</p>
            <input type="text" name="lname">
       </p>
       <p>University Status<br/>
           <select name="university_status">
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
       <p>Major<br/>
            <input type="text" name="major">
       </p>
       </p> 
          <input type="submit"> 
          <input type="reset" value="Clear Form">      
</form>
    <p><a href="php.html" button type="button" class="btn btn-info">Go Back</button></a>
</body>
</html>
