<!DOCTYPE html>
<html lang="en">
<style>
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
<body>
  <model-viewer src="BarSeats.gltf" 
                ios-src="BarSeatsusdz"
                ar
                auto-rotate 
                camera-controls 
                shadow-intensity="2" 
                alt="A 3D model of a yellow sofa" background-color="#70BCD1">
                  
  </model-viewer>
</body>
</html>