<?php
include_once "index.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Category Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/dist/css/adminlte.min.css">
  <style>
  .card
  {
      width: 80%;
      margin-left: 20%;
      margin-top: 5%;
      margin-right: 5%;
  }
  #add
{
  margin-top: 2%;
  margin-right: 10%;
  padding: 5px;
}
  </style>
</head>
<body class="hold-transition sidebar-mini">

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Category Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <a href='<?= base_url() ?>Admin/export_csv'><button type="button" class="btn-default" id="csv">CSV</button></a>
                  <a href='<?= base_url() ?>Admin/mypdf'><button type="button" class="btn-default" id="pdf">PDF</button></a>
                  <tr>
                   <th>SNO</th>
                    <th>Title</th>
                    <th>Level</th>
                    <th>Parent</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i=1;
                    foreach ($tab_value as $key => $value) {?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $value['title']; ?></td>
                    <td><?php echo $value['level']; ?></td>
                    <td><?php echo $value['parent']; ?></td>
                    <td><?php echo $value['image']; ?></td>
                    <td>
                    <?php 
                        if ($value['status']==1)
                        {
                          echo "<p>Active</p>";
                        }
                        else
                        {
                          echo "<p>Inactive</p>";
                        }
                        ?>
                    </td>
                    </td>
                    <td><button class="btn btn-light btn-sm far fa-edit"></button>
                    <button class="btn btn-light btn-sm far fa-trash-alt"></button>
                    <label class="switch">
                      <input type="checkbox" id="status" name="status" value="0">
                      <span class="slider round "></span>
                  </label>
                    </td>
                    
                    </tr>

                      
                   <?php 
                  $i++; 
                  }
                  
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  <script src="<?php echo ADMINURL; ?>admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo ADMINURL; ?>admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ADMINURL; ?>admin_assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo ADMINURL; ?>admin_assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  // $(document).ready(function(){
	// 		$('#example1').DataTable({
	// 			"ajax" : "<?php echo base_url('Admin/categories_display'); ?>",
	// 			"order": [],
	// 		});
	// 	});
    
</script>
</body>
</html>