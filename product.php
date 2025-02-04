<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Card/Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
  crossorigin="anonymous" />
  <link rel="shortcut icon" href="./asstes/images/svg/favicon.svg" type="image/svg+xml">
  
  <!-- 
    - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- 
      - custom css link
      -->
      <link rel="stylesheet" href="./assets/css/header.css">
      <link rel="stylesheet" href="./assets/css/style_product.css">
   <!-- <link rel="stylesheet" href="assets/css/header.css"> -->
   <!-- <link rel="stylesheet" href="assets/css/footer.css"> -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body>
<?php   include './assets/php/header.php';?>
  <div style="height: 50px;"></div>
  <div class="bg-gray-100" style="margin-top: 50px;">
    <div class="product_container mx-auto px-4 py-8">
      <div class="flex flex-wrap -mx-4">
        
        <!-- Product Images & video player -->
        <div class="w-full md:w-1/2 px-4 mb-8">
          <video id="mainVidio"  class="w-full h-auto rounded-lg shadow-md mb-4" controls autoplay>
            <source id="vidiosource" src="/assets/vids/vid.mp4" type="video/mp4">
            متصفحك لا يدعم تشغيل الفيديو.
          </video>
          <img id="mainImage" src="" class="w-full h-auto rounded-lg shadow-md mb-4" />
          
          <!-- Images and Video Icons -->
          <div class="flex gap-4 py-4 justify-center overflow-x-auto">
            <svg
              class=" size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
              data-type="video" vidsource="../vid.mp4" onclick="selected_item(this)" xmlns="http://www.w3.org/2000/svg"
              height="24px" viewBox="0 -960 960 960" width="24px" fill="auto">
              <path d="M320-200v-560l440 280-440 280Zm80-280Zm0 134 210-134-210-134v268Z" />
            </svg>

            <img
              src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8aGVhZHBob25lfGVufDB8MHx8fDE3MjEzMDM2OTB8MA&ixlib=rb-4.0.3&q=80&w=1080"
              alt="Thumbnail 1"
              class=" size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
              data-type="image" onclick="selected_item(this)">

            <img
              src="https://images.unsplash.com/photo-1484704849700-f032a568e944?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080"
              alt="Thumbnail 2"
              class=" size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
              data-type="image" onclick="selected_item(this)">
            <img
              src="https://images.unsplash.com/photo-1496957961599-e35b69ef5d7c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080"
              alt="Thumbnail 3"
              class=" size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
              data-type="image" onclick="selected_item(this)">
            <img
              src="https://images.unsplash.com/photo-1528148343865-51218c4a13e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwzfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080"
              alt="Thumbnail 4"
              class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
              data-type="image" onclick="selected_item(this)">
          </div>

        </div>
        <!-- Product Details -->
        <div class="w-full md:w-1/2 px-4">
          <h2 class="text-3xl font-bold mb-2">Premium Wireless Headphones</h2>
          <p class="text-gray-600 mb-4">SKU: WH1000XM4</p>
          <div class="mb-4">
            <span class="text-2xl font-bold mr-2">$349.99</span>
            <span class="text-gray-500 line-through">$399.99</span>
          </div>
          <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="size-6 text-yellow-500">
              <path fill-rule="evenodd"
                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="size-6 text-yellow-500">
              <path fill-rule="evenodd"
                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="size-6 text-yellow-500">
              <path fill-rule="evenodd"
                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="size-6 text-yellow-500">
              <path fill-rule="evenodd"
                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="size-6 text-yellow-500">
              <path fill-rule="evenodd"
                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                clip-rule="evenodd" />
            </svg>
            <span class="ml-2 text-gray-600">4.5 (120 reviews)</span>
          </div>
          <p class="text-gray-700 mb-6">Experience premium sound quality and industry-leading noise cancellation
            with
            these wireless headphones. Perfect for music lovers and frequent travelers.</p>
          <div class="flex space-x-4 mb-6">
            <button
              class="bg-indigo-600 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
              </svg>
              By Now
            </button>
            <button
              class="bg-gray-200 flex gap-2 items-center  text-gray-800 px-6 py-2 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
              </svg>
              Wishlist
            </button>
          </div>

          <div>
            <h3 class="text-lg font-semibold mb-2">Key Features:</h3>
            <ul class="list-disc list-inside text-gray-700">
              <li>Industry-leading noise cancellation</li>
              <li>30-hour battery life</li>
              <li>Touch sensor controls</li>
              <li>Speak-to-chat technology</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="review-bar">
    <!-- comments html -->
    <div class="comment_container mt-5 mb-5" id="reviews_comments_container">
      <!--
      - comments style css
      -->
      <div class="unique-comment-section">
        <div class="unique-header">
          <img src="https://via.placeholder.com/50" alt="صورة المستخدم">
          <h2>اسم المستخدم الحالي</h2>
        </div>
        <div class="unique-comment-count">إجمالي التعليقات: 5</div>

        <div class="unique-star-rating">
          <span class="unique-star">★</span>
          <span class="unique-star">★</span>
          <span class="unique-star">★</span>
          <span class="unique-star">★</span>
          <span class="unique-star-empty">☆</span>
          <span class="unique-rating-count">(4 تقييمات)</span>
        </div>

        <div class="unique-input-comment">
          <input type="text" placeholder="اكتب تعليقك هنا...">
          <button onclick="submitComment()">إرسال</button>
        </div>

        <div class="unique-comment">
          <div class="unique-user">
            <img src="https://via.placeholder.com/30" alt="صورة المستخدم">
            <h3>اسم المستخدم 1</h3>
          </div>
          <p>هذا هو نص التعليق الأول. هنا يمكنك كتابة محتوى التعليق.</p>
          <div class="unique-time">منذ 2 ساعة</div>
          <div class="unique-comment-footer">
            <span class="unique-like-button">👍 10 إعجابات</span>
            <span>5 ردود</span>
            <button class="unique-reply-btn" onclick="toggleReplyInput(this)">✏️</button>
          </div>

          <div class="unique-reply-input">
            <input type="text" placeholder="اكتب ردك هنا...">
            <button onclick="submitReply(this)">إرسال رد</button>
          </div>

          <div class="unique-reply">
            <div class="unique-user">
              <img src="https://via.placeholder.com/30" alt="صورة المستخدم">
              <h3>اسم المستخدم 2</h3>
            </div>
            <p>هذا هو نص الرد الأول على التعليق.</p>
            <div class="unique-time">منذ 30 دقيقة</div>
          </div>
          <div class="unique-reply">
            <div class="unique-user">
              <img src="https://via.placeholder.com/30" alt="صورة المستخدم">
              <h3>اسم المستخدم 2</h3>
            </div>
            <p>هذا هو نص الرد الأول على التعليق.</p>
            <div class="unique-time">منذ 30 دقيقة</div>
          </div>

          <div class="unique-reply" style="display: none;">
            <div class="unique-user">
              <img src="https://via.placeholder.com/30" alt="صورة المستخدم">
              <h3>اسم المستخدم 3</h3>
            </div>
            <p>هذا هو نص الرد الثاني على التعليق.</p>
            <div class="unique-time">منذ 15 دقيقة</div>
          </div>

          <div class="unique-reply" style="display: none;">
            <div class="unique-user">
              <img src="https://via.placeholder.com/30" alt="صورة المستخدم">
              <h3>اسم المستخدم 4</h3>
            </div>
            <p>هذا هو نص الرد الثالث على التعليق.</p>
            <div class="unique-time">منذ 5 دقيقة</div>
          </div>

          <div class="unique-more-replies" onclick="toggleReplies(this)">عرض المزيد</div>
        </div>

        <div class="unique-comment">
          <div class="unique-user">
            <img src="https://via.placeholder.com/30" alt="صورة المستخدم">
            <h3>اسم المستخدم 5</h3>
          </div>
          <p>هذا هو نص التعليق الثاني. هنا يمكنك كتابة محتوى التعليق.</p>
          <div class="unique-time">منذ 1 يوم</div>
          <div class="unique-comment-footer">
            <span class="unique-like-button">👍 5 إعجابات</span>
            <span>2 ردود</span>
            <button class="unique-reply-btn" onclick="toggleReplyInput(this)">✏️</button>
          </div>

          <div class="unique-reply-input">
            <input type="text" placeholder="اكتب ردك هنا...">
            <button onclick="submitReply(this)">إرسال رد</button>
          </div>
        </div>

      </div>

      <!--
    - end comments 
    -->
      <!-- developers -->
      <div class="Main-Devlopers-Container">
        <h3>developers</h3>
        <div class="unique-user-container">
          <div class="unique-user-card" id="user1" onclick="toggleExpand(event, this)">
              <img src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8aGVhZHBob25lfGVufDB8MHx8fDE3MjEzMDM2OTB8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="صورة المستخدم 1">
              <div class="unique-user-name">اسم المستخدم 1</div>
              <div class="unique-icon-container">
                  <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
                  <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      
          <div class="unique-user-card" id="user2" onclick="toggleExpand(event, this)">
              <img src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8aGVhZHBob25lfGVufDB8MHx8fDE3MjEzMDM2OTB8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="صورة المستخدم 2">
              <div class="unique-user-name">اسم المستخدم 2</div>
              <div class="unique-icon-container">
                  <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
                  <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      
          <div class="unique-user-card" id="user3" onclick="toggleExpand(event, this)">
              <img src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8aGVhZHBob25lfGVufDB8MHx8fDE3MjEzMDM2OTB8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="صورة المستخدم 3">
              <div class="unique-user-name">اسم المستخدم 3</div>
              <div class="unique-icon-container">
                  <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
                  <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      
          <div class="unique-user-card" id="user4" onclick="toggleExpand(event, this)">
              <img src="https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8aGVhZHBob25lfGVufDB8MHx8fDE3MjEzMDM2OTB8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="صورة المستخدم 4">
              <div class="unique-user-name">اسم المستخدم 4</div>
              <div class="unique-icon-container">
                  <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
                  <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      </div>
      </div>
    </div><!-- end developers -->
  </div><!-- end comments html -->
  <!-- developers teem -->
  <div class="Main-Devlopers-teem-container">
    <h3>Our Teem</h3>
    <div class="unique-user-container">
      <div class="unique-user-card" id="user1" onclick="toggleExpand(event, this)">
          <img src="https://via.placeholder.com/50" alt="صورة المستخدم 1">
          <div class="unique-user-name">اسم المستخدم 1</div>
          <div class="unique-icon-container">
              <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
              <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
  
      <div class="unique-user-card" id="user2" onclick="toggleExpand(event, this)">
          <img src="https://via.placeholder.com/50" alt="صورة المستخدم 2">
          <div class="unique-user-name">اسم المستخدم 2</div>
          <div class="unique-icon-container">
              <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
              <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
  
      <div class="unique-user-card" id="user3" onclick="toggleExpand(event, this)">
          <img src="https://via.placeholder.com/50" alt="صورة المستخدم 3">
          <div class="unique-user-name">اسم المستخدم 3</div>
          <div class="unique-icon-container">
              <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
              <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
  
      <div class="unique-user-card" id="user4" onclick="toggleExpand(event, this)">
          <img src="https://via.placeholder.com/50" alt="صورة المستخدم 4">
          <div class="unique-user-name">اسم المستخدم 4</div>
          <div class="unique-icon-container">
              <a href="#" class="unique-icon" title="GitHub"><i class="fab fa-github"></i></a>
              <a href="#" class="unique-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="unique-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" class="unique-icon" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
  </div>
  </div>
</div><!-- end developers teem -->
<?php include './assets/php/footer.php'; ?>

  <script src="/assets/js/script_product.js"></script>
</body>

</html>