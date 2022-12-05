<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>php-dischi-json</title>
</head>
<body>

<header>
  <div>
    <img class="logo" src="spotify.png" alt="logo">
  </div>
</header>

<main>
  <div id="app">
    <div class="container p-5 d-flex flex-wrap">
      <div v-for="(disco, index) in dischi" :key="index" class="card bg-transparent border-0 p-5">
        <div class="card card-disco w-100 border-0 text-center pb-4">
          <div class="image w-100">
            <img class="mb-4 px-5 pt-4 w-100" :src="disco.poster" :alt="disco.title">
          </div>
          <h5>{{disco.title}}</h5>
          <h6 class="text-secondary">{{disco.author}}</h6>
          <h5>{{disco.year}}</h5>
        </div>
      </div>
    </div>
  </div>
</main>


<script src="./main.js"></script>
</body>
</html>