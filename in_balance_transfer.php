<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Easy Loans available instantly at Bankswork. Our loans help meets all your financial needs at low-interest rates.">
    <meta name="keywords" content="loans,loan,getLoan,bankswork,Personal Loan, Home Loan, Mortgage Loan, Car Loan, User Car Loan">
    <meta name="author" content="Yashwant Singh">
    <title>In Balance Transfer</title>
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
      <div class="container registration-form2 mt-5 px-md-5">
       <div class="card mx-md-5">
          <div class="card-header p-md-4 text-dark">
             <div class="registration-step">3</div>
              <h1 class="display-4 text-center">Balance Transfer</h1>
          </div>
          <div class="card-body">
            <form action="#" method="post" class="my-4">
                 <div class="col-auto form-group">
                    <label for="amount">Current Loan Amount</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                        </div>
                        <input type="number" name="amount" id="amount" placeholder="Enter Amount" class="form-control" />
                      </div>
                 </div>
                 <div class="col-auto form-group">
                    <label for="loan_rate">Loan Rate of Interest</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">%</div>
                        </div>
                        <input type="text" name="loan_rate" id="loan_rate" value="10.75%" class="form-control"/>
                      </div>   
                 </div>
                 <div class="col-auto form-group">
                    <label for="fincance_instution_name">Finance Institution Name</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
                        </div>
                        <input type="text" name="fincance_instution_name" id="fincance_instution_name" placeholder="Institution Name"class="form-control" />
                      </div>
                 </div>
                 <div class="col-auto form-group">
                     <label for="loan_sanction_letter">Loan Sanction Letter</label><br>
                     <input type="file" id="loan_sanction_letter" name="loan_sanction_letter" />
                 </div>
                 <div class="col-auto form-group">
                     <label for="loan_foreclosure_letter">Loan foreclosure letter</label><br>
                     <input type="file" id="loan_foreclosure_letter" name="loan_sforeclosure_letter" />
                 </div>
                 <div class="col-auto form-group">
                     <label for="loan_statement">Loan statement</label><br>
                     <input type="file" id="loan_statement" name="loan_statement" />
                 </div>
                 <div class="col-auto form-group">
                     <label for="loan_list_of_document">LOD List of documents</label><br>
                     <input type="file" id="loan_list_of_document" name="loan_list_of_document" multiple/><br>
                     <small class='text-muted'>other documents</small>
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