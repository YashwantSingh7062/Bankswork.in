<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>
   <?php include 'partials/nav.php' ?>
    
   <!-- HEADER -->
    <header id="header">
        <!-- CAROUSEL -->
        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./Images/first_carousel/rupee.jpeg"  style="height:100vh;"alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Images/first_carousel/second.jpg"  style="height:100vh;"alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Images/first_carousel/third.jpg" style="height:100vh;" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="header-content">
            <h1 class="display-4">Personal Loans with rates starting at 10.75%</h1>
            <p class="lead mt-3">Loans for everyone</p>
            <a href="personal_loans.php" class="btn btn-lg btn-outline-primary mt-5 py-2 px-4 py-md-3 px-md-5">Find my loans <i class="fas fa-angle-double-right"></i></a>
        </div>
    </header>
    
    <?php include 'partials/sidebar.php' ?>
    
    
    
    <!-- UP NAVIGATOR BUTTON -->
    <div class="up-navigator-button">
        <a href="#header">
            <i class="fas fa-arrow-up"></i> 
        </a>
    </div>

   <?php include 'partials/login-modal.php'; ?>
    
    <!-- SECTION Steps -->
    <section class="section-steps">
      <div class="container">
          <div class="steps-header">
               <h3>Get Your Loan in three simple steps</h3>    
               <p class="lead text-center text-muted">A Personal loan is a form of credit offered by financial institutions for the borrower’s personal use. It is an unsecured loan and doesn’t require collateral as security or a guarantor to avail the loan.</p>
           </div>
           <div class="steps-icon my-5">
               <div class="row">
                   <div class="col-8 step-line"></div>
               </div>
               <div class="row text-center">
                   <div class="col-4">
                       <div class="step-icon">1</div>
                   </div>
                   <div class="col-4">
                       <div class="step-icon">2</div>
                   </div>
                   <div class="col-4">
                       <div class="step-icon">3</div>
                   </div>
               </div>
           </div>
           <div class="step-content my-5">
               <div class="row">
                   <div class="col-12 col-md-4">
                       <div class="row">
                           <div class="col-3 text-center">
                               <div class="step-content-icon" style="background:#8c7ae6;">
                                   <i class="fas fa-pencil-alt"></i>
                               </div>
                           </div>
                           <div class="col-9">
                               <h5 class="step-content-header">Register</h5>
                               <p>Apply online in less than 2 minutes</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-12 col-md-4">
                       <div class="row">
                           <div class="col-3 text-center">
                               <div class="step-content-icon" style="background:#4cd137;">
                                   <i class="fas fa-file-invoice"></i>
                               </div>
                           </div>
                           <div class="col-9">
                               <h5 class="step-content-header">	Quick Verification</h5>
                               <p>We will review your application and give you a decision within minutes</p>
                           </div>
                       </div>
                   </div><div class="col-12 col-md-4">
                       <div class="row">
                           <div class="col-3 text-center">
                               <div class="step-content-icon" style="background:#55efc4;">
                                   <i class="fas fa-hand-holding-usd"></i>
                               </div>
                           </div>
                           <div class="col-9">
                               <h5 class="step-content-header">Receive Funds</h5>
                               <p>You will receive your cash within a few days</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="steps-navigator-button pb-5">
               <div class="row">
                   <div class="col-12 col-md-6 offset-md-3 text-center">
                       <a href="personal_loans.php" class="btn my-primary-btn py-3 px-4">Get Your Loan <i class="fas fa-angle-double-right"></i></a>
                   </div>
               </div>
           </div>
      </div> 
    </section>
    
    <!-- SECTION TESTIMONIALS -->
    <section class="section-testimonials">
        <div class="container">
           <div class="section-testimonials-header py-5">
               <h4 class="text-light text-center">We recieve lovely comments from our customers every week. Here are just a few of our favourites over the last couple of months…</h4>
           </div>
           <div class="row">
               <div class="col-12 col-md-4">
                   <div class="card mt-3" data-aos="flip-left">
                       <div class="card-body p-2">
                           <div class="row">
                               <div class="col-4 p-0 pl-3">
                                   <img src="Images/testimonials_user/avatar2.png" alt="User1" style="width:70px;height:70px;border-radius:50%;"/>
                                   <h6 class="my-3">Ashish Gupta</h6>
                                   <span>1 month ago</span>
                               </div>
                               <div class="col-8">
                                   <div class="testimonials-rating my-2">
                                       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                   </div>
                                   <p>My best wishes are always with Indialends. They helped me to maintain CIBIL by sending my application to right lender as per my profile</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-md-4">
                   <div class="card mt-3" data-aos="flip-left">
                       <div class="card-body p-2">
                           <div class="row">
                               <div class="col-4 p-0 pl-3">
                                   <img src="Images/testimonials_user/avatar1.png" alt="User1" style="width:70px;height:70px;border-radius:50%;"/>
                                   <h6 class="my-3">Ashish Gupta</h6>
                                   <span>4 month ago</span>
                               </div>
                               <div class="col-8">
                                   <div class="testimonials-rating my-2">
                                       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                   </div>
                                   <p>My best wishes are always with Indialends. They helped me to maintain CIBIL by sending my application to right lender as per my profile</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-md-4">
                   <div class="card mt-3" data-aos="flip-left">
                       <div class="card-body p-2">
                           <div class="row">
                               <div class="col-4 p-0 pl-3">
                                   <img src="Images/testimonials_user/avatar3.png" alt="User1" style="width:70px;height:70px;border-radius:50%;"/>
                                   <h6 class="my-3">Ashish Gupta</h6>
                                   <span>6 month ago</span>
                               </div>
                               <div class="col-8">
                                   <div class="testimonials-rating my-2">
                                       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                   </div>
                                   <p>My best wishes are always with Indialends. They helped me to maintain CIBIL by sending my application to right lender as per my profile</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12 col-md-4">
                   <div class="card mt-3" data-aos="flip-left">
                       <div class="card-body p-2">
                           <div class="row">
                               <div class="col-4 p-0 pl-3">
                                   <img src="Images/testimonials_user/avatar1.png" alt="User1" style="width:70px;height:70px;border-radius:50%;"/>
                                   <h6 class="my-3">Ashish Gupta</h6>
                                   <span>1 month ago</span>
                               </div>
                               <div class="col-8">
                                   <div class="testimonials-rating my-2">
                                       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                   </div>
                                   <p>My best wishes are always with Indialends. They helped me to maintain CIBIL by sending my application to right lender as per my profile</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-md-4">
                   <div class="card mt-3" data-aos="flip-left">
                       <div class="card-body p-2">
                           <div class="row">
                               <div class="col-4 p-0 pl-3">
                                   <img src="Images/testimonials_user/avatar3.png" alt="User1" style="width:70px;height:70px;border-radius:50%;"/>
                                   <h6 class="my-3">Ashish Gupta</h6>
                                   <span>4 month ago</span>
                               </div>
                               <div class="col-8">
                                   <div class="testimonials-rating my-2">
                                       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                   </div>
                                   <p>My best wishes are always with Indialends. They helped me to maintain CIBIL by sending my application to right lender as per my profile</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-md-4">
                   <div class="card mt-3" data-aos="flip-left">
                       <div class="card-body p-2">
                           <div class="row">
                               <div class="col-4 p-0 pl-3">
                                   <img src="Images/testimonials_user/avatar2.png" alt="User1" style="width:70px;height:70px;border-radius:50%;"/>
                                   <h6 class="my-3">Ashish Gupta</h6>
                                   <span>2 month ago</span>
                               </div>
                               <div class="col-8">
                                   <div class="testimonials-rating my-2">
                                       <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                   </div>
                                   <p>My best wishes are always with Indialends. They helped me to maintain CIBIL by sending my application to right lender as per my profile</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>   
        </div>
    </section>
    
    <!-- SECTION PRODUCT -->
    <section class="section-products">
        <div class="container">
           <div class="row mb-3">
               <div class="col-12">
                   <h3>Products</h3>
               </div>
           </div>
            <div class="row">
                <div class="col-12 col-md-4 mt-2">
                    <div class="card" data-aos="fade-up">
                        <div class="card-body text-center">
                            <div class="product-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <h2>Personal Loan</h2>
                            <p>Apply for personal loan easily.</p>
                            <a href="personal_loans.php" class="btn  my-primary-btn py-2 px-4 my-3">Apply Now <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <div class="card" data-aos="fade-up">
                        <div class="card-body text-center">
                            <div class="product-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h2>Home Loan</h2>
                            <p>Apply for home loan.</p>
                            <a href="personal_loans.php" class="btn btn-outline-primary py-2 px-4 my-3">Apply Now <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-2">
                    <div class="card" data-aos="fade-up">
                        <div class="card-body text-center">
                            <div class="product-icon">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <h2>Mortgage Loan</h2>
                            <p>Apply for Mortgage loan.</p>
                            <a href="personal_loans.php" class="btn btn-outline-primary py-2 px-4 my-3">Apply Now <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- SECTION PARTNERS -->
    <section class="section-partners">
        <div class="container">
           <div class="partners-header">
               <h3>Our Partners</h3>
           </div>
            <div class="partners-content">
                <div class="row">
                    <div class="col-6 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="Images/partners_images/HDFC.jpg" alt="HDFC"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="Images/partners_images/icici.jpg" alt="HDFC"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="Images/partners_images/sbi.png" alt="HDFC"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="Images/partners_images/tata_capital.jpg" alt="HDFC" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="Images/partners_images/bajaj.jpg" alt="HDFC"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card">
                            <div class="card-body">
                                <img src="Images/partners_images/iifl.jpeg" alt="HDFC" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
     <!-- FOOTER -->
     <footer>
           <div class="container">
             <div class="row pt-3 pb-2">
                <div class="col-12 col-md-4">
                    <h5>YashwantSingh.com</h5>
                    <ul class="list-unstyled d-flex">
                        <li class="mx-2"><i class="fab fa-facebook-f"></i></li>
                        <li class="mx-2"><i class="fab fa-linkedin-in"></i></li>
                        <li class="mx-2"><i class="fab fa-github"></i></li>
                    </ul>
                    <a href="#header" class="btn my-primary-btn">Get Started</a>
                </div>
                 <div class="col-12 col-md-4">
                     <div class="footer-links">
                         <ul class="list-unstyled">
                             <li><a href="about_us.php">About Us</a></li>
                             <li><a href="#">Contact Us</a></li>
                             <li><a href="privacy_policy.php">Privacy Policy</a></li>
                             <li><a href="terms&Condition.php">Terms &amp; conditions</a></li>
                             <li><a href=""></a></li>
                         </ul>
                      </div>
                 </div>
                 <div class="col-12 col-md-4">
                     <h6><u>Get In Touch</u></h6>
                     <ul class="list-unstyled">
                         <li><i class="fas fa-map-marker-alt"></i> 201, Ganga Sagar Scheme, Vaishali Nagar, Jaipur, Rajasthan-302021</li>
                         <li><i class="fas fa-envelope"></i> yashwantsingh7062@gmail.com</li>
                     </ul>
                 </div>
             </div>
                <div class="footer-description">
                    <div class="row">
                       <div class="col-12 text-center mt-2">
                           Copyright &copy; 2019 yashwantsingh7062@gmail.com | All Right Reserved.
                       </div> 
                    </div>
                </div>
           </div> 
     </footer>
     <script src="public/js/app.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      
      
</body>
</html>