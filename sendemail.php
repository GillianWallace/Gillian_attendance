<?php
    require 'vendor/autoload.php';    

    class SendEmail{
        public static function SendMail($to, $subject, $content){
            $key = '791B696F2F327EEFBE341DB86AB58CDFB964C484095BB16C0C2DE9CC23371519C193D3B707BC1B3852DD93D08381EDB4';
            $url = 'https://api.elasticemail.com/v2/email/send';

              // $email = new \SendGrid\Mail\Mail();
            // $email->setFrom("nahum_kelly@yahoo.com", "Nahum Kelly");
            // $email->setSubject($subject);
            // $email->addTo($to);
            // $email->addContent("text/plain", $content);
            // //$email->addContent("text/html", $content);

            try {

                $email = array('from' => 'gillianwallace6@gmail.com
                ',
                'fromName' => 'IT Conference',
                'apikey' => $key,
                'subject' => $subject,
                'to' => $to,
                'bodyHtml' => $content,
                'bodyText' => $content,
                'isTransactional' => false);
                
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $email,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HEADER => false,
                    CURLOPT_SSL_VERIFYPEER => false
                ));
                
                $result=curl_exec ($ch);
                curl_close ($ch);
                
                //echo $result;

            } catch (Exception $e) {
                echo 'Email exception Caught : ' . $e->getMessage() . "\n";
                return false;
            }
        }
    }
?>