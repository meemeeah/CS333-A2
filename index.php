<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UOB Student Nationality Data</title>
  <!-- the css pico style  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
<main class="container">
        <h1>University of Bahrain Student Nationality Data</h1>
  <!-- the table  -->
  <table>
    <thead>
      <tr>
        <th>Year</th>
        <th>Semester</th>
        <th>The Programs</th>
        <th>Nationality</th>
        <th>Colleges</th>
        <th>Number of students</th>
      </tr>
    </thead>

    <tbody>
      <?php
      // Loop through the data
      foreach ($outcome as $student) {
        ?>
        <tr>
          <td><?php echo $student["year"]; ?></td>
          <td><?php echo $student["semester"]; ?></td>
          <td><?php echo $student["the_programs"]; ?></td>
          <td><?php echo $student["nationality"]; ?></td>
          <td><?php echo $student["colleges"]; ?></td>
          <td><?php echo $student["number_of_students"]; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</main>
</body>

</html>
