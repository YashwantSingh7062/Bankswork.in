<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Home Loans</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <link rel="stylesheet" type="text/css" href="public/css/personal_loans.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <style>
        
    </style>
</head>
<body>
    <?php include 'partials/nav.php'; ?> 
    <?php include 'partials/sidebar.php' ?>
    <header id="header-home-loans">
      <div class="container text-center rellax" data-rellax-speed="-4">
              <h1 class="display-4">
                  Home loans starting at 10.75%
              </h1>
              <p>Apply for an online Home loan at low interest rates and get instant approval.</p>
      </div>   
    </header>
    <div class="container registration-form px-md-5">
       <div class="card rellax mx-md-5" data-rellax-speed="2">
          <div class="card-header p-md-4">
             <div class="registration-step">1</div>
              <h1 class="display-4 text-center"><i class="fas fa-home" style="font-size:50px;"></i> Home Loan Registration</h1>
          </div>
           <div class='card-body'>
               <form action="loans_eligible.php" method="post">
                   <div class="form-group col-auto">
                      <label for="name">Full Name(As per PAN Card)</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="form-control" />
                      </div>
                    </div>
                    <div class="form-group col-auto">
                      <label for="phone">Mobile Number</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+91</div>
                        </div>
                        <input type="number" name="phone" id="phone" placeholder="Mobile Number" class="form-control" />
                      </div>
                    </div>
                    <div class="form-group col-auto">
                      <label for="email">Email Id</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="email" name="email" id="email" placeholder="Ex. JhonDoe@gmail.com" class="form-control" />
                      </div>
                   </div>
                   <div class="form-group col-auto">
                      <label for="loan_type">Loan Type</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-house-damage"></i></div>
                        </div>
                       <select name="loan_type" id="loan_type" class="form-control">
                           <option selected disabled>---Select Type----</option>
                           <option value="Purchase">Purchase</option>
                           <option value="Construction">Construction</option>
                           <option value="Purchase/Construction">Purchase/Construction</option>
                       </select>
                       </div> 
                   </div>
                   <div class="form-group col-auto">
                      <label for="salary">Salary Amount</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-rupee-sign"></i></div>
                        </div>
                        <input type="number" name="salary" id="salary" placeholder="Amount" class="form-control" />
                      </div>
                   </div>
                   <div class="form-group col-auto">
                      <label for="pin">PIN Code</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-map-pin"></i></div>
                        </div>
                        <input type="number" name="pin" id="pin" placeholder="PIN Code" class="form-control" />
                      </div>
                   </div>
                   <div class="form-group col-auto">
                      <label for="aadhar">Aadhar card scan</label><br>
                       <input type="file" name="aadhar" id="aadhar"/>
                   </div>
                   <div class="form-group col-auto">
                       <input type="submit" class="btn my-primary-btn btn-block"/>
                   </div> 
                </form>
           </div>
       </div>
    </div>

    <?php include 'partials/login-modal.php'; ?>
   
   <section class="home-loan-details">
      <div class="container">
       <div class="container clear sec-head" id="compare-now">
