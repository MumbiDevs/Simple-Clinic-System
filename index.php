<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mwangaza Day Care</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
   <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> WELCOME TO MWANGAZA DAY CARE
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> We Treat, God Heals
      </div>
    </div>
  </div>

   

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="">

        <div class="section-title">
          
          <p></p>
        </div>
 
        <form action="contoller.php" method="POST">
          <div class="row">
            <div class="col-md-6 form-group">
			<h4>Patient Details</h4>
              <input type="text" name="fname" class="form-control" id="fname" placeholder="Patient's Name" required><br />
			  <input type="number" class="form-control" name="age" id="age" placeholder="Patient's Age" required><br />
			  <input type="text" class="form-control" name="phone" id="phone" placeholder="Patient's Phone" required><br />
			  <input type="text" class="form-control" name="res" id="res" placeholder="Patient's Residence" required><br />
			  
              <select name="gender" id="gender" class="form-select">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select><br />
            
            </div>
            <div class="col-md-3 form-group mt-3 mt-md-0">
             <h4>Vitals Check</h4>
              <input type="text" name="temp" class="form-control" id="temp" placeholder="Temp" ><br />
			  <input type="text" class="form-control" name="pulse" id="pulse" placeholder="Pulse" ><br />
			  <input type="text" class="form-control" name="bp" id="bp" placeholder="BP" ><br />
			  </div>
			<div class="col-md-3 form-group mt-3 mt-md-0">
			<h4>_</h4>
			  <input type="text" class="form-control" name="r" id="r" placeholder="R" ><br />
			  <input type="text" class="form-control" name="spo" id="spo" placeholder="SPO2" ><br />
			  <input type="text" class="form-control" name="bs" id="bs" placeholder="Blood Sugar"><br />
            </div> 
          </div>
		  
         <div class="row">
		<div class="col-md-6 form-group mt-3 mt-md-0">
             <label for="consult">Consultation</label><br />
			<textarea id="consult" name="consult" rows="5" cols="100"></textarea>
            </div> 
          </div>
          <br />
          <div><input type="submit" class="text-center" class="btnRegister" value="Save and New"></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact"  style="background-color:lightcyan;">
     
     <div class="container">
	
        <h4>Patient History Files</h4><br />
		
		<b>Search the table
        <input id="gfg" type="text" placeholder="Search here">
    </b>
	<br /><br />
<table class="table">
    <thead>
        <tr>
        <th>Full Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Gender</th>
		 <th>Temp</th>
		  <th>Pulse</th>
		   <th>BP</th>
		    <th>R</th>
			 <th>SPO</th>
			  <th>BS</th>
			   <th>History</th>

    </tr>
    </thead>
    <tbody id="geeks">
        <?php
				
		$conn = new mysqli("localhost", "root", "", "dbs");
                $sql = "SELECT * FROM patient_details";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['temp']; ?></td>
                    <td><?php echo $row['pulse']; ?></td>
					<td><?php echo $row['bp']; ?></td>
					<td><?php echo $row['r']; ?></td>
					<td><?php echo $row['spo']; ?></td>
					<td><?php echo $row['bs']; ?></td>
					<td><?php echo $row['consult']; ?></td>
                    </tr>
        <?php       }
            }
        ?>
    </tbody>
</table>

<script>
        $(document).ready(function () {
            $("#gfg").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#geeks tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2024 <strong><span>Mwangaza Day Care</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="#">Raychthedev</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>