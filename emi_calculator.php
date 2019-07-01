<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Easy Loans available instantly at Bankswork. Our loans help meets all your financial needs at low-interest rates.">
    <meta name="keywords" content="loans,loan,getLoan,bankswork,Personal Loan, Home Loan, Mortgage Loan, Car Loan, User Car Loan">
    <meta name="author" content="Yashwant Singh">
    <title>Emi Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
      .emi_calculator_header{
          height:20vh;
          margin-top:20vh;
      }
      .emi_calculator_header i{
          font-size:60px;
          color:#ff4757;
      }
    </style>
</head>
<body style='background:linear-gradient(#17c0eb,#18dcff);'>
   <?php include 'partials/nav.php' ?>
   <?php include 'partials/nav2.php' ?>
   <?php include 'partials/login-modal.php' ?>
    <?php include 'partials/sidebar.php' ?>
    
     <!-- EMI CALCULATOR -->

    <div class='container'>
        <div class="emi_calculator_header text-center mb-5">
            <i class="fas fa-calculator mb-4"></i><br>
            <h2 class='display-4'>EMI Calculator</h2>
        </div>
        <div class="emi_calculator_calculator">
            <form action="#" method="post">
                       <div class="form-group col-auto">
                          <label><h4>Over a period of</h4></label>
                          <div class="row">
                              <div class='col-12 col-md-6'>
                                 <div class="row">
                                     <div class="col-6 pt-2">
                                         <div id="slider1"></div>
                                     </div>
                                     <div class="col-6">
                                         <input type="text" name="emi_year" id="emi_year" value="0.5 Years" class="form-control" />
                                         <input type="number" id="emi_year_hidden" hidden />
                                     </div>
                                 </div> 
                              </div>
                              <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <label><h4>Representative Rate</h4></label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-percentage"></i></div>
                                  </div>
                                  <input type="number" name="emi_rate" id="emi_rate" value="10.75" class="form-control" />
                                  <input type="number" id="emi_rate_hidden" hidden />
                                </div>
                                        </div>
                                    </div>
                              </div>
                              <script>
                                  $( function() {
                                    $( "#slider1" ).slider({
                                        value : 1,
                                        min : 0.5,
                                        max : 5,
                                        slide : function(event , ui){
                                            $("#emi_year").val(ui.value + " Years");
                                            $("#emi_year_hidden").val(ui.value);
                                        }
                                    });
                                  } );
                                  </script>
                          </div>
                        </div>
                       <div class="form-group col-auto">
                          <label><h4>I'd like to borrow</h4></label>
                          <div class="row">
                              <div class='col-12 col-md-6'>
                                 <div class="row">
                                     <div class="col-6 pt-2">
                                         <div id="slider2"></div>
                                     </div>
                                     <div class="col-6">
                                         <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                                  </div>
                                  <input type="number" name="emi_amount" id="emi_amount" value="100000" class="form-control" />
                                  <input type="number" id="emi_amount_hidden" hidden />
                                </div>
                                     </div>
                                 </div> 
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="row">
                                        <div class="col-6">
                                            <label><h4>Monthly Payment</h4></label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                                  </div>
                                  <input type="number" name="emi_month_payment" id="emi_month_payment" value="4660" class="form-control" />
                                  <input type="number" id="emi_month_payment_hidden" hidden />
                                </div>
                                        </div>
                                    </div>
                              </div>
                              <script>
                                  $( function() {
                                    $( "#slider2" ).slider({
                                        value : 50000,
                                        min : 100000,
                                        max : 5000000,
                                        slide : function(event , ui){
                                            $("#emi_amount").val(ui.value);
                                            $("#emi_amount_hidden").val(ui.value);
                                        }
                                    });
                                  } );
                                  </script>
                          </div>
                        </div>
                        <div class="form-group col-auto my-5">
                          
                          <div class="row">
                              <div class='col-12 col-md-6'>
                                 <div class="row">
                                     <div class="col-6 pt-2">
                                     <label><h4>Total Interest to pay</h4></label>
                                     </div>
                                     <div class="col-6">
                                         <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                                  </div>
                                  <input type="number" name="emi_interest" id="emi_interest" value="11847" class="form-control" />
                                  <input type="number" id="emi_interest_hidden" hidden />
                                </div>
                                     </div>
                                 </div> 
                              </div>
                              <div class="col-12 col-md-6">
                                 <div class="row">
                                        <div class="col-6">
                                            <label><h4>Total Amount To pay</h4></label>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                                  </div>
                                  <input type="number" name="emi_total_amount" id="emi_total_amount" value="111847" class="form-control" />
                                  <input type="number" id="emi_total_amount_hidden" hidden />
                                </div>
                                        </div>
                                    </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group col-auto text-center">
                            <a href="personal_loans.php" class='btn my-primary-btn'>Apply Now</a>
                        </div>
                    </form>
        </div>
    </div>
<?php include 'partials/footer.php' ; ?>