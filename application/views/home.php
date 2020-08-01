<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
	<div class="row">
	    
	    
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">



<!-- FORM  -->	    
	   <div class="col-md-12">
	       
	    <form class="form-horizontal" id="form-edit-client">
<fieldset>

<!-- Form Name -->
<!-- LIST -->
<div class=col-md-12>
    
    <form id="form-list-client">
            <legend>List of users</legend>
    
    <div class="pull-right">
        <a href="./home" class="btn btn-default-btn-xs btn-primary"><i class="glyphicon glyphicon-refresh"></i> Refresh</a>
        <a class="btn btn-default-btn-xs btn-success" href="http://localhost/crudApp/index.php/user/create"><i class="glyphicon glyphicon-plus"></i> New</a>
    </div>
    <table class="table table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <td>Name</td>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
                
        </thead>
        <?php if(!empty($users)){ foreach ($users as $user) {?>
        <tbody id="form-list-client-body">
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php if($user['active']==1){echo 'active';}else{echo 'inactive';} ?></td>
                <td>
                    <a href="<?php echo base_url().'index.php/user/view/'.$user['id']; ?>" title="view this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-eye-open text-primary"></i> </a>
                    <a href="<?php echo base_url().'index.php/user/edit/'.$user['id']; ?>" title="edit this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-edit text-primary"></i> </a>
                    <a  href="<?php echo base_url().'index.php/user/delete/'.$user['id']; ?>" title="delete this user" class="btn btn-default btn-sm "> <i class="glyphicon glyphicon-trash text-danger"></i> </a>
                   
                </td>
            </tr>
        </tbody>
        <?php } } else { ?>
            <tr>
                No users found!
            </tr>
            <?php } ?>
    </table>
    </form>

    
</div>


<br> 

<!-- view -->


	    
	    
	</div>
</div>
