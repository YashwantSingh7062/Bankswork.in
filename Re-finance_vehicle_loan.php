<?php include 'partials/header.php' ?>
       <?php include 'partials/nav.php'; ?> 
       <?php include 'partials/nav2.php'; ?> 
    <?php include 'partials/sidebar.php' ?>
    <header id="header-re-finance-car-loans">
      <div class="container text-center rellax" data-rellax-speed="-4">
              <h1 class="display-4">
                  Re-finance vehicle loan starting at 8.75%
              </h1>
              <p>Apply for an online Re-finance vehicle loan at low interest rates and get instant approval.</p>
      </div>   
    </header>
    <div class="container registration-form px-md-5">
       <div class="card mx-md-5">
          <div class="card-header p-md-4">
            <div class="registration-step">1</div>
            <div class='row my-2'>
                <div class="col-4 col-md-2 offset-md-1 text-center">
                     <i class="fas fa-car" style="font-size:60px;"></i>
                </div>
                <div class='col-8 text-left'>
                    <h1 class="display-4"> User Car loan Registration</h1>
                </div>
            </div>    
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
                      <label for="occupation">Occupation</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-suitcase"></i></div>
                        </div>
                       <select name="occupation" id="occupation" class="form-control">
                           <option selected disabled>---Select Occupation----</option>
                           <option value="Self Employed">Self Employed</option>
                           <option value="Salaried">Salaried</option>
                       </select>
                       </div> 
                   </div>
                   <div class="form-group col-auto">
                      <label for="address_ownership">Address Ownership</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                        </div>
                       <select name="address_ownership" id="address_ownership" class="form-control">
                           <option selected disabled>---Select Address type----</option>
                           <option value="Rented">Rented</option>
                           <option value="Self Owned">Self Owned</option>
                       </select>
                       </div> 
                   </div>
                   <div class="form-group col-auto">
                      <label for="vehicle_name">Vehicle Name</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-car"></i></div>
                        </div>
                        <input type="text" name="vehicle_name" id="vehicle_name" placeholder="Ex. Hyundai Grand i10" class="form-control" />
                      </div>
                    </div>
                    <div class="form-group col-auto">
                      <label for="vehicle_type">Vehicle Type</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-car"></i></div>
                        </div>
                       <select name="vehicle_type" id="vehicle_type" class="form-control">
                           <option selected disabled>---Select Vehicle type----</option>
                           <option value="Commercial">Commercial</option>
                           <option value="Private">Private</option>
                       </select>
                       </div> 
                   </div>
                   <div class="form-group col-auto">
                      <label for="vehicle_model_year">Vehicle Model Year</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                        </div>
                        <input type="text" name="vehicle_model_year" id="vehicle_model_year" placeholder="Ex. 2015" class="form-control" />
                      </div>
                    </div>
                   <div class="form-group col-auto">
                       <input type="submit" class="btn my-primary-btn btn-block"/>
                   </div> 
                </form>
           </div>
       </div>
    </div>
    <?php include 'partials/login-modal.php'; ?>
    <section class="car-finance-detail">
        <div class="container pt-md-5">
            <div class="content-area col-sm-9">
                <p>As per the current rates, HDFC Bank,Axis Bank,Bank of Maharashtra offers the lowest car loan interest rate of 9.25%. These rates can vary depending upon the company you are working with, loan amount you have applied for, value of the car and your repayment capacity. Higher the loan amount, lower will be the rate of interest.</p>
                <h3>Car Loan Rates</h3>
                <p>In today’s world, owning a car is not a luxury, but a necessity. Not having a car of your own restricts you and your family from living life to the fullest- going to work, outing for leisure or maintaining a good social and professional life. With growing number of institutions that offer vehicle loans, owning a car is no longer just a dream. Loans are available for new cars as well as used cars which enable you to buy your car and pay the borrowed amount through easy monthly EMIs.</p>
                <div class="content-area-h3">Car Loan Interest Rate – Additional  Benefits </div>
                <ul>
                    <li>A loan is secured against the car itself. There is no need to mortgage any other asset to procure a loan. </li>
                    <li>You get to use the car while paying for it in affordable and low installments. </li>
                    <li>Low vehicle loan rates enable you to invest your surplus savings in alternate investments with high interest rates. </li>
                </ul>
                <h3 id="eligibility">Car Loan Eligibility Check</h3>
                <p>You may be eligible for car loan in India from one or more banks if you meet the following eligibility conditions:</p>
                <div class="col-md-12 product-hl-table-head clear" id="4"><div class="content-area-h4 white">Eligibility Criteria</div></div>
                <table class="table table-curved doc-table">
                    <tbody>
                        <tr> <td>Minimum and Maximum Age</td> <td>18 years – 65 years <br> <b>Note:</b> However, many banks require minimum age of 23 years</td> </tr>
                        <tr> <td>Loan Amount</td> <td>Up to Rs. 50 lakhs. Some banks give maximum loan upto Rs. 1 crore <br> <b>Note:</b> Loan amount depends upon the value of the car and the EMI you can pay</td> </tr>
                        <tr> <td>Net Monthly Income</td> <td>Minimum Rs. 18,000 per month </td> </tr>
                        <tr> <td>Employment Type</td>
                            <td>
                                <ul><li>Available for salaried, self employed and businessmen </li> <li>Interest can range from 9.25% to 20.00% </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Minimum Work Experience</td>
                            <td>
                                <ul>
                                    <li>Salaried: a minimum of 1 year of total work experience </li>
                                    <li>Self Employed: business existence of minimum 5 years </li>
                                    <li>ITR of minimum 2 years </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>CIBIL Score</td>
                            <td>	CIBIL 700 &amp; more <br>
                            <b>Note:</b> Most banks avoid giving loans if you have low credit score
                            </td>
                        </tr>
                    </tbody>
                </table>
            
                <h4>Car Loan Eligibility Calculator</h4>
                <p>This MyLoanCare car loan eligibility calculator uses your monthly income to estimate the amount of loan amount you will be eligible from banks. Important factors that determine your loan eligibility are:</p>
                <ul>
                    <li>How much EMI can you comfortably pay every month while still meeting your household expenses? In case you pay any existing EMIs on other loans or pay house rent, the same will reduce your eligibility </li>
                    <li>What is the loan tenure you would prefer and is available to you? Car finance is available for a period of 3 to 8 years. Loans are available for a longer tenure on new car as compared to used car. </li>
                    <li>CIBIL Score - Good CIBIL Score indicates good repayment record. Bad CIBIL Score will result in either loan at higher interest rate or rejection of the loan application. For vehicle loans, the required CIBIL Score is at least 700. </li>
                </ul>
                <p>Your loan eligibility is also a function of interest rates of car. Higher car loan interest rates may reduce your loan eligibility with the same income levels as interest constitute a higher proportion of the EMI. You can calculate your eligibility with car loan calculator to know the amount you should apply for.</p>
            
                <h3 id="know-things">Lowest EMI for Car Finance</h3>
                <p>EMI is the amount that you pay every month to the bank or financial institution in order to repay your loan. EMI is composed of both principal amount and interest component. Interest component on your EMI is higher in early months and reduced with each EMI. Car Loan EMI Calculator helps you to calculate your monthly EMI at desired interest rate for a particular tenure.</p>
            
                <p><b>Car Loan EMI depends upon loan amount, interest rate and loan tenure</b></p>
                <ul>
                    <li><b>Loan amount </b>– If you apply for a high loan amount, then your EMI will be high </li>
                    <li><b>Interest rate – </b>Higher interest rate on your loan leads to high amount of EMI </li>
                    <li><b>Loan tenure – </b>EMI reduces in case of high loan tenure </li>
                </ul>
            
                <div class="content-area-h3">Car Loan Interest Rate Comparison</div>
                <ul>
                    <li><b>Processing fees –</b> Most banks charge processing fees of Rs. 250 to up to Rs. 20,000. To get the lowest fee, comparison of vehicle loan rates, offers and cashback applying online through MyLoanCare. </li>
                    <li><b>Insurance premium – </b>It is mandatory to take a car insurance policy to cover any damages to the car in case of an accident. However, the coverage and premium of various insurance policies can be different from each other. The insurance policy bundled with your car purchase might not necessarily be the best insurance policy. Hence, it is advisable to compare the insurance terms, before choosing an insurance policy for your car. </li>
                    <li><b>Prepayment and foreclosure – </b>When you want to repay a partial amount of loan before time, it is called part prepayment. In case you decide to pay the entire loan amount before time, it is called foreclosure. Banks typically levy prepayment or foreclosure charges in such situations and these can range from Nil to Upto 5%. So, check carefully if the low interest rate car loan you get comes with high prepayment or foreclosure charges. Note that some loans cannot be repaid before time. </li>
                    <li><b>Down payment – </b>Banks offer car loan either at 80% of on-road price or 100% of ex-showroom price. However, 80% of on-road is almost equivalent to 95% of ex-showroom price. You are advised to fund maximum down payment as it reduces your burden of high monthly payments. </li>
                </ul>
            
                <div class="content-area-h3">Do’s and Don’ts while taking Auto Loan</div>
                <p>To get best and lowest vehicle loan interest rate online, read the do's and don’ts mentioned below.</p>
            
                <table class="table table-curved doc-table">
                <thead>
                    <tr><th class="th">Do’s</th>
                    <th class="th">Don’ts</th>
                </tr></thead>
                <tbody>
                    <tr>
                        <td><b>Check best discount and offers– </b>Always check current offers and cheapest car loan interest rates offered to employees of large reputed companies</td>
                        <td><b>Do not apply for loan amount more than what you are eligible for– </b>Applying for an amount higher than your eligibility may lead to rejection of your loan application</td>
                    </tr>
                    <tr>
                        <td><b>Compare car loan rates based on loan amount– </b>Some banks offer lowest interest rate for car loan for high loan amount. Loan amount can vary by the value of the car used for calculating LTV. Banks may use the on road price or ex showroom price as the value of car and both, result in significant differences in the loan amount offered</td>
                        <td><b>Do not apply with multiple banks – </b>Simultaneous loan applications gets recorded in your CIBIL report and can hurt your chances of getting a loan</td>
                    </tr>
                    <tr>
                        <td><b>Carefully decide on which type of insurance would be necessary - </b>Comprehensive, Third Party, or Zero Dep insurance. Check and compare the cost, coverage and claim settlement ratio.</td>
                        <td><b>Do not rely only on the dealer - </b>The loan offered by your dealer may not be the lowest interest rate or best loan. Evaluate other options. Check with your salary bank as well as compare offers from various banks on our online platform.</td>
                    </tr>
                </tbody>
                </table>
            
                <div class="content-area-h4">5 questions to ask your Car Loan agent</div>
                <ul>
                    <li>What is the loan amount eligibility based on your income and the car or SUV or MUV model you are planning to buy? Is the loan available on ex-showroom price or on the road price? </li>
                    <li>What is the EMI amount and loan tenure per Rs. 1 lakh loan amount? </li>
                    <li>What are the processing charges payable? </li>
                    <li>Can you make prepayment of the vehicle loan? If yes, are there are charges and restrictions on when and how much you can pay?</li>
                    <li>What is the interest rate? Is it a flat rate or reducing rate? Is the EMI payable in advance or at end of month? </li>
                </ul>
                <p><b>Car loan jargon you must know when comparing loans of different banks:</b></p>
                <ul>
                    <li>Ex-showroom price is the price of the car including excise duty but excluding local duties and statutory charges.</li>
                    <li>On road price is the price you pay for the car including the ex-showroom price and cost of registration, insurance, octroi, municipal entry tax, road tax and any accessories. The on road price tends to be 15-25% more than the ex-showroom price and may vary from city to city.</li>
                </ul>
                <p>Caution - Note that a car loan of 80% of on road price is likely to be more than 95% of ex showroom price.</p>
            
                <h4>Schemes under Car Loan related to EMI and interest</h4>
                <ul>
                <li><p><b>EMI in arrears scheme – </b>This is a standard method of paying EMI where the interest for a month (and principal repayment) is payable at or after the end of the month.</p><p></p></li>
                <li><p><b>Advance EMI scheme – </b>Under this scheme, you pay interest and EMI at the beginning of the month. So, each month, you pay interest on amount that you have already repaid to the bank at the beginning of the month.</p>
                <p><b>Caution – </b>In case your bank charges EMI in advance, the EMI amount should be about 1% lower than that in case of EMI in arrears. For those interested in more precise figures, EMI per Rs. 1 lakh loan amount on a 5 year car loan at 10% rate of interest as per EMI in arrears method comes to Rs. 2,125 while that as per EMI in advance method comes to Rs. 2,107.</p>
                </li>
                <li><p><b>Zero interest scheme (also called 0% finance scheme) – </b>This is one of those free lunches scheme that actually doesn’t exist. So, beware of schemes that claim to offer zero interest. It is likely that the car company is offering a subvention scheme whereby the interest is paid by it to the bank upfront. Now, you could always ask the car dealer for the same amount as a cash discount. It’s like padding up the price of the car for the interest amount and marketing it under a nice name. </p></li>
                <li><p><b>Flat rate of interest scheme – </b>In this method, you pay interest on the entire principal amount of loan till maturity. So, on a loan of Rs. 5 lakhs at 10% for 5 years, you would have to pay back a total of Rs. 5 lakhs plus interest of Rs. 50,000 a year, that is a sum total of Rs. 7,50,000. The EMI in this case would be Rs. 12,500. </p></li>
                <li><p><b>Reducing balance scheme - </b>In this method, you pay interest on the amount outstanding each month. With each EMI, the balance principal amount keeps reducing. So, on a Rs. 5 lakh loan at 10% for 5 years, you would have to pay back a total of Rs. 5 lakhs plus interest on reducing basis which comes to Rs. 1,37,411 or Rs. 6,37,411 including principal. The EMI in this case would be Rs. 10,624, a good 15% less than that for a flat rate scheme. </p>
                <p><b>Caution – </b>Never get hoodwinked with the low rate of interest offered on a flat rate scheme. A flat rate of 10% is equal to an interest rate of 18.7% on reducing rate basis on a 5 year car loan.</p></li>
            </ul>
                <div class="content-area-h3">Steps to take a car loan</div>
                <ul>
                    <li><b>Credit Score: </b>As is obvious, your credit score is very crucial in determining what rate you’re offered on your loan and whether you will even get the loan in the first place! Your credit score is based on your credit report of the past. It’s a good idea to know your credit score. </li>
                    <li><b>Review your Budget: </b>Figure out how much you can realistically afford to pay each month as your loan EMI. Vehicle loans come in short to long tenures wherein longer the term is, lesser is your monthly payment. But a longer term means you owe more than the vehicle is worth for longer. </li>
                    <li><b>Factor Insurance and other costs: </b>Insurance costs and maintenance costs are not covered in your loan amount. It is, however, very important to decide on those funds. Consult with your insurance agent and the lender both, on how the total cost of insurance, maintenance and monthly EMI affect your budget. </li>
                    <li><b>Pre-Approval: </b>It is advised to check with various different sources for the best deal for you. A pre-approval will work for you for a certain time period and for a certain amount of money. You can spend up to that pre-approved amount on your car. Even if you do not have a great credit score, you can still get the loan but for a higher interest rate. It should be take care of that the whole process in over in 14 days. Some credit scorers might penalize you for too many inquiries into your credit history. </li>
                    <li><b>Choosing Vehicle: </b>Once pre-approved you can go ahead and choose a car of your dreams. One of the benefits of getting pre-approved is that you can focus on negotiating the best deal. The dealers may try to talk you into longer termed loans which will cost you more in the long run. In case of a used car, first confirm that the loan you apply covers the option of buying a car from a private party, generally, there are restrictions on the age of the used car and interest may be a little higher </li>
                    <li><b>Paperwork: </b>Once the vehicle is chosen, price negotiated and the budget is decided, the lender would require your documents to finalize the sale. The add-ons such as extended warranty would be offered to you by the auto dealer. These must be carefully researched upon. </li>
                    <li><b>Paying off: </b>After the sale, the payment schedule is informed to you. It is advised to have an account online so that you can check your balance and make payments with convenience. </li>
                </ul>
                <p>Almost all vehicle loan lenders allow you to pay the loan before its maturity without any penalty.</p>
                <h4>Documents Required</h4>
                <p>Documents required for acquiring a car loan vary from lender to lender and one cannot do without submitting the rights documentation which is the established proof of your identity, age, income and address.</p>
            
                <table class="table table-curved doc-table">
                <thead>
                    <tr><th class="th">Documents ID</th>
                    <th class="th">Individuals</th>
                    <th class="th">Firms, Partnerships</th>
                </tr></thead>
                <tbody>
                    <tr>
                        <td>Signed Application Form</td>
                        <td>Required</td>
                        <td>Required</td>
                    </tr>
                    <tr>
                        <td>Identity Proof</td>
                        <td>PAN card, Passport, Driving License, Aadhaar Card, Voter id, Government issued i-card</td>
                        <td>PAN card, Passport, Driving License, Aadhaar Card, Voter id, Government issued i-card</td>
                    </tr>
                    <tr>
                        <td>Certificate and Proof of Business Existence</td>
                        <td></td>
                        <td>PAN , sales tax/ excise/ VAT/ service tax registration, Copy of partnership deed, Trade license, certificate of practice, registration certificate issued by RBI</td>
                    </tr>
                    <tr>
                        <td>Address Proof</td>
                        <td>Passport, Driving License, Election ID card, Electricity/ Telephone/ Mobile bill/ bank statement (not more than 3 months old)</td>
                        <td>Bank statement, utility bill, Registry copy, lease or rent agreement, TAN allotment letter</td>
                    </tr>
                    <tr>
                        <td>Age Proof</td>
                        <td>PAN card, Passport, Driving License, Voter id card, Birth certificate, Employee ID card (only for PSU/ Government employees), School/ college leaving certificate</td>
                        <td>PAN card, Passport, Driving License, Voter id card, Birth certificate, Employee ID card (only for PSU/ Government employees), School/ college leaving certificate</td>
                    </tr>
                    <tr>
                        <td>Income Proof</td>
                        <td>Form 16, last 3 months salary slip, last 3 months' bank account statement showing salary credit</td>
                        <td>Last 2 years ITR, last 3 months bank account statement</td>
                    </tr>
                    <tr>
                        <td>Car Quotation</td>
                        <td>Quotation of cost of the car selected from the dealer</td>
                        <td>Quotation of cost of the car selected from the dealer</td>
                    </tr>
                </tbody>
                </table>
            
                <h4 id="faqs">FAQs on Car Loan</h4>
            <div class="faq-head">
            <span>Why do I need car loan?</span>
            <p>These loans are usually taken to buy a new car or used car, given at fixed rate. If you have a low CIBIL score, then you should not apply in multiple banks as each rejection will drop your CIBIL score.</p>
            
            <span>How can I apply?</span>
            <p>There are multiple ways to do that. You can directly visit the bank branch and meet the sales person, contact a loan agent or apply online at any bank or NBFC’s website. You can also compare interest rates of all banks online at MyLoanCare and apply directly at the bank with lowest rates and charges. </p>
            
            <span>What are the extra charges?</span>
            <p>Apart from rate of interest, there are two types of charges being charged by the banks.</p>
            <ul>
                <li>Car loan processing fee: This is charged when you apply for the loan. The processing fee charged is upto Rs. 3,000 of the loan amount and could be reduced if you can bargain. </li>
                <li>Car loan pre-closure fee: This is charged when you close your loan before the completion of loan tenure. Prepayment penalty charged may be up to 5% of the outstanding amount. </li>
            </ul>
            
            <span>Is CIBIL Score for car loan important? </span>
            <p>CIBIL score is very important. Good CIBIL score indicates good repayment record and hence banks can offer you higher loan amount at low rate of interest for car loan. Bad CIBIL Score will result in either loan at higher interest rate or rejection of the loan application. So, make all your payments on time and maintain your CIBIL in order to get best car loan rates.</p>
            
            <span>What is ex-showroom price and on road price?</span>
            <ul>
                <li>Ex-showroom price is the price of the car including excise duty but excluding local duties and statutory charges. </li>
                <li>On road price is the price you pay for the car including the ex-showroom price and cost of registration, insurance, octroi, municipal entry tax, road tax and any accessories. The on road price tends to be 15-25% more than the ex-showroom price and may vary from city to city.</li>
            </ul>
            
            <span>Do I need to open a bank account to service my car loan?</span>
            <p>Yes, you need to have at least one functional bank account in your name to get a car loan. It is even better if you have an account with the same bank from which you would like to get a loan.</p>
            
            <span>Can I apply jointly with my spouse?</span>
            <p>Yes, you can apply for loan jointly with a co-applicant (either your spouse or your parents). This helps you to increase your eligibility. Hence you may get higher loan amount as your co-applicant’s income also gets added to your income. In co-applicant cases, the total income is taken into consideration for calculating the eligibility.</p>
            
            <span>Does it affect my co-applicant if I default in loan?</span>
            <p>Yes, if you fail to pay the loan on time then it will also affect your co-applicant. Default in loan will affect his/her CIBIL rating as well.</p>
            
            <span>What are the main factors that affect interest rate?</span>
            <p>Interest on car loan depends upon factors like down payment, loan tenure, credit report and your net income. High income with good CIBIL and maximum down payment can lend you loan at low interest rate.</p>
            
            <span>Can I do balance transfer on car loan?</span>
            <p>Yes, if you are getting lower rate of interest, then you can opt for refinance car loan or balance transfer and reduce your monthly burden.</p>
            
            <span>Can I get top up?</span>
            <p>Yes, you can get car loan top up but terms and conditions varies from bank to bank.</p>
            
            <span>How can I prevent rejection of my loan application?</span>
            <p>Banks or NBFCs give car loan to those borrowers about whom they are sure that he/her can repay the loan. You need to know few things if you don’t want your application to get rejected:</p>
            <ul>
                <li>Job stability or occupation stability is important. You need to be stable in your current job as too many job changes can impact negatively at the time of loan approval </li>
                <li>You should not be having too many loans running at one time. Banks can reject your application if you are already paying too many EMI’s at same time. </li>
                <li>Don’t give your landline number for tele-verification if you know that nobody is there at home when you are at work. A typing mistake in apartment number can also put negative impact on lenders. </li>
                <li>Last but not least, practice strong credit discipline. Even a single delay in payment of your dues on other loans may adversely affect your CIBIL score and hence, your chances of getting a loan. </li>
            </ul>
            <p>Banks or lenders keep on adding these small things and reject your loan application.</p>
            
            <span>What should I do if my car loan application gets rejected by bank?</span>
            <p>Some possible reasons why your application gets rejected are already running multiple loans and hence a bank may be in doubt about your repayment ability of a new loan.</p>
            <ul>
                <li>In this case, if you have a spouse who is also working, you can add him/her as a co-applicant to boost the combined salary levels. </li>
                <li>Clear your old debts first so that your leverage levels come down. </li>
                <li>Balance transfer of your existing loans so that the rate of interest on loans can come down and additional loan can be availed.</li>
            </ul>
            
            <span>Can I get a loan for the full cost of my car?</span>
            <p>Typically, banks loans only up to 80% to 90% of the total cost of the vehicle. However, there are a few banks that may cover the entire cost of the car.</p>
            
            <span>What is the car loan repayment tenure?</span>
            <p>The tenure generally ranges from 3 years to 8 years, depending upon the loan amount and customer's repayment capabilities.</p>
            
            <span>Is a guarantor mandatory for a new car loan?</span>
            <p>In case you are unable to meet the eligibility criteria set by the lender, then a guarantor is mandatory.</p>
            
            <span>What is the minimum amount of loan we can apply for?</span>
            <p>In most cases, you can apply for a minimum loan of Rs. 1 Lac.</p>
            
            <span>Is there a provision to pre-pay the entire loan amount?</span>
            <p>A small fee in the form of pre-payment penalty will be chargeable by the bank, but yes, it is allowed to pre pay the loan amount and save vital interest payments. This however is subject to a minimum period for which the loan must be held which is usually 6 months.</p>
            
            <span>Are all cars financed by the loan institutions?</span>
            <p>All small to medium sized cars, Sport Utility Vehicles (SUV) and Multi Utility Vehicles (MUV) usually come under the car loans finances available in India.</p>
            
            <span>Can additional loan be availed over my allotted second-hand car loan?</span>
            <p>Refinancing option or borrowing an additional loan over an allotted second-hand car loan is offered by most lenders. Ideally, 80%- 85% of the car's valuation amount can be availed.</p>
            
            </div> 
        </div>
        </div>
    </section>
    <?php include 'partials/footer.php' ?>
</body>
</html>