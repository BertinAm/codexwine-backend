<?php
                         use Twilio\Rest\Client;
                         $fault = '';
                        if(isset($_POST['submit1'])){
                            $tel = $_POST['tel'];
                            $code1 = mt_rand(10000,99999);

                            session_start();
                            $_SESSION['tel'] = $tel;

                            require_once 'connect.php';

                                $result1 = mysqli_query($conn,"SELECT * FROM userprofile WHERE uTellPhone='" . $tel . "'");
                                $row1= mysqli_fetch_array($result1);
 
                                if($row1){


                                    /*header('content-type:text/html;charset=utf8');

                                    $apiKey = "z9tGCJen";
                                    $apiSecret = "Ecioo0fD";
                                    $appId = "3CuLLt0C";

                                    $url = "https://api.onbuka.com/v3/sendSms";
                                    //$url = "https://my.onbuka.com/sms/TestSms";

                                    $timeStamp = time();
                                    $sign = md5($apiKey.$apiSecret.$timeStamp);

                                    $dataArr['appId'] = $appId;
                                    $dataArr['numbers'] = '+237'.$tel;
                                    $dataArr['content'] = "Your reset password code is: ".$code1.".";
                                    $dataArr['senderId'] = 'Codexjobwin';
                                    $data = json_encode($dataArr);
                                    $headers = array('Content-Type:application/json;charset=UTF-8',"Sign:$sign","Timestamp:$timeStamp","Api-Key:$apiKey");

                                    $ch = curl_init();

                                    curl_setopt($ch, CURLOPT_URL,$url);
                                    curl_setopt($ch, CURLOPT_POST, 1);
                                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 600);
                                    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
                                    curl_setopt($ch, CURLOPT_POSTFIELDS , $data);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

                                    $output = curl_exec($ch);
                                    curl_close($ch);

                                    var_dump($output);

                                    $date = date("Y-m-d h:i:sa");
                                    $result2 = mysqli_query($conn,"INSERT INTO num_code_validate (uTellPhone, code, date_time) VALUES ('$tel', '$code1', '$date')");
                                    
                                    header("Location: number_verification.php");
                                    exit();
                                    session_abort();*/



                                    /*include('function.php');
                                    
                                    $body = "Codexjobwin: Your reset password code is: ".$code1;
                                    $from = '+12515122525';
                                    $tell = '+237'.$tel;
                                    $id = 'ACb8284021369639638a7182e2fa561d64';
                                    $token = '8ac849ab483ae1bfa94b282c16580040';
                                    send_twilio_sms($id, $token, $from, $tell, $body);

                                    $date = date("Y-m-d h:i:sa");
                                    $result2 = mysqli_query($conn,"INSERT INTO num_code_validate (uTellPhone, code, date_time) VALUES ('$tel', '$code1', '$date')");
                                    
                                    header("Location: number_verification.php");
                                    exit();
                                    session_abort();*/

                                

                                require_once 'vendor/autoload.php';
                                $sid = "ACb8284021369639638a7182e2fa561d64";
                                $token = "8ac849ab483ae1bfa94b282c16580040";
                                $twilio = new Client($sid, $token);

                                $message = $twilio->messages
                                                  ->create('+237'.$tel,
                                                          [
                                                              "body" => "Codexjobwin: Your reset password code is: ".$code1,
                                                              "from" => "+12515122525"
                                                          ]
                                                 );

                                    $date = date("Y-m-d h:i:sa");
                                    $result2 = mysqli_query($conn,"INSERT INTO num_code_validate (uTellPhone, code, date_time) VALUES ('$tel', '$code1', '$date')");
                                    
                                    header("Location: number_verification.php");
                                    exit();
                                    session_abort();
                        }else{
                            $fault = "Number not found in database";
                            echo 'Error!';
                        }

                    }
                         ?>


            <?php 
                         
                         use PHPMailer\PHPMailer\PHPMailer;
                         use PHPMailer\PHPMailer\Exception;
                         require 'PHPMailer-master/src/Exception.php';
                         require 'PHPMailer-master/src/PHPMailer.php';
                         require 'PHPMailer-master/src/SMTP.php';
                         $notice = '';
                            //echo "correct";
                            if(isset($_POST['submit'])){
                                $email = $_POST['email'];
                                $code = mt_rand(10000,99999);

                                session_start();
                                $_SESSION['email'] = $email;
                                
                              if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //check if email is valid or not

                                require_once 'connect.php';

                                $result = mysqli_query($conn,"SELECT * FROM userprofile WHERE uEmail='" . $email . "'");
                                $row= mysqli_fetch_array($result);
 
                                if($row){
                                //check if email exists in database

                                //require_once('./phpmail/class.phpmailer.php');

                                
 
                                $mail = new PHPMailer();
 
                                $mail->CharSet =  "utf-8";
                                $mail->IsSMTP();                          
                                // Enable verbose debug output
                                //$mail->SMTPDebug = 1;     
                                // enable SMTP authentication
                                $mail->Mailer = "smtp";
                                $mail->SMTPAuth = TRUE;       
                               // $mail->SMTPAutoTLS = false;           
                                // GMAIL username
                                $mail->Username = "nkonghorachael@gmail.com";
                                // GMAIL password
                                $mail->Password = "xentywhkqiozikzd";
                                $mail->SMTPSecure = "tls";  
                                // sets GMAIL as the SMTP server
                                $mail->Host = "smtp.gmail.com";
                                //$mail->Host = 'localhost';
                                // set the SMTP port for the GMAIL server
                                $mail->Port = "587";
                                $mail->From='codexjobwin@gmail.com';
                                $mail->FromName='Codexjobwin';
                                $mail->AddAddress($email, $row['uFirstName'] .' '. $row['uLastName']);
                                $mail->Subject  =  'Reset Password';
                                $mail->IsHTML(true);
                                $mail->Body    = 'This is your password reset code: '.$code.' Do not share this code with anybody else!';
                                if($mail->Send())
                                {
                                    $date = date("Y-m-d h:i:sa");
                                    $result1 = mysqli_query($conn,"INSERT INTO code_validate (uEmail, code, date_time) VALUES ('$email', '$code', '$date')");
                                    //echo "Check Your Email and use the code to reset your password";
                                    header("Location: email_verification.php");
                                    exit();
                                    session_abort();
                                }
                                else
                                {
                                    echo "Mail Error - >".$mail->ErrorInfo;
                                }
                              }else{
                                $notice = "Email not found in database!!";
                              }
                            } else{
                                $notice = "Invalid Email Address!!";
                            }
                            
                        
                        }

                         ?>