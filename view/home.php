<?php require '../app/read.php'; ?>

<!-- header open -->
<?php require 'templates/header.php' ?>
<!-- header close -->

<br/><br/>
<!-- messages start -->
<?php include('inc/messages.php'); ?>
<!-- messages close -->

<div class="row">
	<div class="col-md-10 col-lg-10">
		<h1>Employees List</h1>
	</div>
	<div class="col-md-2 col-lg-2">
		<a href="new.php" class="btn btn-success">Add New</a>
	</div>
</div>

<br/>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Designation</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($items)): ?>
      <?php foreach($items as $key => $item): ?>
        <tr>
          <th scope="row"><?php echo ($key+1); ?></th>
          <td><?php echo $item['name']; ?></td>
          <td><?php echo $item['gender']; ?></td>
          <td><?php echo $item['designation']; ?></td>
          <td><?php echo $item['city']; ?></td>
          <td>
            <a href="edit.php?id=<?php echo $item['_id']; ?>" class="btn btn-primary">Edit</a>&nbsp;
            <a href="../app/delete.php?id=<?php echo $item['_id']; ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

<!-- footer open -->
<?php require 'templates/footer.php' ?>
<!-- footer close -->