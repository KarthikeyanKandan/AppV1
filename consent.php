<
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.7.1.min.js"></script>
</head>

<body>


    <header class="navbar-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-chat"></i>AppV1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Home</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Consent form</a>
                        </li>
                        <li class="nav-item">
                            <div class="lang_switcher">
                            <button id="en" class="lang">EN</button>
                            <button id="fr" class="lang">FR</button>
                            </div>
                        </li>
<div style="clear:both;"></div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- hero section  -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12" style="width:100%; text-align: center;">
                <div class="name">
      <h1>Welcome
                    !
                                    </h1>
    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- contact section  -->

    <section class="contact-section" id="contact">
        <div class="container">

            <div class="row gy-4">

                <h1>Consent form</h1>
                

                </div>

                <div class="col-lg-6 form" style="width: 100%;">
                    <form action="contact.php" method="POST" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" key="name" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" key="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="Name on Health Card:" class="form-control" key="hcn" placeholder="Name on Health Card (if different)" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="Health Card" key="hn" placeholder="Health Card #" required>
                            </div>
                            <div class = "col-md-12">
                                <label> If you are giving consent but you are not the client, please indicate </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="Caregiver name 1:" class="form-control" placeholder="Caregiver Name" key="cn" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="Relationship to Client:"  key="rtc" placeholder="Relationship to Client" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="Caregiver name 2:" class="form-control" placeholder="Caregiver Name" key="cn" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="Relationship to Client:"  key="rtc" placeholder="Relationship to Client" required>
                            </div>
                            <div class = "col-md-12">
                                <label> I give consent to Hearing and Speech Nova Scotia (HSNS) to share information related to the HSNS services provided for the client named above. Information can be shared with the following individuals / agencies / professionals:</label>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="subject" rows="2" placeholder="Name and phone"
                                    required></textarea>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="message" rows="2" placeholder="Name and phone"
                                    required></textarea>
                            </div>           
                            
                            <div class = "col-md-12">
                                <label name> I give permission for HSNS to communicate about my assessment and/or Treatment
                                with the individuals/agencies/professionals listed above. Communication may be
                                face-to-face, by phone, by mail, by fax, or by secure email.:</label>
                                <input type="radio" id="yes1" name="Permission for communication with listed individuals:" value="YES">
                                <label for="yes1">YES</label><br>
                                <input type="radio" id="no1" name="Permission for communication with listed individuals:" value="NO">
                                <label for="no1">NO</label><br>
                            </div>
                            <div class = "col-md-12">
                                <label> I understand that email communications may not be secure. I give permission for
HSNS staffs to send the assessment and/or treatment's information to me via mail.:</label>
                                <input type="radio" id="yes2" name="Permission for communication via email:" value="YES">
                                <label for="yes2">YES</label><br>
                                <input type="radio" id="no2" name="Permission for communication via email:" value="NO">
                                <label for="no2">NO</label><br>
                            </div>
                            <div class = "col-md-12">
                                <label> I give permission for HSNS staff to contact me via text using a secure HSNS-issued
cell phone. HSNS staff will not send personal health information by text.
I understand that my personal health information may not be kept secure if I send it
by text.</label>
                                <input type="radio" id="yes3" name="Permission for communication via HSNS cellphone:" value="YES">
                                <label for="yes3">YES</label><br>
                                <input type="radio" id="no3" name="Permission for communication via HSNS cellphone:" value="NO">
                                <label for="no3">NO</label><br>
                            </div>
                            <div class = "col-md-12">
                                <label> Hearing and Speech Nova Scotia uses an electronic health record system. Any staff members who provides
care to you can view your personal health information as needed to provide you with hearing and speech
services. Personal health information is considered confidential in compliance with the Personal Health
Information Act (PHIA).</label>
                            </div>
                            <div class = "col-md-12">
                                <label> This consent is valid for one year from the date of signature.
If you wish to change any information on this form, please talk to any of our staff members.</label>
                            </div>
                             <div class = "col-md-12">
                                <label> By signing below, you confirm that you have legal authority to give consent.</label>
                            </div>

                            <div class="col-md-12 text-center">
                                <button name="submit" type="submit">give consent</button>
                            </div>

                        </div>
            
                    </form>

                </div>

            </div>

        </div>
        
        
    </section>
    
    <!-- footer section  -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo"><i class="bi bi-chat"></i> AppV1</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="d-flex">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">consent form</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p>&copy;Appv1</p>
                </div>

                <div class="col-lg-1 col-md-12 col-sm-12">
                    <!-- back to top  -->

                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                            class="bi bi-arrow-up-short"></i></a>
                </div>

            </div>

        </div>

    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>