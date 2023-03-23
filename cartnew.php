<!DOCTYPE html>
<html lang="en">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FurnitureLand</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/lightslider.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
:not(:defined) > * {
    display: none;
  }

  model-viewer {
    background-color: #eee;
    --poster-color: #eee;
  }

  #ar-button {
    background-image: url(../assets/ic_view_in_ar_new_googblue_48dp.png);
    background-repeat: no-repeat;
    background-size: 20px 20px;
    background-position: 12px 50%;
    background-color: #fff;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    bottom: 132px;
    padding: 0px 16px 0px 40px;
    font-family: Roboto Regular, Helvetica Neue, sans-serif;
    font-size: 14px;
    color:#4285f4;
    height: 36px;
    line-height: 36px;
    border-radius: 18px;
    border: 1px solid #DADCE0;
  }

  #ar-button:active {
    background-color: #E8EAED;
  }

  #ar-button:focus {
    outline: none;
  }

  #ar-button:focus-visible {
    outline: 1px solid #4285f4;
  }

  @keyframes circle {
    from { transform: translateX(-50%) rotate(0deg) translateX(50px) rotate(0deg); }
    to   { transform: translateX(-50%) rotate(360deg) translateX(50px) rotate(-360deg); }
  }

  @keyframes elongate {
    from { transform: translateX(100px); }
    to   { transform: translateX(-100px); }
  }

  model-viewer > #ar-prompt {
    position: absolute;
    left: 50%;
    bottom: 175px;
    animation: elongate 2s infinite ease-in-out alternate;
    display: none;
  }

  model-viewer[ar-status="session-started"] > #ar-prompt {
    display: block;
  }

  model-viewer > #ar-prompt > img {
    animation: circle 4s linear infinite;
  }

  .slider {
    width: 100%;
    text-align: center;
    overflow: hidden;
    position: absolute;
    bottom: 16px;
  }

  .slides {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
  }

  .slide {
    scroll-snap-align: start;
    flex-shrink: 0;
    width: 100px;
    height: 100px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    background-color: #fff;
    margin-right: 10px;
    border-radius: 10px;
    border: none;
    display: flex;
  }

  .slide.selected {
    border: 2px solid #4285f4;
  }

  .slide:focus {
    outline: none;
  }

  .slide:focus-visible {
    outline: 1px solid #4285f4;
  }






body {
  margin: 1em;
  padding: 0;
  font-family: Google Sans, Noto, Roboto, Helvetica Neue, sans-serif;
  color: #244376;
}


#card {
  margin: 3em auto;
  display: flex;
  flex-direction: column;
  max-width: 600px;
  border-radius: 6px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.25);
  overflow: hidden;
}

model-viewer {
  width: 100%;
  height: 400px;
}

.attribution {
  display: flex;
  flex-direction: row;
  margin: 1em;
}

.attribution h1 {
  margin: 0 0 0.25em;
}

.attribution img {
  opacity: 0.5;
  height: 2em;
}

.attribution .cc {
  flex-shrink: 0;
  text-decoration: none;
}

footer {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: auto;
  text-align: center;
  font-style: italic;
  line-height: 1.5em;
}
</style>

<head>
  <title>model-viewer  Augmented Reality</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no,
  minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="styles.css">

  <!-- ðŸ’ Include both scripts below to support all browsers! -->

  <!-- Loads <model-viewer> for modern browsers: -->
  <script type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.js">
  </script>

  <!-- Loads <model-viewer> for old browsers like IE11: -->
  <script nomodule
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js">
  </script>

  <!-- The following libraries and polyfills are recommended to maximize browser support -->
  <!-- NOTE: you must adjust the paths as appropriate for your project -->
      
  <!-- ðŸš¨ REQUIRED: Web Components polyfill to support Edge and Firefox < 63 -->
  <script src="https://unpkg.com/@webcomponents/webcomponentsjs@2.1.3/webcomponents-loader.js"></script>

  <!-- ðŸ’ OPTIONAL: Intersection Observer polyfill for better performance in Safari and IE11 -->
  <script src="https://unpkg.com/intersection-observer@0.5.1/intersection-observer.js"></script>

  <!-- ðŸ’ OPTIONAL: Resize Observer polyfill improves resize behavior in non-Chrome browsers -->
  <script src="https://unpkg.com/resize-observer-polyfill@1.5.1/dist/ResizeObserver.js"></script>

  <!-- ðŸ’ OPTIONAL: Fullscreen polyfill is required for experimental AR features in Canary -->
  <!--<script src="https://unpkg.com/fullscreen-polyfill@1.0.2/dist/fullscreen.polyfill.js"></script>-->

  <!-- ðŸ’ OPTIONAL: Include prismatic.js for Magic Leap support -->
  <!--<script src="https://unpkg.com/@magicleap/prismatic@0.18.2/prismatic.min.js"></script>-->

