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
    <header id="header-mortgage-loans">
      <div class="container text-center rellax" data-rellax-speed="-4">
              <h1 class="display-4">
                  Mortgage Loan starting at 12.75%
              </h1>
              <p>Apply for an online Mortgage Loan at low interest rates and get instant approval.</p>
      </div>   
    </header>
    <div class="container registration-form px-md-5">
       <div class="card rellax mx-md-5" data-rellax-speed="2">
          <div class="card-header p-md-4">
             <div class="registration-step">1</div>
              <h1 class="display-4 text-center"><i class="fas fa-hotel" style="font-size:50px;"></i> Mortgage Loan  Registration</h1>
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
    <section class="mortgage-loan-detail">
        <div class="container">
           <div class="content-area col-sm-9">
<p> As per the current rates, Citibank offers the lowest mortgage loan interest rate of 8.80%. These rates can vary depending upon the value of the property, your occupation and  repayment capacity. Higher the loan amount, higher will be the rate of interest.</p>
<div class="content-area-h3">RBI Monetary Policy Highlights</div>
<p><b>Existing Loan against property linked to base rate to benefit from MCLR</b> from 1st April 2018 - RBI in its monetary policy on 7th Feb 2018 has mandated that banks’ base rates be linked to MCLR rates. This will benefit mortgage loan borrowers whose loans are linked to base rate.  Any increase or decrease in MCLR rates will now automatically be applicable to pre 2016 loans that are benchmarked to base rate.</p>
<p>In another important move, the RBI has also brought NBFC’s under the purview of the RBI’s Banking Ombudsman scheme. This will help speedy resolution of disputes between customers and NBFC’s and give a window to the customers to submit their grievances.</p>
<h3>Loan Against Property</h3>
<p>Loan against property is another name of mortgage loan and is available for both salaried and self-employed borrowers to help them fulfil their business and personal needs by mortgaging their property.</p>
<div class="content-area-h3">Purpose</div>
<p>Some of the basic purposes for which this loan is usually taken are for meeting individual needs like expanding business, acquiring assets, education needs, marriage by mortgaging property plot. The loan is granted against the mortgage of the residential/commercial/industrial property. The end use of the loan should be from the uses allowed by the bank. The borrower is required to declare the end use of the loan in its application form.</p>
<table class="table table-curved doc-table">
<thead>
    <tr>
      <th class="text-center th">Purposes for which loan is granted</th>
	  <th class="text-center th">Purposes for which loan is not granted</th>
    </tr>
  </thead>
<tbody>
<tr>
      <td>Business expansion</td>
      <td>Home purchase</td>
    </tr>
    <tr>
      <td>Child Education</td>
	  <td>Home construction</td>
    </tr>
    <tr>
      <td>Personal expenses such as wedding or vacation</td>
     <td>Home renovation</td>
    </tr>
	<tr>
	<td>Medical emergency</td>
	<td>Plot purchase</td>
    </tr>
	</tbody>
</table>
<b>Points to remember are:</b>
<ul>
	<li>Property loans are not allowed to be used for home construction or purchase.</li>
	<li>Banks will take an end use undertaking on the loan against property and will also check the actual usage of the loan on a regular basis.</li>
	<li>Top up loan taken on existing loan against property customers can be used for purposes such as business expansion, education, medical expenses etc.</li>
</ul>
<h3 id="eligible-now">Loan against property Eligibility Check</h3>
<p>You may be eligible for property loan in India from one or more banks if you meet the following eligibility conditions:</p>
<table class="table table-curved doc-table">
<tbody><tr>
<th class="th">Parameters</th>
<th class="th">Eligibility Criteria</th>
</tr>
</tbody><tbody>
<tr>
      <td>Minimum and Maximum Age</td>
      <td>Individuals with minimum age of 21 years and maximum upto 65 years<br>
<b>Note:</b> However, there are few banks which also give loans to individuals of 18 years and /or individuals up to 70 years of age.</td>
    </tr>
    <tr>
      <td>Loan Tenure</td>
	  <td>Banks give loan upto a period of 15 years depending upon your age<br>
