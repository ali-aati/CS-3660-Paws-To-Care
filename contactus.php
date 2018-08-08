
    <?php include "view/header.php"; ?>        

  
<br>

<div class="container">
  <div class="row">
  <h1>Paws to Care</h1>
  </div>
  <h5>111 S 222 E utah</h5>
  <h5>Orem, UT 84805</h5>
  <br>
  <h5>Phone: 999-999-9999</h5>
  <h5>Fax: 111-111-1111</h5>
</div>
</div>

<br>
<div class="container">
  <div class="row">

    <div class="container">
      <form>
        <label for="fname">First Name</label>
        <input type="text" class="form-control" name="firstname" placeholder="Your name.." required>

        <label for="lname">Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Your last name.."required>

        <label for="lname">Phone</label>
        <input type="text" class="form-control" name="Phone" placeholder="Your number.."required>

        <label for="lname">Email</label>
        <input type="text" class="form-control" name="Email" placeholder="Your email.." required>

        <label for="Message"> Message</label>
        <textarea id="Message" name="Message" class="form-control" required placeholder="Write something.." style="height:200px"></textarea>
        <br>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<br>

<?php include "view/footer.php"; ?>        
