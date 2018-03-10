<?php
    session_start();
    if($_SESSION['loggedon'] == 0)
    {
      session_unset();
    }
    
    include("db_config.php");

    if(isset($_POST["submit"])){
        $get_file_title = $_POST["title"];
        $get_file_dept = $_POST["department_list"];
        $get_file_domain = $_POST['domain_list'];
        $get_file = $_FILES['file'];
        
        $file_name = $get_file['name'];
        $file_tmp = $get_file['tmp_name'];
        $file_size = $get_file['size'];
        $file_error = $get_file['error'];
        
        
       //Get file extension
        $file_ext = explode('.',$file_name);
        $file_ext = strtolower($file_ext[1]);

        //Check for  file handling error and upload size 
        if($file_error == 0){
            if($file_size <= 10485760){
                $file_name_new = uniqid().'.'.$file_ext;
                $file_destination = 'abstract/'.$file_name_new;
               
                //echo $file_tmp."<br>";
                //echo $file_destination;

                //Moving file to its new destination
                if(move_uploaded_file($file_tmp,$file_destination)){

                    //Fetching current auto increment value from table 
                   /* $sql="SELECT  Auto_increment from INFORMATION_SCHEMA.TABLES where table_name=\"submission\" AND table_schema=DATABASE()";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $submissionid = $row[0];
                    */
                    $retrive_userid = $_SESSION['userid']; 
                    echo $retrive_userid."<br>";
                    echo $get_file_dept."<br>";
                    echo $get_file_domain."<br>";
                    echo $file_name."<br>";
                    echo $file_name_new."<br>";

                    $sql = "INSERT INTO submission(submissionid,userid,title,dept_id,domain_id,ftimestamp,orignal_file_name,file_path) VALUES(0,".$retrive_userid.",\"".$get_file_title."\",".$get_file_dept.",".$get_file_domain.",(now()),\"".$file_name."\",\"".$file_name_new."\")";
                    echo $sql;
                    if($conn->query($sql) === TRUE){
                        $Message = urlencode("Abstract Uploaded successfully");
                        $_SESSION["abstractupload"]=1;

                        //PHP Mailer
                        $to="rikeshkamra97@gmail.com";
                        $Name=$_SESSION["first_name"]." ".$_SESSION['last_name'];
                        $Subject=$get_file_title;
                        $Email=$_SESSION["email"];
                        $Message=="This is working fine";
                        $header="From:".$Email."\r\n".
                                "Name:".$Name."\r\n";
                                'X-Mailer: PHP/' . phpversion();
                                
                        mail($to,$Subject,$Message,$header);
                        // $ch = curl_init("http://www.hackersarenas.com/contact_us.html");
                        // curl_exec($ch);
                        // require("phpmailer/PHPMailerAutoload.php");
                        
                        // $mail = new PHPMailer();
                        
                        // $mail->IsSMTP();
                        
                        // $mail->Host = "smtp.gmail.com";
                        
                        // $mail->SMTPAuth = true; 
                        
                        // $mail->Username = "yoursmtp@username.com"; // SMTP username
                        // $mail->Password = "hidden"; // SMTP password
                        // $mail->addAttachment("uploads/".$file_name);
                        // $mail->From = $email;
                        // $mail->SMTPSecure = 'tls'; 
                        // $mail->Port = 587; //SMTP port
                        // $mail->addAddress("your@email.com", "your name");
                        // $mail->Subject = "You have an email from a website visitor!";
                        // $mail->Body ="
                        // Name: $name<br>
                        // Email: $email<br>
                        // Telephone: $phone<br><br><br>
                        // Comments: $message";
                        // $mail->AltBody = $message;
                        
                        // if(!$mail->Send())
                        // {
                        // echo "Message could not be sent. <p>";
                        // echo "Mailer Error: " . $mail->ErrorInfo;
                        // exit;
                        // }
                        
                        // echo "<script>alert('Message has been sent')</script>";
                    }
                    else{
                        $Message = urlencode("Error uploading Abstract.Try Again!");
                    }

                }
                else{
                    $Message = urlencode("Error uploading Abstract.Try Again!");
                }

                
               header("Location:profile.php?Message=".$Message);
            }
        }
        
    }
?>