<!-- LOGIN MODAL -->
    <div class="modal" id="login_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header login-modal-header">
                    <h3><i class="fas fa-unlock-alt display-4"></i> Login</h3>
                    <span class="close login-modal-close" data-dismiss="modal">&times;</span>
                </div>
                <div class="modal-body px-4 py-5">
                   <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <h4>Enter your registered mobile number to receive OTP</h4>
                    </div>
                    <form action="#" method="post">
                        <div class="form-group my-4">
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                            </div>
                            <input type="number" class="form-control" placeholder="Enter Your Registered Mobile Number" required>
                          </div>
                        </div>
                        <input type="submit" class="btn btn-block my-primary-btn" value="Send OTP"/>
                    </form>
                </div>
            </div>
        </div>
    </div>