<table class="table table-bordered table-curved"><tbody><tr><th class="th">Bank</th><th class="th">Home Loan Rate</th><th class="th">Processing Fee</th></tr><tr><td>SBI Home Loan </td><td>8.55%</td>
<td></td></tr><tr><td>HDFC Home Loan </td><td>8.60%</td>
<td>0.50% <br>Min Rs. 3,000 - Max Rs. 10,000</td></tr><tr><td>ICICI Bank Home Loan </td><td>9.05%</td>
<td>0.25% <br>Min Rs. 5,000 - Max Rs. 5,000</td></tr><tr><td>Axis Bank </td><td>8.90%</td>
<td>0.50% <br>Min Rs. 1,000 - Max Rs. 25,000</td></tr><tr><td>PNB Housing Finance </td><td>9.05%</td>
<td>1.00% <br>Min Rs. 10,000 - Max Rs. 10,000</td></tr><tr><td>Bank of Baroda </td><td>8.65%</td>
<td>0.50% <br>Min Rs. 7,500 - Max Rs. 20,000</td></tr><tr><td>LIC Housing Finance </td><td>8.70%</td>
<td>0.50% <br></td></tr><tr><td>Indiabulls </td><td>9.25%</td>
<td>Min Rs. 7,500 - Max Rs. 10,000</td></tr><tr><td>Citibank  </td><td>8.75%</td>
<td>Nil </td></tr><tr><td>DBS Bank </td><td>9.50%</td>
<td>Max Rs. 10,000</td></tr><tr><td>DHFL </td><td>9.75%</td>
<td>0.50% <br>Min Rs. 2,500 - Max Rs. 20,000</td></tr><tr><td>Kotak Bank  </td><td>8.90%</td>
<td>Max Rs. 10,000</td></tr><tr><td>Canara Bank </td><td>8.75%</td>
<td>0.50% <br>Min Rs. 1,500 - Max Rs. 10,000</td></tr><tr><td>Tata Capital</td><td>9.05%</td>
<td>0.50% <br></td></tr><tr><td>LT Housing Finance </td><td>9.90%</td>
<td>2.00% <br>Min Rs. 4,999</td></tr><tr><td>UCO Bank </td><td>8.70%</td>
<td>0.50% <br>Min Rs. 1,500 - Max Rs. 15,000</td></tr><tr><td>Reliance Capital </td><td>10.00%</td>
<td>1.00% <br>Min Rs. 3,000 - Max Rs. 6,500</td></tr><tr><td>OBC  </td><td>8.75%</td>
<td>0.50% <br>Max Rs. 20,000</td></tr><tr><td>Jammu And Kashmir Bank </td><td>8.85%</td>
<td>0.25% <br>Min Rs. 500 - Max Rs. 10,000</td></tr><tr><td>IDBI Bank  </td><td>8.80%</td>
<td>0.50% <br>Min Rs. 2,500</td></tr><tr><td>Federal Bank  </td><td>8.75%</td>
<td>0.50% <br>Min Rs. 3,000 - Max Rs. 7,500</td></tr><tr><td>Dhan Laxmi Bank </td><td>9.90%</td>
<td>1.00% <br>Min Rs. 10,000</td></tr><tr><td>Corporation Bank  </td><td>9.00%</td>
<td>0.50% <br>Min Rs. 1,000 - Max Rs. 50,000</td></tr><tr><td>Piramal Housing Finance </td><td>9.00%</td>
<td>0.10% <br></td></tr><tr><td>Bank of Maharashtra  </td><td>8.75%</td>
<td>0.50% <br></td></tr><tr><td>Yes Bank </td><td>9.35%</td>
<td>0.75% <br>Max Rs. 10,000</td></tr><tr><td>Andhra Bank </td><td>8.80%</td>
<td>0.50% <br>Max Rs. 10,000</td></tr><tr><td>United Bank of India </td><td>8.65%</td>
<td>0.59% <br>Min Rs. 1,180 - Max Rs. 11,800</td></tr><tr><td>Standard Chartered Bank </td><td>9.41%</td>
<td>1.00% <br>Min Rs. 5,000 - Max Rs. 10,000</td></tr><tr><td>Syndicate Bank  </td><td>8.75%</td>
<td>0.13% <br>Min Rs. 500 - Max Rs. 5,000</td></tr><tr><td>PNB  </td><td>8.65%</td>
<td>0.50% <br>Min Rs. 20,000 - Max Rs. 50,000</td></tr><tr><td>RBL Bank  </td><td>10.45%</td>
<td>Min Rs. 5,000 - Max Rs. 15,000</td></tr><tr><td>Karur Vysya Bank  </td><td>9.65%</td>
<td>Min Rs. 5,000</td></tr><tr><td>Indian Overseas Bank </td><td>8.70%</td>
<td>0.53% <br>Min Rs. 8,900 - Max Rs. 13,350</td></tr><tr><td>HSBC Bank  </td><td>8.85%</td>
<td>1.00% <br>Max Rs. 10,000</td></tr><tr><td>Edelweiss  </td><td>10.50%</td>
<td>0.25% <br></td></tr><tr><td>DCB Bank </td><td>10.24%</td>
<td>2.00% <br>Min Rs. 5,000</td></tr><tr><td>Central Bank of India </td><td>8.60%</td>
<td>0.50% <br>Max Rs. 20,000</td></tr><tr><td>IDFC First Bank  </td><td>9.60%</td>
<td>Min Rs. 5,000 - Max Rs. 5,000</td></tr><tr><td>Bank of India</td><td>8.85%</td>
<td>0.25% <br>Min Rs. 1,000 - Max Rs. 20,000</td></tr><tr><td>IIFL </td><td>9.50%</td>
<td>1.00% <br>Max Rs. 10,000</td></tr><tr><td>Allahabad Bank  </td><td>8.85%</td>
<td>0.40% <br>Max Rs. 50,000</td></tr><tr><td>Union Bank of India </td><td>8.80%</td>
<td>0.50% <br>Max Rs. 15,000</td></tr><tr><td>South Indian Bank  </td><td>9.45%</td>
<td>1.00% <br>Max Rs. 10,000</td></tr><tr><td>Punjab and Sind Bank  </td><td>8.85%</td>
<td>0.25% <br>Min Rs. 1,000 - Max Rs. 15,000</td></tr><tr><td>Lakshmi Vilas Bank  </td><td>10.00%</td>
<td>0.40% <br>Min Rs. 10,000 - Max Rs. 20,000</td></tr><tr><td>Karnataka Bank </td><td>8.90%</td>
<td>0.25% <br>Min Rs. 250</td></tr><tr><td>Indian Bank </td><td>8.60%</td>
<td>0.23% <br>Max Rs. 20,381</td></tr><tr><td>GIC Housing Finance  </td><td>10.25%</td>
<td>Min Rs. 2,500</td></tr></tbody></table></div>
  
  <div class="content-area col-sm-9">
   <p>As per the current rates, SBI offer the lowest home loan interest rate of 8.55%. These rates can vary depending upon the value of the property and your repayment capacity. Higher the loan amount, higher will be the rate of interest.
    <br>After the latest home loan rate revision announced by  SBI in 2019, new home loan interest rates start from 8.55% for home buyers as well as for those who want to transfer their loan from other banks.</p>
    
     <div class="col-sm-12 list-group-item text-center"><a href="#video" style="line-height:25px;">Click here to watch our video on Tips to Get Best Home Loan in India</a> <div class="clear"></div>  </div>
     
