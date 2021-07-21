
<?php
require_once 'controllers/StudentController.php';
$students = getAllStudents();
// echo "<pre>";
// print_r($categories);
// echo "</pre>";
 ?>
<html>

  </head>
  <body>
    <h1>All Students</h1>
    <table>
      <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th>Dept name</th>
        <th>DOB</th>
        <th>Credit</th>
        <th>CGPA</th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $i=1;
          foreach ($students as $s) {
            $id =$s["id"];
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$s["name"]."</td>";
              echo "<td>".$s["d_name"]."</td>";
              echo "<td>".$s["dob"]."</td>";
              echo "<td>".$s["credit"]."</td>";
              echo "<td>".$s["cgpa"]."</td>";
              echo'<td> <a href="edit_student.php?id='.$s["id"].'">Edit</a></td>';
              echo'<td> <a href="">Delete</a> </td>';
            echo "</tr>";
            $i++;
          }

         ?>

      </tbody>
    </table>
  </body>
</html>
