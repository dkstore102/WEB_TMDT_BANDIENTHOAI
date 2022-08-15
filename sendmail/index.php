<?php
    class sendmail{
        function sendorder($url){
            $temple_files = '../sendmail/tem.php';
            $subject = "don hang DK store";
            $header = "From: dkstore102@gmail.com\r\n";
            $header .= "MIMI-Version: 1.0\r\n";
            $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            if(file_exists($temple_files))
            {
                $message = file_get_contents($temple_files);
            }else
                die("không có giao dien");
            if(mail($url,$subject,$message,$header)){
                echo 'success';
            }else{
                echo 'not success';
            }
        }
    }
?>