<h3>Quick Guide on Home Loan</h3>
<p><b>Purpose : </b>Home loan can be used for purchasing a new house, construction of house on a plot, home improvement, extension and renovation of your existing house.</p>
<p><b>Key Features : </b></p>
<ul>
    <li><b>Eligibility : </b>Loan available for both salaried and self-employed borrowers within the age group of 18 and 70 years.</li>
    <li><b>Security : </b>Mortgage of home you are planning to purchase, renovate or construct.</li>
    <li><b>Loan Amount : </b>In the range of Rs. 1 Lakh to Rs. 15 Cr.</li>
    <li><b>Loan to Property Value Ratio : </b>Varies from 65% to 90%.</li>
    <li><b>Loan Tenure : </b>Can range from 5 to 30 years.</li>
    <li><b>Interest rates : </b>Home loan Interest Rates starting from 8.55%. Special rates for women borrowers.</li>
    <li><b>Lowest EMI : </b>Lowest EMI of Rs. 772 per lakh.</li>
    <li><b>Processing Fees : </b>Up to 1% of loan amount or Maximum Rs. 10,000.</li>
     <div class="clear"></div>
<div class="col-sm-12 list-group-item text-center">
<div class="clear"></div></div>
<li><b>Prepayment Charges : </b>Nil charges on floating rate home loans</li>
<div class="clear"></div>

