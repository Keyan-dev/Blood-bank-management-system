<div class="modal fade" id="modal-admin" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-login-label">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center" style="width:90%;">
                <form role="form" action="Admin/" method="post" style="max-width: 395px;display: flex;flex-direction: column;align-items: center;justify-content: center;width: 100%;gap: 5px;">
                    <div class="form-group w-100">
                        <label for="form-username">Username</label>
                        <input type="text" name="Adminusername" placeholder="Username" class="form-control" id="form-username" required>
                    </div>
                    <div class="form-group w-100">
                        <label for="form-password">Password</label>
                        <input type="password" name="Adminpass" placeholder="Password" class="form-control" id="form-password" required>
                    </div>
					                    <div class="mt-3">
                    <button type="submit" class="btn btn-danger btn-block" name="adminbtn">Sign in</button>
					                    </div>
				</form>
            </div>
        </div>
    </div>
</div>
