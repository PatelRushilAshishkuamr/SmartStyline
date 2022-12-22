<!DOCTYPE html>
<html>
<head>
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
</head>
<body>

   
  <!-- Header -->
  <?php
  include('header1.php');
  ?>
  <!-- Start main-content -->
  <div class="main-content-area">
    <!-- Section: page title -->
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Contact</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="#" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Contact us</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: home End -->

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-lg-4">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Phone</h5>
                  <div class="content"><a href="tel:+91-8200608347">+91-8200608347</a></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-043-email-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Email</h5>
                  <div class="content"><a href="mailto:smartstylin0123@gmail.com">smartstylin0123@gmail.com</a></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-025-world"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Address</h5>
                  <div class="content">S.G.High way,Ahmedabad</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-047-location"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Gujrat Address</h5>
                  <div class="content">Surat</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <h2 class="mt-0 mb-0">Interested in discussing?</h2>
            <p class="font-size-20">Active & Ready to use Contact Form!</p>
            <!-- Contact Form -->
            <form  class=""method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Name <small>*</small></label>
                    <input name="contact_name" class="form-control" type="text" placeholder="Enter Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Email <small>*</small></label>
                    <input name="email_id" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-12">
                  <label for="form_username_email">Mobile number</label>
                  <input id="form_username_email" name="mobile_number" class="form-control" type="text">
                </div>
              </div>

              <div class="mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control required" rows="8" placeholder="Enter Message"></textarea>
              </div>
              <div class="mb-3">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="" name="submit">Send your message</button>
                <button type="reset" class="btn btn-theme-colored2 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" name="btn2">Reset</button>
              </div>
            </form>
<?php
if (isset($_POST['submit'])) {
  $contact_name=$_POST['contact_name'];
  $email_id=$_POST['email_id'];
  $mobile_number=$_POST['mobile_number'];
  $message=$_POST['message'];

  $sql= "insert into contact (contact_name,email_id,mobile_number,message) values ('$contact_name','$email_id','$mobile_number','$message')";
  $result = mysqli_query($con,$sql);

  if ($result) {
    echo '<script>alert("Record Inserted");</script>';
    echo '<script>window.location.href="index.php";</script>';
  }
  else{
    echo '<script>alert("Data Not Update");</script>';
  }
}
?>
            <!-- Contact Form Validation-->
            <script>
              (function($) {
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              })(jQuery);
            </script>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <!-- Google Map HTML Codes -->
         <div class="mapouter"><div class="gmap_canvas"><iframe width="2000" height="709" id="gmap_canvas" src="https://maps.google.com/maps?q=tirupati%20metro%20mall%20visnagar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:709px;width:2000px;}</style><a href="https://www.embedgooglemap.net">embed google maps into website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:709px;width:2000px;}</style></div></div>
        </div>
      </div>
    </section>
    <!-- End Divider -->
  </div>
  <!-- end main-content -->

  <!-- Footer -->
<?php
include('footer.php');
?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2016/haircare-html/haircare-html-b5/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Mar 2022 06:51:18 GMT -->
</html>