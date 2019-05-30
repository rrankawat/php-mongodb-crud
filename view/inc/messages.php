<?php session_start(); ?>

<?php if($_SESSION['success']): ?>
	<div class="alert alert-success">
		<?php echo $_SESSION['success']; ?>
	</div>
<?php endif; ?>