<script type="text/javascript" src="public/js/adminaccount.js"></script>
<div class="container jumbotron">
	<h2 style="text-align: center">Change password</h2>
	<br>

  <h4 style="text-decoration: underline;">Change your password :</h4>
	<form class="form-horizontal ajax-form" role="form" method="post" autocomplete="off" action="index.php?p=admin&action=updateaccount">
		<div class="form-group">
			<div class="col-sm-3"></div>
			<label for="password" class="col-sm-1 control-label">Password</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="password"
					name="password" placeholder="Password" autocomplete="off">
			</div>
			<div class="col-sm-3"></div>
		</div>
		<div class="row">
			<div class="col-sm-5"></div>
			<button type="submit" class="btn btn-bat">Update</button>
		</div>
	</form>

</div>
