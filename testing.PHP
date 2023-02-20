<html>
<head>
</head>
<body>
<?php
        require_once( "\logsys\examples\two-step-login\config.php");
        require_once( "\logsys\examples\two-step-login\change.php");
        require_once( "\logsys\examples\two-step-login\home.php");
        require_once( "\logsys\examples\two-step-login\index.php");
        require_once( "\logsys\examples\two-step-login\login.php");
        require_once( "\logsys\examples\two-step-login\logout.php");
        require_once( "\logsys\examples\two-step-login\LS.php");
        require_once( "\logsys\examples\two-step-login\manage-devices.php");
        require_once( "\logsys\examples\two-step-login\register.php");
        require_once( "\logsys\examples\two-step-login\reset.php");
        require_once( "\logsys\examples\two-step-login\status.php");

    ?>
  <div style="height:100px;width:400px;border:solid 2px orange;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">
    <p style="height:200px;">
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....<br /><br />
      Scroll box automatic set in scroll in vertical scrollbar....
    </p>
  </div>
                <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">Loging In</h2>
                    <h3 class="section-subheading text-muted">Login to WRWoods Information Solutions Inc..</h3>
            </div>
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Login')">Login</button>
                <button class="tablinks" onclick="openCity(event, 'Register')">Register for a New Accout.</button>
                <button class="tablinks" onclick="openCity(event, 'Password')">Forgot/Reset Password</button>
                <button class="tablinks" onclick="openCity(event, 'Logout')">Logout</button>
            </div>
            <!-- Tab content -->
            <div id="Login" class="tabcontent">
            </div>           
            <div class="content">
            <h1>Log In</h1>
            l   <p>Don't have an account ?</p>
                <h1class="section-subheading text-muted">Register for a New Accout.</h1>
                <?php
    #                        register();
                ?>        
                   </div>
            </div>
            <div id="Password" class="tabcontent">
                 <div class="content">
                    <h1 class="section-subheading text-muted">Forgot/Reset Password</h1>
                    <?php
   #                       reset();
                     ?>
               </div>
            </div>
            
            <div id="Logout" class="tabcontent">

            <div class="content">
                <h1 class="section-subheading text-muted">Log Out</h1>
                 logout ();
            </div>

    </body>
</html>