<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Personal Loans</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <link rel="stylesheet" type="text/css" href="public/css/personal_loans.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <style>
        /* personal_loans_elgible_page */
        #section-personal-eligible{
    background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)) , url('Images/first_carousel/fourth.jpg');
    background-position:center;
    background-size:cover;
    background-attachment:fixed;
        }
.personal-eligible{
    background:linear-gradient(#2e86de,#0abde3,#48dbfb);
}
.logo a{
    color:white;
    margin-top:2px;
}
.logo i{
    font-size:40px; 
}
    </style>
</head>
<body>
  <?php include 'partials/nav.php' ?>
  <?php include 'partials/sidebar.php' ?>
   <section id="section-personal-eligible">
      <div class="container text-center rellax text-light" data-rellax-speed="-4">
              <h4>Great! You are eligible for a loan.</h4>
            <h4>Find best loan offers by providing below details</h4>
      </div>
      <div class="container registration-form2 px-md-5">
       <div class="card rellax mx-md-5" data-rellax-speed="2">
          <div class="card-header p-md-4 text-dark">
             <div class="registration-step">2</div>
              <h1 class="display-4 text-center"><i class="fas fa-check-circle" style="font-size:50px;color:green;"></i> Eligible</h1>
          </div>
          <div class="card-body">
            <form action="#" method="post" class="my-4">
                 <div class="col-auto form-group">
                    <label for="amount">How much do you need?</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                        </div>
                        <input type="number" name="amount" id="amount" placeholder="Enter Amount" class="form-control" />
                      </div>
                 </div>
                 <div class="col-auto form-group">
                     <label>Gender</label><br>
                     <input type="radio" id="male" value="female" name="gender" />
                     <label for="male" style="color:black;">Male</label>
                     <input type="radio" id="female" value="female" name="gender" />
                     <label for="female" style="color:black;">Female</label>
                 </div>
                 <div class="col-auto form-group">
                    <label for="dob">Date of Birth</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-table"></i></div>
                        </div>
                        <input type="date" name="dob" id="dob" class="form-control" />
                      </div>   
                 </div>
                 <div class="col-auto form-group">
                    <label for="pan">PAN Number</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-credit-card"></i></div>
                        </div>
                        <input type="number" name="pan" id="pan" placeholder="EX.AXTER873I"class="form-control" />
                      </div>
                 </div>
                 <div class="col-auto form-group">
                     <label for="pan_scan">PAN Card Scan</label><br>
                     <input type="file" name="pan_scan" id="pan_scan" accept="image/png,image/jpg,image/jpeg" />
                 </div>
                 <div class="col-auto form-group">
                     <label for="salary">How do you get your salary?</label><br>
                     <input type="radio" id="bank_transfer" value="bank_transfer" name="salary" />
                     <label for="bank_transfer" style="color:black;">Bank Transfer</label>
                     <input type="radio" id="by_cash" value="by_cash" name="salary" />
                     <label for="by_cash" style="color:black;">By Cash</label>
                     <input type="radio" id="cheque" value="cheque" name="salary" />
                     <label for="cheque" style="color:black;">Cheque</label>
                 </div>
                 <div class="col-auto form-group">
                     <label for="address">Current Residential Address</label>
                     <textarea name="address" id="address" placeholder="Address" class="form-control"></textarea>
                 </div>
                 <div class="col-auto form-group">
                    <label for="locality">Locality</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-globe-americas"></i></div>
                        </div>
                        <input type="text" name="locality" id="locality" placeholder="Locality"class="form-control" />
                      </div>
                     
                     
                 </div>
                 <div class="col-auto form-group">
                     <div class="row">
                         <div class="col-6 p-0 pr-1">
                            <label for="city">City</label>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                                <input type="text" name="city" id="city" placeholder="City "class="form-control" />
                              </div>
                         </div>
                         <div class="col-6 p-0 pl-1">
                            <label for="state">State</label>
                              <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                                <input type="text" name="state" id="state" placeholder="State "class="form-control" />
                              </div> 
                         </div>
                     </div>
                 </div>
                 <div class="col-auto form-group">
                     <label for="proof">Proof of Residence</label><br>
                     <input type="file" id="proof" name="proof" /><br>
                     <small class="text-muted">Ration card, Driving license, Voter id, Utility bills (Electricity , Water , Gas ), Passport</small>
                 </div>
                 <div class="col-auto form-group">
                     <label for="other_docs">Other Documents</label><br>
                     <input type="file"  id="other_docs" name="other_docs" multiple/><br>
                     <small class="text-muted">Bank Statement, Income proof, Bank statement, etc. </small>
                 </div>
                 <div class="col-auto form-group">
                     <h5 class="text-muted">Note: Please make sure these details are correct so that we can verify your credit score properly and get you the best offers.</h5>
                 </div>
                 <div class="col-auto form-group">
                     <input type="submit" class="btn my-primary-btn btn-block">
                 </div>
             </form>
        </div>
        </div>
    </div>   
    </section>
      
    <script src="public/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script src="vendor/rellax-master/rellax.min.js"></script>
</body>
</html>