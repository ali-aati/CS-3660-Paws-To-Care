<?php
$id=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
?>

<div class="modal-header">
<h4 class="modal-title" id="fam_id">Owner Info</h4>
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
</div>
<div class="modal-body">
    <form id="form1" method="post">
                        <div class="form-group">
                            <ul class="list-group">    
                            <li class='list-group-item'>First Name: <?php echo $fname;?></li>
                            <li class='list-group-item'>Last Name: <?php echo $lname;?></li>
                            </ul>
                        </div>
        </p>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
