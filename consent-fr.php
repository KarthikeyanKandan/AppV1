<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'accueil</title>

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
                                <form action='consent.php'>
                            <button id="translate" class="lang">EN</button>
</form>
                        </div>
                        </li>
<div style="clear:both;"></div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

  <section id="home" class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12" style="width:100%; text-align: center;">
          <div class="name">
            <h1>Bienvenue !</h1>
          </div>
        </div>

      </div>
    </div>
  </section>



  <section class="contact-section" id="contact">
    <div class="container">

      <div class="row gy-4">

        <h1>Formulaire de consentement</h1>


      </div>

      <div class="col-lg-6 form" style="width: 100%;">
        <form action="contact.php" method="POST" class="php-email-form">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" key="name" placeholder="Votre nom" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" key="email" placeholder="Votre courriel" required>
            </div>

            <div class="col-md-6">
              <input type="text" name="Name on Health Card:" class="form-control" key="hcn"
                placeholder="Nom sur la carte d'assurance-maladie (si différent)" required>
            </div>

            <div class="col-md-6 ">
              <input type="text" class="form-control" name="Health Card" key="hn" placeholder="Numéro de carte d'assurance maladie" required>
            </div>
            <div class="col-md-12">
              <label> Si vous donnez votre consentement, mais que vous n'êtes pas le client, veuillez l'indiquer </label>
            </div>
            <div class="col-md-6">
              <input type="text" name="Caregiver name 1:" class="form-control" placeholder="Nom du fournisseur de soins"
                key="cn" required>
            </div>

            <div class="col-md-6 ">
              <input type="text" class="form-control" name="Relationship to Client:"  key="rtc"
                placeholder="Relation avec le client" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="Caregiver name 2:" class="form-control" placeholder="Nom du fournisseur de soins"
                key="cn" required>
            </div>

            <div class="col-md-6 ">
              <input type="text" class="form-control" name="Relationship to Client:"  key="rtc"
                placeholder="Relation avec le client" required>
            </div>
            <div class="col-md-12">
              <label> Je consens à ce qu'Audition et Parole Nouvelle-Écosse (APNE-É) partage les informations relatives aux services
                fournis par APNE-É au client nommé ci-dessus. Les informations peuvent être partagées avec les personnes/organismes/professionnels suivants :</label>
            </div>
            <div class="col-md-6">
              <textarea class="form-control" name="subject" rows="2" placeholder="Nom et téléphone"
                required></textarea>
            </div>
            <div class="col-md-6">
              <textarea class="form-control" name="message" rows="2" placeholder="Nom et téléphone"
                required></textarea>
            </div>


          </div>
          <div class="col-md-12">
            <label> J'autorise APNE-É à communiquer au sujet de mon évaluation et/ou de mon traitement
              aux personnes/organismes/professionnels énumérés ci-dessus. La communication peut se faire en personne, par téléphone,
              par courrier, par télécopieur ou par courriel sécurisé.</label>
            <input type="radio" id="yes1" name="Permission for communication with listed individuals:" value="YES">
            <label for="yes1">OUI</label><br>
            <input type="radio" id="no1" name="Permission for communication with listed individuals:" value="NO">
            <label for="no1">NON</label><br>
          </div>
          <div class="col-md-12">
            <label> Je comprends que les communications par courriel peuvent ne pas être sécurisées. J'autorise le personnel
              d'APNE-É à m'envoyer les renseignements relatifs à l'évaluation et/ou au traitement par courrier.</label>
            <input type="radio" id="yes2" name="Permission for communication via email:" value="YES">
            <label for="yes2">OUI</label><br>
            <input type="radio" id="no2" name="Permission for communication via email:" value="NO">
            <label for="no2">NON</label><br>
          </div>
          <div class="col-md-12">
            <label> J'autorise le personnel d'APNE-É à me contacter par texto à l'aide d'un téléphone cellulaire sécurisé fourni
              par APNE-É. Le personnel d'APNE-É n'enverra pas de renseignements personnels sur la santé par texto.
              Je comprends que mes renseignements personnels sur la santé pourraient ne pas être conservés en sécurité si je
              les envoie par texto.</label>
            <input type="radio" id="yes3" name="Permission for communication via HSNS cellphone:" value="YES">
            <label for="yes3">OUI</label><br>
            <input type="radio" id="no3" name="Permission for communication via HSNS cellphone:" value="NO">
            <label for="no3">NON</label><br>
          </div>
          <div class="col-md-12">
            <label> Audition et Parole Nouvelle-Écosse utilise un système de dossiers médicaux électroniques. Tout membre du
              personnel qui vous fournit des soins peut consulter vos renseignements personnels sur la santé au besoin pour vous fournir des services
              d'audiologie et d'orthophonie. Les renseignements personnels sur la santé sont considérés comme confidentiels
              conformément à la Loi sur la protection des renseignements personnels sur la santé (LPRPS).</label>
          </div>
          <div class="col-md-12">
            <label> Ce consentement est valide pour un an à compter de la date de signature.
              Si vous souhaitez modifier des renseignements sur ce formulaire, veuillez en parler à un membre de notre personnel.</label>
          </div>
          <div class="col-md-12">
            <label> En signant ci-dessous, vous confirmez que vous avez le pouvoir légal de consentir.</label>
          </div>

          <div class="col-md-12 text-center">
            <button name="submit" type="submit">donner son consentement</button>
          </div>

        </div>
        </form>

      </div>

    </div>

  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <p class="logo"><i class="bi bi-chat"></i> AppV1</p>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <ul class="d-flex">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Formulaire de consentement</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-12 col-sm-12">
          <p>&copy;Appv1</p>
        </div>

        <div class="col-lg-1 col-md-12 col-sm-12">
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
