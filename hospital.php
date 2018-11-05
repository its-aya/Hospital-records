<?php
    function printResults($toprint)
    {
      echo "<table border='1'>
      <tr>
      <th>Patient_ID</th>
      <th>Patient_Name</th>
      <th>Patient_age</th>
      <th>Illness</th>
      </tr>";
      foreach($toprint as $row)
      {
        echo "<tr>";
        echo "<td>" . $row['Patient_ID'] . "</td>";
        echo "<td>" . $row['Patient_Name'] . "</td>";
        echo "<td>" . $row['Patient_age'] . "</td>";
        echo "<td>" . $row['Illness'] . "</td>";
        echo "</tr>";
      }
      echo "</table><br/>";
    }
    function showAllpatient ()
    {
      $user = "root";
      $pass = "root";
      //opens database connection
      try
      {
        $dbh = new PDO('mysql:host=localhost:3306;dbname=hospital', $user, $pass);
      } catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
      $result = $dbh->query('SELECT * from patient');
      printResults($result);
      $dbh = null;
    }
    showAllpatient ();
