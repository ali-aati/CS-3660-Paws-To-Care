<?php 
include('admin/model/functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
}

$id= $_SESSION['user']['id']; 

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <title>Paws to Care</title>
</head>

<body>

  <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-between">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link pl-0" href="index.php">Home
              <span class="sr-only">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
        </ul>
      </div>
      <a href="/" class="navbar-brand mx-auto d-block text-center order-0 order-md-1 w-25">Paws to Care</a>
      <div class="navbar-collapse collapse dual-nav w-50 order-2">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
          <a href="pets.php" class="nav-link">Pets</a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link"><?php echo $_SESSION['user']['fname']; ?></a>
          </li>
          <li class="nav-item">
          <a href="pets.php?logout='1'" class="nav-link">Sign Out</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- container -->
<div class="container">
    <div class="page-header">
        <div class="row">


<h1>Dogs</h1>
<table class="table table-hover table-striped" id="mytable">
          <thead>
          <tr class='thead-dark'>
            <th>Owner Name</th>
            <th>Dog Name</th>
            <th>Breed</th>
            <th>Sex</th>
            <th>Shots</th>
            <th>Licensed</th>
            <th>weight</th>
            <th>Age</th>
          </tr>
          </thead>
          <tbody id="myTable" class="myTable">
		  <?php 
			$sql_query = "SELECT o.id, d.id, d.name, d.breed, d.sex, d.shots,d.licensed, d.neutered, d.weight, d.birthdate, o.fname, o.lname ,dn.vetName ,dn.date, dn.note FROM dogs d
      INNER JOIN dogsowners do on d.id = do.dogsFk
      INNER JOIN owners o on do.ownersFk = o.id
      INNER JOIN dognotes dn on d.id = dn.dogsFk  WHERE o.id =$id";
      $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $dog = mysqli_fetch_assoc($resultset) ) {
      ?>
            <tr>
						<td><?=$dog['fname'] ." ",$dog['lname'] ?></td>
            <td><?=$dog['name']; ?></td>
            <td><?=$dog['breed']; ?></td>
            <td><?=($dog['sex'] == 'M' ? "Male" : "Female"); ?></td>
            <td><?=($dog['shots'] == 1 ? "Yes" : "No"); ?></td>
            <td><?=($dog['licensed'] == 1 ? "Yes" : "No"); ?></td>
            <td><?=Dog_size($dog['weight']); ?></td>    
            <td><?=Dog_age($dog['birthdate']); ?></td>
						</tr
            <?php }
            
function Dog_size($weight) {
  
  if ($weight < 20):
    echo "S";
elseif ($weight > 19 && $weight < 50):
    echo "M";
    elseif ($weight > 49 && $weight < 100 ):
    echo "L";
  else:
    echo "G";
endif;

}
function Dog_age($birthDate)
{
  $birthDate = date('m/d/Y', strtotime($birthDate));
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));

  return $age;
}
?>
          </tbody>
				</table> 

<h1>Cats</h1>
<table class="table table-hover table-striped" id="mytable">
          <thead>
          <tr class='thead-dark'>
            <th>Owner Name</th>
            <th>Cat Name</th>
            <th>Breed</th>
            <th>Sex</th>
            <th>Shots</th>
            <th>Age</th>
          </tr>
          </thead>
          <tbody id="myTable" class="myTable">
		  <?php 
			$sql_query = "SELECT c.id, c.name, c.breed, c.sex, c.shots, c.declawed, c.neutered, c.birthdate, o.fname, o.lname ,cn.vetName ,cn.date, cn.note FROM cats c
			INNER JOIN catsowners co on c.id = co.catsFk
      INNER JOIN owners o on co.ownersFk = o.id
      INNER JOIN catnotes cn on c.id = cn.catsFk  WHERE o.id =$id";
      $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $dog = mysqli_fetch_assoc($resultset) ) {
      ?>
            <tr>
            <td><?=$dog['fname'] ." ",$dog['lname'] ?></td>
            <td><?=$dog['name']; ?></td>
            <td><?=$dog['breed']; ?></td>
            <td><?=($dog['sex'] == 'M' ? "Male" : "Female"); ?></td>
            <td><?=($dog['shots'] == 1 ? "Yes" : "No"); ?></td>
            <td><?=cat_age($dog['birthdate']); ?></td>
						</tr
            <?php }

function cat_age($birthDate)
{
  $birthDate = date('m/d/Y', strtotime($birthDate));
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));

  return $age;
}

            ?>
          </tbody>
        </table> 
        
<h1>Exotics</h1>
<table class="table table-hover table-striped" id="mytable">
          <thead>
          <tr class='thead-dark'>
            <th>Owner Name</th>
            <th>Dog Name</th>
            <th>Breed</th>
            <th>Sex</th>
            <th>Neutered</th>
            <th>Age</th>
          </tr>
          </thead>
          <tbody id="myTable" class="myTable">
		  <?php 
			$sql_query = "SELECT e.id, e.name, e.species, e.sex, e.neutered, e.birthdate, o.fname, o.lname ,en.vetName ,en.date, en.note FROM exotics e
			INNER JOIN exoticsowners eo on e.id = eo.exoticsFk
            INNER JOIN owners o on eo.ownersFk = o.id
            INNER JOIN exoticnotes en on e.id = en.exoticsFk  WHERE o.id =$id";
      $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $dog = mysqli_fetch_assoc($resultset) ) {
      ?>
            <tr>
						<td><?=$dog['fname'] ." ",$dog['lname'] ?></td>
            <td><?=$dog['name']; ?></td>
            <td><?=$dog['species']; ?></td>
            <td><?=($dog['sex'] == 'M' ? "Male" : "Female"); ?></td>
            <td><?=($dog['neutered'] == 1 ? "Yes" : "No"); ?></td>
            <td><?=Dog_age($dog['birthdate']); ?></td>
						</tr
            <?php }

            ?>
          </tbody>
				</table> 
</div>
    </div>
</div>

<!-- container -->
  <?php include "view/footer.php"; ?>        
