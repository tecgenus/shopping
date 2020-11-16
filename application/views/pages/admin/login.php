<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row " style="width: 50%; margin: 0 auto;">
                <!-- <div class="col-md-6 login-form-1">
                    <h3>Login for Form 1</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div> -->
                <div class="col-md-12 login-form-2">
                    <h3>ADMIN LOGIN</h3>
                    <form name="login_form" id="login_form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User Name *" value="admin" required="" name="user_name" id="user_name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" value="12345" required="" name="password" id="password">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <!-- <div class="form-group text-center">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
        <style>
            .login-container{
                margin-top: 6%;
                margin-bottom: 6%;
            }
            .login-form-1{
                padding: 5%;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .login-form-1 h3{
                text-align: center;
                color: #333;
            }
            .login-form-2{
                padding: 5%;
                background: #2196F3;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
                /*rgb(0 123 255 / 50%)*/
            }
            .login-form-2 h3{
                text-align: center;
                color: #fff;
            }
            .login-container form{
                padding: 10%;
            }
            .btnSubmit
            {
                width: 50%;
                border-radius: 1rem;
                padding: 1.5%;
                border: none;
                cursor: pointer;
            }
            .login-form-1 .btnSubmit{
                font-weight: 600;
                color: #fff;
                background-color: #0062cc;
            }
            .login-form-2 .btnSubmit{
                font-weight: 600;
                color: #0062cc;
                background-color: #fff;
            }
            .login-form-2 .ForgetPwd{
                color: #fff;
                font-weight: 600;
                text-decoration: none;
            }
            .login-form-1 .ForgetPwd{
                color: #0062cc;
                font-weight: 600;
                text-decoration: none;
            }

            .login-form-2 label.error {
                color: #ffffff;
            }

        </style>

        <script>
            $("#login_form").validate({
                rules: {
                    user_name: {
                      required: true
                  },
                  password: {
                      required: true
                  }
              },
              submitHandler: function(form) {

               $.ajax({
                 type: 'post',
                 url: 'authenticate',
                 data: $('form').serialize(),
                 success: function (data) {
                    if(data=='1')
                    {
                       window.location.href="<?php echo base_url().'admin/'; ?>"
                    }
                    else
                    {
                        alert(data);
                    }
               }
           });

           }
       });
   </script>