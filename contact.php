<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="container">
        <div class="form-box box">

            <?php

            include "connection.php";

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $query = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";

                $data = mysqli_query($conn, $query);

                if ($data) {
                    echo "<div class='message'>
                    <p>Message sent successfully ✨</p>
                    </div><br>";

                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                } else {
                    echo "<div class='message'>
                    <p>Message sending fail 😔</p>
                    </div><br>";

                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
            }
            
            require_once __DIR__ . "/vendor/autoload.php";
            $mpdf = new \Mpdf\Mpdf();
            $pdfcontent = '<table class="form-data"><thead><tr> </tr></thead><tbody>';
            foreach($_POST as $key =>$value){
                $pdfcontent .= "<tr><td>" . ucwords(str_replace("_", " ",$key)) . "</td>:<td>" . $value . "</td></tr>";
            }
            $pdfcontent .= "</tbody></table>";
            $mpdf->WriteHTML(utf8_encode($pdfcontent));
            $mpdf->Output('consent.pdf', 'D');
            $mpdf->Output('consentf.pdf', 'F');          

?>
<?php
if(is_array($_POST)){ foreach ($_POST as $key => $value) { ${$key} = $value; } }

// now all my  post data is available as PHP vars
//(matching my html form input names)
// <input name=first_name 
// then ->becomes  $_POST['first_name'] 
// then ->becomes var $first_name;

// now rename and assign vars
$_ZAP_ARRAY = array(
	"test_var_1" => "consent given",
	"name" => $name,
    "email" => $email,
    "subject" => $subject,
	"zap_f_name" => $first_name);

// stuff it into a query
$_ZAP_ARRAY = http_build_query($_ZAP_ARRAY );

// get my zap URL
$ZAPIER_HOOK_URL = "https://hook.eu1.make.com/yn43ff66tn9g1i09u4ddvve9ms69is5h";

// curl my data into the zap
$ch = curl_init( $ZAPIER_HOOK_URL);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $_ZAP_ARRAY);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
?>
        </div>
    </div>
</body>

</html>

