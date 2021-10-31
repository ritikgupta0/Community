

<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodelLabel">Signup for Categories </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "/Forum/partials/_handlesignup.php" method = "post">
      <div class="modal-body">
      
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name = "signupemail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name = "signupPassword">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name ="signupcPassword">
          </div>
          <button type="submit" class="btn btn-primary">Signup</button>
       
        
      </div>
      <div class="modal-footer">
      </form>
      </div>
    </div>
  </div>
</div>