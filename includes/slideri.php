<style>
    * {box-sizing:border-box
       
    }

.slideshow-container {
  width: 500px;
  height: 350px;
  position: relative;
  margin: auto;
  

  
}


.mySlides {
  display: none;
  
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
    font-weight: 400;
    font-family: Lato;
    font-size: 18px;
    text-transform: uppercase;
    color: #F0FFFF;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
 margin-top: 50px;
  
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>

<div class="slideshow-container">
    <div class="mySlides fade">
     
      <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/07/12700876295f0dff16e4d39967465804_v4_big-1-600x360.jpg" style="width:100%">
      <div class="text">Shqiptarët e Luginës i kërkojnë një ministri Vuçiqit

        </div>
    </div>
  
    <div class="mySlides fade">
      
      <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/05/usa-1536x1024-1-600x360.jpg" style="width:100%">
      <div class="text">
        Të shtunën testohen për Covid-19 edhe 23 zyrtarë policorë në Prizren
 
       </div>
    </div>
  
    <div class="mySlides fade">
      
      <img src="https://www.gazetaexpress.com/wp-content/uploads/2020/07/523455Image1-600x360.jpg" style="width:100%">
      <div class="text">Irani ekzekuton spiunin e CIA’s

      </div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>

    <script>
        var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
    </script>
  </div>
 