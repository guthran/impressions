<script>
$().ready(function() 
		{
		$("#registerForm").validate({
			rules: {
				username: {
					required: true,
					minlength: 3,
					remote: {
						url: '<?php echo site_url('/session/checkUser')?>',
						type: 'post'
					}
				},
				name: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				username: {
					remote: jQuery.validator.format("{0} is already taken, please enter a different address.")
				}
			}
		});
});
</script>


<div class="half-center">
<p class="lead">Create your Account:</p>
<form class="form-horizontal" id="registerForm" role="form" method="post" 
	action="<?php echo site_url('/user/create') ?>">

	<div class="form-group">
		<label for="username" class="col-lg-2 control-label">*Username</label>
		<div class="col-lg-10">
			<input type="text" class="form-control" id="username" name="username" placeholder="Username (Used as a login)" required />
		</div>
	</div>

  <div class="form-group">
    <label for="inputName" class="col-lg-2 control-label">*Full Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="inputName" name="name" placeholder="Full Name" required />
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">*Email</label>
    <div class="col-lg-10">
      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required />
    </div>
  </div>
  
  <div class="form-group">
  	<label for="inputPassword" class="col-lg-2 control-label">*Password</label>
  	<div class="col-lg-10">
  		<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required />
  	</div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <span class="help-block">
      Fields denoted with a * are required.
      </span>
      <input type="hidden" name="invitation" value="{invitation}" />
      <button type="submit" class="btn btn-default">Create Account</button>
    </div>
  </div>
</form>

</div>