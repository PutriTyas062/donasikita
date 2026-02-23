<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <!---- Botchat -->
    <!-- Start of Async Drift Code -->
      <script>
      "use strict";
      
      !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
          if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
          t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
          t.factory = function(e) {
            return function() {
              var n = Array.prototype.slice.call(arguments);
              return n.unshift(e), t.push(n), t;
            };
          }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
          }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
          };
        }
      }();
      drift.SNIPPET_VERSION = '0.3.1';
      drift.load('5w628gh4in8c');
      </script>
     <!-- End of Async Drift Code -->


    <!--- Boostrap CSS ---->  
    <link rel="stylesheet" href="<?= base_url('./asset/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('./asset/fonts/remixicon.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('./asset/css/style1.css') ?>" />
    
   

    <!-- Owl Carousel CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <title>Donasi Kita</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" id="home">


  <!---Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="./asset/images/logo_donasi-removebg-preview.png" width="50" height="50" class="d-inline-block align-top" alt="logo"></a> 
        <h2> DONASI KITA </h2> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">REGISTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-white" href="login_view.php">LOGIN</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

  <!-- button on top -->
  <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="ri-arrow-up-circle-fill"></i></button>


    <!--- Hero -->
    <section id="hero">
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="display-4">OPEN DONASI</h1>
      <p>  Mari Membantu Saudara Kita, Bersama Kita Pasti Bisa </p>

    </div>
  </div>
