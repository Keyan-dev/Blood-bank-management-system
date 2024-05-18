<div class="modal fade" id="modal-bloodbank" tabindex="-1" role="dialog" aria-labelledby="modal-bloodbank-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-bloodbank-label">BloodBank Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px; height: 50px; font-size: 30px; color: red;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center" style="width:90%;">
                <form role="form" action="BloodBank/" method="post" class="w-100" style="max-width: 395px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px;">
                    <div class="form-group w-100">
                        <label for="form-username">BloodBank ID</label>
                        <input type="text" name="bloodid" placeholder="BloodBank ID" class="form-control" id="form-username" required />
                    </div>
                    <div class="form-group w-100">
                        <label for="form-password">Password</label>
                        <input type="password" name="bloodpass" placeholder="Password" class="form-control" id="form-password" required />
                    </div>
                    <div class="d-flex justify-content-between w-100 flex-column">
                        <a href="#" data-toggle="modal" data-target="#adminforget">Forgot password?</a>
                        <a href="Reg/registerbloodbank.php">Don't have an Account?</a>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger btn-block" name="bloodbankbtn">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="adminforget" tabindex="-1" role="dialog" aria-labelledby="modal-reset-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-reset-label">Reset Password</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px; height: 50px; font-size: 30px; color: red;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center" style="width:90%;">
                <form role="form" action="Reg/resetpassbb.php" method="post" class="w-100" style="max-width: 395px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px;">
                    <div class="form-group w-100" >
                        <label for="form-username">BloodBank Id</label>
                        <input type="number" name="id" placeholder="Bloodbank id" class="form-control" id="form-username" required>
                    </div>
                    <div class="form-group w-100" >
                        <label for="form-password">BloodBank Name</label>
                        <input type="text" name="name" placeholder="Bloodbank name" class="form-control" id="form-password">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-danger btn-block" name="resetbtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
