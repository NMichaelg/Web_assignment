<style>
  <?php include "login_reg.css" ?>
</style>
<script src="ultis/auth.js" defer></script>
<div class="container">
      <!-- Logo/Title Section -->
      <div class="header">
      <h1>Welcome to CareerLinkUp</h1>
      <p>Please login or register to continue.</p>
    </div>
      <!-- Form Wrapper -->
      <div class="form-container">
        <!-- Login Form -->
        <div class="form" id="login-form">
          <h2>Login</h2>
          <form action="/login" method="POST" id="submit-login">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />

            <button type="submit">Login</button>
            <p style="margin-top: 20px">
              Don’t have an account?
              <a href="#register-form" onclick="toggleForm('register')"
                >Register here</a
              >
            </p>
          </form>
        </div>

        <!-- Register Form -->
        <div class="form" id="register-form" style="display: none">
          <h2>Register</h2>
          <form action="/register" method="POST">
            <label for="new-username">Username</label>
            <input type="text" id="new-username" name="new-username" required />

            <label for="new-password">Password</label>
            <input
              type="password"
              id="new-password"
              name="new-password"
              required
            />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

            <button type="submit">Register</button>
            <p style="margin-top: 20px">
              Already have an account?
              <a href="#register-form" onclick="toggleForm('login')"
                >Login here</a
              >
            </p>
          </form>
        </div>
      </div>
    </div>