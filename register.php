<?php
include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head> 
<body>
<form method="post">
        
        <input type="text" id="Last_Name" name="Last_Name">
        <label>Last Name</label><br>

        <input type="text" id="First_Name" name="First_Name">
        <label>First Name</label><br>

        <input type="text" id="Middle_Name" name="Middle_Name">
        <label>Middle Name</label><br>

        <input type="text" id="Extension Name" name="extension_Name">
        <label>Extension Name</label><br>

        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 
        <label>Sex</label><br>

        <input type="date" id="birth_Date" name="birth_Date">
        <label>Birth_Date</label><br>

        <input type="number" id="age" name="age">
        <label>Age</label><br>

        <input type="text" id="home_Address" name="home_Address">
        <label>Home Address</label><br>

        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select>
        <label>Civil Status</label><br> 

        <input type="text" id="nationality" name="nationality">
        <label>Nationality</label><br>

        <input type="text" id="religion" name="religion">
        <label>Religion</label><br>

        <input type="text" id="boarding_Address" name="boarding_Address">
        <label>Boarding Address</label><br>

        <input type="text" id="contact_Number" name="contact_Number">
        <label>Contact Number</label><br>

        <input type="email" id="email_Address" name="email_Address">
        <label>Email Address</label><br>
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>
<?php
 if (array_key_exists('add_Student', $_POST))
 {
    $Last_Name =$_POST['Last_Name'];
    $First_Name =$_POST['First_Name'];
    $Middle_Name =$_POST['Middle_Name'];
    $extension_Name =$_POST['extension_Name'];
    $sex =$_POST['sex'];
    $birth_Date =$_POST['birth_Date'];
    $age =$_POST['age'];
    $home_Address =$_POST['home_Address'];
    $civil_Status =$_POST['civil_Status'];
    $nationality =$_POST['nationality'];
    $religion =$_POST['religion'];
    $boarding_Address =$_POST['boarding_Address'];
    $contact_Number =$_POST['contact_Number'];
    $email_Address =$_POST['email_Address'];

    $insert_person= "INSERT INTO  person (Lname, Fname, Mname, Ename, Sex, Birthdate, Age, Home_Address, Civil_status, Religion, Nationality, Boarding_address, Contact_Number, Email_address) 
    VALUES
     ('$Last_Name', '$First_Name','$Middle_Name','$extension_Name','$sex','$birth_Date','$age','$home_Address','$civil_Status','$religion','$nationality','$boarding_Address','$contact_Number','$email_Address');";
  $result = $connection->query($insert_person);

//$insertUserAccountQuery =  "INSERT INTO  person(Lname, Fname, Mname, Ename, Sex, Birthdate, Age, Home_Address, Civil_status, Religion, Nationality, Boarding_address, Contact_Number, Email_address) 
       // VALUES ('$Last_Name', '$First_Name','$Middle_Name','$extension_Name','$sex','$birth_Date','$age','$home_Address','$civil_Status','$religion','$nationality','$boarding_Address','$contact_Number','$email_Address');";
       //$connection->query($insertUserAccountQuery);

       //$connection->query("SET @InputLname ='$Last_Name'");
       //$connection->query("SET @InputFname ='$First_Name'");
      // $connection->query("SET @InputMname ='$Middle_Name'");
       //$connection->query("SET @InputEname ='$extension_Name'");
       //$connection->query("SET @Inputsex ='$sex'");
       //$connection->query("SET @InputBirthdate ='$birth_Date'");
     //  $connection->query("SET @InputAge ='$age'");
      // $connection->query("SET @InputHome_Address ='$home_Address'");
      // $connection->query("SET @InputCivil_Status ='$civil_Status'");
      // $connection->query("SET @InputReligion ='$religion'");
      // $connection->query("SET @InputNationality ='$nationality'");
     //  $connection->query("SET @InputBoarding_address ='$boarding_Address'");
      // $connection->query("SET @InputContact_Number ='$contact_Number'");
      // $connection->query("SET @InputEmail_address ='$email_Address'");
      // $insert_new_Account = $connection->query("CALL SP_Add_Person(@InputLname,@InputFname,@InputMname,@InputEname,@Inputsex,@InputBirthdate,@InputAge,@InputHome_Address, @InputCivil_Status,@InputReligion,@InputNationality,@InputBoarding_address, @InputContact_Number, @InputEmail_address)");
       
      // $result = $connection->query($insert_new_Account);
    }
?>
</body>
</html>
