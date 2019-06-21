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
    <?php include 'partials/nav.php'; ?> 
    <?php include 'partials/sidebar.php' ?>
    <header id="header-personal-loans">
      <div class="container">
          <div class="row p-md-5">
              <div class="col-12 col-md-6 py-md-5 mt-5">
                   <div class="header-personal-content mt-4">
                       <h2 class="display-4">Personal loans starting at 10.75%.</h2>
                       <p>Apply for an online personal loan at low interest rates and get instant approval.</p>
                   </div>
              </div>
              <div class="col-12 col-md-6 p-0 p-md-5">
                  <div class="registration-form card rellax" data-rellax-speed="-3">
                       <div class="card-body">
                          <div class="step-1">
                              1
                          </div> <h4>Basic Details</h4>
                           <form action="personal_loans_eligible.php" method="post">
                                <div class="form-group">
                                    <label for="name">Full name (As per PAN Card)</label>
                                    <input type="text" name="name" id="name" placeholder="Full Name" class="form-control"  />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" placeholder="Email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="pin">Current Residence PIN Code</label>
                                    <input type="number" name="pin" id="pin" placeholder="PIN" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="emp_type">Employment Type</label>
                                    <select name="emp_type" id="emp_type" class="form-control">
                                        <option disabled selected>Select Employment</option>
                                        <option value="Salaried">Salaried</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Self Employed DR/CA">Self Employed DR/CA</option>
                                    </select>
                                </div>
                               <div class="form-group">
                                    <label for="comp_name">Current Company Name</label>
                                    <input type="text" name="comp_name" id="comp_name" placeholder="Company Name" class="form-control"  />
                                </div>
                                <div class="form-group">
                                    <label for="in-hand-salary">Monthly in-hand-salary</label>
                                    <input type="number" name="in-hand-salary" id="in-hand-salary" placeholder="Amount" class="form-control"/>
                                </div>
                               <div class="form-group">
                                    <label for="phone">Mobile Number</label>
                                    <input type="number" name="phone" id="phone" placeholder="Mobile Number" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn my-primary-btn btn-block" value="Next"/>
                                </div>
                            </form>
                       </div>
                    </div>
              </div>
          </div>
      </div>
      
        
    </header>
    <?php include 'partials/login-modal.php'; ?>
    <section class="registration-steps pb-5">
      <div class="container">
          <div class="steps-header text-center">
            <h1 class="display-4">How it Works</h1>    
            
        </div>
        <div class="steps-icon my-5">
            <div class="row">
                <div class="col-8 step-line"></div>
            </div>
            <div class="row text-center">
                <div class="col-4">
                    <div class="step-registration-icon">1</div>
                </div>
                <div class="col-4">
                    <div class="step-registration-icon">2</div>
                </div>
                <div class="col-4">
                    <div class="step-registration-icon">3</div>
                </div>
            </div>
            <div class="row my-5 text-center">
                <div class="col-12 col-md-4 py-4 py-md-0">
                    <h5>Quick Register</h5>
                    <p>Fill the simple form</p>
                </div>
                <div class="col-12 col-md-4 py-4 py-md-0">
                    <h5>Select multiple offers</h5>
                    <p>Lists of offers form multiple banks</p>
                </div>
                <div class="col-12 col-md-4 py-4 py-md-0">
                    <h5>Apply</h5>
                    <p>Quick apply less than 2 minutes</p>
                </div>
            </div>
        </div>
      </div>
    </section>
    
    
    <section>
        <div class="container pad30t pad30b">
      <h2 class="newh2">Personal Loan – Low interest rate personal loans from a wide range of lenders</h2>
      <p class="newp">
            Personal loans are an unsecured form of credit that is popular to meet immediate requirements. It is multi-purpose in nature and therefore can be used for various purposes including wedding, home renovation, travel purposes and more. Moreover, there is no restriction for the amount borrowed and can be used for any purpose they want. In fact, a personal loan can help you build your credit faster when compared with other forms of credit. This is because of the risk it carries due to being unsecured.
            <br><br>
            All in all, a personal loan can offset any temporary financial crisis.
          </p>
      <h2 class="newh2">Benefits and Features of Personal Loan</h2>
      <p class="font20"><b> No collateral required </b></p>
      <p class="newp">
            One of the benefits associated with an online personal loan is that it is unsecured in nature. This means you don’t need to pledge any collateral for your loan. Although this can be a reason for your interest rate, you can get a low-interest personal loan easily if you meet the eligibility requirements.
          </p>
      <p class="font20"><b> Minimal Documentation</b></p>
      <p class="newp">
            In this age of digitisation, the process of verification and documentation has now become short. This is applicable for an instant personal loan as they are fast in disbursal and require minimum documents for approval.
          </p>
      <p class="font20"><b>Easy Approval</b></p>
      <p class="newp">
            You can get personal loans that are quick and easy in approval. This is why it is the best bet in times of financial emergency. Moreover, the process has become digital; thus reducing time in the verification process.
          </p>
      <p class="font20"><b>Multipurpose in nature</b></p>
      <p class="newp">
            A personal loan can be used for anything except for investment and illegal activities. Apart from that, it is multipurpose in nature and can be used for anything. Other forms of credit when taken are for a specific purpose and can be used only for the same. For example, a home loan is used for purchasing a house whereas a car loan is taken to buy a car. However, a personal loan can be taken to offset any immediate requirements.
          </p>
      <h2 class="newh2">Personal Loan Eligibility</h2>
      <p class="newp">
            Personal loans are provided by most of the banks/NBFCs but with different eligibility requirements. However, there are certain criteria that are common for all financial institutions. The eligibility criteria to get an online personal loan approval for salaried and self-employed individuals are:
          </p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan">
            <thead>
              <tr>
                <td class="font16 ver-align-top font-weight700">Age</td>
                <td class="font16 ver-align-top">18/21 years - 60/65 years</td>
              </tr>
              <tr>
                <td class="font16 ver-align-top font-weight700">Employment Type</td>
                <td class="font16 ver-align-top">
                      1. Salaried <br>2. Self-Employed professionals
                    </td>
              </tr>
              <tr>
                <td class="font16 ver-align-top font-weight700">Credit score</td>
                <td class="font16 ver-align-top">750 or above with a good credit history</td>
              </tr>
              <tr>
                <td class="font16 ver-align-top font-weight700">Minimum Net Income (Monthly)</td>
                <td class="font16 ver-align-top">
                  <ul>
                    <li>₹15,000(non-metro cities)</li>
                    <li>₹20,000( metro cities)</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="font16 ver-align-top font-weight700">Loan Amount</td>
                <td class="font16 ver-align-top">Up to ₹50 lacs depending on the credit profile</td>
              </tr>
              <tr>
                <td class="font16 ver-align-top font-weight700">Work Experience</td>
                <td class="font16 ver-align-top">
                      Salaried
                      <ul>
                    <li>
                          Employed at current company for at least 6/12 months
                        </li>
                  </ul>
                      Self-Employed
                      <ul>
                    <li>
                          Business tenure of at least 3 years (continuous)
                        </li>
                    <li>ITR of last 3 years</li>
                  </ul>
                </td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="clearfix"></div>
      <h2 class="newh2">Documents Required for Personal Loan</h2>
      <p class="newp">
            The common documents required for an online personal loan approval are given below:
          </p>
      <p class="font20"><b>
              For Salaried Individuals
            </b></p>
      <p class="newp">
            1. Identity &amp; Age Proof
          </p>
      <p class="newp">
            2. Completely filled personal loan application with photograph
          </p>
      <p class="newp">
            3. PAN Card
          </p>
      <p class="newp">
            4. Residence proof - Passport driving licence, Voter ID, postpaid/landline bill, utility bills (electricity/water/gas)
          </p>
      <p class="newp">
            5. Bank statements for the last 3 months(preferably your salary account)
          </p>
      <p class="newp">
            6. Salary Slips of last 3 months
          </p>
      <p class="newp">
            7. Form 16 or Income Tax Returns of last 3 years
          </p>
      <p class="font20"><b>
              For Self-Employed Individuals
            </b></p>
      <p class="newp">
            1. Identity &amp; Age Proof
          </p>
      <p class="newp">
            2. Completely filled personal loan application with photograph
          </p>
      <p class="newp">
            3. PAN Card
          </p>
      <p class="newp">
            4. Residence proof - Passport driving licence, Voter ID, postpaid/landline bill, utility bills (electricity/water/gas)
          </p>
      <p class="newp">
            5. Bank statements for the last 3 months(preferably your salary account)
          </p>
      <p class="newp">
            6. Salary Slips of last 3 months
          </p>
      <p class="newp"><b> 7. Last 3 years Income Tax Returns with computation of Income</b></p>
      <p class="newp"><b> 8. Last 3 years CA Certified / Audited Balance Sheet and Profit &amp; Loss Account</b></p>
      <h2 class="newh2">Personal Loan Comparison Table</h2>
      <p class="newp">Here is a comparison table of the popular personal loans online along with their processing fees, preclosure charges and interest rate:</p>
      <div class="table-responsive">
        <table class="table table-bordered marg5b" id="personal-loan">
          <thead>
            <tr>
              <th class="font16 ver-align-top">BANK/NBFC</th>
              <th class="font16 ver-align-top">Interest Rate(pa)</th>
              <th class="font16 ver-align-top" style="width: 10%">Loan Amount</th>
              <th class="font16 ver-align-top">Processing Fees</th>
              <th class="font16 ver-align-top">Part Payment </th>
              <th class="font16 ver-align-top">Pre-closure Charges</th>
              <th class="font16 ver-align-top" style="width: 14%">Locking Period</th>
              <th class="font16 ver-align-top" style="width: 10%">Tenure</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>IDFC First Bank</td>
              <td>
                    11.69% - 15.00%
                    (BT rates starts from 11.50%)
                  </td>
              <td>1Lakh to 20Lakhs</td>
              <td>Up to 2.0% of the loan amount</td>
              <td>Up to 40% of loan amount every year</td>
              <td>3% on your principal outstanding + GST</td>
              <td>3 months</td>
              <td>12 to 60 months</td>
            </tr>
            <tr>
              <td>HDFC Bank</td>
              <td>10.99% - 20.00%</td>
              <td>50k to 40Lakhs</td>
              <td>Up to 2.50% of the loan amount subject to a minimum of ₹1,999/- &amp; Maximum of ₹25000/-  </td>
              <td>Up to 25% of Principal Outstanding allowed</td>
              <td>
                    13-24 Months - 4% of Principal Outstanding
                    <br><br>
                    25-36 Months - 3% of Principal Outstanding
                    <br><br>
                    &gt;36 Months - 2% of Principal Outstanding
                    <br><br>
                    &gt;48 months - 0%
                  </td>
              <td>12 Months</td>
              <td>12 to 60 months</td>
            </tr>
            <tr>
              <td>ICICI Bank</td>
              <td>11.50% - 16.75%</td>
              <td>50k to 25 Lakhs</td>
              <td>Up to 2.25% per annum of loan amount plus GST</td>
              <td>Not available</td>
              <td>5% per annum of principal outstanding plus GST</td>
              <td>6 months</td>
              <td>12 to 60 Months</td>
            </tr>
            <tr>
              <td>Bajaj Fiserv</td>
              <td>12.00% - 16.00%</td>
              <td>1 Lakh to 20 Lakhs</td>
              <td>Up to 3.99% of the loan amount</td>
              <td>Should be more than 1 EMI (2% + applicable taxes on part-payment amount paid)</td>
              <td>4% plus applicable taxes on principal outstanding</td>
              <td>1 month</td>
              <td>12 to 60 Months</td>
            </tr>
            <tr>
              <td>Kotak Bank</td>
              <td>11.00% - 24.00%</td>
              <td>1Lakh to 30Lakhs</td>
              <td>Up to 2.5% of the loan amount + GST and other applicable statutory levies </td>
              <td>-</td>
              <td>5% of the outstanding amount + GST on principal outstanding</td>
              <td>12 months</td>
              <td>12 to 48 Months</td>
            </tr>
            <tr>
              <td>TATA Capital</td>
              <td>11.75%-19.00% </td>
              <td>75k to 20Lakhs</td>
              <td>From ₹999/- Up to 2.0% of the loan amount and applicable Service Tax</td>
              <td>
                    Up to 25% of the principal outstanding (2% of the amount paid + GST)
                    <br><br>
                    *Maximum of 50% of the principal outstanding permissible
                  </td>
              <td>
                    &gt;6 months - 4% of principal outstanding
                    <br><br>
                    &gt;12 months - NIL
                    <br><br>
                    BT - 5% of the principal outstanding
                  </td>
              <td>6 Months</td>
              <td>12 to 72 Months</td>
            </tr>
            <tr>
              <td>IndusInd Bank</td>
              <td>11.49% - 20.00%</td>
              <td>1Lakh to 20Lakhs</td>
              <td>Up to 2.50% of the loan amount plus tax</td>
              <td>-</td>
              <td>
                    Salaried: 4% of the principal outstanding after repayment of 12 EMIs.
                    <br><br>
                    Self Employed:
                    4% of the principal outstanding after repayment of 6 EMIs
                  </td>
              <td>1 Year</td>
              <td>12 to 60 Months</td>
            </tr>
            <tr>
              <td>Fullerton</td>
              <td>12% - 25%</td>
              <td>65k to 20Lakhs</td>
              <td>3% - 6% of the loan amount plus GST</td>
              <td></td>
              <td>
                    Within 7 months to 17 months - 7%<br>
                    Within 18 months to 23 months - 5%<br>
                    Within 24 months to 35 months - 3%<br>
                    After 36 months - NIL
                  </td>
              <td>6 Months</td>
              <td>12 to 60 Months</td>
            </tr>
            <tr>
              <td>IIFL</td>
              <td>12.99% - 20.00%</td>
              <td>1Lakh to 20Lakhs</td>
              <td>Up to 2% of the loan amount plus GST</td>
              <td>-</td>
              <td>
                    Up to 4% of the Principal Outstanding
                    <br><br>
                    &gt;12 Months - NIL
                  </td>
              <td>6 Months</td>
              <td>12 to 60 Months</td>
            </tr>
            <tr>
              <td>RBL Bank</td>
              <td>14.00% - 20.00%</td>
              <td>1Lakh to 20Lakhs</td>
              <td>1.5% of the loan amount (Non Refundable fee of Rs 7500 Upfront, Rest at the time of disbursal)</td>
              <td>NIL</td>
              <td>NIL</td>
              <td>12 months</td>
              <td>12 to 60 Months</td>
            </tr>
            <tr>
              <td>Yes Bank</td>
              <td>10.75% - 16.99%</td>
              <td>1Lakh to 25Lakhs</td>
              <td>Up to 2.50% of the loan amount subject to a minimum of ₹999/- plus taxes</td>
              <td>
                    • 20% Principal Outstanding for 12 – 24 months<br>
                    • 20% Principle Outstanding for 25 – 36 Months<br>
                    • 25% Principal Outstanding for 37 – 48 Months<br>
                    • 25% Principal Outstanding for 49 – 60 Months<br><br><br>
                    1% plus applicable taxes on part payment amount paid
                  </td>
              <td>
                    13 – 24 months - 4% of principal outstanding<br>
                    25 – 36 months - 3% of principal outstanding<br>
                    37 – 48 months - 2% of principal outstanding<br>
                    &gt;48 Months      - Nil
                  </td>
              <td>12 months</td>
              <td>12 to 60 Months</td>
            </tr>
          </tbody>
        </table>
      </div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h3 class="newh3">Representative Example:</h3>
      <p class="newp">With a representative 10.75% APR based on borrowing ₹ 10 lacs and repaying over 60 months with 60 monthly repayments. Monthly repayments of ₹ 21618.</p>
      <h2 class="newh2">Types of Personal Loan: </h2>
      <p class="newp">
            Here are the different types of online personal loan:
          </p>
      <ul>
        <li><b>Personal Loan for Home Improvement</b></li>
        <p>
              There’s something that can be always done to your home and this is where an instant personal loan can help you fulfill them. From remodelling your kitchen to making your house a perfect mix of comfort and durability, a personal loan for home renovation can be the solution.
            </p>
        <li><b>Personal Loan for wedding</b></li>
        <p>
              In India, a normal wedding cost ₹25 lakhs on an average! Exhausting all your savings for all the wedding expenses is not an ideal option. This is where you apply online personal loan and cover the expenses. Now, planning a wedding is now easy.
            </p>
        <li><b>Personal Loan for Travel</b></li>
        <p>
              Apart from home renovation or wedding, you can get personal loan to cover your travel expenses. Since it is convenient and an economic option, it can be an open option. Moreover, it can alternate your uses with your <a href="https://indialends.com/credit-card" class=" GAnalytica_Link">credit card</a> and help you save on interest costs.
            </p>
        <li><b>Fresh Funding</b></li>
        <p>
              Meeting working capital requirements can be a daunting process and without raising fresh funds, the everyday operations can get affected. A personal loan can be the best alternative option to meet your short-term working capital requirements such as cover accounts payable, wages, etc
            </p>
        <li><b>Top Up Personal Loan</b></li>
        <p>
              Top up personal loan is a facility provided by financial institutions to customers that allows you to borrow a certain amount of money over your personal loan. The interest rate for a top up loan is slightly higher than the regular personal loan.
            </p>
        <li><b>Personal Loan Balance Transfer</b></li>
        <p>
              Did you know you can save thousands on your interest costs on a personal loan? Well, that is what a balance transfer can help you with. You can pay off your existing loan with a new loan at a lower-interest rate. Please note there is a charge associated with a personal loan balance transfer. .
              <br></p>
      </ul>
      <div class="clearfix"></div>
      <div class="text-center  marg15t"><a href="https://indialends.com/personal-loan-balance-transfer" target="_blank" class="btn btn-blue-border secondary bg-transparent display-inline GAnalytica_Link">Apply for a Balance Transfer</a></div>
      <h2 class="newh2">Personal Loan EMI Calculator</h2>
      <p class="newp">
            When you plan to apply for a personal loan, EMI plays the most important factor. Whether or not the EMI will fit in your monthly budget can help in deciding your personal loan. This is where a personal loan EMI calculator can help you. A loan calculator helps you get the following results:
          </p>
      <ul>
        <li>Monthly Repayments - EMI you will be paying every month</li>
        <li>Total interest payable - Total interest on your loan</li>
        <li>Total amount to pay - The total amount which is a sum of principal and interest</li>
      </ul>
      <div class="clearfix"></div>
      <div class="text-center marg15t"><b><a href="https://indialends.com/personal-loan-emi-calculator" target="_blank" class="btn btn-blue-border secondary bg-transparent display-inline GAnalytica_Link"> Use EMI Calculator </a></b></div>
      <h2 class="newh2">Personal Loan Interest Rates</h2>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <td colspan="2"><b>Personal Loan Details</b></td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Interest Rates</td>
                <td class="ver-align-top">10.75% - 35%</td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Processing Fee</td>
                <td class="ver-align-top">Differs from bank to bank; generally ranges between 1-3% of the loan amount</td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Loan Tenure</td>
                <td class="ver-align-top">12 months to 60 months</td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Loan Amount</td>
                <td class="ver-align-top">₹15000 - ₹50 lakhs</td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Lock-in period</td>
                <td class="ver-align-top">Varies from lender to lender</td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Preclosure Charges</td>
                <td class="ver-align-top">Differs; Generally between 2%-5% of the loan outstanding</td>
              </tr>
              <tr>
                <td class="ver-align-top font-weight700">Guarantor Required</td>
                <td class="ver-align-top">Varies on different conditions</td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="clearfix"></div>
      <h2 class="newh2">Why should you apply for a personal loan at IndiaLends?</h2>
      <p class="newp">
            IndiaLends is a one-stop solution for all your financial needs. In here, we try to provide you with the best services that are hassle-free and quick in nature. For personal loans, we provide you with a comparative analysis of what different banks are offering and assist you in your final decision.
            <br><br>
            Here are a few reasons for you to apply for a personal loan at IndiaLends:
          </p>
      <p class="font20"><b>
              Fast assistance
            </b></p>
      <p class="newp">
            IndiaLends offers 24*7 services for all its customers. You can contact us at anytime of the day and we will try our best to get back to you as soon as possible. Moreover, the process for personal loan approval is fast and quick in nature.
            <br>
            You can simply write to us at support@indialends.com for any grievances, complaints or feedbacks.
          </p>
      <p class="font20"><b>
              Customer needs in forefront
            </b></p>
      <p class="newp">
            Your needs are our priority. We promise to deliver you with services that are best on our capabilities. By handpicking the personal loan offers based on customer profile, we try to give you the most personalised experience. The services for all our customers are free of cost.
          </p>
      <p class="font20"><b>
              Compare Offers Online
            </b></p>
      <p class="newp">
            With more than 40 lenders as partners, you can compare the different offers of financial institutions to make the right call. In fact, we help you find the best lender as per your eligibility requirements. There is a personalised relationship lender for every customer who helps him/her select the bank of his/her choice.
          </p>
      <p class="font20"><b>
              Real-time customer support
            </b></p>
      <p class="newp">
            Our customer support team is fast and efficient to clear all your doubts regarding personal loan eligibility, procedures, offers, documentation and repayment options. We even contact with the respective lender on behalf of you.
          </p>
      <h2 class="newh2">How To Apply For A Personal Loan at IndiaLends?</h2>
      <p class="newp">Applying for a personal loan involves three simple steps:</p>
      <p class="font20"><b>
              Step-1: Fill the eligibility form
            </b></p>
      <p class="newp">In the first step, the customer needs to fill in the eligibility form which includes filling the following details:</p>
      <ul>
        <li>Full Name(As per PAN Card)</li>
        <li>Email Address</li>
        <li>Current Residence Pincode</li>
        <li>Employment Type</li>
        <li>Current Company Name</li>
        <li>Monthly in-hand salary</li>
        <li>Mobile Number</li>
      </ul>
      <p class="font20"><b>
              Step-2: Select from the multiple offer(s)
            </b></p>
      <p class="newp">You will be given a list of lenders based on the information provided by you in Step-1. The offer could be one or more than one based on your profile. Out of the list, select the lender you wish to go ahead with. Please remember to consider the following points when choosing the lender:</p>
      <ul>
        <li>Interest rate offered</li>
        <li>Loan amount</li>
        <li>Loan Tenure</li>
        <li>EMI</li>
      </ul>
      <p class="font20"><b>
              Step-3: Apply for the loan
            </b></p>
      <p class="newp">
            This step is an extended version of Step-1 where you have to give more details on your application. This is where you give a detailed information about your personal details and bank details.
            <br>
            Once you submit your application, our representative will contact you to cross verify the details before sending the application to the respective lender.
          </p>
      <h2 class="newh2">Best Personal Loans in India</h2>
      <div class="table-responsive">
        <table class="table table-bordered marg5b" id="personal-loan">
          <thead>
            <tr>
              <th class="font16 ver-align-top">S. No.</th>
              <th class="font16 ver-align-top">Bank Name</th>
              <th class="font16 ver-align-top">Interest rate (p.a)</th>
              <th class="font16 ver-align-top">Loan Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Yes Bank</td>
              <td>10.75% - 16.99%</td>
              <td>₹1 lakh - ₹25 lakhs</td>
            </tr>
            <tr>
              <td>2</td>
              <td>ICICI Bank</td>
              <td>11.50% - 16.75% </td>
              <td>₹50k - ₹25 lakhs</td>
            </tr>
            <tr>
              <td>3</td>
              <td>HDFC Bank</td>
              <td>10.99% - 20.00% </td>
              <td>₹50k - ₹40 lakhs</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Kotak Bank</td>
              <td>11.00% - 24.00%</td>
              <td>₹1 lakh - ₹30 lakhs</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Tata Capital</td>
              <td>11.75%-19.00%</td>
              <td>₹75k - ₹20 lakhs</td>
            </tr>
            <tr>
              <td>6</td>
              <td>IndusInd Bank</td>
              <td>11.49% - 20.00% </td>
              <td>₹1 lakh - ₹20 lakhs</td>
            </tr>
            <tr>
              <td>7</td>
              <td>IDFC First Bank</td>
              <td>11.69% - 15.00% BT rates starts from 11.50%)</td>
              <td>₹1 lakh - ₹20 lakhs</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Bajaj Finserv</td>
              <td>12.00% - 16.00%</td>
              <td>₹1 lakh - ₹20 lakhs</td>
            </tr>
            <tr>
              <td>9</td>
              <td>IIFL</td>
              <td>12.99% - 20.00% </td>
              <td>₹1 lakh - ₹20 lakhs </td>
            </tr>
          </tbody>
        </table>
      </div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2"> Yes Bank Personal Loan </h2>
      <p class="newp">YES Bank personal loans are personalised, faster and easier. </p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Salaried Individual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Interest Rate</td>
                <td>10.75% - 16.99%</td>
              </tr>
              <tr>
                <td>Loan Tenure</td>
                <td>12-60 months</td>
              </tr>
              <tr>
                <td>Age</td>
                <td>22 to 60 years (at the time of loan maturity)</td>
              </tr>
              <tr>
                <td>Processing Fee</td>
                <td>Up to 2.50% of the loan amount subject to a minimum of ₹999/- plus taxes</td>
              </tr>
              <tr>
                <td>Lock-in period</td>
                <td> 12 months</td>
              </tr>
              <tr>
                <td>Prepayment/ Preclosure charges</td>
                <td>
                      13 – 24 months - 4% of principal outstanding<br>
                      25 – 36 months - 3% of principal outstanding<br>
                      37 – 48 months - 2% of principal outstanding<br>
                      &gt;48 Months      - Nil
                    </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2"> ICICI Personal Loan</h2>
      <p class="newp">ICICI personal loans are flexible, quick and convenient and have competitive interest rates. </p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Salaried Individual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Interest Rate</td>
                <td>11.50% - 16.75%</td>
              </tr>
              <tr>
                <td>Loan Tenure</td>
                <td>12-60 months</td>
              </tr>
              <tr>
                <td>Age</td>
                <td>23 years to 58 years (at the time of loan maturity)</td>
              </tr>
              <tr>
                <td>Processing Fee</td>
                <td>Up to 2.25% per annum of loan amount plus GST</td>
              </tr>
              <tr>
                <td>Lock-in period</td>
                <td> 6 months</td>
              </tr>
              <tr>
                <td>Prepayment/ Preclosure charges</td>
                <td>
                      Up to 5% per annum of the principal outstanding plus service tax
                    </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2">HDFC Personal Loan</h2>
      <p class="newp">HDFC bank personal loan is one of the popular products of this bank. The personal loans are easy-to-get, hassle-free and superfast.</p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Salaried Individual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Interest Rate</td>
                <td>10.99%-20%</td>
              </tr>
              <tr>
                <td>Loan Tenure</td>
                <td>12-60 months</td>
              </tr>
              <tr>
                <td>Age</td>
                <td>21 years - 60 years</td>
              </tr>
              <tr>
                <td>Processing Fee</td>
                <td>Up to 2.50% of the loan amount subject to a minimum of ₹1,999/- &amp; Maximum of ₹25000/-</td>
              </tr>
              <tr>
                <td>Lock-in period</td>
                <td> 12 months</td>
              </tr>
              <tr>
                <td>Prepayment/ Preclosure charges</td>
                <td>
                      13-24 Months - 4% of Principal Outstanding <br>
                      25-36 Months - 3% of Principal Outstanding<br>
                      &gt;36 Months - 2% of Principal Outstanding<br>
                      &gt;48 months - 0%
                    </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2">Kotak Bank Personal Loan</h2>
      <p class="newp">Kotak bank personal loans are quite popular in India. It provides personal loans at minimal documentation and flexible EMI’s.</p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Salaried Individual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Interest Rate</td>
                <td>11.00% - 24.00%</td>
              </tr>
              <tr>
                <td>Loan Tenure</td>
                <td>12-48 months</td>
              </tr>
              <tr>
                <td>Age</td>
                <td>21 years - 58 years</td>
              </tr>
              <tr>
                <td>Processing Fee</td>
                <td>Up to 2.5% of the loan amount + GST and other applicable statutory levies </td>
              </tr>
              <tr>
                <td>Lock-in period</td>
                <td> 12 months</td>
              </tr>
              <tr>
                <td>Prepayment/ Preclosure charges</td>
                <td>
                      5% of the outstanding amount + GST on principal outstanding
                    </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2">Bajaj Finserv Personal Loan</h2>
      <p class="newp">The Bajaj personal loans are non-collateral loans with minimal documentation. Moreover, the loans are available at flexible EMI’s ranging from a year to 5 years.</p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Salaried Individual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Interest Rate</td>
                <td>12.00% - 16.00%</td>
              </tr>
              <tr>
                <td>Loan Tenure</td>
                <td>12-60 months</td>
              </tr>
              <tr>
                <td>Age</td>
                <td>25 years - 58 years</td>
              </tr>
              <tr>
                <td>Processing Fee</td>
                <td>Up to 3.99% of the loan amount</td>
              </tr>
              <tr>
                <td>Lock-in period</td>
                <td> 1 months</td>
              </tr>
              <tr>
                <td>Prepayment/ Preclosure charges</td>
                <td>
                      4% plus applicable taxes on principal outstanding
                    </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2">IIFL Personal Loan</h2>
      <p class="newp">Personal loans by IIFL are super fast in terms of disbursal. They are available at 0% part payment charges after a year.</p>
      <div class="col-xs-12 col-sm-6 pad0">
        <div class="table-responsive">
          <table class="table table-bordered marg5b" id="personal-loan2">
            <thead>
              <tr>
                <th>Particulars</th>
                <th>Salaried Individual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Interest Rate</td>
                <td>12.99% - 20.00% </td>
              </tr>
              <tr>
                <td>Loan Tenure</td>
                <td>12-60 months</td>
              </tr>
              <tr>
                <td>Age</td>
                <td>21 years - 60 years</td>
              </tr>
              <tr>
                <td>Processing Fee</td>
                <td>Up to 2.00% of the loan amount plus GST</td>
              </tr>
              <tr>
                <td>Lock-in period</td>
                <td>9 months</td>
              </tr>
              <tr>
                <td>Prepayment/ Preclosure charges</td>
                <td>
                      Up to 4% of the Principal Outstanding<br>
                      NIL after 12 Months
                    </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="clearfix"></div><small class="text-grey">*The figures provided in the table are indicative subject to change from time.</small><h2 class="newh2">Personal Loan FAQs</h2>
      <p class="font16"><b>
              1. Is it a good idea to get a personal loan?
            </b></p>
      <p class="newp">
            Personal loans can be an ideal solution during financial crisis. Be it wedding expenses, home renovation or medical emergency, a personal loan can be your solution to meet the immediate financial requirements as they are easy-to-get, fast in disbursal and require no collateral.
          </p>
      <p class="font16"><b>
              2. What is the best personal loan?
            </b></p>
      <p class="newp">
            The best personal loan differs from borrower to borrower’s credit profile. A credit profile includes the credit score, monthly income, employer, employment type and others. All the above factors are considered to find the best personal loan.
          </p>
      <p class="font16"><b>
              3. How can I get personal loan?
            </b></p>
      <p class="newp">To get a personal loan, you need to meet the following eligibility requirements:</p>
      <ul>
        <li>Between the age of 18/21 years - 60/65 years</li>
        <li>Must be salaried or self-employed</li>
        <li>Credit score of 750+ with a good credit history</li>
        <li>Minimum monthly income of ₹15000 for non-metro cities and ₹20,000 for metro cities</li>
        <li>Should be employed at the current organisation for at least 6/12 months or business tenure of at least 3 years (continuous)</li>
      </ul>
      <p class="font16"><b>
              4. What is the eligibility for personal loan?
            </b></p>
      <p class="newp">The eligibility criteria for a personal loan are given below:</p>
      <ul>
        <li>Between the age of 18/21 years - 60/65 years</li>
        <li>Must be salaried or self-employed</li>
        <li>Credit score of 750+ with a good credit history</li>
        <li>Minimum monthly income of ₹15000 for non-metro cities and ₹20,000 for metro cities</li>
        <li>Should be employed at the current organisation for at least 6/12 months or business tenure of at least 3 years (continuous)</li>
      </ul>
      <p class="font16"><b>
              5. Are personal loans good for your credit?
            </b></p>
      <p class="newp">Personal loans play an important role in deciding your credit score. The effect of missing a personal loan EMI can be adverse on your credit score. One of the reasons for the same is because personal loans are unsecured in nature.</p>
      <p class="font16"><b>
              6. How long does it take to get approved for a personal loan?
            </b></p>
      <p class="newp">Due to digitisation, personal loan approval has become instant. However, the disbursal could take a period of 5-7 days due to the documentation process.</p>
      <p class="font16"><b>
              7. What is the best personal loan to get?
            </b></p>
      <p class="newp">There is no such things as best personal loan. Every borrower needs to find the lender that best suits his/her needs. In order to do that, you can either compare the different lenders offline or apply at platforms such as IndiaLends who help you select the lender as per your requirements.</p>
      <p class="font16"><b>
              8. Can you pay off a personal loan early?
            </b></p>
      <p class="newp">Of course you can pay off a personal loan early. This is known as prepayment of a personal loan. However, this could attract a specific amount as penalty which would differ from lender-to-lender.</p>
      <p class="font16"><b>
              9. What is the average interest rate on a personal loan?
            </b></p>
      <p class="newp">The interest rate on a personal loan ranges from 10.75% - 35% which differs from lender to lender.</p>
      <p class="font16"><b>
              10. What do banks look at when applying for a personal loan?
            </b></p>
      <p class="newp">
            The banks consider the following factors when looking at a personal loan application:<br>
            1. Age <br>
            2. Monthly Income <br>
            3. Credit Score <br>
            4. Credit History <br>
            5. Documents
          </p>
      <p class="font16"><b>
              11. Who has the best personal loan rates?
            </b></p>
      <p class="newp">The best personal loan interest rates depend on the credit profile of a customer. In order to get the best rates, a customer must have a good credit score, consistent source of income, should be salaried/self-employed.</p>
      <p class="font16"><b>
              12. Which bank gives lowest interest rate for personal loan?
            </b></p>
      <p class="newp">Currently, YES Bank offers personal loans starting from 10.75%. However, the interest rates can be different for customers based on their credit profile.</p>
      <p class="font16"><b>
              13. What is the minimum salary for personal loan?
            </b></p>
      <p class="newp">The minimum salary to get a personal loan is ₹15,000 fro non-metro cities and ₹20,000 for metro cities.</p>
      <p class="font16"><b>
              14. How can I get personal loan from Bajaj Finance?
            </b></p>
      <p class="newp">To get a personal loan from Bajaj Finance, you can apply at their official website or apply at IndiaLends for easy approval and fast disbursal.</p>
      <div class="clearfix"></div>
    </div>
    </section>
    <script src="public/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script src="vendor/rellax-master/rellax.min.js"></script>
    <script>
      // Accepts any class name
      var rellax = new Rellax('.rellax');
    </script>
</body>
</html>