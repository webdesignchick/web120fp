 

<?php include 'include/top.php';?>



<article class="pat411">
    <form action="process.php" method="post">
<h6>Personal Information:</h6>
<section>
    <label>Name:</label><br>
    First  <input type="text" name="firstname" required>
    Middle <input type="text" name="middlename">
    Last <input type="text" name="lastname" required><br>
    Nickname <input type="text" name="nickname">
    <label>Date of Birth </label><input type="text" name="dob"><br>
    <label> Sex:</label>
    <input type="radio" name="sex" value="male">Male
    <input type="radio" name="sex" value="female">Female<br>
    <label> Address: </label><br>
    <textarea rows="4" cols="30" required> </textarea><br>
    <label>Contact:</label><br>
    Home Phone <input type="text" name="homephone">
    Mobile Phone <input type="text" name="homephone">
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
    Children's Name and Ages <br> <textarea rows="4" cols="30" > </textarea><br> 
    
    <label> Emergency Contact:</label><br>
    Name <input type="text" name="ecname" required> 
    Number <input type="text" name="ecnumber" required> 
</section>

<section>
    Previous Care:<br>
    <textarea rows="4" cols="60"> </textarea><br>
    
    <h6>Current Health Information:</h6>
    
    <label>Current Symptoms </label><br>
    <textarea rows="4" cols="60"> </textarea><br>
    Date Symptoms Began <input type="text" name="symptomdate"> 
    Have you visited other health care practitioners for THIS condition?
    <input type="radio" name="otherpractitioner" value="yes">Yes
    <input type="radio" name="otherpractitioner" value="no">No<br>
    If so, who:<br>
    Name <input type="text" name="otherpractitioner"> 
    Phone Number <input type="text" name="otherpractitioner" >
    Treatment <input type="text" name="otherpractitioner" > <br>
    Name <input type="text" name="otherpractitioner"> 
    Phone Number <input type="text" name="otherpractitioner" >
    Treatment <input type="text" name="otherpractitioner" > <br>
    Name <input type="text" name="otherpractitioner"> 
    Phone Number <input type="text" name="otherpractitioner" >
    Treatment <input type="text" name="otherpractitioner" > <br>
     <label> Additional Treatment Notes</label><br>
    <textarea rows="4" cols="60"> </textarea><br>


</section>
<section>
Allergies  <small>Please list any allergies past or present.</small><br>
     <textarea rows="4" cols="60"> </textarea>
</section>

<input type="submit" value="Submit">

</form>
</article>



<?php include 'include/bottom.php';?>