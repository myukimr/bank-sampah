
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy;<a>Bank Sampah</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.js') ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/admin/plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/dist/js/demo.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/dist/js/pages/dashboard3.js') ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<script>
    $(document).ready(function () {
      $('#tabel').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });

      if (window.location.pathname == "/bellecrown/admin/pemesanan") {
        $("#navPemesanan").addClass("active");
      }else if (window.location.pathname == "/bellecrown/admin/home" || window.location.pathname == "/bellecrown/admin/" ){
        $("#navHome").addClass("active");
      }else{
        $("#navData").addClass("active");
      }
    });
</script>
</body>
</html>