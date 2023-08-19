

<?php

   
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'canvapille@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name \n".
                            "User Email: $visitor_email.\n".
                                "User Message: $message.\n";

                                $to = "devbhoomi4470@gmail.com";



                                $headers = "From: $email_from \r\n";
                                $headers = "Reply-To: $visitor_email  \r\n";
                                mail($to, $email_subject, $email_body, $headers);

                                header("location: index.html");
                                
                                
                                if(mail($to, $subject, $body, $headers)){
                                    echo '<div style="text-size: 10px; color: white; background-color: green; border-radius: 10px;"><h1>Email Sent Successfully</h1></div>
                                    
                                    
                                    <br><br>
                                    
                                    
                                    <div>
                                    <a href="index.html"><h1 style="text-size: 500px;"color: white; background-color: red; border-radius: 50%;>Go Back</h1></a></div>
                                    
                        <br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	
                        <br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br<br><br>	<br><br><br><br>	<br><br><br><br><br><br><br><br>	<br><br><br><br>	<br><br><br<br><br>	<br><br><br><br>	<br><br><br><br>	
                                    
<section>								     
<!-- footer section start -->
<footer style="background: #111;
padding: 15px 23px;
color: #fff;
text-align: center;">
   <span>Created By <a href="#" style="color: crimson;
text-decoration: none;">Shivam Mishra</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
</footer>
</section>';
                                    
                                    
                                    
                                    
                                    
                                }else {
                                     echo '<div style="text-size: 10px; color: white; background-color: red; border-radius: 10px;"><h1>Failed Ty Again!</h1></div>
                                    
                                    
                                    <br><br>
                                    
                                    
                                    <div>
                                    <a href="index.html"><h1 style="text-size: 500px;"color: white; background-color: red; border-radius: 50%;>Go Back</h1></a></div>
                                    
                        <br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	
                        <br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br><br>	<br><br><br<br><br>	<br><br><br><br>	<br><br><br><br><br><br><br><br>	<br><br><br><br>	<br><br><br<br><br>	<br><br><br><br>	<br><br><br><br>	
                                    
<section>								     
<!-- footer section start -->
<footer style="background: #111;
padding: 15px 23px;
color: #fff;
text-align: center;">
   <span>Created By <a href="#" style="color: crimson;
text-decoration: none;">Shivam Mishra</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
</footer>
</section>';
                                }

?>


<!--?>-->