<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Test</title>
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ac43f9efe1.js" crossorigin="anonymous"></script>
    <meta http-equiv="Location" content="http://tuweb.com/pagina.html"/>
    <meta name="viewport" content="width=device=width, initial-scale=1">
  </head>
  <body>
    <?php
      include "../includes/header.php";
    ?>
  <div class="cover d-flex justify-content-center align-items-center flex-column">
    <h1>My First Page</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>
  <section>
    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <div class="cover cover-small" style="background-image:url(https://www.cosmeticlatam.com/wp-content/uploads/2020/07/metales.jpg);">
            </div>
            <div class="card-body">
              <h5 class="card-title">Consejo 1</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <div class="cover cover-small" style="background-image:url(https://www.hola.com/imagenes/estar-bien/20190520142120/medio-ambiente-ingredientes-cosmeticos-perjudiciales-cs/0-680-36/xxx-t.jpg?filter=w600);">
            </div>
            <div class="card-body">
              <h5 class="card-title">Consejo 2</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card">
            <div class="cover cover-small" style="background-image:url(https://www.latercera.com/resizer/VfCC94VvRqPACg4JCOj-pgDCrHo=/900x600/smart/cloudfront-us-east-1.images.arcpublishing.com/copesa/ZX7ANMFJLBHRPJOFYHFJ3UOK3E.jpg);">
            </div>
            <div class="card-body">
              <h5 class="card-title">Consejo 3</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="fondo-marca">
      <div class="d-flex justify-content-center align-items-center flex-column">
        <h1>Marcas</h1>
      </div>
      <div class="card-group">
        <div class="card marcas"><!--solo .jpg-->
          <div class="cover cover-small" style="background-image:url(https://tse4.mm.bing.net/th?id=OIF.GIn2LflyqXOwoFDDQLUUzg&pid=Api&P=0&w=300&h=300);">
          </div>
        </div>
        <div class="card marcas">
          <div class="cover cover-small" style="background-image:url(https://marcasdemaquillaje.com/wp-content/uploads/2018/11/marca-de-maquillaje-unique.jpg);">
          </div>
        </div>
        <div class="card marcas">
          <div class="cover cover-small" style="background-image:url(https://www.eljardinrojo.com/wp-content/uploads/2020/06/Lanc%C3%B4me.jpg);">
          </div>
        </div>
        <div class="card marcas">
          <div class="cover cover-small" style="background-image:url(https://tentulogo.com/wp-content/uploads/2017/10/loreal-logo.jpg);">
          </div>
        </div>
        <div class="card marcas">
          <div class="cover cover-small" style="background-image:url(https://tse2.mm.bing.net/th?id=OIP.ZmVxB6uJMKdkclA_8aeygAHaHa&pid=Api&P=0&w=300&h=300);">
          </div>
        </div>
      </div>    
    </div>
  </section>
  <section>
    <?php
      include("../includes/footer.php")
    ?>
  </section>
  </body>
  </html>
</html>