<?php
include_once "index.php";
?>
 
  <link rel="stylesheet" href="<?php echo ADMINURL; ?>admin_assets/dist/css/datatable.css">
   <style>
 .card
  {
      width: 1000px;
      margin-left: 300px;
      margin-top: 50px;
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
                <table id="example1"  class="table table-bordered table-striped">
                  <thead>
                  <!-- <a href='<?= base_url() ?>Admin/export_csv'><button type="button" class="btn-default" id="csv">CSV</button></a> -->
                  <tr>
                   <th>SNO</th>
                    <th>Title</th>
                    <th>Level</th>
                    <th>Parent</th>
                    <th>Image</th>
                    <th>Status</th>
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
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<!-- page script -->
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'csv','pdf'
        ]
    } );
} );
</script>
<style></style>
</body>
</html>