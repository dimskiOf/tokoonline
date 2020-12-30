<footer id="footer"><!--Footer-->
<div class="footer-widget fixed-bottom">
	<div class="container mt-4">
		<div class="row">
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>-Menu-</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="<?php echo base_url('user/dashboard') ?>">Beranda</a></li>
						<li><a href="<?php echo base_url('user/about_us') ?>">Tentang Kami</a></li>
						<li><a>Kategori Produk</a></li>
						<li><a href="<?php echo base_url('user/patner') ?>">Patner</a></li>
						<li><a href="<?php echo base_url('user/contact_us') ?>">Hubungi Kami</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Ikuti Kami</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Indonetwork</a></li>
						<li><a href="#">Indotrading</a></li>
						<li><a href="#">Tokopedia</a></li>
						<li><a href="#">BukaLapak</a></li>
						<li><a href="#">OLX</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Contact <br>Marketing</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="https://api.whatsapp.com/send?phone=6281291277448&text=Hallo Rabadimultiguna, &source=&data" target="_blank">0812-9127-7448</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="single-widget">
					<h2>Marketing Contact :</h2>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">rabadimultiguna@gmail.com</a></li>
						<li><a href="#">rabadimultiguna.sales@gmail.com</a></li>
						<li><a href="#">rabadimultiguna.sales1@gmail.com</a></li>
						<li><a href="#">rabadimultiguna.sales2@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-sm-offset-1">
				<div class="single-widget text-center">
					<h2>CV. Rabadi Multi GUna</h2>
					<img style="width: 100%;"  src="<?php echo base_url('assets/user/images/logo.jpg') ?>"/></a>
				</div>
			</div>

		</div>
	</div>
</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 CV. Rabadi Multiguna</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://www.tokopedia.com/rmg">Web Development</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	<!-- Jvascript boostrap -->
	<script src="<?php echo base_url('') ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Javascript -->
    <script src="<?php echo base_url('assets/user/') ?>js/jquery.js"></script>
	<script src="<?php echo base_url('assets/user/') ?>js/bootstrap.min.js"></script>
	<!-- DataTables -->
	  <script src="<?php echo base_url();?>assets/css/datatables/jquery.dataTables.min.js"></script>
	  <script src="<?php echo base_url();?>assets/css/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	  <script src="<?php echo base_url();?>assets/css/datatables-responsive/js/dataTables.responsive.min.js"></script>
	  <script src="<?php echo base_url();?>assets/css/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

	  <script src="<?php echo base_url();?>assets/js/bootstrap3-typeahead.min.js"></script>

	  <!-- Tempusdominus Bootstrap 4 -->
  	<script src="<?php echo base_url();?>assets/css/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

	<script src="<?php echo base_url('assets/user/') ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url('assets/user/') ?>js/price-range.js"></script>
    <script src="<?php echo base_url('assets/user/') ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url('assets/user/') ?>js/main.js"></script>

    <!-- javascript untuk cart (+/-) -->
    <script type="text/javascript">

	$(".cart_quantity_up").click(function() {
	  const itemID = $(this).data("id");
	  const rowID = $(this).data("rowid");

	  const currentValue = $("#"+itemID).val();
	  const newValue = parseInt(currentValue) + 1;
	  $("#"+itemID).val(newValue);
		
	 $.ajax({
               type: "GET",
               url: '<?php echo base_url('') ?>user/cart/updateqty/'+rowID+'/'+newValue,
               dataType:"json",
               cache: false,
               success: function(result){
                     $("#tot").html(result.total);
               }
        });
	
	var a = $("."+itemID).text();
	var b = $("#"+itemID).val();
	var c = Number(a.toString().replace(/[^0-9]+/g,""));
	var d = Number(b.toString().replace(/[^0-9]+/g,""));
	const e = c * d;

	var	number_string = e.toString(),
	sisa 	= number_string.length % 3,
	rupiah 	= number_string.substr(0, sisa),
	ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
		
    if (ribuan) {
	separator = sisa ? '.' : '';
	rupiah += separator + ribuan.join('.');
	}

	
	$("."+rowID).text(rupiah);
	
	});


	$(".cart_quantity_down").click(function() {
	  const itemID = $(this).data("id");
	  const rowID = $(this).data("rowid");

	  const currentValue = $("#"+itemID).val();
	  const newValue = parseInt(currentValue) - 1;
	  $("#"+itemID).val(newValue);
	  
	 $.ajax({
               type: "GET",
               url: '<?php echo base_url('') ?>user/cart/updateqty/'+rowID+'/'+newValue,
               dataType:"json",
               cache: false,
               success: function(result){
                     $("#tot").html(result.total);
               }
        });

    var a = $("."+itemID).text();
	var b = $("#"+itemID).val();
	var c = Number(a.toString().replace(/[^0-9]+/g,""));
	var d = Number(b.toString().replace(/[^0-9]+/g,""));
	const e = c * d;

	var	number_string = e.toString(),
	sisa 	= number_string.length % 3,
	rupiah 	= number_string.substr(0, sisa),
	ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
		
    if (ribuan) {
	separator = sisa ? '.' : '';
	rupiah += separator + ribuan.join('.');
	}
	
	$("."+rowID).text(rupiah);
	
	});

	$(document).ready(function(){
	 $('#buttoninvoice').on('click', function(event){
  		var a = $('[name="no_inv"]').val();
  		var b = $('[name="nama_pen"]').val();
  		var c = $('[name="alamat_pen"]').val();
  		var d = $('[name="no_hp"]').val();
		$.ajax({
   			url:"<?php echo base_url('user/checkout/invoicepesan') ?>",
		   	data:{idin:a,alamat:c,nama:b,no_hp:d},
		  	method:"POST",
		  	dataType:"json",
            cache: false,
		   	success:function(data)
		   {
		    	if (data.datasuk == true){
		    	   alert('terimakasih sudah transaksi bro');
                   window.location.href = "<?php echo base_url('user/pesananuser/') ?>";
                  }else{
                    
                  }
		   }
		  })
		})
	})

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
                url   : '<?php echo base_url()?>user/pesananuser/getinvoice',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    table = $('#datatransaksi').DataTable({
                    	paging: true
                    });
                    for(i=0; i<data.length; i++){
                      table.row.add([ no++, data[i].id_invoice, data[i].tgl,formatRupiah(data[i].subtot, "Rp. "),'<button class="btn btn-info btn-sm">Dikirm</button>','<button class="btn btn-success btn-sm"><i class="fas fa-search-plus ml-4"></i></button> <button class="btn btn-info btn-sm"><i class="fas fa-print"></i></button>']);
                    }
                    table.draw();
                }
 
            });
	}
	
	</script>
	<script>
    $(document).ready(function(){
      $('#cari').typeahead({
        source: function(query, result)
        {
            $.ajax({
               // var query = $(this).val();
                url: "<?php echo base_url('user/dashboard/search') ?>",
                method:"post",
                data:{query:query},
                dataType:"json",
                success:function(data)
                {
                    result($.map(data.data, function(item){
                        return item;
                    }));
                }
            })
        }
      })
    });
</script>
</body>
</html>