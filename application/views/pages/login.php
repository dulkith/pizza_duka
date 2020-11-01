<!-- PIZZA BANNE DETAILS -->
<section class="home_piza_banner">
    <img class="img-fluid" alt="banner" src="<?php echo base_url("assets/images/sub_banner_piza_kade.jpg"); ?>">
</section>

<section class="bright py-5">
    <div class="container">
        <div class="text-center">
            <h1>Login</h1>
            <p class="font-weight-light">Please enter your details below to login</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 mt-3">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="">
                        <div class="valid-feedback">Valid.</div>
                        <div class="valid-feedback">
                            Please fill out this field.
                        </div>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                            placeholder="">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-check mb-5">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </div>
                    <div class="mt-2  button-holder">
                        <button type="submit" class="btn btn-primary btn-lg text-uppercase">login & build your
                            order</button>
                        <div class="signup mt-3"><a href="#">Sign Up Now</a></div>
                    </div>
                </form>
            </div>
            <div class="login-promotion col-4"></div>
        </div>

    </div>
</section>
