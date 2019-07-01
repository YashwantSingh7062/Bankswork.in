<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Easy Loans available instantly at Bankswork. Our loans help meets all your financial needs at low-interest rates.">
    <meta name="keywords" content="loans,loan,getLoan,bankswork,Personal Loan, Home Loan, Mortgage Loan, Car Loan, User Car Loan">
    <meta name="author" content="Yashwant Singh">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/personal_loans.css">
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        #user_header{
            min-height:50vh;
            width:100%;
            margin-top:110px;
        }
        #user_header .row{
            height:100%;
        }
        #user_header .left-column{
            background:#2c3e50;
        }
        #user_header .left-column ul li{
            height:80px;
            width:100%;
            text-align:center;
            line-height:80px;
        }
        #user_header .left-column ul li:nth-child(1){
            background:#34495e;
        }
        #user_header .left-column ul li a{
            color:white;
            display:block;
        }
        #user_header .left-column ul li a i{
            font-size:25px;
        }
        @media screen and (max-width: 850px) {
            #user_header{
                margin-top:70px;
            }
            #user_header .left-column ul{
                display:flex;
            }
            #user_header .row .left-column{
                height:80px;
            }
        }
    </style>
 </head>
<body>
     <!-- NAVBAR -->
    <nav class="first-nav">
      <div class="container">
          <div class="row">
               <div class="col-4 col-md-2">
                    <div class="logo">
                       <a href="../index.php"><i class="fab fa-slack"></i>LOGO</a> 
                    </div>
                </div>
                <div class="col-2 col-md-7">
                   
                </div>
                <div class="col-4 col-md-2 text-right">
                    <a href="#login_modal" data-toggle="modal" class="login-btn btn btn-sm my-primary-btn">Login <i class="fas fa-user"></i></a>
                </div>
                <div class="col-1 text-center menu-bars text-dark">
                    <i class="fas fa-bars"></i>
                </div>
           </div>
      </div>
    </nav>
     <!-- SECOND NAVBAR -->
    <nav class="second-nav">
      <div class="container">
          <div class="row">
                <ul class="navbar-navul">
                    <li><a href="../personal_loans.php">Personal Loan</a></li>
                    <li><a href="../home_loans.php">Home Loan</a></li>
                    <li><a href="../mortgage_loan.php">Mortgage Loan</a></li>
                    <li><a href="../fresh_vehicle_finance.php">Car Loan</a></li>
                    <li><a href="../Re-finance_vehicle_loan.php">Used Car Loan</a></li>
                </ul>
           </div>
      </div>
    </nav>
    <?php include '../partials/login-modal.php'?>
   <?php include '../partials/sidebar.php' ?>
    <section id="user_header">
        <div class="row">
            <div class="col-12 col-md-1 p-0 left-column">
                <ul class="list-unstyled">
                    <li><a href="user.php"><i class="fas fa-user-edit"></i></a></li>
                    <li><a href="user_edit.php"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-11 right-column">
                <div class="container py-5">
                    <form action='' method='post'>
                    <fieldset >
                    <legend>Personal Information  <button type='reset' style='font-size:15px;border:none;background:transparent;color:#2874f0;outline:none;' id='profile_personal_edit'>Edit</button></legend>
                        <div class='form-group'>
                            <div class='row'>
                                <div class='col-12 col-sm-6 col-md-4'>
                                    <input type='text' value='Yashwant' name='profile_firstname' id='profile_firstname' class='form-control form-control-lg' style='font-size:13px;' disabled>
                                </div>
                                <div class='col-12 col-sm-6 col-md-4'>
                                    <input type='text' value='Singh'  name='profile_lastname' id='profile_lastname' class='form-control form-control-lg' style='font-size:13px;' disabled>
                                </div>
                                <div class='col-4'>
                                    <button type='submit' id='profile_personal_submit' name='profile_personal_submit' class='btn btn-primary btn-lg px-5' style='display:none;font-size:15px;border-radius:0px;'>SAVE</button>
                                </div>
                            </div>
                        </div>
                        <div class='form-group'>
                            <h5>Your Gender:</h5>
                    <input type='radio' name='profile_gender' value='Male' id='profile_gender_male' value='male' class=' mt-3' checked disabled>
                        <label for='profile_gender_male'>Male</label>
                        <input type='radio' name='profile_gender' value='Female' id='profile_gender_female' value='Female' class='ml-3 mt-3' disabled>
                        <label for='profile_gender_female'>Female</label>
                        <div class="col-auto form-group">
                             <label for="pan_scan">PAN Card Scan</label><br>
                             <input type="file" name="pan_scan" id="pan_scan" accept="image/png,image/jpg,image/jpeg" disabled />
                         </div>
                         <div class="form-group col-auto">
                            <label for="aadhar">Aadhar card scan</label><br>
                            <input type="file" name="aadhar" id="aadhar" disabled/>
                        </div>
                   <script>
                           $(document).ready(function(){
                               $('#profile_personal_edit').on({
                                       click : function(){
                                           if($(this).html() == 'Edit'){
                                               $(this).html('Cancel'); $('#profile_firstname,#profile_lastname,#profile_gender_male,#profile_gender_female,#pan_scan,#aadhar').removeAttr('disabled');
                                               $('#profile_personal_submit').css('display','block');
                                           }
                                           else{
                                               $(this).html('Edit'); $('#profile_firstname,#profile_lastname,#profile_gender_male,#profile_gender_female,#pan_scan,#aadhar').attr('disabled','true');
                                               $('#profile_personal_submit').css('display','none');
                                           }
                                       }
                                });
                            });
                        </script>  
            </div>
                </fieldset>
                </form>
                <form action=''>
                <fieldset style='margin-top:40px;'>
                    <legend>Email Address <button type='reset' style='font-size:15px;border:none;background:transparent;color:#2874f0;outline:none;' id='profile_email_edit'>Edit</button></legend>
                    <div class='form-group'>
                        <div class='row'>
                            <div class='col-12 col-sm-12 col-md-4 col-xl-4'>
                                <input type='email' value='yashwantsingh7062@gmail.com' name='profile_email' id='profile_email' class='form-control form-control-lg' style='font-size:13px;' disabled>
                            </div>
                            <div class='col-12 col-sm-12 col-md-4 col-xl-4'>
                                <button type='submit' id='profile_email_submit' name='profile_email_submit' class='btn btn-primary btn-lg px-5' style='display:none;font-size:15px;border-radius:0px;'>SAVE</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                </form>
                <script>
                    $(document).ready(function(){
                        $('#profile_email_edit').on({
                            click : function(){
                                if($(this).html() == 'Edit'){
                                    $(this).html('Cancel'); $('#profile_email').removeAttr('disabled');
                                    $('#profile_email_submit').css('display','block');
                                }
                                else{
                                    $(this).html('Edit'); $('#profile_email').attr('disabled','true');
                                    $('#profile_email_submit').css('display','none');
                                }
                            }
                        });
                    });
                </script>
                <form action=''>
                <fieldset style='margin-top:40px;'>
                    <legend>Address <button type='reset' style='font-size:15px;border:none;background:transparent;color:#2874f0;outline:none;' id='profile_address_edit'>Edit</button></legend>
                    <div class='form-group'>
                        <div class='row'>
                            <div class='col-12 col-sm-12 col-md-4 col-xl-4'>
                               <textarea placeholder="21, Ganga Sagar Scheme, Vaishali Nagar, Jaipur, Rajasthan-302021" name="profile_address" id="profile_address" class="form-control font-control-lg" style="font-size:13px;" disabled></textarea>
                            </div>
                            <div class='col-12 col-sm-12 col-md-4 col-xl-4'>
                                <button type='submit' id='profile_address_submit' name='profile_address_submit' class='btn btn-primary btn-lg px-5' style='display:none;font-size:15px;border-radius:0px;'>SAVE</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                </form>
                <script>
                    $(document).ready(function(){
                        $('#profile_address_edit').on({
                            click : function(){
                                if($(this).html() == 'Edit'){
                                    $(this).html('Cancel'); $('#profile_address').removeAttr('disabled');
                                    $('#profile_address_submit').css('display','block');
                                }
                                else{
                                    $(this).html('Edit'); $('#profile_address').attr('disabled','true');
                                    $('#profile_address_submit').css('display','none');
                                }
                            }
                        });
                    });
                </script>
                <form action='' method='post'>
                <fieldset style='margin-top:40px;'>
                    <legend>Mobile Number <button type='reset' style='font-size:15px;border:none;background:transparent;color:#2874f0;outline:none;' id='profile_mobile_edit'>Edit</button></legend>
                    <div class='form-group'>
                        <div class='row'>
                            <div class='col-12 col-sm-12 col-md-4 col-xl-4'>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <div class='input-group-text'>
                                            <small>+91</small>
                                        </div>
                                    </div>
                                    <input type='number' value='7062788010' name='profile_mobile_number' id='profile_mobile_number' class='form-control form-control-lg' style='font-size:13px;' disabled>
                                </div>
                            </div>
                            <div class='col-4'>
                                <button type='submit' id='profile_mobile_submit' name='profile_mobile_submit' class='btn btn-primary btn-lg px-5' style='display:none;font-size:15px;border-radius:0px;'>SAVE</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                </form>
                <script>
                    $(document).ready(function(){
                        $('#profile_mobile_edit').on({
                            click : function(){
                                if($(this).html() == 'Edit'){
                                    $(this).html('Cancel'); $('#profile_mobile_number').removeAttr('disabled');
                                    $('#profile_mobile_submit').css('display','block');
                                }
                                else{
                                    $(this).html('Edit'); $('#profile_mobile_number').attr('disabled','true');
                                    $('#profile_mobile_submit').css('display','none');
                                }
                            }
                        });
                    });
                </script>
                <a href='' id='deactivate_account'>Deactivate Account </a> 
                <script>
                    $(document).ready(function(){
                        $('#deactivate_account').click(function(e){
                            var answer = confirm('Do you really want to deactivate this account');
                            if(answer == false){
                                e.preventDefault();
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</section>
<script src="../public/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>