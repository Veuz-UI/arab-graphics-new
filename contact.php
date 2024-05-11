<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arab Graphics new</title>
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="fav-icon" href="assets/img/fav-icon.png">
</head>
<body>
    

<div class="inner-banner">
  <?php include("header.php")?>
  <div class="inner-banner-cntnt">
    <div data-aos="fade-up" data-aos-duration="1500">
      <h2>Contact Us</h2>
    <div class="d-flex justify-content-center align-items-center flex-column">
      <ul class="breadcrumps">
        <li>
          <a href="index.php">Home</a><span>/</span>
        </li>
        <li class="breadcrump-active-color">
          Contact Us
        </li>
      </ul>
    </div>
    </div>
  </div>

</div>


  <section class="contact-us">
    <div class="container">
      <div class="contact-main-div">
        <div class="row gx-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500">
            <div class="cont-left-cntns">
              <h3>"Captivate, Engage, Convert - Let Arab Graphics Tell Your Brand Story!"</h3>
              <p>Reach out to Arab Graphics today and embark on a journey of creativity and success. 
                Partner with us, and let's bring your vision to life with precision, passion, and 
                professionalism.</p>
                <form id="contactform">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-div">
                        <label for="">First Name<span>*</span></label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    </div>
  
                    <div class="col-lg-6">
                      <div class="input-div">
                        <label for="">Email<span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Email">
                    </div>
                    </div>
  
                    <div class="col-lg-6">
                      <div class="input-div">
                        <label for="">Phone<span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                    </div>
                    </div>
  
                    <div class="col-lg-6">
                      <div class="input-div">
                        <label for="">Subject<span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Subject">
                    </div>
                    </div>
  
                    <div class="col-lg-12">
                      <div class="input-div">
                        <label class="contact-label" for="fname">Message</label>
                        <br>
                      <textarea class="massage-area" rows="4" cols="50" placeholder="Describe yourself here..."></textarea>
                      </div>  
                  </div>
                    
                  <div class="mt-2">
                    <button class="primary-btn btn-1 hover-filled-slide-down" type="button">
                      <span>Submit</span>
                  </button>
                  </div>
                  </div>
                </form>
                
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500">
            <div class="reach-us">
              <h4>Reach Us</h4>
              
              <div class="adress-div">
                <img src="assets/img/call.gif" alt="">
                <a href="">
                  <h6>+966 56 619 1796</h6>
                </a>
              </div>

              <div class="adress-div">
                <img src="assets/img/email-file.gif" alt="">
                <a href="">
                  <h6>support@arbgraphics.com</h6>
                </a>
              </div>


              <div class="adress-div">
                <img src="assets/img/worldwide.gif" alt="">
                <a href="">
                  <h6>adress</h6>
                </a>
              </div>

              <div class="contact-line"></div>
            

              <h5>Connect with us</h5>

              <div class="contact-icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-linkedin"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include("footer.php")?>



<div class="to-top">
  <i class="fa-solid fa-arrow-up"></i>
</div>




    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/49ccdaea81.js " crossorigin="anonymous "></script>

    






    <script>
      $(".counter").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-countto");
  countDuration = parseInt($this.attr("data-duration"));
  $({ counter: $this.text() }).animate(
    {
      counter: countTo
    },
    {
      duration: countDuration,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.counter));
      },
      complete: function () {
        $this.text(this.counter);
      }
    }
  );
});
    </script>


<script>
  $('#testimonial-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
</script>

<script>
  $('#service-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
})
</script>

<script>
  $('#client-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 6
    }
  }
})
</script>

<script>
  const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // Adjust this value based on when you want the color to change
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
</script>

<script>
  AOS.init({disable: 'mobile'});
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
      var toTopBtn = document.querySelector('.to-top');

      toTopBtn.addEventListener('click', function() {
          window.scrollTo({
              top: 0,
              behavior: 'smooth' // Smooth scrolling behavior
          });
      });


      window.addEventListener('scroll', function() {
          if (window.pageYOffset > 100) { 
              toTopBtn.style.display = 'flex';
          } else {
              toTopBtn.style.display = 'none';
          }
      });
  });
</script>

<script>
  $(document).on("click", ".naccs .menu div", function() {
	var numberIndex = $(this).index();

	if (!$(this).is("active")) {
		$(".naccs .menu div").removeClass("active");
		$(".naccs ul li").removeClass("active");

		$(this).addClass("active");
		$(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

		var listItemHeight = $(".naccs ul")
			.find("li:eq(" + numberIndex + ")")
			.innerHeight();
		$(".naccs ul").height(listItemHeight + "px");
	}
});

</script>

<script>


$('#contactform').validate({ // initialize the validation
            rules: {
                location_from: {
                    required: true,
                },
                location_to: {
                    required: true,
                },
                note: {
                    required: '#driverNoteCheck:checked'
                },
                customer_name: {
                    required: true
                },
                phone_number: {
                    required: true
                }
 
            },
            messages: {
                location_from: {
                    required: "Pickup location is required",
                },
                location_to: {
                    required: "Destination is required",
                },
                note: {
                    required: "Driver note is required",
                },
                customer_name: {
                    required: "customer name is required"
                },
                phone_number: {
                    required: "Phone number is required"
                }
            },
 
            errorElement: "div",
 
            errorPlacement: function(error, element) {
                error.insertAfter($(element).closest('.required_item'));
            }
        });
</script>
</body>
</html>