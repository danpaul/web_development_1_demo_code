<?php

require(__DIR__ . "/../partials/header.php");

?>

<!-- Main Container -->
<div class="container d-flex justify-content-center align-items-center vh-100">
    <!-- Card to hold the login form -->
    <div class="card p-4 shadow-lg" style="width: 25rem;">
        <h3 class="text-center mb-4">Login</h3>

        <!-- Login Form -->
        <form method="POST" action="/demo/bootstrap-login">
            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                <!-- Small text for hints -->
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="mb-3 form-check">
                <input name="remember" type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <!-- Optional Link for Forgot Password -->
        <div class="mt-3 text-center">
            <a href="#" class="text-decoration-none">Forgot your password?</a>
        </div>
    </div>
</div>

<?php
require(__DIR__ . "/../partials/footer.php");
