<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="new-container">
        <?php echo form_open('auth', 'class="new-form-signin text-center"');?>
        <h2 class="new-form-signin-heading">Welcome to the admin page</h2>
        
        <!-- Swap the position of username and password inputs -->
        <label for="inputEmail" class="new-sr-only">Username:</label>
        <input type="text" name="username" class="new-form-control mb-3" placeholder="Your Username" required autofocus>

        <label for="inputPassword" class="new-sr-only">Password:</label>
        <input type="password" name="password" id="inputPassword" class="new-form-control mb-2" placeholder="Your Password" required>
        <!-- End of swap -->

        <button class="new-btn btn-sm btn-primary btn-block" type="submit">Sign In</button>
        <p class='new-mt-2 new-text-danger'><?php echo $errmsg ?></p>
        </form>
    </div>
</div>
