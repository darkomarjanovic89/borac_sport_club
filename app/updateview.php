


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Baza Borac</title>
  </head>
  <body>
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 col-sm-12">
<form action="updaterecord.php" method="post">
  <input type="hidden" name="id" value="<?php echo $rezultat['id']?>">
<input placeholder="clanarina"  type="text" name="ime" value="<?php echo $rezultat['ime']?>">
<input placeholder="prezime"  type="text" name="prezime" value="<?php echo $rezultat['prezime']?>">
<input placeholder="datum rodjenja"  type="text" name="datum_rodjenja" value="<?php echo $rezultat['datum_rodjenja']?>">
<input placeholder="kontakt"  type="text" name="kontakt" value="<?php echo $rezultat['kontakt']?>">
<input placeholder="clanarina" type="text"  name="clanarina" value="<?php echo $rezultat['clanarina']?>">
<input placeholder="program" type="text"  name="program" value="<?php echo $rezultat['program']?>">
<input placeholder="email"  type="hidden" name="email" value="<?php echo $rezultat['email']?>">
<input placeholder="password"  type="text" name="password" value="<?php echo $rezultat['password']?>">
<button type="submit">sačuvaj</button>

</form>


    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

