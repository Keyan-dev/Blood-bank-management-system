<div class="modal fade" id="myModal1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" style="overflow-y: hidden !important;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-login-label">Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px;height: 50px;font-size: 30px;color: red;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center" style="width:90%;">
                <form role="form" action="User/" method="post" class="w-100" style="max-width: 395px;display: flex;flex-direction: column;align-items: center;justify-content: center;width: 100%;gap: 5px;">
                    <div class="form-group w-100">
                        <label for="form-username">Email Id</label>
                        <input type="email" name="username" placeholder="Email Id" class="form-control" id="form-username" required />
                    </div>
                    <div class="form-group w-100">
                        <label for="form-password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" id="form-password" required />
                    </div>
                    <div class="d-flex justify-content-between w-100 flex-column">
                        <a href="#" data-toggle="modal" data-target="#userforget">Forgot password?</a>
                        <a href="Reg/registration.php">Don't have an account?</a>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger btn-block" name="usrbtn">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="userforget" tabindex="-1" role="dialog" aria-labelledby="modal-reset-label" aria-hidden="true" style="overflow-y: hidden !important;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-reset-label">Reset Password</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px; height: 50px; font-size: 30px; color: red;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center" style="width:90%;">
                <form role="form" action="Reg/resetpass.php" method="post" class="w-100" style="max-width: 395px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px;">
                    <div class="form-group w-100" >
                        <label for="form-username">Email Id</label>
                        <input type="email" name="username" placeholder="Email Id" class="form-control" id="form-username" required />
                    </div>
                    <div class="form-group w-100">
                        <label for="form-dob">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="form-dob" />
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger btn-block" name="resetbtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