<b>Note:</b> However, some banks may not offer a loan against property for more than 7 years or 9 years. Only selected banks offer mortgage loan up to 25 years.</td> 
    </tr>
    <tr>
      <td>Net Monthly Income</td>
     <td>
     	<ul>
     		<li>Banks prefer minimum income of Rs. 40,000 for salaried persons and Rs. 3 Lakh p.a for self employed</li>
     		<li>Minimum FOIR is 60%. FOIR is fixed obligations to income ratio. Fixed obligations include existing EMI on other loans, proposed EMI and rent.</li>
     		<li>In cases, where income is more than Rs. 40,000, banks offer loans up to a maximum FOIR of 65%</li>
     	</ul>
     </td>
    </tr>
	<tr>
	<td>Employment Type and History</td>
	<td>
	
		<ul>
		<li>Loan against property rate of interest are typically in the range of 8.80% to 15.15% per annum</li>
			<li>For salaried applicants, minimum work experience required is 3 years</li>
			<li>For self employed, business existence of minimum 5 years and ITR of 3 years is required	</li>
		</ul>
		<p><b>Note:</b> Eligibility conditions for self employed may be different from that of salaried customers
Also, note that mortgage loan rates may be higher for a salaried customer as compared to a self employed or a business men. The reason is that salaried customer tend to take a loan for personal purposes while self employed borrower are more likely to take a this type of loan for business purposes.</p>
	</td>
    </tr>
    <tr>
    	<td>LTV</td>
    	<td>
    		<p>Banks typically give mortgage loan for a LTV of 60-70%.<br>
The LTV ratio differs by type of property. LTV ratio is highest for loans taken against residential property, while LTV ratio is lowest for loan against commercial property.</p>
		<ul>
			<li>For industrial property – 50 - 55%</li>
			<li>For residential property – 60 - 70%</li>
			<li>For commercial property – 60 - 70%</li>
		</ul>
    	</td>
    </tr>
    <tr>
    	<td>CIBIL Score for Loan against property</td>
    	<td>
    		<p>Banks gives loan based on market value or registered value of the property, whichever is lower.</p>
    		<ul>
    			<li>Bank consider 650 and above credit score to be eligible for mortgage loan</li>
    		</ul>
    		<p><b>Note: </b>In case of low CIBIL score, you can be eligible for  few banks or NBFCs with some additional conditions like higher interest rate and higher margin</p>
    	</td>
    </tr>
	</tbody>
</table>

<h3 id="know-things">How to get best Mortgage loan</h3>
<p>It is easy to avail mortgage loan online by comparing loan against property interest rates, processing fees and other loan terms and conditions of all banks. It is advisable to follow the following steps to get a hassle free, lowest cost and most transparent property loan.</p>
<b class="font13">Step 1 : Check loan eligibility and EMI</b>
<p>Once you decide to take a property loan, estimate your loan amount eligibility to know the loan amount you will be eligible for and can apply for. Also, calculate the monthly EMI that you can easily repay based on your current net income and other existing fixed obligations including rent and EMIs on other existing loans, if any. Your loan eligibility is calculated based on your age, net income, existing obligations, property type, LTV ratio and other factors. EMI is dependent on the loan amount, interest rate and tenure.</p>
<b class="font13">Step 2 : Check property approval status and legal documents</b>
<p>The property against which loan is to be taken is required to have a clean title, all statutory and government approvals as well as complete set of property documents. Some of the property related documents that a lender will require are: Registered Sale Deed/ Conveyance/ Lease Deed, Past Sale Deeds Chain (each transaction in respect of this property since first allotment), Latest House Tax Return/ Receipt, Approved Building Plan from Municipal Corporation etc. Hence, choose the property with all records and clean title for taking a loan against. Also loans against residential properties are easy to get with a low rate of interest and should be first choice of property for this loan option.</p>
<b class="font13">Step 3 : Decide on type of mortgage loan interest rate offers</b>
<p>Once you have a sense of your eligibility and the property you can borrow against, you can proceed to check the various mortgage loan offers of different banks for different products. Key aspects of interest rate offers that need to be checked are:</p>
<ul>
	<li>Choice between fixed and floating rates. Fixed rates come at a slightly higher rate of interest compared to floating rate loans and interest rate remains constant during the tenure of property loan. In floating rate loan, interest rates are reset at periodic intervals in response to changes in MCLR and PLR rates of banks or NBFCs. Majority of loan against property in India today are floating rate loans as it allows the interest rates on LAP to move in accordance with the current interest rates.</li>
	<li>You can also evaluate the option of overdraft facility with property loan. The overdraft facility allows to you to deposit surplus amount in your Loan against property overdraft account when available and hence, reduce your overall interest amount outgo and also shorten your loan tenure. This loan is highly recommended to self employed businessmen who generally have surplus cash lying idle at home. The interest rates on overdraft loan is slightly higher than that of a regular mortgage loan interest rates.</li>
