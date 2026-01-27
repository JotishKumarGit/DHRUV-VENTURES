  <!-- Footer -->
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="footer-section">
                      <h5><i class="fas fa-globe"></i> DHRUV VENTURES</h5>
                      <p class="mt-3">Your trusted partner in Export, Import and Premium Supplies. We provide best
                          quality products to global markets.</p>
                      <div class="social-icons mt-4">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a href="#"><i class="fab fa-whatsapp"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="footer-section">
                      <h5>Quick Links</h5>
                      <a href="#home" class="footer-link">Home</a>
                      <a href="#about" class="footer-link">About Us</a>
                      <a href="#products" class="footer-link">Products</a>
                      <a href="#services" class="footer-link">Services</a>
                      <a href="#gallery" class="footer-link">Gallery</a>
                      <a href="#contact" class="footer-link">Contact</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="footer-section">
                      <h5>Our Products</h5>
                      <a href="#" class="footer-link">Premium Rice</a>
                      <a href="#" class="footer-link">Fresh Fruits</a>
                      <a href="#" class="footer-link">Ladies Handbags</a>
                      <a href="#" class="footer-link">Industrial Batteries</a>
                      <a href="#" class="footer-link">Inverters</a>
                      <a href="#" class="footer-link">Solar Panels</a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="footer-section">
                      <h5>Contact Info</h5>
                      <p><i class="fas fa-map-marker-alt me-2"></i> Dombivli East, Maharashtra</p>
                      <p><i class="fas fa-phone me-2"></i> +91-9892117648</p>
                      <p><i class="fas fa-phone me-2"></i> +91-9930948180</p>
                      <p><i class="fas fa-envelope me-2"></i> info@dhruvventures.com</p>
                      <p><i class="fas fa-globe me-2"></i> India | Dubai | Thailand | Iran</p>
                  </div>
              </div>
          </div>
          <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
          <div class="row">
              <div class="col-md-6 text-center text-md-start">
                  <p class="mb-0">&copy; 2024 DHRUV VENTURES. All Rights Reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  <p class="mb-0">Designed By <i class="fas fa-heart" style="color: var(--secondary);"></i> <a
                          href="https://trade4export.com">Trade4Export</a></p>
              </div>
          </div>
      </div>
  </footer>

  <!-- Enquiry Modal -->
  <div class="modal fade" id="enquiryModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-md">
          <div class="modal-content">

              <div class="modal-header">
                  <h5 class="modal-title">Enquiry Form</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <div class="modal-body">
                  <form id="enquiryForm">

                      <div class="mb-3">
                          <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                      </div>

                      <div class="mb-3">
                          <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                      </div>

                      <div class="mb-3">
                          <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number" required>
                      </div>

                      <div class="mb-3">
                          <select class="form-select" id="subject" required>
                              <option value="">Select Subject</option>
                              <option>General Enquiry</option>
                              <option>Product Information</option>
                              <option>Pricing</option>
                              <option>Support</option>
                          </select>
                      </div>

                      <div class="mb-3">
                          <textarea class="form-control" id="message" rows="3" placeholder="Your Message"
                              required></textarea>
                      </div>

                      <button type="submit" class="btn btn-success w-100">
                          Submit on WhatsApp
                      </button>

                  </form>
              </div>

          </div>
      </div>
  </div>

  <!-- WhatsApp Script -->
  <script>
      document.getElementById("enquiryForm").addEventListener("submit", function(e) {
          e.preventDefault();

          let name = document.getElementById("name").value;
          let email = document.getElementById("email").value;
          let phone = document.getElementById("phone").value;
          let subject = document.getElementById("subject").value;
          let message = document.getElementById("message").value;

          let whatsappNumber = "919892117648";

          let whatsappMessage =
              `Hello, I have an enquiry:%0A%0A` +
              `Name: ${name}%0A` +
              `Email: ${email}%0A` +
              `Phone: ${phone}%0A` +
              `Subject: ${subject}%0A` +
              `Message: ${message}`;

          let whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

          window.open(whatsappURL, "_blank");
      });
  </script>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./assets/script.js"></script>
  </body>

  </html>