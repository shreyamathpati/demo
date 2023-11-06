<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quotation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <?php include ("includes/header.php");?>
 <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include ("includes/sidebar.php");?>
  <!-- End Sidebar-->

  <main id="main" class="main">

<div class="row">
  
  <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Quotation</h5>

                  <div class="col-12">
                      <label for="yourName" class="form-label">Brand Name</label>
                      <input type="text" name="brandname" class="form-control" id="yourbrandName" required>
                      <div class="invalid-feedback">Please, enter your brand name!</div>
                    </div>
					
					<div class="col-12">
                      <label for="youModelno" class="form-label">Model No</label>
                      <input type="text" name="Modelno" class="form-control" id="ModelNumber" required>
                      <div class="invalid-feedback">Please, enter your Modelno!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourRate" class="form-label">Rate</label>
                      <input type="text" name="Rate" class="form-control" id="Rate" required>
                      <div class="invalid-feedback">Please, enter your Rate!</div>
                    </div>
                   
                   
                    <div class="col-12">
                      <label for="yourFinalRate" class="form-label">Final Rate</label>
                      <input type="text" name="FinalRate" class="form-control" id="FinalRate" required>
                      <div class="invalid-feedback">Please, enter your Rate!</div>
                    </div>
					
					<div class="text-center">
					  <button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
            </div>
          </div>
          
          </div>
          
          
          
          
             <!-- End floating Labels Form -->

            </div>
          </div>

       
    </section>
  </main>
 <!-- End #main -->

  <!-- ======= Footer ======= -->
   <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">-->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
	  -->
      
	<!--  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>--><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>