</ul>
<p>Do mortgage loan interest rate comparison of the banks on various types of mortgage loan products and take an informed decision.</p>
<b class="font13">Step 4 : Compare other charges and loan parameters of the shortlisted banks</b>
<p>Banks also charge other additional fees on property loan in addition to LAP interest rates, so you should know all the additional fees and charges with a Loan against property which include prepayment charges, processing fee, insurance premium and other charges applied by the shortlisted banks.
<br>
You can take the help of loan advisors of online marketplaces like myloancare.in to be able to get complete details on loan against property rates, fees and charges of all banks and take an informed decision.</p>
<b class="font13">Step 5 : Select the bank based on other service related parameters</b>
<p>When you decide to take a loan you should also look after other services and transparency related parameters of the chosen banks. Some of these factors are turnaround time offered by the banks, quick loan delivery, doorstep services, transparency in the loan process. You also need to understand the trends and changes in MCLR rates over a period of time. Last but not the least, read reviews of existing customers on websites,  about interest rates and transparency to make a firm decision of borrowing loan from a bank.</p>
<div class="content-area-h3">Mortgage Loan Process</div>
<p>Once you have done complete research on the loan offers available in the market and have shortlisted the bank from where you want to take loan, you go through the following steps to complete your loan process and get a loan sanction</p>
<ul>
	<li>Firstly, fill the online loan application form or visit the branch where you will have to fill a loan application. The bank representative will ask for your basic loan requirements (loan amount, tenure, income level etc) and ask you to fill personal, occupation and income details in the application form.</li>
	<li>On the basis of information provided by you, lender will calculate your loan eligibility and give you loan options as per your requirements like interest rates, processing charges, required documents, lock in period etc. In case your eligibility does not match as per the bank, the lender advise you either to submit some additional documents or to add co-applicant to increase your eligibility.</li>
	<li>Post filling application and the above discussion (which can be tele-discussion), lender will arrange a meeting with you to collect photocopy of your documents which include KYC, income documents and property documents and will also discuss about property approval process. A bank representative will come and collect the documents from the address specified by you. At this stage the bank may also collect the processing fees and other legal and technical charges from you.</li>
	<li>Bankers will initiate the legal and technical verification. He can also give a call on your residence number for tele - verification and visit your residential address or office to check the information provided by you is authentic. Bankers will visit the site for property verification and come out with property evaluation report which gives an estimated market value of the property as well as feedback that the property has a clear title, complete set of documents and has no technical deviations. The bank will confirm your loan amount eligibility based on the above assessment.</li>
	<li>Once the bank gets satisfactory results  from the above checks, it will approve your loan, issue a sanction letter and proceed towards initiating the disbursement process. At the time of disbursement, you have to submit original property documents as well mortgage registry document duly signed and registered to the bank. Mortgage registry process can take 4 to 5 working days. Bank officials or MyLoanCare representatives will assist you at each step of the process.</li>
</ul>
<p>Mortgage loan process can be cumbersome. However, with continuous assistance and doorstep services of the bank as well our representatives, we have managed to make the process of getting mortgage loan easy and customer friendly for our valued customers.</p>

