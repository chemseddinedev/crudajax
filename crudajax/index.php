<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="bootsrap/js/jquery.js"></script>

  </head>
  <body>
    
    <div class="container">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#addData" >add data</button>

		    	<div class="modal fade" tabindex="-1" role="dialog" id="addData">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Modal title</h4>
		      </div>
		      <div class="modal-body">
						        
						        <form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Full Name</label>
				    <input type="text" class="form-control" id="nm" placeholder="Full Name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Email </label>
				    <input type="email" class="form-control" id="em" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Phone Number</label>
				    <input type="text" class="form-control" id="hp" placeholder="Phone Number">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Address</label>
				    <textarea class="form-control" id="al" ></textarea>
				  </div>
				</form>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" onclick="savedata()">Save changes</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	function savedata(){
    		var name = $('#nm').val();
    		var email = $('#em').val();
    		var phone = $('#hp').val();
    		var address = $('#al').val();
    		var action = 'add';

    		$.ajax({
    			type: "POST",
    			url : "server.php?p=add",
    			data:"nm="+name+"&em="+email+"&hp="+phone+"&al="+address+"&action="+action,
    			success: function(msg){
    				alert(msg);
    			}
    		});
    	}
    </script>
  </body>
</html>