<li><b>Other Charges : </b>Legal charges, technical charges etc.</li>
<li><b>Documents Required : </b>Address Proof, Identity Proof, Income Documents, Property Documents.</li>
</ul>
<p><b>Top Home Loan Providers : </b>Banks and Home loan companies such as SBI, ICICI Bank, HDFC Bank, Axis Bank, HDFC, PNB Housing, DHFL, Indiabulls Home Finance.</p>
<p><b>Popular Home Loan offers : </b>Banks offer schemes for special category of borrowers including women borrowers, senior citizens, NRIs etc. Banks also offer overdraft facility to save interest on house loan. Some of the popular home loan schemes are SBI special rates for women, HDFC Reach, Axis Bank 12 EMIs offer, Bank of Baroda pre-approved loans, Indiabulls e-home loans etc.</p>

<h2>Best Bank for Home Loan </h2>
            <p>MyLoanCare does a detailed comparison of all banks and housing loan companies on parameters of interest rates, processing fees, prepayment charges, lending process and customer service of banks on a regular basis. Based on latest schemes, the following banks should be in your consideration list for getting a house loan.</p>
 <div class="content-area-h3">Best Home Loans in India</div>  
            <table class="table table-curved"> <tbody> <tr> <th class="th">Bank with</th> <th class="th">Name of Bank or Home Loan Company</th> </tr><tr> <td class="width30">Cheapest home loan in India at 8.55 - 8.6%</td><td>SBI, HDFC, Central Bank of India, Indian Bank</td></tr><tr> <td>Lowest EMI Rs. 772 per lakh of home loan for max loan tenure of 30 years</td><td>SBI</td></tr><tr> <td>Lowest Processing Fees of upto Rs. 5,000 on housing loan</td><td>ICICI Bank, Syndicate Bank, IDFC First Bank</td></tr><tr> <td>Lowest Processing Fees as a percent of home loan of 0.10%</td><td>Piramal Housing Finance</td></tr><tr> <td>Customer Reviews Rating of 3.5 and above</td><td>Axis Bank, ICICI Bank, Citibank, Standard Chartered Bank, Edelweiss, GIC Housing Finance, Reliance Capital, HDFC, PNB Housing Finance, Bank of Baroda, Corporation Bank, IDBI Bank, PNB, SBI, DCB Bank, Federal Bank, Canara Bank, Central Bank of India, United Bank of India, DBS Bank, LT Housing Finance</td></tr></tbody> </table>
         <h3 id="video">Tips to get Best Home Loan</h3><div class=""><div id="play-video" onclick="play_video();"><span class="iframe iframe-img"></span></div><div id="video_id"></div></div>    



  <h4>How to Get Best Home Loan Rates in India</h4>
        <p>It has never been easier to get a housing loan, as today you can do online loan comparison based on interest rates, other loan terms and conditions of all banks before choosing the right loan offer. </p>
        <b class="font13">Step 1 : Check loan EMI and calculate eligibility</b>
        <p>As you decide to take a home loan, always estimate your loan amount eligibility to know the loan amount you will be eligible for and can apply for. Also calculate the monthly EMI that you can comfortably service given your net take home salary and other existing fixed obligations including rent and EMIs on other existing loans, if any. Your house loan eligibility is calculated based on your age, net income, existing obligations, property type, LTV ratio and other factors. EMI is dependent on the loan amount, interest rate and tenure. Once you understand your minimum loan requirement, your eligibility and monthly EMI you can comfortably service, shortlist the banks which offer you maximum loan amount to meet your requirements.</p>
         
            <b class="font13">Step 2 : Check property approval status and legal documents</b>
        <p>If you are buying a property from builder, then check for the banks which have approved the projects you have shortlisted. For resale property, check the approved map plans and ensure that all property registration papers for the complete chain from the first owner to current owner are in place. Shortlist the banks which lend on your chosen property.</p>
    
        <b class="font13">Step 3 : Decide on type of home loan interest rate offers</b>
        <p>As you narrow down the list of banks in Step 2 and 3, you need to conduct an interest rate on home loan comparison of the loan offers of various banks. Some of the interest rate offers that needs to be checked are:</p>
        <ul> <li>Choice between fixed and floating rates - Fixed rates come at a slightly higher rate of interest compared to floating rate loans and interest rate remains constant during the tenure of home loan. In floating rate loan, interest rates are reset at periodic intervals in response to changes in MCLR and PLR rates of banks or NBFCs. Majority of housing loans in India today are floating rate loans as it allows the borrowers to get home loan interest rate in line with the current interest rates.</li><li>Decide if you need a home saver loan - This is a loan with overdraft facility which allows you to deposit surplus amount in your home loan overdraft account as and when available, allowing you to reduce your overall interest amount. This loan is highly recommended for salaried individuals with high bonuses and self employed business which is seasonal and has fluctuating cash flows. The interest rates on overdraft loan is slightly higher than that of a regular housing loan interest rate.</li><li>You can also evaluate a mortgage guarantee house loan as it covers any default risk and allows the lender to give you loan at low rate of interest. You will however need to pay a mortgage guarantee fee to the bank.</li><li>Check and compare the current home loan interest rates of the banks on various types of loan products and take an informed decision.</li></ul>
            <b class="font13">Step 4 : Compare shortlisted banks</b>
        <p>In addition to interest rates, banks also charge many other fees on home loans. Along with interest rates, you should check other associated costs with a your loan which include prepayment charges, processing fee, insurance premium and other charges offered by the shortlisted banks. You should calculate all inclusive costs on home loan to be able to further shortlist the banks and reduce your choice to 2-3 banks.<br>You can take the help of loan advisors of online marketplaces like myloancare.in to be able to get details on home loan rates of all banks and take an informed decision.</p>
        <b class="font13">Step 5 : Select the bank based on other service related parameters</b>
        <p>Finally as you decide to take the loan, also consider other service and transparency related parameters of the chosen banks. Some of these factors are turnaround time offered by the banks, quick loan delivery, doorstep services, transparency in the loan process. You also need to understand the trends and changes in MCLR rates over a period of time. Last but not the least, read reviews of existing customers on banks on their services, interest rates and transparency to take your decision to borrow from a bank.</p>
        
                <h4>Home Loan Schemes</h4>
        <p>While, all banks and HFCs in India offer multiple home loan schemes,  some new schemes are quite popular in India due to their unique features and special discounted rates. Home Loan Banks like SBI, Axis Bank, Citibank, BoB and finance companies like HDFC, PNB Housing, Indiabulls are currently running many attractive schemes for housing loan borrowers. Some of the popular housing loan schemes have been captured in table below:</p>
        <table class="table table-curved doc-table"> <tbody> <tr> <th class="text-center th">Bank</th> <th class="text-center th">Scheme</th> <th class="text-center th">Features</th> </tr>
        <tr><td>SBI</td><td>For Women Borrowers</td><td>Loan is offered at concessional rate starting @ 8.55%.</td></tr><tr>
        <td></td>
        <td>Maxgain</td>
        <td>Home loan with overdraft facility @ 8.65%</td></tr><tr>
        <td>Axis Bank</td>
        <td>Home Loan Top Up</td><td>Loan to get additional loan amount. Interest rate of top up loan starts @ 8.90%</td></tr><tr>
        <td></td>
        <td>ShubhAarambh Home Loan</td>
        <td>Avail 12 EMI waiver offer at 8.90%</td></tr><tr>
        <td>HDFC</td>
        <td>HDFC Reach</td>
        <td>Home loan with less documentation starting @ 10.05%</td> </tr><tr><td>Indiabulls</td>
        <td>Indiabulls e-Home Loan</td>
        <td>Apply loan online @ 9.25% and get facilities like IB chat, e-sign, DigiLocker integration</td></tr><tr>
        <td>Bank of Baroda</td>
        <td>Pre-approved Home Loan</td>
        <td>Loan pre-approved by the bank @ 8.65% before the property is purchased by the applicant with a validity of 4 months</td></tr><tr>
        <td>Citibank</td>
        <td>Home Credit Loan</td>
        <td>Home loan with overdraft scheme @ 8.85%</td></tr><tr><td></td>
        <td>Citibank T-Bill Home Loan</td>
        <td>Innovative scheme in which floating rate home loans are benchmarked to 91 days Govt. T-Bill rate, thus making them completely transparent
        </td></tr></tbody> </table>
        
 <h3>Types of Home Loans</h3>
        <p>The table below summarises the popular types of home loans in India based on their purpose and interest rate. </p>
        <table class="table table-curved"> <tbody> <tr> <th class="th">Home Loan</th><th class="th">Purpose</th> </tr><tr> <td class="width30">New Home Loan</td><td>To buy a new flat, apartment or house from a builder or seller.Also includes loan for construction of house on an existing plot.</td></tr><tr><td>Home Improvement Loan</td>
            <td>To renovate your existing home like tiling, flooring, painting etc.</td></tr><tr><td>Home Extension Loan</td><td>To expand the house by adding new space like floor, room, balcony etc.</td></tr><tr><td>Land Purchase Loan</td><td>To purchase a plot and build a house.
