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
</head>
<body>
    <section class="personal-eligible">
        <div class="container">
            <div class="row">
                <div class="col-3 py-2">
                    <div class="logo">
                        <a href="index.php"><i class="fab fa-slack"></i>LOGO</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center py-5">
                    <h4>Great! You are eligible for a loan.</h4>
                    <h4>Find best loan offers by providing below details</h4>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="registration-form card">
                       <div class="card-body">
                          <div class="step-1">
                              2
                          </div> <h4>Additional Details</h4>
                           <form action="#" method="post" class="my-4">
                                <div class="form-group">
                                    <label for="amount">How much do you need?</label>
                                    <input type="number" name="amount" id="amount" placeholder="Enter Amount" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Gender</label><br>
                                    <input type="radio" id="male" value="female" name="gender" />
                                    <label for="male" style="color:black;">Male</label>
                                    <input type="radio" id="female" value="female" name="gender" />
                                    <label for="female" style="color:black;">Female</label>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="pan">PAN Number</label>
                                    <input type="number" name="pan" id="pan" placeholder="EX.AXTER873I"class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="salary">How do you get your salary?</label><br>
                                    <input type="radio" id="bank_transfer" value="bank_transfer" name="salary" />
                                    <label for="bank_transfer" style="color:black;">Bank Transfer</label>
                                    <input type="radio" id="by_cash" value="by_cash" name="salary" />
                                    <label for="by_cash" style="color:black;">By Cash</label>
                                    <input type="radio" id="cheque" value="cheque" name="salary" />
                                    <label for="cheque" style="color:black;">Cheque</label>
                                </div>
                                <div class="form-group">
                                    <label for="address">Current Residential Address</label>
                                    <textarea name="address" id="address" placeholder="Address" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="locality">Locality</label>
                                    <input type="text" name="locality" id="locality" placeholder="Locality"class="form-control" />
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6 p-0 pr-1">
                                            <label for="city">City</label>
                                            <input type="text" name="city" id="city" placeholder="City "class="form-control" />
                                        </div>
                                        <div class="col-6 p-0 pl-1">
                                            <label for="state">State</label>
                                            <input type="text" name="state" id="state" placeholder="State "class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="text-muted">Note: Please make sure these details are correct so that we can verify your credit score properly and get you the best offers.</h5>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn my-primary-btn btn-block">
                                </div>
                            </form>
                       </div>
                   </div>
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