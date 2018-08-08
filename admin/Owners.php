<?php include "view/header.php"; ?>   
<br>
<br>
<!-- container -->
<div class="container">
    <div class="page-header">
        <div class="row">
            <h1>Owners</h1>
            <table class="table table-hover table-striped" id="mytable">
                <thead>
                    <tr class='thead-dark'>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Addrees</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
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


            $query='SELECT * FROM owners  LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
            $resultset=mysqli_query($conn,$query) or die ("Error");

                  while( $owner = mysqli_fetch_assoc($resultset) ) {
                  ?>
                        <tr>
                        <td><?=$owner['fname'] ?></td>
                        <td><?=$owner['lname']; ?></td>
                        <td><?=$owner['add1'],$owner['add2']; ?></td>
                        <td><?=$owner['city']; ?></td>
                        <td><?=$owner['st']; ?></td>
                        <td><?=$owner['zip']; ?></td>
                  </tr>
                        <?php } ?>
                      </tbody>
                    </table> 
                </div>
                </div>
            </div>

  <!-- container -->


<div class="container">
    <div class="page-header">
        <div class="row">
            <?php
            // display the links to the pages
            for ($page=1;$page<=$number_of_pages;$page++) {
              echo '<li class="page-item"><a class="page-link" href="Owners.php?page=' . $page . '">' . $page . '</a></li>';
            }
          ?>
        </div>
    </div>
</div>
<!-- container -->
<?php include "view/footer.php"; ?>   