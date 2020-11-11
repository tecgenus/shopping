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
  <!-- Google Font: Source Sans Pro -->
  <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
  <style type="text/css">
    #output_image
    {
       width:10%;
     }
     .author b
     {
      color: blue;
     }
  </style>
  </head>
  <body>
<!-- Content Wrapper. Contains page content -->
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
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="add_data" id="add_data"
              enctype='multipart/form-data'>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title" onkeyup="EnableDisable(this)" required>
                    </div>
                  </div>
      
               <div class="form-group row">
               <label for="description" class="col-sm-2 col-form-label">Description:</label>
              <div class="col-sm-10">
                <textarea class="textarea" id="description" name="description" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
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
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="publish" onclick="onCheck(this);">
                        <label class="form-check-label" for="publish"><b>Publish</b></label>
                      </div>
                    </div>
                  </div>
                <!--  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-10">
                  <label class="switch">
                      <input type="checkbox" id="status">
                      <span class="slider round"></span>
                  </label>
                </div>
                </div>-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer" align="center">
                  <button type="button" name="preview" id="preview" class="btn btn-info far fa-eye" data-toggle="modal" data-target="#myModal" disabled="disabled"/>Preview</button>
                </div>
                <!-- /.card-footer -->
              </form>
               <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><b>Preview</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
               <img id="imagepreview" style="height: 80%; width: 80%;">
       </div>
       <div class="col-sm-6">
         <h3 id="tit"></h3>
         <div class="clearfix">
                  <div class="float-left">Created by: <b>Admin</b></div>
<input type="date" class="float-right" name="date"  id="date" onchange="checkDate(this);">
                </div><br>
         <div class="Container">
          <p id="des"></p>
         </div>
       </div>
        </div>
        </div>
        <!-- Modal footer -->
        <div class="card-footer" align="center">
          <button type="button" id="sub" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Edit Again</button>
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
  $(function () {
    // Summernote
    $('.textarea').summernote()
  });
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

function onCheck(checkbox) {
  var dateElement = document.getElementById('date');
  dateElement.disabled = checkbox.checked;
  if (checkbox.checked) {
    //dateElement.value = new Date().toISOString().substr(0, 10);
    dateElement.valueAsDate = new Date();
  }
  else
    dateElement.value = '';
}

  $('#preview').click(function() {
     /* when the button in the form, display the entered values in the modal */
    $('#tit').html($('#title').val());
    $('#des').html($('#description').val());
});
  $('#sub').click(function () {
    
    $('#add_data').submit();
});
  $(document).ready(function() {
    $("#add_data").validate({
        rules: {
            title: {
               required: {
        depends:function(){
            $(this).val($.trim($(this).val()));
            return true;
        }
    },
            },
            description: {
               required: {
                 depends:function(){
            $(this).val($.trim($(this).val()));
            return true;
            },
             minlength: 200,
          },
                },
        },
        messages: {
            title: "Please specify your title",
            description: "Please enter the minimum 200 words",

        }
    })

    $('#preview').click(function() {
        $("#add_data").valid();
    });
});

 function EnableDisable(title) {
        //Reference the Button.
        var btnSubmit = document.getElementById("preview");
 
        //Verify the TextBox value.
        if (title.value.trim() != "") {
            //Enable the TextBox when TextBox has value.
            btnSubmit.disabled = false;
        } else {
            //Disable the TextBox when TextBox is empty.
            btnSubmit.disabled = true;
        }
    }; 

</script>
</body>
</html>