<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattami</title>
    <?php include 'conf.php' ?>
</head>
<body>
    <?php include 'header.php' ?>

    <div class="container-form">
        <h2>Contattami</h2>
        <form action="#" method="POST">
            <label for="nome">Nome <span>*</span></label>
            <input type="text" id="nome" name="nome" placeholder="Il tuo nome" required>

            <label for="email">Email <span>*</span></label>
            <input type="email" id="email" name="email" placeholder="La tua Email" required>

            <label for="messaggio">Messaggio <span>*</span></label>
            <textarea id="messaggio" name="messaggio" rows="6" placeholder="Il tuo messaggio" required></textarea>

            <input type="submit" name="invia" id="invia" value="Invia">
        </form>
        <div class="social-form">
            <a href="https://www.instagram.com/llorenzocabiati/"><i class="fa fa-instagram" style="font-size:150%"></i></a>
            <a href="https://www.linkedin.com/in/lorenzo-cabiati-779a03294/"><i class="fa fa-linkedin" style="font-size:150%"></i></a> 
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>