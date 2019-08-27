<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CEES Admin - Add Member</title>

  <?php include 'resources/nav.php'; ?>
  <?php include 'resources/footer.php'; ?>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- croppie -->
  <link rel="stylesheet" href="css/croppie.css" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php showNavBar(); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>


          <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Add New Team Memebr</h1>
            <!-- Topbar Search -->
         <!--    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form> -->

          <!-- Topbar Navbar -->
        </nav>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <form class="user" >
          <h4>Genaral Information</h4>
                <div class="panel panel-default">
                  <div class="panel-heading">Select Profile Image</div>
                  <div class="panel-body" align="center">
                      <input type="file" name="upload_image" id="upload_image" />
                      <div id="uploaded_image"></div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">First Name</label>
                    <input type="text" class="form-control form-control-user" id="FirstName" placeholder="First Name" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Last Name</label>
                    <input type="text" class="form-control form-control-user" id="LastName" placeholder="Last Name" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Designation</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="Designation" placeholder="Designation" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Contact Number</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="contact_number" placeholder="07xxxxxxxxxxx">
                  </div>
                </div>

                <hr><h4>Social Media Links</h4>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Facebook Profile Url</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="fburl" placeholder="Facebook Profile Url">
                  </div>

                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">LinkedIn Profile Url</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="linkedin_url" placeholder="LinkedIn Profile Url">
                  </div>
                
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label style="float:left;">Twitter Profile Url</label>
                    <input style="float:left;" type="text" class="form-control form-control-user" id="twitter_url" placeholder="Twitter Profile Url">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputDescription">Quote</label>
                  <textarea class="form-control" name="quote" id="quote" placeholder="Quote" required></textarea>
                </div>

                <div class="form-group">
                <label for="inputImage">Upload Event Flyer</label><br>
                <input type="file"  accept="image/*" name="inputImage">
                </div>

                <button type="submit" class="btn btn-primary">Add Event</button>
              </form>
         
        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php showFooter(); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


<div id="uploadimageModal" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Upload & Crop Image</h4>
          </div>
          <div class="modal-body">
            <div class="row">
            <div class="col-md-8 text-center">
              <div id="image_demo" style="width:200px; margin-top:30px"></div>
            </div>
            <div class="col-md-4" style="padding-top:30px;">
              <br />
              <br />
              <br/>
              <button class="btn btn-success crop_image">Crop & Upload Image</button>
          </div>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>

<script>  
$(document).ready(function(){

  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:370,
      height:370,
      type:'square' //circle
    },
    boundary:{
      width:500,
      height:500
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });

});  
</script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- croppie -->
    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/croppie.js"></script>
</body>

</html>
