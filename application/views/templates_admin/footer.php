      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CV.Rabadi Multi Guna 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('') ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables -->
  <script src="<?php echo base_url();?>assets/css/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/css/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url();?>assets/css/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url();?>assets/css/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/bootstrap3-typeahead.min.js"></script>
 
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('') ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url();?>assets/css/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('') ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('') ?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('') ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url('') ?>assets/js/demo/chart-pie-demo.js"></script>
<script>
  /* Rupiah Boskoeh */
        function formatRupiah(angka, prefix) {
          var number_string = angka.toString().replace(/[^,\d]/g, ""),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

          // ribuan
          if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
          }

          rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
          return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
        }

  tampiltransaksi();
  function tampiltransaksi(){
     $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>admin/transaksi/getinvoice',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    table = $('#tableadmin').DataTable({
                      paging: true
                    });
                    for(i=0; i<data.length; i++){
                      table.row.add([ no++, data[i].id_invoice, data[i].tgl,data[i].nama_penerima,formatRupiah(data[i].subtot, "Rp. "),'<button class="btn btn-info btn-sm">Dikirm</button>',' <select name="updatebarang" class="form-control" id="updatebarang"><option value="1">Gagal</option><option value="2">Sedang Diproses</option><option value="3"> Di Kirim</option><option value="4">Selesai</option></select>','<div class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></div></td><td><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>']);
                    }
                    table.draw();
                }
 
            });
  }
  document.getElementById('updatebarang').addEventListener('change', function (){
          var dt = this.value;
          $.ajax({
            type  : 'GET',
                url   : '<?php echo base_url()?>admin/transaksi/updatestatus',
                data:{data:dt},
                method:"POST",
                dataType : 'json',
                success : function(data){

                }
          });
         
        })
</script>
</body>

</html>
