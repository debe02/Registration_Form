<html> 
    <head>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php if (isset($_POST['form_submitted']))
        {$firstname = "First Name:".$_POST['firstname']."  ";
         $lastname = "Last Name:".$_POST['lastname']."  ";
         $emailaddress = "Email Address:".$_POST['emailaddress']."  ";
         $dob = "Date OF Birth:".$_POST['dob']."  ";
         $gender = "Gender:".$_POST['gender']."  ";
         $country = "Country:".$_POST['country']."  ";
         $file=fopen("userdata.csv" , "a");
         fwrite($file, $firstname);
         fwrite($file, $lastname);
         fwrite($file, $emailaddress);
         fwrite($file, $dob);
         fwrite($file, $gender);
         fwrite($file, $country);
         //$data = array();
         //foreach($data as $row){
          //   fputcsv($file, $row);
         //}
         fclose($file);}
         ?> <!-- this code is executed when the form is submitted -->
            <h2>Thank you <?php echo $_POST['firstname'];?></h2>
            <p>You have been registered as <?php echo $_POST['firstname']. "  " . $_POST['lastname'];?></p>
            <p> GO <a href="registration_form.html">back</a> to the form</p>
           <!-- <p>This are your details<?php // $data = array('firstname', 'lastname', 'emailaddress', 'dob', 'gender','country'); 
            //print_r($data);?></p>-->
    </body>
</html>
