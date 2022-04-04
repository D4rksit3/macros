<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Plan Max</title>
 <style>
     .titulo{
        position: absolute;
        left: 23.69%;
        right: 23.75%;
        top: 24.19%;
        bottom: 72.67%;
        color: white;
        background: #FF0000;
        border: 1px solid #000000;
        box-sizing: border-box;
     }
     .menu{
        position: absolute;
        left: 76.73%;
        right: -10.3%;
        top: 27.33%;
        bottom: 22.09%;

     }
     .select {
         
        position: absolute;
        left: 23.69%;
        right: 23.75%;
        top: 27.33%;
        bottom: 69.53%;
        color: white;
        background: #FF0000;
        border: 1px solid #000000;
        box-sizing: border-box;
     }
     .c1{
            
    position: absolute;
    left: 6.01%;
    right: 77.14%;
    top: 30.47%;
    bottom: 42.09%;

    background: #FFFFFF;
    border: 2px dashed #FF0000;
    box-sizing: border-box;
     }
     .c2{
         
    position: absolute;
    left: 6.01%;
    right: 77.14%;
    top: 59.16%;
    bottom: 21.36%;

    background: #FFFFFF;
    border: 2px dashed #FF0000;
    box-sizing: border-box;
     }
     .t1{
            
    position: absolute;
    left: 21.19%;;
    right: 77.14%;
    top: 50.69%;
    bottom: 50.37%;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    display: flex;
    align-items: center;
    text-align: center;

color: #000000;
     }
    .t2{
        
    position: absolute;
    left: 13.19%;;
    right: 77.14%;
    top: 32.83%;
    bottom: 27.23%;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    display: flex;
    align-items: center;
    text-align: center;

    color: #000000;

    }
    .b1{
        
position: absolute;
left: 23.69%;
right: 59.35%;
top: 30.47%;
bottom: 58.74%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b2{
        
position: absolute;
left: 23.69%;
right: 59.35%;
top: 41.26%;
bottom: 55.39%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b3{
        
position: absolute;
left: 23.69%;
right: 59.35%;
top: 44.61%;
bottom: 44.61%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b4{
        
position: absolute;
left: 23.69%;
right: 59.35%;
top: 55.39%;
bottom: 41.47%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;

    }
    .b5{
        
position: absolute;
left: 23.69%;
right: 59.35%;
top: 58.53%;
bottom: 38.32%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b6{

        position: absolute;
left: 23.69%;
right: 59.35%;
top: 61.68%;
bottom: 35.18%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b7{

        position: absolute;
left: 23.69%;
right: 59.35%;
top: 64.82%;
bottom: 32.04%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b8{

        position: absolute;
left: 23.69%;
right: 59.35%;
top: 67.96%;
bottom: 28.9%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    .b9{

        position: absolute;
left: 23.69%;
right: 59.35%;
top: 71.1%;
bottom: 21.36%;

background: #FF0000;
border: 1px solid #000000;
box-sizing: border-box;
    }
    </style> 
</head>
<body>
    
<!-- Inicios Modal -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" >PLANES MAX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li  class="nav-item">
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link">Paises LDI</a>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="modal" data-bs-target="#tarifa" class="nav-link" >Tarifas</a>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="modal" data-bs-target="#bono" class="nav-link" >Bonos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Consideraciones</a>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="modal" data-bs-target="#autoliquidable" class="nav-link" >Autoloquidable</a>
        </li>
      </ul>
      <form  class="d-flex">
        
        <a href="index.php" class="btn btn-danger" type="button">Salir</a>
      </form>
    </div>
  </div>
</nav>

<!-- PAISES LDI -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Destino Larga Distancia Internacional (LDI)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Planes Max y Max Internacional</a>
            </li>

        </ul>
        <p>Las llamadas de los destinos LDI0,LDI1,LDI2 y LDI se cobrarán siempre como adicionales a la tarifa indicada, y el destino LDI3 descontará de las unidades libres del plan desde Perú y si se agotan, se cobrarán como adicionales.</p>

                    
            <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">LDI 3</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">LDI 0</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">LDI 1</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">LDI 2</a>
                <a class="list-group-item list-group-item-action" id="list-3-list" data-bs-toggle="list" href="#list-3" role="tab" aria-controls="list-3">LDI</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    
                <center><img src="ldi3.png" alt="img"></center>

                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <center><img src="ldi0.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    
                <center><img src="ldi1.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <center><img src="ldi2.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-list">
                <center><img src="ldi.png" alt="img"></center>
                </div>
                </div>
            </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Tarifas -->

<div class="modal fade" id="tarifa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tarifas Adicionales y de Recarga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
          <center><img src="plan.png" alt="img"></center>
       
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Bono -->


<div class="modal fade" id="bono" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Destino Larga Distancia Internacional (LDI)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
    

                    
            <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-reno-list" data-bs-toggle="list" href="#list-reno" role="tab" aria-controls="list-reno">Bono Renovación</a>
                <a class="list-group-item list-group-item-action" id="list-reten-list" data-bs-toggle="list" href="#list-reten" role="tab" aria-controls="list-reten">Bono Retención</a>
                <a class="list-group-item list-group-item-action" id="list-tiktok-list" data-bs-toggle="list" href="#list-tiktok" role="tab" aria-controls="list-tiktok">Bono TikTok</a>
                <a class="list-group-item list-group-item-action" id="list-up-list" data-bs-toggle="list" href="#list-up" role="tab" aria-controls="list-up">Bono Upgrade</a>
                <a class="list-group-item list-group-item-action" id="list-tk-list" data-bs-toggle="list" href="#list-tk" role="tab" aria-controls="list-tk">Bono 5 Soles + Tik Tok</a>
                <a class="list-group-item list-group-item-action" id="list-4-list" data-bs-toggle="list" href="#list-4" role="tab" aria-controls="list-4">Bono Pronto Pago</a>
                <a class="list-group-item list-group-item-action" id="list-5-list" data-bs-toggle="list" href="#list-5" role="tab" aria-controls="list-5">Bono Contencion DownGrade</a>
                
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-reno" role="tabpanel" aria-labelledby="list-reno-list">
                    
                <center><img src="reno.png" alt="img"></center>

                </div>
                <div class="tab-pane fade" id="list-reten" role="tabpanel" aria-labelledby="list-reten-list">
                <center><img src="reten.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-tiktok" role="tabpanel" aria-labelledby="list-tiktok-list">
                    
                <center><img src="tiktok.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-up" role="tabpanel" aria-labelledby="list-up-list">
                <center><img src="upgrade.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-tk" role="tabpanel" aria-labelledby="list-tk-list">
                <center><img src="tiktokbono.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-list">
                <center><img src="ppago.png" alt="img"></center>
                </div>
                <div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="list-5-list">
                <center><img src="downgrade.png" alt="img"></center>
                </div>
                </div>
            </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Autoliquidable -->

<div class="modal fade" id="autoliquidable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tarifas Adicionales y de Recarga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
          <center><img src="autoliquidable.png" alt="img"></center>
       
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
  </div>
</div>
<!-- Fin Mod"al -->
<span class="c1">
    <p class="t1">INFORMACIÓN OBLIGATORIA</p>
</span>
<span class="c2">
<p class="t2">INFORMACIÓN COMPLEMENTARIA</p>
</span>
<div class="b1"></div>
<div class="b2"></div>
<div class="b3"></div>
<div class="b4"></div>
<div class="b5"></div>
<div class="b6"></div>
<div class="b7"></div>
<div class="b8"></div>
<div class="b9"></div>
<div class="titulo"> 
    <center><strong>Planes Max Limitados e Ilimitados</strong></center>
</div>
<img class="menu" src="menu.png" alt="">

<select class="select" aria-label="Default select example">
  <option selected>Selecciona Plan</option>
  <option value="1">Max Ilimitado 85 (Solo aplica para renovación y retención)</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

</script>

</body>
</html>