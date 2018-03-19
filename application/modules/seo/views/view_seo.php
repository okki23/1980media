<!DOCTYPE html>
<html lang="en">
<head>
  <title>1980media | Online Performance Marketing Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Montserrat|Open+Sans|Roboto+Condensed" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link rel="icon" href="<?php echo base_url(); ?>images/logo1980.png" type="image/png" sizes="16x16">
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a7c1a99d7591465c7077b9d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</head>
<body>
  <!-- Navbar -->
  <?php echo $this->load->view('header'); ?>
<header  class="jumbotron">
   <img src="<?php echo base_url(); ?>images/SEO_SEM.jpg" />
</header>
  <div class="container-fluid">
      <div class="row">
        <h3 class="title"><u>Apa itu Search Engine Optimization (SEO)?</u></h3>
        <div class="col-sm-1 text-center"></div>
        <div class="col-sm-3 col-sm-push-7 text-center">
          <img src="<?php echo base_url(); ?>images/SEO.png" alt="Apa itu Search Engine Optimization (SEO)?" >
        </div>
        <div class="col-sm-7 col-sm-pull-3">
          <p>Search Engine Optimization (SEO) adalah proses peningkatan rangking dan visibilitas website / brand anda di search engine. Mesin pencari seperti Google akan menampilkan hasil organik berdasarkan kata kunci pencarian dan listing di Google yang gratis.</p>
          <p><strong>Mengapa SEO?</strong></p>
          <p>Lalu lintas gratis ke situs web Anda kemudian dapat dengan mudah diperoleh begitu peringkat Anda lebih tinggi. Situs peringkat yang lebih tinggi umumnya dianggap lebih kredibel, 90% pengguna mesin pencari mengklik 3 daftar pertama. Agar mendapat peringkat lebih tinggi, kami akan memastikan bahwa situs web Anda relevan dengan penawaran produk atau layanan Anda.</p>
          <p><strong>Metodologi Kami</strong></p>
          <p>1980media memahami bahwa optimasi SEO adalah investasi jangka panjang untuk klien kami. Oleh karena itu, kami hanya memanfaatkan teknik white-hat SEO Indonesia dan benar-benar mematuhi pedoman kualitas mesin pencari, sebagai bagian dari due diligence kami.</p>
        </div>
        <div class="col-sm-1 col-md-1"></div>
      </div>
  </div>

  <div id="sem" class="container-fluid bg-grey bg-center">
      <div class="row">
        <h3 class="title"><u>Apa itu Search Engine Marketing (SEM) ?</u></h3>
        <div class="col-sm-1"></div>
        <div class="col-sm-3 col-md-4 col-lg-3">
          <img src="<?php echo base_url(); ?>images/SEM.png" alt="Apa itu Search Engine Optimization (SEO)?" class="img-responsive">
        </div>
        <div class="col-sm-7 col-md-8 col-lg-7">
          <p>Menarik lebih banyak pengunjung yang penting bagi bisnis Anda dengan kata kunci yang sangat bertarget menggunakan SEM atau Google AdWords. SEM pada akhirnya dapat menumbuhkan audiens Anda dengan penargetan keywords tertentu dan menghemat anggaran online Anda dengan menawar kata kunci pencarian atau kata kunci yang relevan untuk bisnis Anda. Dengan penelitian dan analisis kata kunci yang luas, kami memastikan Anda mendapatkan hasil optimal untuk kampanye Anda semurah mungkin.</p>
        </div>
        <div class="col-sm-1"></div>
      </div>
  </div>

  <div id="form" class="container-fluid bg-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="title">
                <h3><u>Form Permintaan</u></h3>
              </div>
              <form id="contactForm" name="sentMessage" novalidate>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" id="name" type="text" placeholder="Nama Anda" required data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="email" type="email" placeholder="Email" required data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="phone" placeholder="Phone" required data-validation-required-message="Please enter a message.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea class="form-control" id="pesan" rows = "6" placeholder="Pesan Anda" required data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-lg-12">
                    <div id="success"></div>
                    <button class="btn btn-default pull-left" type="submit">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
  </div>

<?php echo $this->load->view('footer'); ?>

</body>
</html>