</head>
<a href="index.html"><input type="submit" name="back" value="BACK"/></a>

<body>


  <model-viewer src="Sofa GM Plutone_OBJ.gltf" 
                ios-src="Sofa GM Plutone_OBJ.usdz"
                ar
                auto-rotate 
                camera-controls 
                shadow-intensity="2" 
                alt="A 3D model of a yellow sofa" background-color="#70BCD1">
				

  <div id="ar-prompt">
    <img src="yellowsofa.png">
  </div>

  <div class="slider">
    <div class="slides">
      <button class="slide selected" onclick="switchSrc(this, 'Chair')" style="background-image: url('redsofa.jpeg');">

   
      
      
      
    </button></div>
  </div>
                  
				  
  
 

</model-viewer>
<script type="module">
  const modelViewer = document.querySelector("model-viewer");

  window.switchSrc = (element, name) => {
    
   
    modelViewer.src = 'Sofa_01.gltf';
    modelViewer.poster = 'redsofa.jpeg';
	
	
    const slides = document.querySelectorAll(".slide");
    slides.forEach((element) => {element.classList.remove("selected");});
    element.classList.add("selected");
  };

  document.querySelector(".slider").addEventListener('beforexrselect', (ev) => {
    // Keep slider interactions from affecting the XR scene.
    ev.preventDefault();
  });
</script>
<a href="AR01.php"><input type="submit" name="View in full scree" value="VIEW IN FULL SCREEN"/></a>


  <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            
            <h3>Sofa</h3>
            <h2>$149.99</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              First replenish living. Creepeth image image. Creeping can't, won't called.
              Two fruitful let days signs sea together all land fly subdue
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="cart.php" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		  <model-viewer src="Chair2.gltf" 
                ios-src="Chair2.usdz"
                ar
                auto-rotate 
                camera-controls 
                shadow-intensity="2" 
                alt="A 3D model of a yellow sofa" background-color="#70BCD1">
				
				
					
				
   </model-viewer>
   <a href="AR02.php"><input type="submit" name="View in full scree" value="VIEW IN FULL SCREEN"/></a>
   
  
  <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            
            <h3>Single seater sofa</h3>
            <h2>$149.99</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              First replenish living. Creepeth image image. Creeping can't, won't called.
              Two fruitful let days signs sea together all land fly subdue
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="cart.php" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<model-viewer src="WoodChair_01(1).gltf" 
                ios-src="WoodChair_01(1).usdz"
                ar
                auto-rotate 
                camera-controls 
                shadow-intensity="2" 
                alt="A 3D model of a yellow sofa" background-color="#70BCD1">
				
				
 
                  
  </model-viewer>
  <a href="AR03.php"><input type="submit" name="View in full scree" value="VIEW IN FULL SCREEN"/></a>
  <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            
            <h3>wooden chair</h3>
            <h2>$149.99</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              First replenish living. Creepeth image image. Creeping can't, won't called.
              Two fruitful let days signs sea together all land fly subdue
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="cart.php" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		<model-viewer src="BarSeats.gltf" 
                ios-src="BarSeats.usdz"
                ar
                auto-rotate 
                camera-controls 
                shadow-intensity="2" 
                alt="A 3D model of a yellow sofa" background-color="#70BCD1">
				
				
 
                  
  </model-viewer>
  <a href="AR04.php"><input type="submit" name="View in full scree" value="VIEW IN FULL SCREEN"/></a>
  <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            
            <h3>wooden Stool</h3>
            <h2>$149.99</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              First replenish living. Creepeth image image. Creeping can't, won't called.
              Two fruitful let days signs sea together all land fly subdue
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="cart.php" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>

		
		
		<model-viewer src="536 Lamp.gltf" 
                ios-src="536 Lamp.usdz"
                ar
                auto-rotate 
                camera-controls 
                shadow-intensity="2" 
                alt="A 3D model of a yellow sofa" background-color="#70BCD1">
				
				
 
                  
  </model-viewer>

  <a href="AR05.php"><input type="submit" name="View in full scree" value="VIEW IN FULL SCREEN"/></a>
  <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            
            <h3>Lamp</h3>
            <h2>$149.99</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              First replenish living. Creepeth image image. Creeping can't, won't called.
              Two fruitful let days signs sea together all land fly subdue
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="cart.php" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>

</body>
</html>