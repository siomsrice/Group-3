<style>
    <?php
    include 'public/style.css';
    ?>
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6 loginbox">
            <div class="login-box well">
            <form action="" method="POST" class="" id="myForm" style="height:260px" enctype="multipart/form-data">
                        <legend>Sign In</legend>
                        <div class="form-group has-feedback">
                            <label for="username-email">E-mail or Username</label>
                            <input name="username" id="username-email" placeholder="E-mail or Username" type="text" class="form-control"  />
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="password">Password</label>
                            <input name="password" id="password" value='' placeholder="Password " type="password" class="form-control" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="input-group">
                        </div>
                        <div class="col-xs-4 loginbutton">
                            <input type="submit" class="btn btn-primary btn-block btn-flat" value="Login" />
                        </div>
                        <div></div>
                    </form>
                
            </div>
        </div>
       
    </div>