Interest rates are 1.5-2% higher than a home loan, with prespecified time limit for construction</td></tr><tr><td>Home Conversion Loan</td><td>Scheme to allow borrowers to transfer their existing loan from fixed rate to floating rate or vice-versa 
A conversion fee is levied on the outstanding principal to switch your loan.</td></tr><tr><td>NRI Home Loans</td><td>Home Loan for Non Resident Indians to buy, construct or renovate a home in India.</td></tr><tr></tr><tr><td>Home Loan Overdraft</td><td>Borrowers can add surplus funds in an overdraft account for any period to reduce interest liability.
Interest rates are 0.15-0.2% higher than regular housing loan.</td></tr><tr><td>Home Loan Top Up</td><td>To borrow additional amount on existing home loan from same bank or at the time of balance transfer up to a percentage of property value.
Interest rates are 0.25-1% higher than regular housing loan.</td></tr><tr><td>Home Loan Balance Transfer</td><td>To transfer your home loan from to another bank offering lower interest rate to save interest and to get top up loan</td></tr><tr><td>Pre-approved Home Loan</td><td>Loans that are approved even before youcomplete property transaction based on credit history, current EMI obligations etc.Interest rates are low and pre-approved offer is valid up to 6 months</td></tr></tbody></table>



<h4 id="documents">List of Documents for Home Loan</h4>
        <table class="table table-curved doc-table"> <tbody> <tr> <th class="text-center th">Documents required</th> <th class="text-center th">Salaried</th> <th class="text-center th">Self Employed</th> </tr><tr> <td>Application Form</td><td>Signed with photographs</td><td>Signed with photographs</td></tr><tr> <td>Identity Proof</td><td>PAN card, Passport, Driving License, Aadhaar Card, Voter id, Govt issued i-card</td><td>PAN card, Passport, Driving License, Aadhaar Card, Voter id, Govt issued i-card</td></tr><tr> <td>Certificate and Proof of Business Existence</td><td></td><td>PAN, Sales tax/ Excise/ VAT/ Service tax registration, Copy of partnership deed, Trade license, Certificate of practice, Registration certificate issued by RBI, SEBI</td></tr><tr> <td>Address Proof</td><td>Passport, Driving License, Election ID card, Electricity/ Telephone/ Mobile bill/ Bank statement (not more than 3 months old) </td><td>Bank statement, Utility bill, Registry copy, Lease or rent agreement, TAN allotment letter </td></tr><tr> <td>Income Proof</td><td>Form 16, Latest 6 months salary slip, Last 6 months bank statement</td><td>Last 2 years ITR, Last 6 months bank statement</td></tr><tr> <td>Age Proof</td><td>PAN card, Passport, Driving License, Voter id card, Birth certificate, Employee ID card (only for PSU/ Government employees), School/ college leaving certificate </td><td>PAN card, Passport, Driving License, Voter id card, Birth certificate, Employee ID card (only for PSU/ Government employees), School/ college leaving certificate </td></tr><tr><td>Property Documents</td><td><b>Past title chain – </b>Conveyance deed, Sales deed, Allotment letter, Possession letter, Latest property tax receipt, Copy of approved plan for construction/ extension</td><td><b>Past title chain – </b>Conveyance deed, Sales deed, Allotment letter, Possession letter, Latest property tax receipt, Copy of approved plan for construction/ extension</td></tr></tbody> </table>

