<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
if (isset($_POST["survey"]))
{
  $customer1 = $_POST["customer1"];
  $frequently = $_POST["frequently"];
  $choose1 = $_POST["choose"];
  $accessibility = $_POST["accessibility"];
   $services1 = $_POST["services1"];
   $cannabis1 = $_POST["cannabis1"];
   $concerned1 = $_POST["concerned1"];

   //table Q_8
   $reliability_of_test_results = $_POST["Quality/reliability_of_test_results"];
   $Turn_around_times_for_routine_tests = $_POST["Turn_around_times_for_routine_tests"];   
   $Variety_of_test_types_offered = $_POST["Variety_of_test_types_offered"];
   $Response_to_technical_questions_and_concerns = $_POST["Response_to_technical_questions_and_concerns"];
   $Response_to_technical_questions_and_concerns = $_POST["Response_to_technical_questions_and_concerns"];
   $Quality_of_phone_and_email_communications_with_lab_staff = $_POST["Quality_of_phone_and_email_communications_with_lab_staff"];
   $Clarity_usefulness_of_the_lab_report_and_or_supporting_documentation_you_received = $_POST["Clarity_usefulness_of_the_lab_report_and_or_supporting_documentation_you_received"];
   $Scope_of_services_offered = $_POST["Scope_of_services_offered"];
   $Cost_of_tests = $_POST["Cost_of_tests"];
   $technical_services = $_POST["technical_services"];
 
   //table Q_9
   $Lab_staff_were_knowledgeable_helpful_courteous_and_professional = $_POST["Lab_staff_were_knowledgeable_helpful_courteous_and_professional"];
   $Response_was_prompt = $_POST["Response_was_prompt"];
   $Satisfaction_with_resolution_to_a_concern = $_POST["Satisfaction_with_resolution_to_a_concern"];
   $Received_requested_information_or_test_containers_in_a_timely_manner = $_POST["Received_requested_information_or_test_containers_in_a_timely_manner"];
   $Information_received_was_clear_and_useful = $_POST["Information_received_was_clear_and_useful"];
   $Information_on_the_lab_website_was_useful_and_easy_to_locate = $_POST["Information_on_the_lab_website_was_useful_and_easy_to_locate"];
   $Business_hours_are_convenient = $_POST["Business_hours_are_convenient"];
   $Business_convenient = $_POST["Business_convenient"];

   //table Q_10
   $Lab_staff_were_knowledgeable_helpful_courteous_and_professional = $_POST["Lab_staff_were_knowledgeable_helpful_courteous_and_professional"];
   $Response_was_prompt = $_POST["Response_was_prompt"];
   $Satisfaction_with_resolution_to_a_concern = $_POST["Satisfaction_with_resolution_to_a_concern"];
   $Received_requested_information_or_test_containers_in_a_timely_manner = $_POST["Received_requested_information_or_test_containers_in_a_timely_manner"];
   $Information_received_was_clear_and_useful = $_POST["Information_received_was_clear_and_useful"];
   $Information_on_the_lab_website_was_useful_and_easy_to_locate = $_POST["Information_on_the_lab_website_was_useful_and_easy_to_locate"];
   $Business_hours_are_convenient = $_POST["Business_hours_are_convenient"];

   //Q_11
   $overall_experience = $_POST["overall_experience"];
   $improvements = $_POST["improvements"];
   $new_tests = $_POST["new_tests"];
   // Q_14 checkbox string
   $Potency_Testing = $_POST["Potency_Testing"];
   $Pesticides_Testing = $_POST["Pesticides_Testing"];
   $Heavy_Metals_Testing = $_POST["Heavy_Metals_Testing"];
   $Residual_Solvents_Testing = $_POST["Residual_Solvents_Testing"];
   $Terpene_Profiling = $_POST["Terpene_Profiling"];
   $Microbial_Testing = $_POST["Microbial_Testing"];
   $Moisture_Content_Testing = $_POST["Moisture_Content_Testing"];

   $significantly1 = $_POST["significantly1"];
   $suggestions = $_POST["suggestions"];
   $Satisfaction_Survey = $_POST["Satisfaction_Survey"];
   $today_date = $_POST["today_date"];
   $value1= "";
   $value2= "";
   $value3= "";
   $value4= "";
   $value5= "";
   $value6= "";
   $value7= "";
   $value8= "";
   $value9= "";
   $value10= "";
   $value11= "";

//check box
   foreach($choose1 as $value){
    $value1 .= $value.",";
   }
    foreach($services1 as $value){
      $value2 .= $value.",";
    }
    foreach($cannabis1 as $value){
      $value3 .= $value.",";
    }
  foreach($Potency_Testing as $value){
    $value4 .= $value.",";
   }
    foreach($Pesticides_Testing as $value){
      $value5 .= $value.",";
    }
    foreach($Heavy_Metals_Testing as $value){
      $value6 .= $value.",";
    }
    foreach($Residual_Solvents_Testing as $value){
    $value7 .= $value.",";
   }
    foreach($Terpene_Profiling as $value){
      $value8 .= $value.",";
    }
    foreach($Microbial_Testing as $value){
      $value9 .= $value.",";
    }
    foreach($Moisture_Content_Testing as $value){
      $value10 .= $value.",";
     }
      foreach($significantly1 as $value){
        $value11 .= $value.",";
      }
  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
      $recaptcha_secret = '6LeZGtsbAAAAAAIC21vmMQio5YGsn441HYlhTxQ4';
      $recaptcha_response = $_POST['recaptcha_response'];
  
      // Make and decode POST request:
      $recaptcha = file_get_contents($recaptcha_url .'?secret='. $recaptcha_secret .'&response='. $recaptcha_response);
      //echo $recaptcha ;
      $recaptcha = json_decode($recaptcha);
      // Take action based on the score returned:
  
      if ($recaptcha->score <= 0.5)
       {

   $email="info@gcalabs.com, Smh@gcalabs.com, Raza@gcalabs.com";
   $mail_msg= " GCA Labs Customer Satisfaction Survey from GCA website is : \n  \n 
   Q 1. What type of customer would you consider yourself? \n
   $customer1   \n 
   Q 2. How frequently do you use the GCA Labs? \n
   $frequently   \n 
   Q 3. Why do you choose to use the GCA Labs? Check all that apply. \n
    $value2 \n 
   Q 4. How do you rate accessibility of GCA Labs/facility? \n
   $accessibility   \n 
   Q 5. How did you find out about our services and/or resources do you rely on most to learn about new research for cannabis/hemp analysis? Check up to five. \n \n
   $value3 \n 
   Q 6. Who is your current Cannabis/Hemp testing Lab? (Check up to three) \n
   $value1   \n 
   Q 7. What is IMPORTANT to you as for as TESTING is concerned? \n
   $concerned1   \n 
   Q 8. How satisfied are you with each of the following technical services? Please provide specific examples of any services that exceeded or did not meet your expectations in the comment box. \n 
  Quality/reliability of test results = $reliability_of_test_results \n
  Turn-around times for routine tests = $Turn_around_times_for_routine_tests  \n
  Variety of test types offered = $Variety_of_test_types_offered \n
  Response to technical questions and concerns = $Response_to_technical_questions_and_concerns  \n
  Quality of phone and email communications with lab staff = $Quality_of_phone_and_email_communications_with_lab_staff \n
  Clarity/usefulness of the lab report and/or supporting documentation you received = $ $Clarity_usefulness_of_the_lab_report_and_or_supporting_documentation_you_received  \n
  Scope of services offered = $Scope_of_services_offered \n
  Cost of tests = $Cost_of_tests  \n
  Specific expectations met or failed examples = $technical_services  \n

  Q 9. For each of the following Administrative/Support Services, please rate your experience. Please provide specific examples of any services that exceeded or did not meet your expectations in the comment box. \n
  Lab staff were knowledgeable, helpful, courteous and professional =$Lab_staff_were_knowledgeable_helpful_courteous_and_professional \n
  Response was prompt = $Response_was_prompt \n
  Satisfaction with resolution to a concern = $Satisfaction_with_resolution_to_a_concern \n
  Received requested information or test containers in a timely manner = $Received_requested_information_or_test_containers_in_a_timely_manner \n
  Information received was clear and useful = $Information_received_was_clear_and_useful \n
  Information on the lab website was useful and easy to locate = $Information_on_the_lab_website_was_useful_and_easy_to_locate \n
  Business hours are convenient = $Business_hours_are_convenient \n
  Specific expectations met or failed examples = $Business_convenient \n

  Q 10. On a scale of 1 to 5, 1 being Poor and 5 being Excellent, Please rate the following. \n
  Lab staff were knowledgeable, helpful, courteous and professional = $Lab_staff_were_knowledgeable_helpful_courteous_and_professional \n
  Response was prompt = $Response_was_prompt \n
  Satisfaction with resolution to a concern= $Satisfaction_with_resolution_to_a_concern \n
  Received requested information or test containers in a timely manner = $Received_requested_information_or_test_containers_in_a_timely_manner \n
  Information received was clear and useful = $Information_received_was_clear_and_useful \n
  Information on the lab website was useful and easy to locate = $Information_on_the_lab_website_was_useful_and_easy_to_locate \n
  Business hours are convenient = $Business_hours_are_convenient \n

  Q 11. Please rate your overall experience with the services you have received from 
	the GCA Labs. \n
  Overall Experience = $overall_experience \n
  Q 12. What service related improvements can you recommend? \n
  $improvements \n
  Q 13. What new tests you wish GCA Labs to provide? \n
  $new_tests \n
  Q 14. Do you perform R&D Testing for following? [Currently perform or plan to perform in the near future for cannabis and/or hemp analysis- check all that apply]. \n
  Potency Testing = $value4 \n
  Pesticides Testing = $value5 \n
  Heavy Metals Testing = $value6 \n
  Residual Solvents Testing = $value7 \n
  Terpene Profiling = $value8 \n
  Microbial Testing = $value9 \n
  Moisture Content Testing = $value10 \n

  Q 15. Which of the following ISSUES significantly impact your operations and you would like professional advices from GCA Labs? Check all that apply. \n
   $value11 \n

  Q 16. What can we do to better serve you? Please add any additional comments or suggestions relative to your satisfaction with the GCA Labs, your experiences with the lab support or business staff, improving our services, or a general comment.\n
    Message=  $suggestions \n \n
  please provide your name, phone number, address and/or email address: \n \n
  Completion of survey =  $today_date \n \n
      
                                          " ;
   $mail_subject="GCA Labs Customer Satisfaction Survey";
  $success= mail($email, $mail_subject, $mail_msg);
  if( $success){
    echo '<script>alert("Thank you for filling out your information!
    ")</script>';
    header("location: contact-us.html");  
  }   
}
else
{
    echo "Verification failed!";
}
}
}
?>