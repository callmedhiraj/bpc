<html>
    <head>
        <title>Course Registration Form </title>
</head>
<body>
    <form name="course_registration" id="course_registration" 
    method="post" action="process_course_registration.php"
    enctype="multipart/form-data" >
<div id="txtName" > <label> Name </label> : 
 <input type="text" name="txt_name" id="txt_name" placeholder="Enter your name" />
    
</div>
<div id="texPhone" > <label> Phone </label> : 
 <input type="number" name="txtPhone" id="txtPhone" placeholder="Enter your Phone" />
    
</div>
<div id="txtPassword" > <label> Password </label> : 
 <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter your password" />
    
</div>
<div id="txtEmail" > <label> Email </label> : 
 <input type="email" name="txtEmail" id="txtEmail" placeholder="Enter your Email" />
    
</div>
<div id="txtAreaEnquiry" > <label> Enquiry </label> : 
<textarea name="txtAreaEnquiry" id="txtAreaEnquiry"></textarea>
    
</div>
<div><!-- grouping checkboxes -->
<input type="checkbox" name="courses[]" id="chkBIM" value="bim" /> BIM 
<input type="checkbox" name="courses[]" id="chkCSIT" value="csit" /> BScCSIT 
<input type="checkbox" name="courses[]" id="chkBCA" value="bca" /> BCA 
</div>
<div> <lable>Gender </lable> <!-- group of RB -->
<input type="radio" name="gender" value="male" checked />Male
<input type="radio" name="gender" value="female"  /> Female
<input type="radio" name="gender" value="others" checked /> Others
</div>
<div>
    <label> Upload your Image </label>
    <input type="file" name="profile_pic"id="profile_pic"  />
</div>

<div>
    <label>City</label>
    <select name="city"id="city">
        <option value="pokhara" >Pokhara</option>
        <option value="biratnagar" >Biratnagar</option>
        <option value="rajbiraj" >Rajbiraj</option>
        <option value="birgunj" selected >Birgunj</option>
        <option value="hetauda" >Hetauda</option>
        <option value="nepalgunj" >Nepalgunj</option>

    </select>
</div>
<div>  
<input type="hidden" name="hidden" value="104" />
<input type="submit" name="submit" id="submit" value="SUBMIT" />
</div>
</form>


</body>
<html>