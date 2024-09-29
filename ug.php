<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body class="my-3">
<!-- ////////////////////////////////////////// -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-header" style="background-color: #cbeef3;">
                    <h5 class="card-title text-center">G.VENKATASWAMY NAIDU COLLEGE -
                    <span style="color: blue;">UG ONLINE ADMISSION FORM</span>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="ug_form.php" method="post" class="form-horizontal row">
                        <legend class="text-center">Choose Your Courses</legend>
                        <div class="row">
                            
                            <label for="gender" class="control-label col-sm-3 col-form-label text-end">Courses Offered in :</label>
                            <div class="col-sm-8">
                                <select name="branch" id="branch" class="form-control form-select"  required>
                                    <option value="" selected disabled>Select</option>
                                  <option value="BSC_CS">B.Sc.Computer Science</option>
                                                <option value="BSc_IT">B.Sc.Information TEchnology</option>
                                                <option value="BSC_CDF">B.Sc.Costume Fashion & Designing</option>
                                                <option value="BSC_Electronics">B.Sc.Electronics</option>
                                                <option value="BCA">B.C.A</option>
                                                <option value="BA_English">B.A.English</option>
                                                <option value="BBA">BBA</option>
                                                <option value="BCom">B.Com</option>
                                                <option value="BCom_PA">B.Com P.A</option>
                                                <option value="BCom_BA">B.Com B.A</option>
                                    
                                    
                                </select>
                                
                            </div>
                        </div>
                        <fieldset class="mb-3">
                            <legend class="text-center">Personal Details</legend>
                            <hr>
                            <div class="mb-3 row">
                                <label for="applicant_name" class="col-sm-3 col-form-label text-end">Applicant's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="applicant_name" id="applicant_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="father_name" class="col-sm-3 col-form-label text-end ">Father's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="father_name" id="father_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="mother_name" class="col-sm-3 col-form-label text-end">Mother's Name :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="mother_name" id="mother_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="date_of_birth" class="col-sm-3 col-form-label text-end">Date of Birth :</label>
                                <div class="col-sm-2">
                                    <select name="date_day" id="date_of_birth" class="form-select" required>
                                        <option selected disabled value="">Day</option>
                                         <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                    </select>
                                    <span class="form-text"></span>
                                </div>
                                <div class="col-sm-2">
                                    <select name="date_month" class="form-select" required>
                                        <option selected disabled value="">Month</option>
                                        <option value="01">01 - January</option>
                                                <option value="02">02 - February</option>
                                                <option value="03">03 - March</option>
                                                <option value="04">04 - April</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - June</option>
                                                <option value="07">07 - July</option>
                                                <option value="08">08 - August</option>
                                                <option value="09">09 - September</option>
                                                <option value="10">10 - October</option>
                                                <option value="11">11 - November</option>
                                                <option value="12">12 - December</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <select name="date_year" class="form-select" required>
                                        <option disabled selected value="">Year</option>
                                        <option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option>option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label text-end" for="mobile">Mobile :</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-text">+91</span>
                                        <input type="text" class="form-control" required name="mobile" id="mobile" maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gender" class="col-sm-3 col-form-label text-end">Gender :</label>
                                <div class="col-sm-2">
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="" selected disabled>Select</option>
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                    </select>
                                </div>
                                <label for="religion" class="col-sm-2 col-form-label text-end">Religion :</label>
                                <div class="col-sm-3">
                                    <select name="religion" id="religion" class="form-select" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="HINDUISM">HINDUISM</option>
                                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                                        <option value="BUDDHISM">BUDDHISM</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="blood_group" class="col-sm-3 col-form-label text-end">Blood Group :</label>
                                <div class="col-sm-2">
                                    <select name="blood_group" id="blood_group" class="form-select" required>
                                        <option value="">Select</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                                <label for="nationality" class="col-sm-2 col-form-label text-end">Nationality :</label>
                                <div class="col-sm-3">
                                    <select name="nationality" id="nationality" class="form-select" required>
                                        <option value="">Select</option>
                                        <option value="BANGLADESHI" selected>BANGLADESHI</option>
                                        <option value="DENMARK">DENMARK</option>
                                        <option value="FRANCE">FRANCE</option>
                                        <option value="FINLAND">FINLAND</option>
                                        <option value="GERMANY">GERMANY</option>
                                        <option value="ICELAND">ICELAND</option>
                                        <option value="INDIA">INDIA</option>
                                        <option value="ITALY">ITALY</option>
                                        <option value="IRELAND">IRELAND</option>
                                        <option value="NETHERLAND">NETHERLAND</option>
                                        <option value="NORWAY">NORWAY</option>
                                        <option value="SWEDEN">SWEDEN</option>
                                        <option value="SWITZERLAND">SWITZERLAND</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Uncomment and modify if needed -->
                            <!--
                            <div class="mb-3 row">
                                <label for="national_id" class="col-sm-3 col-form-label text-end">National ID :</label>
                                <div class="col-sm-6">
                                    <input type="text" name="national_id" id="national_id" class="form-control" required>
                                </div>
                            </div>
                            -->
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 col-form-label text-end">Email :</label>
                                <div class="col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="aadhar_number" class="col-sm-3 col-form-label text-end">Aadhar Number :</label>
                                <div class="col-sm-7">
                                    <input type="text" name="aadhar_number" id="aadhar_number" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="present_address" class="col-sm-3 col-form-label text-end">Present Address :</label>
                                <div class="col-sm-7">
                                    <textarea name="present_address" rows="3" id="present_address" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="permanent_address" class="col-sm-3 col-form-label text-end">Permanent Address :</label>
                                <div class="col-sm-7">
                                    <textarea name="permanent_address" id="permanent_address" rows="3" class="form-control" required></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend class="text-center">Academic Qualifications</legend>
                            
                            <!-- ************ Start of SSC and HSC************** -->
                            <div class="row">
                                <hr>
                                <!-- ************ Start of SSC ************** -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">SSC</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="ssc_board" class="col-sm-4 col-form-label text-end">Board :</label>
                                                <div class="col-sm-8">
                                                    <select name="ssc_board" id="ssc_board" class="form-select" required>
                                                        <option value="State_Board">State Board</option>
                                                        <option value="CBSE">Central Board of Secondary Education (CBSE)</option>
                                                        <option value="ICSE">Indian Certificate of Secondary Education (ICSE)</option>
                                                        <option value="IGCSE">Cambridge International - IGCSE</option>
                                                        <option value="EDEXCEL INTERNATIONAL">Edexcel International</option>
                                                        <option value="OTHERS">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="ssc_medium" class="col-sm-4 col-form-label text-end">Medium :</label>
                                                <div class="col-sm-8">
                                                    <select name="ssc_medium" id="ssc_medium" class="form-select" required>
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="TAMIL">TAMIL</option>
                                                        <option value="ENGLISH">ENGLISH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="ssc_institute_name" class="col-sm-4 col-form-label text-end">Institution Name:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ssc_institute_name" id="ssc_institute_name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="ssc_mark" class="col-sm-4 col-form-label text-end">Mark :</label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="ssc_mark" id="ssc_mark" class="form-control" min="10" max="500" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="ssc_pass_year" class="col-sm-4 col-form-label text-end">Passing Year :</label>
                                                <div class="col-sm-8">
                                                    <select name="ssc_pass_year" id="ssc_pass_year" class="form-select" required>
                                                        <option selected disabled value="">Select One</option>
                                                        <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option>option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ************ End of SSC ************** -->
                                <!-- ************ Start of HSC ************** -->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">HSC</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="hsc_board" class="col-sm-4 col-form-label text-end">Board :</label>
                                                <div class="col-sm-8">
                                                    <select name="hsc_board" id="hsc_board" class="form-select" required>
                                                        <option selected disabled value="">Select One</option>
                                                        <option value="State Board">State Board</option>
                                                        <option value="Central Board of Secondary Education (CBSE)">Central Board of Secondary Education (CBSE)</option>
                                                        <option value="Indian Certificate of Secondary Education (ICSE)">Indian Certificate of Secondary Education (ICSE)</option>
                                                        <option value="IGCSE">Cambridge International - IGCSE</option>
                                                        <option value="EDEXCEL INTERNATIONAL">Edexcel International</option>
                                                        <option value="OTHERS">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="hsc_medium" class="col-sm-4 col-form-label text-end">Medium :</label>
                                                <div class="col-sm-8">
                                                    <select name="hsc_medium" id="hsc_medium" class="form-select" required>
                                                        <option value="" disabled selected>Select</option>
                                                        <option value="TAMIL">TAMIL</option>
                                                        <option value="ENGLISH">ENGLISH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="hsc_institute_name" class="col-sm-4 col-form-label text-end">Institution Name:</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="hsc_institute_name" id="hsc_institute_name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="hsc_mark" class="col-sm-4 col-form-label text-end">Mark :</label>
                                                <div class="col-sm-8">
                                                    <input type="number" min="10" max="600" name="hsc_mark" id="hsc_mark" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="hsc_group" class="col-sm-4 col-form-label text-end">Group :</label>
                                                <div class="col-sm-8">
                                                    <select name="hsc_group" id="hsc_group" class="form-select" required>
                                                        <option selected disabled value="">Select One</option>
                                                        <option value="Mathematics">Mathematics</option>
        <option value="Botony">Botony</option>
        <option value="Zoology">Zoology</option>
        <option value="Physics">Physics</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Computer Application">Computer Application</option>
        <option value="English Literature">English Literature</option>
        <option value="Commerce">Commerece</option>
        <option value="Commerce(Professional Accounting)">Commerce(Professional Accounting)</option>
        <option value="Commerce(Business Analytics)">Commerce(Business Analytics)</option>
        <option value="Statistics">Statistics</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Costume Fashion & Designing">Costume & Fashion Designing</option>
        <option value="Electronics">Electronics</option>
        <option value="Bio-Chemistry">Bio-Chemistry</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="hsc_pass_year" class="col-sm-4 col-form-label text-end">Passing Year :</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" required name="hsc_pass_year" id="hsc_pass_year">
                                                        <option selected disabled value="">Select One</option>
                                                        <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option>option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ************ End of HSC ************** -->
                            </div>
                            <!-- ************ End of SSC and HSC************** -->
                           
                        </div>
                    </div>
                </div>
                <!-- ************ End of Masters Level (if any)************** -->
            </fieldset>
        </div>
        <div class="card-footer">
            <div class="row mt-4">
                <hr>
                <div class="col-lg-12  d-flex align-items-center justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="all_correct" name="all_correct" value="1">
                        <label class="form-check-label" for="all_correct">
                            I hereby declare that all the above information is correct and assure that I will abide by all the rules.
                        </label>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-2 col-lg-offset-5">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit">
                </div>
            </div>
        </div>
    </div>
    
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>