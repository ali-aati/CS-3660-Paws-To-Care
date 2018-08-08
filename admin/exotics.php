<?php include "view/header.php"; ?>   

<br>
<br>
	<div class="container">
	 <div class="row">
      <div class="table-responsive">

        <table class="table table-hover table-striped" id="mytable">
          <thead>
					<tr class='thead-light'>
            <th><input type="text" id="Fname" class="form-control" placeholder="Name"></th>
            <th><input type="text" id="Fspecies" class="form-control" placeholder="species"></th>
            <th><input type="text" id="FSex" class="form-control" placeholder="Sex"></th>
            <th><input type="text" id="Fneutered" class="form-control" placeholder="neutered"></th>
						<th><input type="text" id="Fbirthdate" class="form-control" placeholder="birthdate"></th>
            <th></th>
          <th></th>
          </tr>
          <tr class='thead-dark'>
            <th id="Name">Name</th>
            <th id="Breed">Species</th>
            <th id="Sex">Sex</th>
            <th id="neutered">neutered</th>
            <th id="Age">Age</th>
            <th>Owner</th>
            <th>Notes</th>
          </tr>
          </thead>
          <tbody id="myTable" class="myTable">
      <?php 

// define how many results you want per page
$results_per_page = 10;

// find out the number of results stored in database
$sql='SELECT id  FROM dogs';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

$query='SELECT e.id, e.name, e.species, e.sex, e.neutered, e.birthdate, o.fname, o.lname ,en.vetName ,en.date, en.note FROM exotics e
JOIN exoticsowners eo on e.id = eo.exoticsFk
      JOIN owners o on eo.ownersFk = o.id
      JOIN exoticnotes en on e.id = en.exoticsFk LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$resultset=mysqli_query($conn,$query) or die ("Error");

function exotics_age($birthDate)
{
  $birthDate = date('m/d/Y', strtotime($birthDate));
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  return $age;
}
			while( $exotic = mysqli_fetch_assoc($resultset) ) {
      ?>
            <tr>
            <td><?=$exotic['name'] ?></td>
            <td><?=$exotic['species']; ?></td>
            <td><?=($exotic['sex'] == 'M' ? "Male" : "Female"); ?></td>
            <td><?=($exotic['neutered'] == 1 ? "Yes" : "No"); ?></td>            
            <td><?=exotics_age($exotic['birthdate']); ?></td>
            <td><a class="modalLink" href="#myModal" data-toggle="modal" data-target="#myModal" data-id="<?php echo $exotic["id"]; ?>" data-fname="<?php echo $exotic['fname']; ?>" data-lname="<?php echo $exotic['lname']; ?>"><button class="btn btn-dark btn-sm">Owner</button></a></td>
            <td><a class="modalLinknote" href="#myModal" data-toggle="modal" data-target="#myModal" data-id="<?php echo $exotic["id"]; ?>" data-date="<?php echo $exotic['date']; ?>" data-vetName="<?php echo $exotic['vetName']; ?>" data-note="<?php echo $exotic['note']; ?>"><button class="btn btn-dark btn-sm">Note</button></a></td>
						</tr>
            <?php } ?>
          </tbody>
				</table> 
 <!-- container -->
 <div class="container">
    <div class="page-header">
        <div class="row">
       <?php
            // display the links to the pages
            for ($page=1;$page<=$number_of_pages;$page++) {
              echo '<li class="page-item"><a class="page-link" href="exotics.php?page=' . $page . '">' . $page . '</a></li>';
            }
        ?>
            </div>
    </div>
</div>
<!-- container -->


				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<script>
$('.modalLink').click(function(){
    var id=$(this).attr('data-id');
    var fname=$(this).attr('data-fname');
    var lname=$(this).attr('data-lname');

    $.ajax({url:"modal_ajaxowner.php?id="+id+"&fname="+fname+"&lname="+lname,cache:false,success:function(result){
        $(".modal-content").html(result);
    }});
});
</script>

<script>
   $('.modalLinknote').click(function(){
    var id=$(this).attr('data-id');
    var date=$(this).attr('data-date');
    var vetName=$(this).attr('data-vetName');
    var note=$(this).attr('data-note');

    $.ajax({url:"modal_ajaxnote.php?id="+id+"&date="+date+"&vetName="+vetName+"&note="+note,cache:false,success:function(result){
        $(".modal-content").html(result);
    }});
});
</script>
    <script src="js/sort/exoticssort.js"></script>
    <script src="js/Filter/exoticsFilter.js"></script>
<?php include "view/footer.php"; ?>   