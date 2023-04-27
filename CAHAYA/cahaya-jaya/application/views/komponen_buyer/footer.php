

<section class="section instagram-feed">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
</section>



<footer class="footer section text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="social-media">
          <li>
            <a href="">
              <i class="tf-ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="tf-ion-social-instagram"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="tf-ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="tf-ion-social-pinterest"></i>
            </a>
          </li>
        </ul>
        <ul class="footer-menu">
          <li>
            <a href="">CONTACT</a>
          </li>
          <li>
            <a href="">SHIPPING</a>
          </li>
          <li>
            <a href="">TERMS OF SERVICE</a>
          </li>
          <li>
            <a href="">PRIVACY POLICY</a>
          </li>
        </ul>
        <p class="copyright-text">Powered by Bootstrap</p>
      </div>
    </div>
  </div>
</footer>


    <!-- 
    Essential Scripts
    =====================================-->
    

    <!-- Main jQuery -->
    <script type="text/javascript">
      document.getElementById('search').onkeydown = function(e){
   if(e.keyCode == 13){
     // submit
    }
    };
    </script>
     <!-- Main Js File -->
    <script src="<?php echo base_url('assets/js/script.js')?>"></script>

    <script type="text/javascript">
        function validasi() {
            var msg= confirm("Apakah Anda Yakin Ingin Mengubah Data Ini?");
            if (msg){
              return true ;
            }else{
              return false ;
            }
        }
    </script>
     <script type="text/javascript">
        function validasi2() {
            var msg= confirm("Apakah Anda Yakin Ingin Melanjutkan Pembayaran Ini?");
            if (msg){
              return true ;
            }else{
              return false ;
            }
        }
    </script>
    <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
      <script language="javascript">
function kali(){
      var jumlah = document.getElementById('jumlah').value;
      var stok = document.getElementById('stok').value;
      var x = parseInt(stok);
      
      if(jumlah>x){
    alert('Maaf Pesananmu Melebihi Stok!');
    document.getElementById('jumlah').value = "";
  }
}
</script>
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Instagram Feed Js -->
    <script src="<?php echo base_url('assets/plugins/instafeed.js/instafeed.min.js')?>"></script>
    <!-- Slick Carousel -->
    <script src="<?php echo base_url('assets/plugins/slick-carousel/slick/slick.min.js')?>"></script>
    <!-- Google Map js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItRd4sQ_aXlQG_fvEzsxvuYyaWnJKETk&callback=initMap"></script>


    <!-- Main Js File -->
    <script src="<?php echo base_url('assets/js/script.js')?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/jquery/dist/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>
    


  </body>
  </html>