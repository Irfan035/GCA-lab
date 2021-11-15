<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
 //echo ($_POST['recaptcha_response']);
 if (isset($_POST["submit"]))
 {
 
   $name = trim($_POST["name"]);
    $emaill = trim($_POST["emaill"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $brand = trim($_POST["brand"]);
    $licences = trim($_POST["licences"]);
    $commencement = trim($_POST["commencement"]);
    $footage = trim($_POST["footage"]);
    $future = trim($_POST["future"]);
    $r_d = trim($_POST["r_d"]);
    $needs = trim($_POST["needs"]);
    $manufacturers = trim($_POST["manufacturers"]);
    $transportaion = trim($_POST["transportaion"]);
    $pickup = trim($_POST["pickup"]);
    $enquiry = trim($_POST["enquiry"]);
      // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LeZGtsbAAAAAAIC21vmMQio5YGsn441HYlhTxQ4';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url .'?secret='. $recaptcha_secret .'&response='. $recaptcha_response);
    //echo $recaptcha ;
    $recaptcha = json_decode($recaptcha);
    // Take action based on the score returned:

    if ($recaptcha->score >= 0.5)
     {
             $client_msg=" Thank you for getting in touch!

             We appreciate you contacting us/ GCA Labs. One of our colleagues will get back in touch with you soon!
             
             Have a great day!";
             $client= $emaill;
    $email="info@gcalabs.com,irfngujjar035@gmail.com";
    $mail_msg= "The Contact Information from GCA website is : \n  \n  Name = $name \n  Email = $emaill \n  Phone = $phone \n  Business Address = $address   \n  Brand/Brand Represented = $brand  \n  What types of licences are held & how many? = $licences \n  Recived Commencement? = $commencement \n  Square footage currently in Opertion? = $footage \n  Future sq ft projection? = $future \n  Research & Development Testing? = $r_d \n  Current Testing Needs (number) = $needs \n  For Manufacturers: What type of Matrices? = $manufacturers \n  Is Transportaion Needed? = $transportaion \n  Requested Pickup or Delivery day of testing samples? = $pickup \n  Message = $enquiry";
    $mail_subject="Contact information from GCA Labs website Contact us Form";
    mail($email, $mail_subject, $mail_msg);
    mail($client, $mail_subject, $client_msg);
    header("location: thank-you.html"); 
    }
        else
        {
            echo "Verification failed!";
    }
}
}
?>