<h4>Compare Home Loan Processing Fees and Other Charges</h4>
<ul>
    <li><b>Home Loan processing fees -</b>Most banks charge processing fees of up to Rs. 10,000 or up to 1% on house loans, whichever is higher. To get lowest fee, comparison of home loan rates, offers and cashback, apply online through MyLoanCare.</li>
    <li><b>Home Loan prepayment and foreclosure -</b>Nobody wants to keep paying interest on a loan when you have surplus money available to repay it. When you want to repay your loan partially before time, it is called part prepayment. In case you decide to pay the entire loan amount before time, it is called foreclosure. Banks typically levy prepayment or foreclosure charges in such situations and these can range from nil to upto 5%. So, check carefully if the low rate of interest you are getting comes with high prepayment or foreclosure charges. Note that some home loans cannot be repaid before time.</li>
    <li><b>Special interest rates for specified category of borrowers -</b>Banks launch attractive schemes with low interest home loans on housing loans on a regular basis, especially for women borrowers. Hence, always check for home loan offers from multiple banks to get the cheapest rates.</li>
    <li><b>Other Charges -</b>Bank charges legal and technical fee from the borrower which are explained at the time you apply for loan.</li>
</ul>
  <h4 id="faqs">Frequently Asked Questions on Housing Loan</h4>