<div class="content-area-h3">Types of Loan against property</div>
<p><b>Regular Loan against property: </b>This is the most common loan taken by a borrower to fulfill any kind of business and personal needs which may include loans for:</p>
<ul>
	<li>Business expansion</li>
	<li>Acquiring assets</li>
	<li>For marriage or any medical emergency</li>
</ul>
<p>Lowest interest charged on Loan against property is 8.80%. All banks and NBFCs  provide property loan for these purposes: like for loan against residential property, while only selected banks offer loans against commercial property. Financing companies are typically more open to extend loans against residential property. Very few NBFCs and bank offer loans against industrial property.</p>
<p><b>Loan against property Overdraft: </b>Overdraft facility is availed by the borrowers who expect to have surplus income or fluctuating income during the year. This facility allows you to deposit the available surplus amount for any period which can be as short as few days in your Loan against property account and reduce your interest liability. This option is highly suitable for self employed businessmen or professionals who have fluctuating funds requirements throughout the year.</p>
<p><b>Loan against property Top Up:</b> Top up loan is an additional loan amount that you can avail on your existing Loan against property. Top up can be taken either from the existing bank or can be availed at the time of transferring your outstanding property loan amount from one bank to other bank to avail low interest rates. The LTV cap on Loan against property is applied to calculate your eligibility on a loan amount. This means that the amount of top up loan plus your existing mortgage loan outstanding should be less than or equal to 70% of the market value of the property. Top up amount eligibility may vary from bank to bank based on your income and value of the property and needs a thorough comparison.</p>

<h4>Mortgage interest rates and charges by type of property</h4>
<p>Interest rates, LTV and processing fee can differ by type of property. The following table compared the key terms of various types of property loan offers by type of property.</p>
<table class="table table-curved doc-table">
<tbody>
    <tr>
      <th class="text-center th">Type of properties and conditions</th>
	  <th class="text-center th">Industrial Property</th>
	  <th class="text-center th"> Commercial Property</th>
	  <th class="text-center th">Residential Property</th>
    </tr>
       

<tr>
        <td>Interest rate</td>
        <td>10.85%  - 13.35%</td>
        <td>9.50%  - 15.15%</td>
        <td>9.50%  - 15.15%</td>
      </tr>
    <tr>
        <td>Loan to value (LTV)</td>
    	  <td>40%  - 65%</td>
    	  <td>40%  - 75%</td>
        <td>40%  - 75%</td>
    </tr>
    <tr>
        <td>Processing fee</td>
        <td>0.20%  - 1.00%</td>
        <td>0.20%  - 2.00%</td>
        <td>0.20%  - 2.00%</td>
    </tr>
    <tr>
        <td>Income Proof for Salaried</td>
    	  <td>6 months payslip, ITR of last 2 years, 2 years Form 16, 6 months bank statement showing salary credit  </td>
    	  <td>6 months payslip, ITR of last 2 years, 2 years Form 16, 6 months bank statement showing salary credit</td>
        <td>6 months payslip, ITR of last 2 years, 2 years Form 16, 6 months bank statement showing salary credit</td>
        </tr>
    <tr>
        <td>Income proof for Self employed</td>
    	  <td>ITR of last 3 years, VAT/ service tax registration, business address proof, financial statements certified by CA, copy of partnership deed and proof of business existence and business profile</td>
    	  <td>ITR of last 3 years, VAT/ service tax registration, business address proof, financial statements certified by CA, copy of partnership deed and proof of business existence and business profile</td>
        <td>ITR of last 3 years, VAT/ service tax registration,  business address proof,  financial statements certified by CA, copy of partnership deed and proof of business existence and business profile</td>
    </tr>
    <tr>
    	<td>FOIR</td>
        <td>0.65 </td>
        <td>0.65 </td>
        <td>0.55  - 0.65</td>
    </tr>
    <tr>
    	<td>CIBIL</td>
    	<td>650 and more</td>
    	<td>650 and more</td>
    	<td>650 and more</td>
    </tr>
	</tbody>
