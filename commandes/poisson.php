<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <link rel="stylesheet" href="css/styles_inscrip.css">
    <link rel="stylesheet" href="../css/aos.css">
</head>
<body>

    <div class="container">
        <div class="image-section">
            <img src="../images/Picture.png" alt="Restaurant Image" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="400">
        </div>
        <div class="form-section" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
        <form action="traitement_poisson.php" method="POST">
            <h2>Faite Vos Commandes</h2>
            <label for="nom"></label>
            <input type="text" id="nom" name="nom" value="Poisson braisé" readonly>
            <label for="prix"></label>
            <input type="text" id="prix" name="prix" value="1000"  style="color: red;" readonly>
            <br><label for="lieu">Adresse</label>
            <input type="text" id="lieu" name="lieu" placeholder="Saisir votre adresse">
            <h3>Quantité</h3>
            <select name="quantite" id="" style="width: 80px; height: 35px; border-radius: 5px;">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <div  class="logo">
            <input type="radio" name="mode" style="cursor: pointer;" value="Orange money"><img src="../images/Orange-Money-logo.png" alt="Orange money" height="30" width="40">
            <input type="radio" name="mode" style="cursor: pointer;" value="MTN money"><img src="../images/69-691715_mtn-mm.png" alt="MTN money" height="30" width="40">
            <input type="radio" name="mode" style="cursor: pointer;" value="Paypal"><img src="../images/Paypal_2014_logo.png" alt="Paypal" height="30" width="40">
        </div>
            <input type="submit" value="Commander" name="envoyer" class="button">
        </div>
        </form>
    </div>
    <style>
        @font-face {
    font-family: "Adorable Handmade";
    src: url("fonts/adorable_handmade/Adorable Handmade.ttf") format("truetype");
  }

.lotus{
    font-family: "Adorable Handmade";
    font-size: 40px;
}

body {
    font-family: Arial, sans-serif;
    background-color:#725D68;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    display: flex;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 900px;
    width: 70%;
    height: 90%;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.image-section {
    flex: 1;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.form-section {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 10%;
}

h2 {
    margin-bottom: 10px;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 20px;
}

input {
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-weight: 700;
    color: black;
    font-size: 20px;
    background-color: white;
    border: none;
}

.button {
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #ff9800;
    color: white;
    font-size: 16px;
    cursor: pointer;
    width: 150px;
}

button:hover {
    background-color: #4cae4c;
}
.logo{
    width: 50px;
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    cursor: pointer;
    
}

    </style>
    <script src="../js/inscription.js"></script>
    <script src="../js/aos.js"></script>
      <script>
          AOS.init();
      </script>
</body>
</html>