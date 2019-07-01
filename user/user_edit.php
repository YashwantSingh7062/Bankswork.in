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
            min-height:70vh;
            width:100%;
            margin-top:110px;
        }
        #user_header .row{
            height:100%;
        }
        #user_header .left-column{
            background:#2c3e50;
            min-height:84vh;
        }
        #user_header .left-column ul li{
            height:80px;
            width:100%;
            text-align:center;
            line-height:80px;
        }
        #user_header .left-column ul li:nth-child(2){
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
            #user_header .left-column{
                min-height:80px;
                height:80px;
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
   <?php include '../partials/login-modal.php'?>
   <?php include '../partials/sidebar.php' ?>
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
    <section id="user_header">
        <div class="row">
            <div class="col-12 col-lg-1 p-0 left-column">
                <ul class="list-unstyled">
                    <li><a href="index.php"><i class="fas fa-user-edit"></i></a></li>
                    <li><a href="user_edit.php"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-11 right-column">
                <div class="container py-3">
                     <table class="table table-bordered table-striped">
                         <thead class="thead-dark">
                             <tr>
                                 <th>Order no.</th>
                                 <th>Loan Type</th>
                                 <th>Rate of Interest</th>
                                 <th>Loan Amount</th>
                                 <th>Edit Order</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>Personal Loan</td>
                                 <td>10.75%</td>
                                 <td>25000</td>
                                 <td><a href="edit_form.php" class="btn btn-primary">Edit</a></td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>Home Loan</td>
                                 <td>8.75%</td>
                                 <td>25000</td>
                                 <td><a href="edit_form.php" class="btn btn-primary">Edit</a></td>
                             </tr>
                         </tbody>
                     </table>   
                </div>
            </div>
        </div>
    </section>
<script src="../public/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>