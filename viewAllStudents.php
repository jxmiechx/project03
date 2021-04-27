<?php include 'header.php' ?>
<?php
//read students file
function readStudentsFile() {
    // read the file into memory; if there is an error then stop processing
    $arr = file("data/students.txt") or die('ERROR: Cannot find file');
    // our data is comma-delimited
    $delimiter = ','; 
    // loop through each line of the file
    foreach ($arr as $line) {  
       // explode returns an array of strings where each element in the array
       // corresponds to each substring between the delimiters
       $splitcontents = explode($delimiter, $line);       
       $student = array();
       //put $splitcontents into an associative array for ease of use in html
       $student['fname'] = $splitcontents[0];
       $student['lname'] = $splitcontents[1];
       $student['university_status'] = $splitcontents[2];
       $student['email'] = $splitcontents[3];
       // add student to array of students
       //when you add an element to an array in php, if you don't
       //give it an index or key, it just adds it to the end
       $students[$student['fname']] = $student;
    }
    return $students;
 }
?>

<!--table to display all the students who filled out a form-->
<table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Student Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
            <?php  
                $students = readStudentsFile();
                foreach ($students as $student) {
                    echo '<tr>';
                    echo '<td><a href="showStudentDetails.php?fname=' . $student['fname'] . '&lname='. $student['lname'] . '&type='. $student['university_status'] . '&email=' . $student['email'] . '</a></td>';
                    echo '<td >' . $student['university_status'] . '</td>';
                    echo '</tr>    ';    
                } 
    ?>  
</table>

<!--go back to previous page-->
<p><a href="php.html" button type="button" class="btn btn-info">Go Back</button></a>