</table>
<h4>Mortgage loan EMI Calculator</h4>
<p>Mortgage loan EMI is the monthly amount or instalment that you pay every month to the bank or financial institution in order to repay your loan. EMI is composed of principal amount and interest. Interest component in your EMI is higher in early months and gets reduced with each EMI. Similarly, principal repaid is a significantly small component in total EMI in early months and gets higher with each EMI. EMI Calculator helps you to calculate your monthly EMI at desired interest rate for a particular tenure.</p>
<p>EMI depends upon loan amount, interest rate and loan tenure</p>
<ul>
	<li><b>Loan amount –</b> Higher the loan amount taken, higher will be the EMI</li>
	<li><b>Interest rate -</b> Higher interest rate on your loan leads to higher amount of EMI</li>
	<li><b>Loan tenure –</b> Longer the loan tenure, lower the EMI and vice versa</li>
</ul>

<h4>Compare Property Loan Interest Rate</h4>
<ul>
	<li><b>Loan against property processing fees –</b> Most banks charge processing fees of 0.50 -1% of loan amount. To get lowest fee, comparison of Loan against property rates, offers and cashback, apply online through MyLoanCare.</li>
	<li><b>Loan against property prepayment and foreclosure –</b> Nobody wants to keep paying interest on a loan when you have surplus money available to repay it. When you want to repay your loan partially before time, it is called part prepayment. In case you decide to pay the entire loan amount before time, it is called foreclosure. Banks do not levy any prepayment or foreclosure charges in such situations.</li>
	<li><b>Special interest rates for specified category of borrowers -</b> Banks launch attractive schemes  with low interest rates on loans at regular basis. Hence, always check for offers from multiple banks to get the best property loan interest.</li>
</ul>
<h4>Lowest Loan Against Property Interest Rate</h4>
<ul>
	<li><b>Offer based on loan amount – </b>You may be surprised to know that in some cases rate of interest on say, a Rs. 30 lakh loan, may be lower than that on a Rs. 29 lakh loan. This is due to different pricing grids of banks and discounts for higher loan amounts that are offered from time to time.</li>
	<li><b>Discount for tenures – </b> Banks may offer lower loan against property interest rate for certain  certain tenure and it may be useful to check these carefully to be able to get cheapest loan against property.</li>
	<li><b>Do not fall for marketing gimmicks – </b>It is common for mortgage loan agents and DSA’s to lure customers by quoting a lower mortgage loan rate of interest knowing very well that the final rate will be higher. Always check with authorized representatives and get the rates in writing before giving your documents for processing.</li>
	<li><b>Do not apply with multiple banks for loans – </b>Remember that every loan application is recorded in your CIBIL report. Too many loan applications at the same time can hurt your chances of getting a loan and even lead to an increase in rate of interest. Multiple applications signal desperation to get loan on the part of the customer.</li>
	<li><b>Do not apply for loan amount more than what you are eligible for – </b>Use online mortgage loan eligibility calculator to estimate how much loan amount you are likely to be eligible for. Apply for a loan amount that is either less than or upto that to get the cheapest rate of interest. Applying for an amount higher than your eligibility may lead to rejection of your loan application.</li>
</ul>
<div class="content-area-h3" id="document-now">Documents for Loan Against Property Application</div>
<ul>
	<li>Signed Application Form</li>
	<li>Identity Proof (PAN)</li>
	<li>Residential Address Proof</li>
	<li>Form 16</li>
	<li>Latest 6 months salary slip for salaried</li>
	<li>Last 6 months bank statement </li>
	<li>Last 2 years ITR</li>
	</ul>	

<table class="table table-curved doc-table">
<thead>
    <tr>
      <th class="text-center th">Documents Required</th>
	  <th class="text-center th">Individuals</th>
	  <th class="text-center th"> Firms, Partnerships</th>
    </tr>
  </thead>
<tbody>

