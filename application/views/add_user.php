<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
	<div class="row">
	    
	    
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<nav class="navbar navbar-dark bg-bark">
  <div class="container">
  <legend>User</legend>
  </div>
</nav>


<!-- FORM  -->	    
	   <div class="col-md-12">
	       
	    <form class="form-horizontal" id="form-edit-client" method="post" action="<?php echo base_url().'index.php/user/create'; ?>">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="User's name" class="form-control input-md">
  <?php echo form_error('name') ?>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input id="email" name="email" class="form-control" placeholder="yourname@yourdomain.com" type="text">
      <?php echo form_error('email') ?>
    </div>
  </div>
</div>



<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="status">Status</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="status-1">
      <input type="radio" name="status" id="status-0" value="active" checked="checked">
      Active
    </label>
	</div>
  <div class="radio">
    <label for="status-0">
      <input type="radio" name="status" id="status-0" value="inactive">
      Inactive
    </label>
	</div>
    <?php echo form_error('status') ?>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn-save"></label>
  <div class="col-md-4">
    <button id="btn-save" name="btn-save" class="btn btn-success">Save</button>
  </div>
</div>

</fieldset>
</form>


	   </div> 
	    




	    
	    
	</div>
</div>
