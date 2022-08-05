<?php 
  
  $page_titles = "My Cards";
  include 'header.php';
  // require_once "dbconnect.php"
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
          <h3 class="text-center">Verify Gift Card Online</h3>
          
          <!-- <div class="button-wrap-1 text-center"><a class="button button-default" href="#">All projects</a></div> -->
        </div>
      </section>
      <!-- Upload Card-->
      <section class="section section-md bg-default">
        <div class="container">
          <p class="big">Click the button to confirm your card status.</p>
          <!-- RD Mailform-->
          <form class="form-boxed" data-form-output="form-output-global" data-form-type="card_upload" method="post" action="save_file_back.php" enctype="multipart/form-data">
            <div class="row row-50">
                            
              <div class="col-md-12">
                <div class="button-wrap-1 text-center"><button class="button button-default" type="button" name="save" onclick="swal('Congratulations!', 'Your card have been validated successfully!', 'success');">Check card status</button></div>
              </div>
              <!-- swal('Card upload successful. We will notify you of your card verification status via your email') -->
            </div>
          </form>
        </div>
      </section>
     

<?php 
  include 'footer.php'
 ?>