<tr>
      <td>Identity Proof</td>
      <td>PAN card, Passport, Driving License, Aadhar Card, Voter id, Govt issued i-card</td>
      <td>PAN card, Passport, Driving License, Aadhar Card, Voter id, Govt issued i-card</td>
    </tr>
    <tr>
      <td>Certificate and Proof of Business Existence</td>
	  <td></td>
	  <td>PAN , sales tax/ excise/ VAT/ service tax registration, Copy of partnership deed, Trade license, certificate of practice, registration certificate issued by RBI, SEBI</td>
      
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
	</tbody>
</table>
<h4 id="faqs">Frequently Asked Questions</h4>
<div class="faq-head">
<span>Which bank is best for loan against property?</span>
<p>Citibank is the best bank for taking a loan against property based on its current mortgage loan rates as the bank offers low interest rate of 8.80%. <br>
Best Banks for taking mortgage loans based on processing fees are:<br>
Jammu And Kashmir Bank charges the lowest processing fees of 0.20% as a % of loan amount. Federal Bank caps the processing fees to a maximum of Rs. 7,500 irrespective of the loan amount</p>

<span>What is Mortgage loan?</span>
<p>A mortgage loan is a type of loan in which borrower is required to mortgage any type of property to the lending institution like it basically act as security against loan if in case someone fails to pay back the loan then the remaining amount can be raised by selling that property. </p>
<span>How can I apply for Mortgage loan?</span>
<p>You can apply for loan in several ways. You can directly visit the bank branch and meet the sales person, contact a loan agent or apply online at any bank or NBFC’s website. You can also check and compare best mortgage loan interest rates in all banks online at MyLoanCare and apply for loan.</p>
<span>What is the minimum and maximum tenure of loan against property?</span>
<p>These are generally taken for a longer period of time. The loan tenure for loan against property ranges from 1 years to 20 years.</p>
<span>What are the charges for Loan against property?</span>
<p>In addition to mortgage interest rates, banks charge the following fees on loan</p>
<ul>
	<li><b>Processing fee:</b> This fees is charged when you apply for a loan. The processing fee can range between 0.50 -1% of the loan amount and can be negotiated down, if you bargain. If you approach the bank through an online market place like www.myloancare.in, we will assist you in negotiating with the bank and also, get attractive cash backs on sanctioned loan amounts. Sometimes, we also get to offer exclusive loan schemes on behalf of the banks such as nil processing fees for our valued customers.</li>
	<li><b>Foreclosure fee:</b> This fees is charged when you decide to close your loan before the completion of loan tenure. Banks charge nil prepayment penalty on individuals having floating rate loans. You also need to read the terms and conditions of your loan agreement carefully to check on the prepayment clause and ensure that it is not too strict compared to market benchmarks.</li>
	<li><b>Other Charges:</b> Banks charge legal and technical fee from the borrower which are explained at the time of loan processing.</li>
</ul>

<span>Is CIBIL Score for LAP important?</span>
<p>CIBIL score is also one of the important factor to get the loan. Good CIBIL score indicates a strong repayment record and hence, banks can offer you higher loan amount at lowest mortgage loan interest rates. Bad CIBIL Score could mean higher chances of rejection of your loan or getting a loan with high interest rates. So, it is important to make all your payments on time and maintain a good CIBIL score to get best Loan against property rates.</p>
<span>What are the factors, other than interest rate, that you should consider while comparing and choosing  loan against property from various banks?</span>
<ul>
	<li>Service quality, especially post sales service quality</li>
	<li>Current best offer on processing charges as these tend to vary from time to time</li>
	<li>Add-on features – like DBS maxgain facility and Citibank Home Credit facility – these help borrowers to save interest by parking surplus funds temporarily in the account and paying interest on net difference between loan amount and surplus parked temporarily</li>
</ul>

