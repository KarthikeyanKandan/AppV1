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

            ?>
            <?php
  require_once __DIR__ . "/vendor/autoload.php";
  $mpdf = new \Mpdf\Mpdf();
  $pdfcontent = '<table class="form-data"><thead><tr> </tr></thead><tbody>';
  foreach($_POST as $key =>$value){
      $pdfcontent .= "<tr><td>" . ucwords(str_replace("_", " ",$key)) . "</td>:<td>" . $value . "</td></tr>";
  }
  $pdfcontent .= "</tbody></table>";
  $mpdf->WriteHTML(utf8_encode($pdfcontent));
  $mpdf->Output('formdata.pdf', 'D');
?>

        </div>
    </div>
</body>

</html>