<div class="faq-head">
<span>How can I apply for home loan?</span>
<p>You can apply for loan in several ways. You can directly visit the bank branch and meet the sales person, contact a loan agent or apply online at any bank or NBFC’s website. You can also check and compare best interest rates of all banks online at MyLoanCare and apply for loan.</p>
<span>How can I apply home loan in my city?</span>
<p>Yes, you can apply home loan in your home town provided you have sufficient income to pay the EMIs on time and have good credit history. You can also compare home loan offers for different cities online at MyLoanCare and apply for the loan at lowest rates.</p>
<div class="clear"></div>
<div class="col-sm-12 list-group-item text-center">
<a href="#header-home-loans" style="line-height:25px;">Home Loan Application Form</a><div class="clear"></div></div>

<span>What is the minimum and maximum tenure of house loan?</span>
<p>These are generally taken for a longer period of time. The loan tenure for hosuing loan ranges from 5 years to 30 years.</p>

<span>What is the minimum CIBIL score required for home loan?</span>
<p>CIBIL score ranges from 300 to 900. A score of 650 and above is considered as good credit score to get housing loan. Higher the credit score, higher the chances to get loan approved.</p>

<span>How do I calculate the interest rate on my Home Loan taken some time back? Has it gone up or down?</span>
<p>In case your loan was taken as a fixed rate loan</p>
<ul>
    <li>Most fixed rate loans would offer fixed interest rate for a period ranging from few months to 15 years. From your sanction letter and loan agreement, check the period for which the interest on your house loan is to remain fixed. If your loan is still in the fixed rate period, your current rate of interest is same as what it was originally taken at</li>
    <li>In case your loan has converted to floating rate, the loan agreement would specify the formula for the same. The formula may be either MCLR base rate plus a given spread (in case of banks) or PLR minus spread (in case of housing finance companies). For MCLR rate plus spread housing loan, just read the spread mentioned in the loan agreement and add it to the current MCLR rate of the respective bank. For PLR minus spread loan, check the negative spread mentioned in the loan agreement and subtract it from the PLR of the respective home finance company. You can find the current MCLR rate or PLR of your bank or housing finance company at Current MCLR Base Rate and PLR</li>
