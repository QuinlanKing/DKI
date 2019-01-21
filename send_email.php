<?php
    
    $full_name = $_POST["full_name"];
    $company_name = $_POST["company_name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip_code = $_POST["zip_code"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $inquiry = $_POST["inquiry"];
    $message = $_POST["message"];
    $headers = 'From: contactform@burkesdki.com' . "\r\n" .
    'Reply-To: contactform@burkesdki.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $to = "contactus@burkesdki.com";
    $input = <<<EOT
From: $full_name \n
Email: $email\n
Phone Number: $phone\n
Company: $company_name\n
Address: $address, $city, $state, $zip_code\n
Message: $message
EOT;

    if(@mail($to, $inquiry, $input, $headers)){
        echo "Email Sent!";
    }else{
        echo "Email Failed!";
    }
?>  