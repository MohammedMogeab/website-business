<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="refresh" content="3"> -->
  <!-- 
    - primary meta tags
  -->
  <title>Adex</title>
  <meta name="title" content="Adex">
  <meta name="description" content="This is a business agency html template made by codewithsadee">

  <!-- 
    - favicon
  -->

  <!-- Link Fontaosem -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/projects.css">
  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slide-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slide-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slide-3.jpg">


</head>

<body>

  <!-- 
    - #HEADER
  -->

  <?php include './assets/php/header.php';?>
  <main>

    <section class="section project" aria-labelledby="project-label">

      <!-- Start container-filter -->
      <div class="container-filter">

        <div class="filter-search ">
          <input type="text" class="input-search" id="search" placeholder="Sreach in Projects">
          <i class="fa-solid fa-magnifying-glass " class="icon-search"></i>
        </div>

        <div class="filtes-categrio">

          <div class="options-filter-language">
            <select name="language" id="">
              <option>language</option>
              <option value="HTML">HTML</option>
              <option value="CSS">CSS</option>
              <option value="javascript">javascript</option>
              <option value="PHH">PHP</option>
            </select>
          </div>

          <div class="options-filter-type">
            <select name="type" id="">
              <option>Type</option>
              <option value="website">website</option>
              <option value="desktop">Desktop</option>
              <option value="Android">Android</option>

            </select>
          </div>
        </div>



      </div>

      <!-- End container-filter -->
      <div class="container">
        <div class="card">
          <img src="./assets/images/blog-1.jpg" alt="Apartment">
          <div class="card-content">
            <div class="tags">
              <span class="tag blue">Devlopment</span>
              <span class="tag red">Web Site</span>
              <span class="tag green">Project</span>
            </div>
            <div class="content">
              <div>
                <h2>AI chating Desktop</h2>
                <p>with this project , chating and moving , get more fancy</p>
                <h3 class="price"> <span>price</span>$3,750</h3>
              </div>
            </div>
            <div class="details">
              <span><i class="fa-solid fa-comments"> 8762 <span><br>Comments</span> </i></span>
              <span><i class="fa-solid fa-list-check"> 3236<span> <br> Rate</span></i></span>
              <span><i class="fa-regular fa-heart"> 345 <span><br> Likes</span></i></span>
              <span><i class="fa-solid fa-cart-shopping">567<span> <br>Buys </span></i></span>
            </div>
            <button class="send" id="send">send</button>
          </div>
        </div>
        <div class="card">
          <img src="./assets/images/blog-1.jpg" alt="Apartment">
          <div class="card-content">
            <div class="tags">
              <span class="tag blue">Devlopment</span>
              <span class="tag red">Web Site</span>
              <span class="tag green">Project</span>
            </div>
            <div class="content">
              <div>
                <h2>AI chating Desktop</h2>
                <p>with this project , chating and moving , get more fancy</p>
                <h3 class="price"> <span>price</span>$3,750</h3>
              </div>
            </div>
            <div class="details">
              <span><i class="fa-solid fa-comments"> 8762 <span><br>Comments</span> </i></span>
              <span><i class="fa-solid fa-list-check"> 3236<span> <br> Rate</span></i></span>
              <span><i class="fa-regular fa-heart"> 345 <span><br> Likes</span></i></span>
              <span><i class="fa-solid fa-cart-shopping">567<span> <br>Buys </span></i></span>
            </div>
            <button class="send" id="send">send</button>
          </div>
        </div>
        <div class="card">
          <img src="./assets/images/blog-1.jpg" alt="Apartment">
          <div class="card-content">
            <div class="tags">
              <span class="tag blue">Devlopment</span>
              <span class="tag red">Web Site</span>
              <span class="tag green">Project</span>
            </div>
            <div class="content">
              <div>
                <h2>AI chating Desktop</h2>
                <p>with this project , chating and moving , get more fancy</p>
                <h3 class="price"> <span>price</span>$3,750</h3>
              </div>
            </div>
            <div class="details">
              <span><i class="fa-solid fa-comments"> 8762 <span><br>Comments</span> </i></span>
              <span><i class="fa-solid fa-list-check"> 3236<span> <br> Rate</span></i></span>
              <span><i class="fa-regular fa-heart"> 345 <span><br> Likes</span></i></span>
              <span><i class="fa-solid fa-cart-shopping">567<span> <br>Buys </span></i></span>
            </div>
            <button class="send" id="send">send</button>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--
    - #FOOTER
  -->
    <?php include './assets/php/footer.php';?>
  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>h