<?php 
include 'header.php';
?>
  <main id="main" class="internal">
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Empreus Technologies - Your Handy Assistant Always<br>Empreus as a forum which brings together a committee of employers and employees dealing with corporate affairs, to get an instant solution.</p>
        </div>

        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>#147, 3rd Floor, 5th cross, 5th Main, 60ft road,
                      Koramangala, Bengaluru, Karnataka 560096.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+91 80 4371 3731</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@empreustechnologies.com">info@empreustechnologies.com</a></p>
            </div>
          </div>
        </div>
        <div class="row" style="background: url(assets/images/about-bg.jpg);padding: 20px;border-radius: 4px;">
        <div class="col-md-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15554.188827303287!2d77.619946!3d12.9367977!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x757a12efa3f8911f!2sEmpreus%20Technologies!5e0!3m2!1sen!2sin!4v1591272123430!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="col-md-7">
          <div class="form" style="background: #fff;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include 'footer.php'; ?>