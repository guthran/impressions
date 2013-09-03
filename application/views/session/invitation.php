
<div class="half-center">
<form class="form-horizontal" role="form" 
	action="<?php echo site_url('/session/register/') ?>">
	<div class="form-group">
		<label for="invitation" class="col-lg-2 control-label">Invitation</label>
		<div class="col-lg-10">
			<input type="text" class="form-control" name="invitation" id="invitation" placeholder="Invitation Key" value="{invitation}"/>
			<span class="help-block">If you clicked a link, it didn't work.  Check your email and copy your invitation key here.</span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<button type="submit" class="btn btn-default">I have an invitation!</button>
		</div>
	</div>
</form>
</div>