<span>How do I calculate the interest rate on my Loan against property taken some time back? Has it gone up or down?</span>
<span>In case of floating rate loans</span>
<ul>
	<li>Most fixed rate loans would offer fixed interest rate for a period ranging from 1 year to 10 years. Fixed rate loan tenure is lesser than the maximum tenure of the loan. From your sanction letter and loan agreement, check the period for which the interest on your loan is to remain fixed. If your loan is still in the fixed rate period, your current rate of interest is same as what it was originally taken at</li>
	<li>In case your loan has converted to floating rate, the loan agreement would specify the formula for the same. The formula may be either MCLR base rate plus a given spread (in case of banks) or PLR minus spread (in case of NBFC). For MCLR rate plus spread loan, just read the spread mentioned in the loan agreement and add it to the current MCLR rate of the respective bank. For PLR minus spread loan, check the negative spread mentioned in the loan agreement and subtract it from the PLR of the respective bank or NBFC. You can find the current MCLR rate or PLR of your bank or NBFC at Current MCLR Base Rate and PLR</li>
</ul>
<span>What are the property documents required by Banks?</span>
<p>You will need to submit copies of the following property documents</p>
<ul>
	<li>Past title chain – Conveyance deed, sales deed, allotment letter, possession letter</li>
	<li>Copy of approved plan for construction/ extension</li>
	<li>Latest property tax receipt</li>
	<li>Receipt of advance payment towards purchase of property in case of resale or booking with builder</li>
</ul>

<span>Can I apply for loan against property jointly with my spouse?</span>
<p>Yes, you can apply jointly with an earning co-applicant (either be your spouse or your parents). Adding co-applicant can increase your eligibility and you can also avail for a higher amount of loan as your co-applicant’s income also gets added to your income and that total is taken into consideration for calculating the loan amount you will be eligible for.</p>

<span>Does it affect my co-applicant if I default in mortgage loan?</span>
<p>Yes, if you fail to pay the loan on time then it will also affect your co-applicant as default in loan will affect his/her CIBIL rating as well.</p>

<span>Can I take top up on my existing Loan against property?</span>
<p>Yes, you can avail top up on an existing LAP only if you have made timely repayment of EMIs accrued on existing Loan against property. The interest rate charges on top up loans are 0.25 – 1% higher than a  property loan and can be availed with minimal documentation</p>

<span>Why Top up loan is better alternative compared to other loans?</span>
<p>Taking a top up loan on existing Loan against property has the following benefits</p>
<p><b>Lower interest:</b> Interest charged on top up loan is comparatively lesser than the interest charged on a personal loan.</p>
<p><b>Lower EMI:</b> As tenure is higher and interest rate is lower on LAP compared to personal loan, the EMI for top up Loan against property is lower than that on a personal loan.</p>
<p><b>Higher loan tenure:</b> In case of a top up loan you will get the loan tenure equal to tenure outstanding on your existing loan.</p>
<p><b>Pre payment penalty:</b> No pre payment penalty is applicable on top up loans.</p>
<p><b>Tax exemption:</b> There are no tax benefits for repayment of this loan.</p>

<span>Am I eligible for a Loan against property despite a poor credit score?</span>
<p>Yes, you may be eligible for this loan even with a bad credit score. But, the lenders may charge a higher rate of interest on your loan and may ask you to apply for loan along with a co-applicant who will be equally responsible for making timely loan repayments.</p>
<span>Can I get a loan against property with any existing loans?</span>
<p>Usually, lenders ask about the status of your existing loans when you apply for a Loan against property. This is done to assess the eligibility of paying out EMIs on your loan in the future. If your payment history is good, then the lenders may give you the option of taking top up loan on your existing Loan against property . The bank may also offer you a new LAP if it feels that your current income levels can support additional EMI repayments and hence, you can be eligible for a new LAP.</p>
</div>
<div class="content-area">
<div class="content-area-h4">Why MyLoanCare???</div>
<p>Nowadays, almost all banks offer attractive schemes on Loan Against Property at competitive rates with many customer friendly features. You can do rates comparison, check your eligibility, calculate EMI, apply online and get the best Loan Against Property rates. MyLoanCare helps you throughout the loan process from the day you apply to the time you get disbursement. You can register with us, track your loan status on a regular basis and get an option to earn attractive cashbacks and refer and earn benefits.</p>
</div>
            </div>
        </div>
    </section>
    <?php include 'partials/footer.php' ?>
</body>
</html>