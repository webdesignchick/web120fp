 

<?php include 'include/top.php';?>

<article class="pat411">
    <form action="process.php" method="post">
<h6>Personal Information:</h6>
<section>

    <label>Name:</label>
	<div class="form-group">
    	<input type="text" name="firstname" required class="form-control" placeholder="First Name">
    </div>
    
    <div class="form-group">
        <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
    </div>
    
    <div class="form-group">
    	<input type="text" name="lastname" required class="form-control" placeholder="Last Name">
	</div>
    
    <div class="form-group">
    	<input type="text" name="nickname" class="form-control" placeholder="Nick Name">
	</div>
    
    
    <label>Date of Birth:</label>
    <div class="form-group">
    	<input type="text" name="dob" class="form-control" placeholder="mm/dd/yyyy">
    </div>
     <div class="form-gourp">
    	<label> Sex:</label>
    	<input type="radio" name="sex" value="male">Male
    	<input type="radio" name="sex" value="female">Female
     </div>
   
    <div class="form-group">
    <label> Address: </label><br>
    <textarea rows="4" cols="30" required> </textarea><br>
</div>
    <div class="form-group">
    <label>Contact:</label><br>
</div>
    <div class="form-group">
    Home Phone <input type="text" name="homephone">
</div>
    <div class="form-group">
    Mobile Phone <input type="text" name="mobilephone">
</div>
    <div class="form-group">
    Email <input type="text" name="email"><br>
    <label> Preferred Contact Method:</label>
    <input type="radio" name="preferredcontactmethod" value="home">Home
    <input type="radio" name="preferredcontactmethod" value="mobile">Mobile
    <input type="radio" name="preferredcontactmethod" value="email">Email<br>
    <label> Marital Status:</label>
    <input type="radio" name="maritalstatus" value="single">Single
    <input type="radio" name="maritalstatus" value="married">Married/Living with Partner
    <input type="radio" name="maritalstatus" value="single">Divorced
    <input type="radio" name="maritalstatus" value="widowed">Widowed<br>
    <label> Family:</label><br>
    Spouse/Partner Name <input type="text" name="spousename" > <br>
  </div>
    <div class="form-group">
    Children's Name and Ages <br> <textarea rows="4" cols="30" name="childrennames" > </textarea><br> 
</div>
    <div class="form-group">
    
    <label> Emergency Contact:</label><br>
</div>
    <div class="form-group">
    Name <input type="text" name="ecname" required> 
</div>
    <div class="form-group">
    Number <input type="text" name="ecnumber" required> 
</div>
</section>

<section>
    Previous Care:<br>
    <textarea rows="4" cols="60" name="previouscare"> </textarea><br>
    
    <h6>Current Health Information:</h6>
    
    <label>Current Symptoms </label><br>
    <textarea rows="4" cols="60" name="currentsymptoms"> </textarea><br>
    Date Symptoms Began <input type="text" name="symptomdate"> 
    Have you visited other health care practitioners for THIS condition?
    <input type="radio" name="otherpractitioner" value="yes">Yes
    <input type="radio" name="otherpractitioner" value="no">No<br>
    If so, who:<br>
    Name <input type="text" name="otherpractitionernameone"> 
    Phone Number <input type="text" name="otherpractitionerphoneone" >
    Treatment <input type="text" name="otherpractitionertreatmentone" > <br>
    Name <input type="text" name="otherpractitionernametwo"> 
    Phone Number <input type="text" name="otherpractitionerphonetwo" >
    Treatment <input type="text" name="otherpractitionertreatmenttwo" > <br>
    Name <input type="text" name="otherpractitionernamethree"> 
    Phone Number <input type="text" name="otherpractitionerphonethree" >
    Treatment <input type="text" name="otherpractitionertreatmentthree" > <br>
     <label> Additional Treatment Notes</label><br>
    <textarea rows="4" cols="60" name="additionalnotes"> </textarea><br>


</section>
<section>
Allergies  <small>Please list any allergies past or present.</small><br>
     <textarea rows="4" cols="60"> </textarea>
</section>

<input type="submit" value="Submit">

</form>
</article>



<?php include 'include/bottom.php';?>