
<div class="half-center">
<p class="lead">Login using your email address and password:</p>
<form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label for="email" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{email}">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
  
  <input type="hidden" name="doLogin" value="true" />
</form>
</div>