<!DOCTYPE html>


<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login</title>
   
    <?php include "./header.php" ?>


  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                    
                      <img src="../assets/img/logo/logo-icon.png" width="200" height="90">
                    
                  </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome</h4>
              <p class="mb-4">Graduate School Mahasarakham University</p>

              <form id="my-form" class="mb-3 " action="javascript:void(0);" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="user"
                    name="user"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="pass"
                      class="form-control"
                      name="pass"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  
				  <input type="submit"  class="btn btn-primary d-grid w-100" value="Sign in" id="hash-it" >
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="./auth-register-basic.php">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->



  <!-- Footer -->
  <?php include "./footer.php" ?>
            <!-- / Footer -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script async deifer src="https://buttons.github.io/buttons.js"></script>
	  	  <!-- <script src="../Captcha-Plugin/src/jquery-3.2.1.slim.min.js"></script> -->
	  <script src="../Captcha-Plugin/src/jquery.captcha.basic.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	    <script type="text/javascript">
      /* ===============
       *  DEMO EXAMPLE
       * =============== */
      $(document).ready(function () {

          $('#my-form').captcha();
          $( "#hash-it" ).click(function() {
		var user = $( "#user" ).val();
		var pass = $( "#pass" ).val();
		var submit = $( "#hash-it" ).val();
		 alert(submit);

		//alert(user+pass);
		if ( user == "" ) {
			alert( "Please Username" );
			$( "#user" ).focus();
			return false;
		}
		if ( pass == "" ) {
			alert( "Please Password" );
			$( "#pass" ).focus();
			return false;
		}
		
		// สำหรับนิสิต
		if ( user !== "" && pass !== "" ) {
			$.post( "check-login.php", {
				user: user,
				pass: pass,
				submit:submit
			}, function ( data ) {
				 alert(data);
				if ( data == 1 ) {
					setTimeout( function () {
						window.location.href = 'pages-account-settings-account.php';
					}, 1000 );
				} else if ( data == 2 ) {

					setTimeout( function () {
                        alert("Login successfully.");
						window.location.href = 'advisor.php';
                        
					}, 1000 );
				} else if ( data == 3 ) {

					setTimeout( function () {
						window.location.href = 'staff.php';
					}, 1000 );
				
				}
				 else {
					alert( "ไม่สามารถ login เข้าสู่ระบบได้ กรุณาตรวจสอบ Username และ Password อีกครั้ง เป็นตัวเดียวกันกับ ระบบลงทะเบียน reg.msu.ac.th" );
				}
       
			} );
      

		}else{
      console.log(0);
    }

  });

      });
    
    
  </script>
  </body>
</html>
