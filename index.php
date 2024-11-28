<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive CV</title>
  <link rel="stylesheet" href="/style/style.css" />
  <link rel="stylesheet" href="formulaire.php">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <main>
    <div class="container">
      <div class="left_side">
        <div class="profiltext">
          <div class="imgBx">
            <img src="img/photocv.jpg" />
          </div>
          <h2>Lucas dequinze<br /><span>web Developer</span></h2>
        </div>
        <div class="contactInfo">
          <h3 class="title">contact info</h3>
          <ul>
            <li>
              <span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
              <a href="tel:+32477022157">+32477022157</a>
            </li>
            <li>
              <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
              <a href="mailto:lucas.dequinze@outlook.com">lucas.dequinze@outlook.com</a>
            </li>
            <li>
              <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
              <a href="https://maps.app.goo.gl/ie5fVCqMZ3RFeQcx5" target="_blank"> 5060 Auvelais</a>
            </li>
            <li>
              <span class="icon">
                <i class="fa-brands fa-github"></i></span>
              <a href="https://github.com/Aimstein69?tab=overview&from=2024-11-01&to=2024-11-07" target="_blank"> github</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="right_side">
        <div class="qualification">
          <h2>qualification:</h2>
          <hr />
          <ul>
            <li>1ere année de formation ifapme centre E6K 2024(en cours).</li>
          </ul>
        </div>
        <hr />
        <div class="hobbit">
          <h2>hobby:</h2>
          <ul>
            <li>la programmation.</li>
            <li>le trading.</li>
            <li>les nouvelles technologie.</li>
          </ul>
        </div>
        <hr />
        <div class="competences">
          <h2>compétences:</h2>
          <section>
            <p>html</p>
            <p>45%</p>
            <div class="container1">
              <div class="skill html"></div>
            </div>
          </section>
          <section>
            <p>css</p>
            <p>35%</p>
            <div class="container2">
              <div class="skill css"></div>
            </div>
          </section>
          <section>
            <p>php</p>
            <p>15%</p>
            <div class="container3">
              <div class="skill php"></div>
            </div>
          </section>
        </div>
        <hr>
        <div class="formulaire">
          <section>
            <h2>Formulaire de Contact:</h2>
            <form action="formulaire.php" method="POST">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Entrez votre email" required />

              <label for="message">Message:</label>
              <textarea id="message" name="message" placeholder="Votre message ici..." required></textarea>

              <input type="submit" value="Envoyer" />
            </form>
          </section>
        </div>
        <div>
          <footer>copyright @2024</footer>
        </div>
      </div>
    </div>
    </div>
  </main>
</body>

</html>