</ul>

<span>What are the property documents required by Banks/HFC?</span>
<p>You will need to submit copies of the following property documents</p>
<ul>
    <li>Past title chain– Conveyance deed, sales deed, allotment letter, possession letter</li>
    <li>Receipt of advance payment towards purchase of property in case of resale or booking with builder</li>
    <li>Latest property tax receipt</li>
    <li>Copy of approved plan for construction/ extension</li>
</ul>
<span>Can I apply for housing loan jointly with my spouse?</span>
<p>Yes, you can apply jointly with an earning co-applicant (either be your spouse or your parents). Adding co-applicant can increase your eligibility and you can also avail for a higher amount of loan as your co-applicant’s income also gets added to your income and that total is taken into consideration for calculating the loan amount you will be eligible for.</p>

<span>Does it affect my co-applicant if I default in home loan?</span>
<p>Yes, if you fail to pay the loan on time then it will also affect your co-applicant as default in loan will affect his/her CIBIL rating as well.</p>
<span>Can I do balance transfer on house loan?</span>
<p>Yes, if you are getting higher interest rate and paying higher EMI than other banks, then you can opt for housing loan balance transfer and reduce your monthly burden.</p>
<span>Can I take top up on my existing home loan?</span>
<p>Yes, you can avail top up on their running house loan only if you have made timely repayment of EMIs accrued on existing home loan. The interest rate charges on a top up loans are comparatively 0.25 – 1% higher than a housing loan. The loan can be availed with minimal documentation.</p>

<span>Can I get a home loan with a bad credit score?</span>
<p>Yes, you may be eligible for qualifying a home loan even with a low CIBIL score. But, the lenders may charge a higher rate of interest on your loan and may ask you to apply for loan along with a co-applicant to improve your credit worthiness.</p>

<span>What are the tax benefits available on home loans?</span>
<p>Yes, a home loan borrower may avail tax benefit on their home loans both on the principal as well as on the interest rate on home loans:</p>
<ul>
    <li>Tax exemption on repayment of home loan principal (under section 80C)– The individual is eligible for a maximum annual tax deduction of Rs. 1,50,000 (Rs. 2 lakh for senior citizens).</li>
    <li>Tax benefit on the interest rate for home loan (under section 24):– The individual can avail the tax benefit on the amount of interest paid on their housing loan to the maximum limit of Rs. 2 lakh (Rs. 3 lakh for senior citizens) for a self-occupied property.</li>
</ul>
</div>

        <div class="content-area">
<div class="content-area-h4">Why MyLoanCare???</div>
<p>Nowadays, almost all banks offer attractive schemes on Home Loan at competitive rates with many customer friendly features. You can do rates comparison, check your eligibility, calculate EMI, apply online and get the best Home Loan rates. MyLoanCare helps you throughout the loan process from the day you apply to the time you get disbursement. You can register with us, track your loan status on a regular basis and get an option to earn attractive cashbacks and refer and earn benefits.</p>
</div>
          </div>
  </div>
   </section>
    
 <?php include 'partials/footer.php' ?>