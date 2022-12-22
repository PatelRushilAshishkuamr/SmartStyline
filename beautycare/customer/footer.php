  <footer id="footer" class="footer bg-img-center bg-img-cover layer-overlay overlay-dark-9" data-tm-bg-img="images/bg/bg7.jpg">
    <div class="footer-widget-area pt-120">
      <div class="container pb-40">
        <div class="row">
          <div class="col-md-12 col-lg-3">
            <div class="tm-widget-contact-info contact-info-style1" data-tm-margin-top="-22">
              <div class="thumb" data-tm-margin-bottom="48">
                <img alt="Logo" style="width:100px; height: 100px;" src="images/smartlogo.png">
              </div>
              <ul class="mb-30">
                <li class="contact-phone">
                  <div class="icon"><img src="images/icons/c1.png" alt="Icon"></div>
                  <div class="text">
                    <a href="tel:+91-6359822773">6359822773</a>
                    <span>Mobile Number</span>
                  </div>
                </li>
                <li class="contact-email">
                  <div class="icon"><img src="images/icons/c2.png" alt="Icon"></div>
                  <div class="text">
                    <a href="mailto:info@yourdomain.com">smartstylin72@gmail.com</a>
                    <span>Email address</span>
                  </div>
                </li>
                <li class="contact-address border-0">
                  <div class="icon"><img src="images/icons/c3.png" alt="Icon"></div>
                  <div class="text"><span class="font-size-15 text-white">Ahmedabad</span><span>Visit us</span></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="widget widget_nav_menu ml-25">
              <h4 class="widget-title">Links</h4>
              <div class="menu-footer-page-list">
                <ul id="footer-page-list" class="menu">
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="package.php">Package</a></li>
                  <li><a href="course.php">Course</a></li>
                  <li><a href="menu_list.php">Menu List</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="widget">
              <h4 class="widget-title mb-40">News</h4>
              <div class="latest-posts pt-2">
                <article class="post clearfix pb-0 mb-40">
                  <a class="post-thumb" href="#"><img src="images/blog/h1.png" alt="Image" style="height: 100px; width: 80px;"></a>
                  <div class="post-right">
                    <p class="post-title m-0">All product is very good</p>
                  </div>
                </article>
                <article class="post clearfix pb-0">
                  <a class="post-thumb" href="#"><img src="images/blog/h2.png" alt="Image" style="height: 100px; width: 80px;"></a>
                  <div class="post-right">
                    <p class="post-title m-0">Packages in very good </p>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-3">
            <div class="widget contact-info contact-info-style1">
              <h4 class="widget-title mb-40">Newsletter</h4>
              <p class="description mb-40 font-size-15">Sign up now to get daily latest news & updates from us</p>
              <!-- Mailchimp Subscription Form-->
              <form id="mailchimp-subscription-form10" class="newsletter-form cp-newsletter m-0 p-0">
                
              </form>

              <!-- Mailchimp Subscription Form Validation-->
              <script>
                (function($) {
                  $('#mailchimp-subscription-form10').ajaxChimp({
                      callback: mailChimpCallBack,
                      url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });

                  function mailChimpCallBack(resp) {
                      // Hide any previous response text
                      var $mailchimpform = $('#mailchimp-subscription-form10'),
                          $response = '';
                      $mailchimpform.children(".alert").remove();
                      if (resp.result === 'success') {
                          $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      } else if (resp.result === 'error') {
                          $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      }
                      $mailchimpform.prepend($response);
                  }
                })(jQuery);
              </script>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer-bottom-style1">
                <div class="footer-paragraph font-size-15">Beauty Care © Copyright 2022 All Rights Reserved</div>
                <div class="widget widget-social-list-custom clearfix mb-0">
                  <ul class="styled-icons icon-theme-colored1">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>




  