<style>
.flexMain {
  display:flex;
  align-items: center
}
.flex1 { flex:1 }
.flex2 { flex:2 }
.flex3 { flex:3 }

button.siteLink {
  margin-left:-5px;
  border:none;
  padding:24px;
  display:inline-block;
  min-width:115px;
}
.whiteLink {
  background : #fff;
}
.whiteLink:active {
  background : #000;
  color: #fff;
}
.blackLink {
  color: #fff;
  background:#232323;
  transition: all 300ms linear;
}

.blackLink:active {
  color: #000;
  background:#fff
}
#siteBrand {
  font-family: impact;
  letter-spacing : -1px;
  font-size:32px;
  color:#252525;
  line-height : 1em;
}
#menuDrawer {
  background:#fff;
  position:fixed;
  height:100vh;
  overflow:auto;
  z-index:12312;
  top:0;
  left:0;
  border-right:1px solid #eaeaea;
  min-width:25%;
  max-width:320px;
  width:100%;
  transform : translateX(-100%);
  transition : transform 200ms linear;
}
#mainNavigation {
  transition : transform 200ms linear;
  background : #fff;
}
.drawMenu > #menuDrawer {
  transform : translateX(0%);
}
.drawMenu > #mainNavigation {
  transform : translateX(25%);
}
.fa-times {
  cursor : pointer
}
a.nav-menu-item:hover {
  margin-left:2px;
  border-left:10px solid black;
}
a.nav-menu-item{
  transition:border 200ms linear;
  text-decoration:none;
  display:block;
  padding:18px;
  padding-left:32px;
  border-bottom:1px solid #eaeaea;
  font-weight:bold;
  color:#343434
}
select.noStyle {
  border:none;
  outline:none
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

<div class="p-3 bg-dark text-white">
  <div class="flexMain">
    <div class="flex1">

    </div>
   
    <div class="flex1">

    </div>
  </div>
</div>
<div id="menuHolder">
  <div role="navigation" class="sticky-top border-bottom border-top" id="mainNavigation">
    <div class="flexMain">
      <div class="flex2">
        <button class="whiteLink siteLink" style="border-right:1px solid #eaeaea" onclick="menuToggle()"><i class="fas fa-bars me-2"></i> MENU</button>
      </div>
    

      <div class="flex2 text-end d-block d-md-none">
        <button class="whiteLink siteLink"><i class="fas fa-search"></i></button>
      </div>

      
    </div>
  </div>

  <div id="menuDrawer">
    <div class="p-4 border-bottom">
      <div class='row'>
     <div class="col">
     <div class="flex3 text-center" id="siteBrand">
     <br> 
     <center>Planes Max</center>
        <br>  
      </div>
        </div>
        <div class="col text-end ">
          <i class="fas fa-times" role="btn" onclick="menuToggle()"></i>
        </div>
      </div>
    </div>
    <div>
      <a id="myBtn" class="nav-menu-item"><i class="fas fa-home me-3"></i>Paises LDI</a>
      <a href="#" class="nav-menu-item"><i class="fab fa-product-hunt me-3"></i>Tarifas</a>
      <a href="#" class="nav-menu-item"><i class="fas fa-search me-3"></i>Bonos</a>
      <a href="#" class="nav-menu-item"><i class="fas fa-wrench me-3"></i>Consideraciones</a>
      <a href="#" class="nav-menu-item"><i class="fas fa-dollar-sign me-3"></i>Autoloquidable</a>
     
    </div>
  </div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
<script>
// Get the modal
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



var menuHolder = document.getElementById('menuHolder')
var siteBrand = document.getElementById('siteBrand')
function menuToggle(){
  if(menuHolder.className === "drawMenu") menuHolder.className = ""
  else menuHolder.className = "drawMenu"
}
if(window.innerWidth < 426) siteBrand.innerHTML = "MAS"
window.onresize = function(){
  if(window.innerWidth < 420) siteBrand.innerHTML = "MAS"
  else siteBrand.innerHTML = "MY AWESOME WEBSITE"
}
</script>