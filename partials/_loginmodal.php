
<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login for Categories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "/Forum/partials/_handlelogin.php" method = "post" >
      <div class="modal-body">
      
        <div class="mb-3">
            <label for="loginEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="loginEmail" name= "loginEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
              <label for="loginPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="loginPassword" name = "loginPassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="modal-footer">
      </form>
      </div>
    </div>
  </div>
</div>