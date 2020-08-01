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
	       

<br> 

<!-- view -->

<div class="col-md-12">
    
    <legend>View User</legend>
    
    <div >
        
              <div class2=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $users['name'] ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $users['email'] ?></a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        
        
    </div>
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                            
                            <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                            <!--
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                </ul>
                            </li>
                            -->
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">Default 1</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <!--
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                        -->
                    </div>
                </div>
            </div>

</div>
	    
	    
	</div>
</div>
