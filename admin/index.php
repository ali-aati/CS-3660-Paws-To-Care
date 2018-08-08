
    <?php include "view/header.php"; ?>     
<!-- Loging Modal -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Username or Email" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-dark btn-lg btn-block login-btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
      
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/Kittens.jpg" width="1100" height="500" style="width:100%;">
      </div>
      <div class="carousel-item">
        <img src="../img/18_banner_3.jpg" width="1100" height="500" style="width:100%;">
      </div>
      <div class="carousel-item">
        <img src="../img/18_banner_1.jpg" width="1100" height="500" style="width:100%;">
      </div>
      <div class="carousel-item">
        <img src="../img/dog_and_cat.jpg" width="1100" height="500" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="../img/cat.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Care for Cats</h5>
            <p class="card-text">Cats are a part of your family, We may suggest medications to remove parasites, treatments to prevent fleas and
              food options for your cat's optimal diet and health. We also recommend exercise for your cat and answer your
              questions regarding care and health.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="../img/dog.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Treatments for Dogs</h5>
            <p class="card-text">Bringing a new puppy or dog into your home gives you companionship and a fun new family member. The challenge
              is ensuring that your pet receives the care he or she needs to maintain good health through every stage of
              life.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="../img/r.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Small Mammal</h5>
            <p class="card-text">Is your pet microchipped? We want to help keep pets as safe as possible during all stages of their lives. Occasionally
              small mammals can get outside accidentally becoming lost or risking injury</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php include "view/footer.php"; ?>     