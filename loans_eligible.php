<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Easy Loans available instantly at Bankswork. Our loans help meets all your financial needs at low-interest rates.">
    <meta name="keywords" content="loans,loan,getLoan,bankswork,Personal Loan, Home Loan, Mortgage Loan, Car Loan, User Car Loan">
    <meta name="author" content="Yashwant Singh">
    <title>Bankswork</title>
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
  <?php include 'partials/nav2.php' ?>
  <?php include 'partials/login-modal.php' ?>
  <?php include 'partials/sidebar.php' ?>
   <section id="section-personal-eligible" class="mt-5">
      <div class="container mt-5 text-center rellax text-light" data-rellax-speed="-4">
              <h4>Great! You are eligible for a loan.</h4>
            <h4>Find best loan offers by providing below details</h4>
      </div>
      <div class="container registration-form2 px-md-5">
       <div class="card mx-md-5">
          <div class="card-header p-md-4 text-dark">
             <div class="registration-step">2</div>
              <h1 class="display-4 text-center"><i class="fas fa-check-circle" style="font-size:50px;color:green;"></i> Eligible</h1>
          </div>
          <div class="card-body">
            <form action="in_balance_transfer.php" method="post" class="my-4">
                 <div class="col-auto form-group">
                    <label for="amount">How much do you need?</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                        </div>
                        <input type="number" name="amount" id="amount" placeholder="Enter Amount" class="form-control" />
                      </div>
                 </div>
                 <div class="form-group col-auto">
                       <label>Balance Transfer</label><br>
                       <input type="radio" name="home-balance-tranfer" id="home-balance-tranfer-yes" value="Yes"/>
                       <label for="home-balance-transfer-yes">Yes</label>
                       <input type="radio" name="home-balance-tranfer" id="home-balance-tranfer-no" value="No"/>
                       <label for="home-balance-transfer-no">No</label>
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
                     <label for="pan_scan">PAN Card Scan</label><br>
                     <input type="file" name="pan_scan" id="pan_scan" accept="image/png,image/jpg,image/jpeg" />
                 </div>
                 <div class="form-group col-auto">
                    <label for="aadhar">Aadhar card scan</label><br>
                    <input type="file" name="aadhar" id="aadhar"/>
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
                 <!--If Personal loans If Salaried -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Personal loans - If Salaried</small></legend>
                     <div class="form-group col-auto">
                         <label for="personal-salaried-income-proof">Income Proof</label><br>
                         <input type="file" id="personal-salaried-income-proof" name="personal-salaried-income-proof" /><br>
                         <small class='text-muted'>3 month latest salary slip / form 16, Bank statement ( where your salary is deposited for the last three month)</small>
                     </div>
                 </fieldset>
                 
                 <!--If Personal loans If self employeed -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Personal loans - If Self Employeed</small></legend>
                     <div class="form-group col-auto">
                         <label for="personal-self-office-address-location">Proof of office address location</label><br>
                         <input type="file" id="personal-self-office-address-location" name="personal-self-office-address-location" /><br>
                         <small class='text-muted'>Rent agreement copy, electricity bill, documents copy</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="personal-self-business-profile">Proof of business existence/profile </label><br>
                         <input type="file" id="personal-self-business-profile" name="personal-self-business-profile" /><br>
                         <small class='text-muted'>company registration license, shop registration, Any tax registration copy, any business registration proof</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="personal-self-income-proof">Income proof </label><br>
                         <input type="file" id="personal-self-income-proof" name="personal-self-income-proof" /><br>
                         <small class='text-muted'>latest 3 year ITR for individual and business, Profit &amp; loss a/c latest  3 year validated by an authorized CA</small>
                     </div>
                 </fieldset>
                 
                  <!--If Home loans If Salaried -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Home loans - If Salaried</small></legend>
                     <div class="form-group col-auto">
                         <label for="home-salaried-income-proof">Income Proof</label><br>
                         <input type="file" id="home-salaried-income-proof" name="home-salaried-income-proof" /><br>
                         <small class='text-muted'>3 month latest salary slip / form 16, Bank statement ( where your salary is deposited for the last three month)</small>
                     </div>
                     <div class="form-group col-auto">
                        <label for="home-salaried-property-type">Property Type </label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                          </div>
                          <input type="text" id="home-salaried-property-type" name="home-salaried-property-type" placeholder="Ex. JDA Patta" class="form-control"/>
                        </div>
                        <small class='text-muted'>( JDA patta, society patta, panchayat patta, Nagar nigam patta, agriculture patta , registry),( society name :- if mention property title is society patta )</small>  
                     </div>
                     <div class="form-group col-auto">
                         <label for="home-salaried-property-paper">Property Papers </label><br>
                         <input type="file" id="home-salaried-property-paper" name="home-salaried-property-paper" /><br>
                     </div>
                     <div class="col-auto form-group">
                         <label for="home-salaried-property-address">Purchase/construction property address</label>
                         <textarea name="home-salaried-property-address" id="home-salaried-property-address" placeholder="Ex. 21 ,Ganga Sagar Scheme, Vaishali Nagar, Jaipur" class="form-control"></textarea>
                     </div>
                     <div class="form-group col-auto">
                      <label for="home-salaried-purchase-property-type">Purchase property type</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-home"></i></div>
                        </div>
                       <select name="home-salaried-purchase-property-type" id="home-salaried-purchase-property-type" class="form-control">
                           <option selected disabled>---Select Type----</option>
                           <option value="open land">open land </option>
                           <option value="fully construction">fully construction</option>
                       </select>
                       </div> 
                   </div>
                 </fieldset>
                 
                 <!--If Home loans If self employeed -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Home loans - If Self Employeed</small></legend>
                     <div class="form-group col-auto">
                         <label for="home-self-income-proof">Income proof </label><br>
                         <input type="file" id="home-self-income-proof" name="home-self-income-proof" /><br>
                         <small class='text-muted'>latest 3 year ITR for individual and business, Profit &amp; loss a/c latest  3 year validated by an authorized CA</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="home-self-office-address-location">Proof of office address location</label><br>
                         <input type="file" id="home-self-office-address-location" name="home-self-office-address-location" /><br>
                         <small class='text-muted'>Rent agreement copy, electricity bill, documents copy</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="home-self-business-profile">Proof of business existence/profile </label><br>
                         <input type="file" id="home-self-business-profile" name="home-self-business-profile" /><br>
                         <small class='text-muted'>company registration license, shop registration, Any tax registration copy, any business registration proof</small>
                     </div>
                     <div class="form-group col-auto">
                        <label for="home-self-property-type">Property Type </label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                          </div>
                          <input type="text" id="home-self-property-type" name="home-self-property-type" placeholder="Ex. JDA Patta" class="form-control"/>
                        </div>
                        <small class='text-muted'>( JDA patta, society patta, panchayat patta, Nagar nigam patta, agriculture patta , registry),( society name :- if mention property title is society patta )</small> 
                     </div>
                     <div class="form-group col-auto">
                         <label for="home-self-property-paper">Property Papers </label><br>
                         <input type="file" id="home-self-property-paper" name="home-self-property-paper" /><br>
                     </div>
                     <div class="col-auto form-group">
                         <label for="home-self-property-address">Purchase/construction property address</label>
                         <textarea name="home-self-property-address" id="home-self-property-address" placeholder="Ex. 21 ,Ganga Sagar Scheme, Vaishali Nagar, Jaipur" class="form-control"></textarea>
                     </div>
                     <div class="form-group col-auto">
                      <label for="home-self-purchase-property-type">Purchase property type</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-home"></i></div>
                        </div>
                       <select name="home-self-purchase-property-type" id="home-self-purchase-property-type" class="form-control">
                           <option selected disabled>---Select Type----</option>
                           <option value="open land">open land </option>
                           <option value="fully construction">fully construction</option>
                       </select>
                       </div> 
                   </div>
                 </fieldset>
                 
                 <!--If Mortgage loans If Salaried -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Mortgage loans - If Salaried</small></legend>
                     <div class="form-group col-auto">
                         <label for="mortgage-salaried-income-proof">Income Proof</label><br>
                         <input type="file" id="mortgage-salaried-income-proof" name="mortgage-salaried-income-proof" /><br>
                         <small class='text-muted'>3 month latest salary slip / form 16, Bank statement ( where your salary is deposited for the last three month)</small>
                     </div>
                     <div class="form-group col-auto">
                        <label for="mortgage-salaried-property-type">Property Type </label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                          </div>
                          <input type="text" id="mortgage-salaried-property-type" name="mortgage-salaried-property-type" placeholder="Ex. JDA Patta" class="form-control"/>
                        </div>
                        <small class='text-muted'>( JDA patta, society patta, panchayat patta, Nagar nigam patta, agriculture patta , registry),( society name :- if mention property title is society patta )</small> 
                     </div>
                     <div class="form-group col-auto">
                         <label for="mortgage-salaried-property-paper">Property Papers </label><br>
                         <input type="file" id="mortgage-salaried-property-paper" name="mortgage-salaried-property-paper" /><br>
                     </div>
                 </fieldset>
                 
                 <!--If Mortgage loans If self employeed -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Mortgage loans - If Self Employeed</small></legend>
                     <div class="form-group col-auto">
                         <label for="mortgage-self-office-address-location">Proof of office address location</label><br>
                         <input type="file" id="mortgage-self-office-address-location" name="mortgage-self-office-address-location" /><br>
                         <small class='text-muted'>Rent agreement copy, electricity bill, documents copy</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="mortgage-self-business-profile">Proof of business existence/profile </label><br>
                         <input type="file" id="mortgage-self-business-profile" name="mortgage-self-business-profile" /><br>
                         <small class='text-muted'>company registration license, shop registration, Any tax registration copy, any business registration proof</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="mortgage-self-income-proof">Income proof </label><br>
                         <input type="file" id="mortgage-self-income-proof" name="mortgage-self-income-proof" /><br>
                         <small class='text-muted'>latest 3 year ITR for individual and business, Profit &amp; loss a/c latest  3 year validated by an authorized CA</small>
                     </div>
                     <div class="form-group col-auto">
                        <label for="mortgage-self-property-type">Property Type </label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-home"></i></div>
                          </div>
                          <input type="text" id="mortgage-self-property-type" name="mortgage-self-property-type" placeholder="Ex. JDA Patta" class="form-control"/>
                        </div>
                        <small class='text-muted'>( JDA patta, society patta, panchayat patta, Nagar nigam patta, agriculture patta , registry),( society name :- if mention property title is society patta )</small> 
                     </div>
                     <div class="form-group col-auto">
                         <label for="mortgage-self-property-paper">Property Papers </label><br>
                         <input type="file" id="mortgage-self-property-paper" name="mortgage-self-property-paper" /><br>
                     </div>
                 </fieldset>
                 
                 <!--If Car loans If Salaried -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Car loans - If Salaried</small></legend>
                     <div class="form-group col-auto">
                         <label for="car-salaried-income-proof">Income Proof</label><br>
                         <input type="file" id="car-salaried-income-proof" name="car-salaried-income-proof" /><br>
                         <small class='text-muted'>3 month latest salary slip / form 16, Bank statement ( where your salary is deposited for the last three month)</small>
                     </div>
                 </fieldset>
                 
                 <!--If Car loans If self employeed -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Car loans - If Self Employeed</small></legend>
                     <div class="form-group col-auto">
                         <label for="car-self-office-address-location">Proof of office address location</label><br>
                         <input type="file" id="car-self-office-address-location" name="car-self-office-address-location" /><br>
                         <small class='text-muted'>Rent agreement copy, electricity bill, documents copy</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="car-self-business-profile">Proof of business existence/profile </label><br>
                         <input type="file" id="car-self-business-profile" name="car-self-business-profile" /><br>
                         <small class='text-muted'>company registration license, shop registration, Any tax registration copy, any business registration proof</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="car-self-income-proof">Income proof </label><br>
                         <input type="file" id="car-self-income-proof" name="car-self-income-proof" /><br>
                         <small class='text-muted'>latest 3 year ITR for individual and business, Profit &amp; loss a/c latest  3 year validated by an authorized CA</small>
                     </div>
                 </fieldset>
                 
                 <!--If Used Car loans If Salaried -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Used Car loans - If Salaried</small></legend>
                     <div class="form-group col-auto">
                         <label for="used-car-salaried-income-proof">Income Proof</label><br>
                         <input type="file" id="used-car-salaried-income-proof" name="used-car-salaried-income-proof" /><br>
                         <small class='text-muted'>3 month latest salary slip / form 16, Bank statement ( where your salary is deposited for the last three month)</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="used-car-salaried-rc-copy">RC Copy</label><br>
                         <input type="file" id="used-car-salaried-rc-copy" name="used-car-salaried-rc-copy" />
                     </div>
                     <div class="form-group col-auto">
                         <label for="used-car-salaried-insurance-copy">Insurance Copy</label><br>
                         <input type="file" id="used-car-salaried-insurance-copy" name="used-car-salaried-insurance-copy" />
                     </div>
                 </fieldset>
                 
                 <!--If Used Car loans If self employeed -->
                 <fieldset style="border:1px solid silver;">
                   <legend><small class="text-muted">If Used Car loans - If Self Employeed</small></legend>
                     <div class="form-group col-auto">
                         <label for="used-car-self-office-address-location">Proof of office address location</label><br>
                         <input type="file" id="used-car-self-office-address-location" name="used-car-self-office-address-location" /><br>
                         <small class='text-muted'>Rent agreement copy, electricity bill, documents copy</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="used-car-self-business-profile">Proof of business existence/profile </label><br>
                         <input type="file" id="used-car-self-business-profile" name="used-car-self-business-profile" /><br>
                         <small class='text-muted'>company registration license, shop registration, Any tax registration copy, any business registration proof</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="used-car-self-income-proof">Income proof </label><br>
                         <input type="file" id="used-car-self-income-proof" name="used-car-self-income-proof" /><br>
                         <small class='text-muted'>latest 3 year ITR for individual and business, Profit &amp; loss a/c latest  3 year validated by an authorized CA</small>
                     </div>
                     <div class="form-group col-auto">
                         <label for="used-car-self-rc-copy">RC Copy</label><br>
                         <input type="file" id="used-car-self-rc-copy" name="used-car-self-rc-copy" />
                     </div>
                     <div class="form-group col-auto">
                         <label for="used-car-self-insurance-copy">Insurance Copy</label><br>
                         <input type="file" id="used-car-self-insurance-copy" name="used-car-self-insurance-copy" />
                     </div>
                 </fieldset>
                 
                 
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
</body>
</html>