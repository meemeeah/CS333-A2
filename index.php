<?php
// Endpoint URL
$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Fetch data from the API
$response = file_get_contents($url);

// Decode JSON response
$data = json_decode($response, true);

// Check if data is retrieved successfully and "records" key exists
if (!$data || !isset($data["results"])) {
  die("Error: Failed to retrieve data from the API."); 
}
$outcome = $data["results"];

?>

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
