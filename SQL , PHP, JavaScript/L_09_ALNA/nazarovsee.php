<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cinema Film</title>
    <link rel="stylesheet" href="60299_style.css">
    <?php 
          $server = 'localhost';
          $username ='root';
          $password = '';
          $database ='L_09_nazarov_60299_cinema';
    
          $entry = TRUE;
      if(isset($_POST['film_name'])){
          $film_name = $_POST['film_name'];}else {$entry = FALSE;}
      
      if(isset($_POST['author'])){
        $author = $_POST['author'] ;}else {$entry = FALSE;}
    
    if(isset($_POST['Year'])){
        $Year = $_POST['Year'];} else {$entry = FALSE;}
    
    if(isset($_POST['duration'])){
        $duration = $_POST['duration'] ;}else {$entry = FALSE;}
        echo "Entry = " ,$entry;
    if($entry){
        $conn = new mysqli($server, $username, $password, $database);
        $query = "insert into L_09_nazarov_60299_cinema.film(
         
         film_name,
            author,
            Year,
            duration
        )";
            $query .= "Values('".$film_name."', '".$author."','".$Year."','".$duration."')";
            $conn->query($query);
        }
      
          $conn = new mysqli($server, $username, $password, $database);
      $query = "Select * From film";
      $rs = $conn->query($query);
      $conn->close();
      $num = $rs->num_rows;

    ?>
</head>
<body>
    

    <header>
        <h1>Welcome to the Cinema</h1>
        <h3>Film service system</h3>
    </header>
    <article>
        See Film <br>
      
    </article>

    <table>
        <tr><th>id</th><th>film_name</th>
    <th>author</th><th>year</th>
<th>hours</th></tr>


<?php
$i=0;
while ($i < $num) {
$rs->data_seek($i);
$row = $rs->fetch_assoc();
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["film_name"]."</td>";
echo "<td>".$row["author"]."</td>";
echo "<td>".$row["Year"]."</td>";
echo "<td>".$row["duration"]."</td>";
echo "<tr>";
$i++;}

?>


    </table>
    <footer>
<nav>
<ul>
    <li><a href="nazarovindex.html">MAin Page</a></li>
    <li><a href="nazarovsee.php">See Page</a></li>
    <li><a href="nazarovadd.html">Add Page</a></li>
    <li><a href="nazarovdelete.html">Delete Page</a></li>
</ul>

</nav>
    <h6>Spring 2022</h6>
    </footer>

</body>
</html>