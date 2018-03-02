<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel='shortcut icon' href="img/cynergie-logo-white.ico" type='image/x-icon'/ >
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 
</head>
<body>

  <section class="hero is-primary is-medium  mongrad">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="/">
              <img src="img/cynergie-logo-white.png" class="" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
              <a href="/" class="navbar-item ">
                Projet
              </a>
              <a class="navbar-item is-active" href = "contact">
                Contact
              </a>
              <span class="navbar-item">
                <a class="button is-white is-outlined is-small" href="http://cedille.etsmtl.ca/">
                  <span class="icon">
                    <i class="far fa-copyright"></i>
                  </span>
                  <span>Club cedille</span>
                </a>
              </span>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <section class="section is-medium ">
    <div class="container  ">
      <div class="form-width">
        <form id="contactus" enctype="multipart/form-data"  method="post" >
          <div class="field">
            <label class="label">Votre Nom</label>
            <div class="control">
              <input class="input" name="name" type="text" placeholder="Votre nom"  maxlength="50">
            </div>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="email" name="email" placeholder="Votre e-mail"   maxlength="50">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>

          </div>

          <div class="field">
            <label class="label">Phone</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="tel" name="phone" placeholder="Votre numéro"   maxlength="50">
              <span class="icon is-small is-left">
                <i class="fas fa-phone"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Subject</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input"  name="subject" placeholder="Sujet du message"   maxlength="50">
              <span class="icon is-small is-left">
                <i class="fal fa-comment"></i>
              </span>
            </div>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" name="message" placeholder="Votre message" ></textarea>
            </div>
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button name="submit" type="submit" class="button is-link">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <section class="section is-small ">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.9302763822852!2d-73.5649800972535!3d45.49472019086769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a60aa839707%3A0xb732a719a45c45f6!2s%C3%89cole+de+technologie+sup%C3%A9rieure+%C3%89TS!5e0!3m2!1sen!2sca!4v1518919044091"   width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
  </section>

  <footer class="footer">
    <div class="container">
        <div class="columns features">
            <div class="column gap">
                <div class="content is-offset-2 center">
                    <p class="has-text-centered"> Copyleft <span class="Copyleft">©</span> Club Cedille</p>
                    <a class="button is-link is-outlined" href="https://www.facebook.com/clubcedille">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="button is-link is-outlined" href="#">
                        <i class="far fa-envelope"></i>
                    </a>
                    <a class="button is-link is-outlined" href="https://github.com/ClubCedille?utf8=%E2%9C%93&q=cynergie&type=&language=">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="button is-link is-outlined" href="https://www.linkedin.com/company/cedille">
                        <i class="fab fa-linkedin"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
