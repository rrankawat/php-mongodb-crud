<!-- header open -->
<?php require 'templates/header.php' ?>
<!-- header close -->

<br/><br/>
<div class="row">
  <div class="col-md-10 col-lg-10">
    <h1>Add New</h1>
  </div>
  <div class="col-md-2 col-lg-2">
    <a href="home.php" class="btn btn-success">Return</a>
  </div>
</div>

<br/>
<div class="row">
  <div class="col-md-6 col-lg-6">
    <form method="post" action="../app/create.php">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
      </div>

      <label for="name">Gender</label>
      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Female">
          <label class="form-check-label" for="inlineRadio1">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Male">
          <label class="form-check-label" for="inlineRadio2">Male</label>
        </div>
      </div>

      <div class="form-group">
        <label for="designation">Designation</label>
        <select class="custom-select mr-sm-2" name="designation">
          <option selected>Choose...</option>
          <option value="Developer">Developer</option>
          <option value="Designer">Designer</option>
          <option value="DBA">DBA</option>
        </select>
      </div>

      <div class="form-group">
        <label for="name">City</label>
        <input type="text" name="city" class="form-control" placeholder="Enter city">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

<!-- footer open -->
<?php require 'templates/footer.php' ?>
<!-- footer close -->