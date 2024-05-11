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
    <h2>About Us</h2>
    <div class="d-flex justify-content-center align-items-center flex-column">
      <ul class="breadcrumps">
        <li>
          <a href="index.php">Home</a><span>/</span>
        </li>
        <li class="breadcrump-active-color">
          About
        </li>
      </ul>
    </div>
   </div>
  </div>

</div>


<section class="abt-cntnt">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1500">
      <div class="abt-imgs">
        <img src="assets/img/inner-abt-img.png" alt="" class="img-fluid">
        <img src="assets/img/rotate-img.png" alt="" class="rotate-img">
      </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500">
        <div class="inner-abt-cnt">
          <h4>Empowering Your Brand Through Creativity, Driving Results. </h4>

          <p>Established in 2009, Arab Graphics has been at the forefront of the printing and advertising 
            industry in Saudi Arabia, delivering top-notch solutions to meet the diverse needs of our 
            clients. With over a decade of experience, we have earned a reputation for being a trusted 
            partner, delivering innovative solutions tailored to meet the diverse needs of our clients. </p>
        </div>
      </div>
    </div>
  </div> 
</section>

<section class="mision-vision-section">
  <div class="container">
    <div class="mission-vision">
      <img src="assets/img/mision-and-vision.png" alt="" class="img-fluid vision-img" data-aos="fade-up" data-aos-duration="1500">
       <div class="row">
        <div class="col-lg-6">
          <div class="value-cntnt">
            <h3>Beyond Printing and Advertising</h3>
            <p>Our vision transcends conventional printing and advertising; we aspire to redefine the 
              boundaries of visual communication, empowering brands to make a lasting impact on their 
              audiences. </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="value-cntnt">
            <h3>Your Success, Our Mission</h3>
            <p>Arab Graphics is on a mission to empower brands through tailor-made printing and 
              advertising solutions that drive growth, foster brand loyalty, and leave a lasting impression. 
              We are committed to delivering excellence in every project, exceeding expectations, and 
              helping our clients achieve their marketing objectives effectively.</p>
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
</body>
</html>