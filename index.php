<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font -->
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <!-- mycss -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" />


  <title>Awesome</title>
</head>

<body>



  <div class="panel" id="panel">
    <div class="color-picker">change background</div>
    <div id="particles-js"></div>
  </div>

  <div id="jam"></div>

  <!-- kolom search -->
  <div class="lable">Search Engine</div>
  <form method="GET" action="https://duckduckgo.com/?q=%s">
    <div class="search-box">
      <input class="search-txt" type="text" name="q" placeholder="Type to search">
      <input type="submit" class="search-btn fas fa-search" value="Search">
    </div>
  </form>

  <!-- link direct -->
  <div class="direct-link">
    <a class="youtube" href="http://youtube.com/"><i class="fab fa-youtube fa-3x"></i></a>

    <a class="whatsapp" href="https://web.whatsapp.com/"><i class="fab fa-whatsapp fa-3x"></i></a>

    <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook fa-3x"></i></a>

    <a class="IG" href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram fa-3x"></i></a>
  </div>

  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
  <script>
    let panel = document.getElementById('panel')

    const pickr = Pickr.create({
      el: '.color-picker',
      theme: 'classic', // or 'monolith', or 'nano'

      swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
      ],

      components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
          hex: true,
          rgba: true,
          hsla: false,
          hsva: false,
          cmyk: false,
          input: true,
          clear: true,
          save: true
        }
      }
    });

    pickr.on('change', (...args) => {
      let color = args[0].toRGBA();
      console.log(color);
      this.panel.style.backgroundColor = `rgba(${color[0]},${color[1]},${color[2]},${color[3]})`;
    });
  </script>

</body>

</html>