</div>
    </section>

    <div class="p-lg-4 mb-1 bg-light text-white">
    </div>

    <!--Video-->
    

        <div class="responsive-embed-youtube"><iframe width="600" height="310" src="https://www.youtube.com/embed/NUEjmv6VDrM?si=SAaul-GNeWU8ECtO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>



     <!--table-->
     <table class="table table-bordered border-primary">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Bencana</th>
          <th scope="col">Donasi Uang</th>
          <th scope="col">Donasi Pakaian</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Banjir</td>
          <td>Menerima</td>
          <td>Menerima</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Tanah Longsor</td>
          <td>Menerima</td>
          <td>Tidak Menerima</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Tragedi Palestina</td>
          <td>Menerima</td>
          <td>Menerima</td>
        </tr>
      </tbody>
    </table>
    

    <!--- Our Service-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-12 section-intro">
            <h1>Our Services</h1>
            <p> Layanan pada DonasiKita.</p>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="service costum-card">
              <div class="icon-box">
                <i class="ri-school-line"></i>
              </div>
              <h5> DONASI TRANSFER BANK</h5>
              <p>  REK.BNI (00273748)   REK.BCA(16729290) REK.MANDIRI(384724840)</p>

            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service costum-card">
              <div class="icon-box">
                <i class="ri-hospital-fill"></i>
              </div>
              <h5> LAYANAN RUMAH SAKIT </h5>
              <p>Membantu melayani korban bencana alam hubungi (08126374829489)</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service costum-card">
              <div class="icon-box">
                <i class="ri-community-line"></i>
              </div>
              <h5> MITRA </h5>
              <p>Kami memiliki kerjasama dengan beberapa mitra perusahaan sebagai donatur</p>
            </div>
          </div>
          </div>

            </div>
          </div>
        </div>
      </div>
    </section>

     
    <!--- CTA -->
    <div id="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2>MARI BERGABUNG MENJADI BAGIAN DARI RELAWAN DONASI KITA</h2>
            <p>Uluran Tangan anda sangat kami butuhkan</p>
          </div>
          <div class="col-auto">
                 <!-- Button trigger modal -->
                   <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Bersama Kita Pasti Bisa
                   </button>
            
                <!-- Modal -->
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">DONASI KITA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Mari Donasi, Jadilah Relawan untuk saudara kita yang membutuhkan..
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                   </div>
          </div>
        </div>
      </div>
    </div>

    <!--- Galery --->
    <section id="galery">
    <div class="container">
      <div class="row">
        <div class="col-12 section-intro">
          <h1>Our Galery</h1>
          <p>Berikut adalah dokumentasi bencana alam</p>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-lg-4">
          <div class="project-wrapper">
            <img src="./asset/images/p1.jpeg" alt="">
            <a href="#" class="btn btn-brand">View Project</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row gy-4">
            <div class="col-lg-12">
              <div class="project-wrapper">
                <img src="./asset/images/p2.jpeg" alt="">
                <a href="#" class="btn btn-brand">View Project</a>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="project-wrapper">
                <img src="./asset/images/p3.jpeg" alt="">
                <a href="#" class="btn btn-brand">View Project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="project-wrapper">
            <img src="./asset/images/p4.jpeg" alt="">
            <a href="#" class="btn btn-brand">View Project</a>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!---- Testimonial ---->
    <div id="myCarousel" class="owl-carousel owl-theme my-3">
      <div class="card shadow my-3">
        <img
          src="./asset/images/9.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Gunung Meletus</h5>
        </div>
      </div>
      <div class="card shadow my-3">
        <img
          src="./asset/images/12.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Angin Puting Beliung</h5>
        </div>
      </div>
      <div class="card shadow my-3">
        <img
          src="./asset/images/10.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Kekeringan</h5>
        </div>
      </div>
      <div class="card shadow my-3">
        <img
          src="./asset/images/11.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Banjir</h5>
        </div>
      </div>
      <div class="card shadow my-3">
        <img
          src="./asset/images/8.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Gempa</h5>
        </div>
      </div>
      <div class="card shadow my-3">
        <img
          src="./asset/images/7.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Kebakaran</h5>
        </div>
      </div>
        <!-- Add more cards as needed -->
      </div>
    </div>
    
    <!----- Team ---->
    
    <section id="team">
      <class="container">
        <div class="row">
          <div class="col-12 section-intro">
            <h1>Our Team Members</h1>
            <p> Mereka adalah Relawan Komunitas Donasi Kita.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="team-member-img">
                <img src="./asset/images/testimoni/1.jpg" alt="">
                <div class="social-links">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
              <h5>Cristhina Angeline</h5>
              <small>Volunteer</small>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="team-member-img">
                <img src="./asset/images/testimoni/2.jpg" alt="">
                <div class="social-links">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
              <h5>Hanna Jasmine</h5>
              <small>Volunteer</small>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="team-member-img">
                <img src="./asset/images/testimoni/6.jpg" alt="">
                <div class="social-links">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
              <h5>Paul Robert</h5>
              <small>Volunteer</small>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="team-member-img">
                <img src="./asset/images/testimoni/5.jpg" alt="">
                <div class="social-links">
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
              <h5>Dian Annisa Salsabila</h5>
              <small>Volunteer</small>
              </div>
          </div>
        </div>
      </div>

    </section>

    
    


 




    <!--- Contact -->
    <section id="contact" >
      <div class="container border-light">
        <div class="row">
          <div class="col-12 section-intro">
            <h1> Hubungi Kami</h1>
            <p>Kami Senang Menjawab Pertanyaan dan Menerima Saran Anda </p>
          </div>
        </div>
        <div class="row bg-light">
          <div class="col-lg-7">
            <form action="" class="row gy-3 gx-3 p-4 plg-5 ">
              <div class="form-group col-lg-6">
                <input type="text" class="form-control" placeholder="Enter your first name">
              </div>
              <div class="form-group col-lg-6">
                <input type="text" class="form-control" placeholder="Enter your last name">
              </div>
              <div class="form-group col-lg-12">
                <input type="email" class="form-control" placeholder="Enter your E-mail address">
              </div>
              <div class="form-group col-lg-12">
                <input type="text" class="form-control" placeholder="No.Telp">
              </div>
              <div class="form-group col-lg-12">
              <textarea rows="4" class="form-control" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group col-lg-12">
              <a href="#" class="btn btn-brand">Send Message</a>
              </div>
            </form>
          </div>
          <div class="col-lg-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d526.3223425745699!2d109.63856751890724!3d-6.960602094128466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1699167150331!5m2!1sid!2sid" class="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
            
      </div>
    </section>

  <!--- footer --->
    <footer>
      <div class="footer-top bg-dark">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-4"> 
              <img src="./asset/images/logo_donasi-removebg-preview.png" class="logo-footer" style="width: 60px;" alt=""> DONASI KITA
              <p>komunitas ini membantu saudara kita yang terdampak bencana alam. Mari bergabung menjadi donatur dan bekerjasama menolong saudara kita </p>
              <div class="social-links">
                <a href="#"><i class="ri-twitter-fill"></i></a>

                <p>donasikita_</p>

                <a href="#"><i class="ri-instagram-fill"></i></a>

                <p>@donasikita</p>

              </div>
            </div>
            <div class="col-lg-2 offset-lg-2">
              <h6>Information</h6>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <h6>Company</h6>
              <ul>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Tearms and Condition</a></li>
                <li><a href="#">Privacy and Policy</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <h6>Company</h6>
              <ul>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Tearms and Condition</a></li>
                <li><a href="#">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-auto">
              <p class="mb-0"><i class="ri-copyright-line"></i> 2023 Copyright Donasi Kita</p>
            </div>
            <div class="col-auto">
              <p class="mb-0">Created By Putri Cahyaning Tyas </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  




 <!--- -->
   <script src="./asset/js/app.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- Custom Javascript file -->
    <script src="./asset/js/main.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    



<script>
  // Get the button
  let mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

<!--Owl script-->
<script>
  $(document).ready(function(){
    $("#myCarousel").owlCarousel({
      items: 3, // Number of cards shown in each slide
      loop: true, // Continuously loop the carousel
      margin: 20, // Space between cards
      nav: true, // Show navigation buttons
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"], // Custom navigation icons
      responsive: {
        0: {
          items: 1 // Number of cards shown in the carousel for smaller screens
        },
        768: {
          items: 2 // Number of cards shown in the carousel for medium screens
        },
        992: {
          items: 3 // Number of cards shown in the carousel for large screens
        }
      }
    });
  });
</script>


</body>
</html>

