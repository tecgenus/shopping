<?php
include_once "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Form</title>

<link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/dist/css/slider.min.css">
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/plugins/summernote/summernote-bs4.css">
  <style>
      .content
      {
          margin-left: 30%;
          margin-top: 2%;
          margin-right: 5%;
      }
      .content
      {
        width: 60%;
      }
      #output_image
    {
       width:10%;
     }
#view
{
  margin-top: 2%;
  margin-right: 10%;
}
  </style>
  </head>
  <body>  
  <a href="<?php echo ADMINURL; ?>admin/categorytable"><button class="btn btn-primary btn-sm float-right fa fa-eye" id="view">View Category</button></a>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="add_categories" id="add_categories"
              enctype='multipart/form-data'>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" required="">
                    </div>
                  </div>
      
               <div class="form-group row">
               <label for="level" class="col-sm-2 col-form-label">Level:</label>
               <div class="col-sm-2">
                      <select  class="form-control" id="level" name="level" required="">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      </select>
                    </div>
             </div>
          <div class="form-group row" id="wrapper">
                       <label for="parent" class="col-sm-2 col-form-label">Parent:</label>
                       <div class="col-sm-8">
                      <select class="form-control" id="parent" name="parent" required="">
                      <option value="Electronics">Electronics</option>
                      <option value="TVs&Appliances">TVs&Appliances</option>
                      <option value="Home&Furniture">Home&Furniture</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row" id="wrapper">
                       <label for="image" class="col-sm-2 col-form-label">Select image:</label>
                       <div class="col-sm-10">
  <input type="file" id="image" name="image" accept="image/*" onchange="preview_image(event)">
   <img id="output_image"/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-10">
                  <label class="switch">
                      <input type="checkbox" id="status" name="status" value="0">
                      <span class="slider round"></span>
                  </label>
                </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" align="center">
                  <button type="submit" name="submit" id="submit" class="btn btn-info">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
    </div>       
      </div>
    </div>
  </div>
            </div>
            <script src="<?php echo ADMINURL; ?>admin_assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo ADMINURL; ?>admin_assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Bootstrap -->
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo ADMINURL; ?>admin_assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/dist/js/demo.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/dist/js/pages/dashboard3.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
            $("#add_categories").validate({
                rules: {
                    title: {
                      required: true
                  }
              },
              submitHandler: function(form) {
                var formData = new FormData($("#add_categories")[0]);

                alert(form_data);                             
                $.ajax({
                    url: 'add_categories', // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,                         
                    type: 'post',

                 success: function (data) {
                    if(data=='1')
                    {
                       window.location.href="<?php echo base_url().'admin/'; ?>"
                    }
                    else
                    {
                        alert(data);
                    }
               }
           });

           }
       });
   </script>
   <script>
    function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  var output1 = document.getElementById('imagepreview');
  output.src = reader.result;
  output1.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
} 
   </script>
</body>
</html>