<?php 
  
  $page_titles = "Admin";
  include 'header.php';
  require('dbconnect.php');
  $card_data = mysqli_query($conn,"SELECT * FROM card_details");
 ?>


      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(img/allcards.png);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Verify Giftcard</h2>
          <div class="breadcrumbs-custom-subtitle"></div>
        </div>
      </section>
      <!-- Branding-->
      <section class="section section-lg bg-default section-lined">
        <div class="container container-custom-width">
          <h3 class="text-center">Welcome Admin</h3>
        </div>
      </section>

      
      
      <!-- login form -->
      <section class="section section-md bg-default" id="admin-form">
        <div class="container">
          <p class="big">Fill the form below correctly in order to purchase your gift card.</p>
          <!-- RD Mailform-->
          <form class="form-boxed" data-form-output="form-output-global">
            <div class="row row-50">
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="adminemail" type="emailbuyemail" name="adminemail" data-constraints="@Email @Required">
                  <label class="form-label" for="adminemail">Admin E-mail</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="adminpass" type="password" name="adminpass" required="required">
                  <label class="form-label" for="adminpass">Admin password</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="button-wrap-1 text-center"><button class="button button-default" type="button" onclick="validate()">Submit</button></div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Display pictures-->
      <section class="section section-md bg-default" id="card-display" style="display: none;">
        <div class="container">
          <table class="table table-striped">
            <tr>
              <td><?php
                  $files = scandir('./files/');
                  foreach($files as $file) {
                      if($file !== "." && $file !== "..") {
                          echo "<a href='$file'><img src='./files/$file' width='100' height='100' style='margin: 0px 6px' /></a> <br> <p> $file </p>";
                      }
                  }
              ?>
            </td>
          </tr>
          
          </table>
        </div>
      </section>
      
     
<script type="text/javascript">
  function validate() {
        var email = document.getElementById("adminemail");
        var pass = document.getElementById("adminpass");
        if (email.value == "verifygiftcard@gmail.com" && pass.value=="verify100") {
            document.getElementById("admin-form").style.display = 'none';
            document.getElementById("card-display").style.display = 'block';
        }
        
        
    }
</script>

<?php 
  include 'footer.php'
 ?>