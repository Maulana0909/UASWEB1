<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT Pertamina</title>
  <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
  
  <section id="navbar" >
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 20px;">
        <a class="navbar-brand" ></a>
        <img src="image/Logo Pertamina1.png" alt="logo" width="60px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" role="navigation" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item" style="margin-left: 10px;">
              <a class="navbar-brand">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bisnis">Bisnis</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#About Us">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact Us">Contact Us</a>
            </li>   
          </ul>
        </div>  
      </nav>
    </section>

      <div class="item active">
        <img src="image/benner.jpg" width="1900" height="700" >
        
    </div>

    <section id="bisnis" class="bisnis" >
      <div class="container" style="margin-top:30px">
        <div class="row" style="text-align: justify;">
          <div class="col-md-12" style="text-align: center;">
            <h2>BISNIS</h2>
            <hr>
          </div>

          <div class="col-sm-4">
                <h3>Produk Kami</h3>
                <h6>Nov 29, 2020</h5>
            <img src="image/P.jpg" class="img-responsive" style="margin-bottom: 15;">
            <p style="font-size: smaller;">Kegiatan PERTAMINA dalam menyelenggarakan usaha di bidang energi dan petrokimia, terbagi ke dalam dua sector, yaitu Hulu dan Hilir, 
              serta ditunjang oleh kegiatan Anak-Anak Perusahaan dan Perusahaan.</p>
            <a href="produk.php">Selengkapnya....-></a>
            <hr class="d-sm-none">
          </div>
          <div class="col-sm-4">
            <h3>Energi Terbarukan</h3>
            <h6>Nov 29, 2020</h6>
            <img src="image/d.jpg" class="img-responsive" style="margin-bottom: 15;">
            <p style="font-size: smaller;">Pertamina mengembangkan energi terbarukan seperti panas bumi, solar cell, lithium ion battery, biodiesel, green energy station dan lainnya.
              Sektor Gas, Energi Baru dan Terbarukan (GEBT) merupakan sektor bisnis yang semakin penting bagi Pertamina mengingat peranannya di masa depan sebagai sumber energi primer 
              menggantikan peran sumber energi dari minyak bumi</p>
            <a href="Energi.php">Selengkapnya....-></a>
            <br>
          </div>
          <div class="col-sm-4">
            <h3>Pemegang Saham</h3>
            <h6>Nov 29, 2020</h6>
            <img src="image/b.jpg" class="img-responsive" style="margin-bottom: 15;">
            <p>Pertamina adalah perusahaan energi nasional yang sahamnya 100% dimiliki oleh Pemerintah Republik Indonesia melalui kementerian Badan usaha milik negara(BUMN) selaku pemegang 
              saham</p>
            <a href="Pemegang.php">Selengkapnya....-></a>
          </div>
        </div>
      </div>
    </section>

    <section id="About Us" class="About Us">
      <div class="jumbotron " style="margin-top: 20px;">
      <div class="container" >
        <div class="row" style="text-align: justify;">
            <div class="col-sm-12" style="text-align: center;">
              <div class="jumbotron ">
                <div class="container">
                  <h2>ABOUT US</h2>
                <hr>
                </div>
              <div class="cpl-sm-12">
                <p>Sebagai lokomotif perekonomian bangsa Pertamina merupakan perusahaan milik negara yang bergerak di bidang energi meliputi minyak, gas serta energi baru dan terbarukan.</p>
              </div>
             </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="Contact Us" class="Contact Us">
      <div class="container">
        <div class="row" style="text-align: justify;">
          <div class="col-sm-12" style="text-align: center;">
            <h2>CONTACT US</h2>
            <hr>
          </div>
          <div class="Form">
            <form name="contact-form">
            <p></p>
            Nama
            <br />
            <input  class="contact-form-name" style="max-width: 400px; width: 100%;" id="ContactForm1_contact-form-name" name="name" size="30" type="text" value="" />
            <p></p>
            Email
            <span style="font-weight: bolder;">*</span><br />
            <input class="contact-form-email"style="max-width: 400px; width: 100%;" id="ContactForm1_contact-form-email" name="email" size="30" type="text" value="" />
            <p></p>
            Pesan
            <span style='font-weight: bolder;'>*</span>
            <br />
            <textarea class="contact-form-email-message" style="max-width: 400px; width: 100%;" id="ContactForm1_contact-form-email-message" name="email-message" rows="5"></textarea>
            <p></p>
            <input class="contact-form-button contact-form-button-submit" id="ContactForm1_contact-form-submit" onclick="sendEmailMsg()" type="button" value="Kirim" />
            <p></p>
            <div style="max-width: 400px; text-align: center; width: 100%;">
            <p class="contact-form-error-message" id="ContactForm1_contact-form-error-message"></p>
            <p class="contact-form-success-message" id="ContactForm1_contact-form-success-message"></p>
            </div>
            </form>
            </div>

        </div>
      </div>
    </section>

    <footer id="footer" class="footer" >
    <div class="jumbotron text-center" style="margin-top: 20px;">
        <div class="col-md-12" >
            <h7>@Copyright by 18111088_MaulanaYusuf_TIFRP18CNSA_UASWEB1</h7>
        </div>
    </div>
  </footer>

    <script>
      var blogId = '#';
      var contactFormMessageSendingMsg ='Mengirim...';
      var contactFormMessageSentMsg = 'Pesan sudah dikirim. Semoga Anda bahagia.';
      var contactFormMessageNotSentMsg = 'Pesan tidak dapat dikirim. Coba lagi nanti.';
      var contactFormEmptyMessageMsg = 'Bidang pesan harus diisi.';
      var contactFormInvalidEmailMsg = 'Alamat email harus valid.'
      
      var widgetLoaded=false;
      function sendEmailMsg() {
      if(widgetLoaded== false) {
      _WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'sidebar', null, document.getElementById('ContactForm1'), {'contactFormMessageSendingMsg': contactFormMessageSendingMsg , 'contactFormMessageSentMsg': contactFormMessageSentMsg , 'contactFormMessageNotSentMsg': contactFormMessageNotSentMsg , 'contactFormInvalidEmailMsg': contactFormInvalidEmailMsg , 'contactFormEmptyMessageMsg': contactFormEmptyMessageMsg , 'title': 'Contact Form', 'blogId': blogId, 'contactFormNameMsg': 'Name', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Message', 'contactFormSendMsg': 'Send', 'submitEmail': 'mikodede.251@gmail.com'}, 'displayModeFull'));
      widgetLoaded=true;
      document.getElementById('ContactForm1_contact-form-submit').click();
      }
      return true;
      }
      </script>
    
 

</body>
</html>
