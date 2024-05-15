
<!DOCTYPE html>
<html>
<head>
  <title>Responsive Product Card Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" href="style.css">
    <style>

html,
body {
 
}
.covery{
    /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
    position: sticky;
    top: 0;
}
/* h2,
p {
    margin: 30px 0 0;
    padding: 0;
} 
p {
    color: #072f5f;
} */
.slider {
    max-width: 800px;
    width: 90%;
    height: 60vh;
    margin: 15px auto;
    /* background: linear-gradient(to right, #185a9d, #43cea2); */
    /* box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;   */
      padding: 15px 0;
    /* box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);  */
}

.slick-slider button{ 
    position: absolute;
    top: 50%;
    background: #fff;
    border: none;
    outline: none;
    z-index:100;
    width: 50px;
    height: 50px; 
    color: transparent;
    cursor: pointer;
    transform: translate(0%,-70%);
    border-radius: 36px;
    box-shadow: 0px 2px 20px rgba(0,0,0,0.07);
}
.slick-slider .slick-prev{
    left:-30px;
}
.slick-slider .slick-prev::before{
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f104";
    font-size:30px;
    color: #072f5f;
    left: 8px;
    position: relative;
    z-index: 10;
}
.slick-slider .slick-next{
    right:-30px;
}
.slick-slider .slick-next::after{
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f105";
    font-size:30px;
    color: #072f5f;
    right: 15px;
    position: relative;
    z-index: 10;
}
.slick-slide {
    /* height: 40vh */
    color: #333;
    padding: 40px 0;
    font-size: 1.25em;
    font-family: "Verdana";
    text-align: center;
    pointer-events: none;
}

.slick-slide .desc {
    opacity: 0;
}

.slick-slide .desc>* {
    transition: all 900ms ease;
}

.slick-slide .desc h2 {
    position: relative;
    left: 50px;
    line-height: 1;
}
.slick-slide .desc h2 span{
    /* color:#bcdee7; */
    color: #fff;
}
.slick-slide .desc p {
    position: relative;
    top: 50px;
    opacity: 0;
    color: blue;
}

.slick-slide img {
    width: 100%;
}

.slick-prev:before,
.slick-next:before {
    color: black;
}
.slick-dots {
    text-align: center;
}

.slick-dots li {
    display: inline-block;
    padding: 1px;
    background: #ccc;
    margin: 10px 5px;
    width: 40px;
    height: 4px;
    border-radius: 10px;
    cursor: pointer;
}

.slick-dots li.slick-active {
    background: #072f5f;
}

.slick-dots button {
    display: none;
}
.slick-slide {
    opacity: 0.2;
    transition: all 300ms ease;
}

.slick-current {
    opacity: 1;
    transform: scale(1.1);
}

.slick-current .desc {
    opacity: 1;
}

.slick-current .desc h2 {
    left: 0; 
}

.slick-current .desc p {
    top: 0;
    opacity: 1;
}

.btn {
    border-radius: 15px;
    padding: 10px 20px;
    border: 2px solid #072f5f;
    text-decoration: none;
    color: #072f5f;
    font-size: .6em;
    text-transform: uppercase;
    display: block;
    margin: 20px auto 0;
    max-width: 130px;
    width: 100%;
    font-weight: bold;
    pointer-events: initial;
}
.btn:hover {
    background-color: #072f5f;
    color: #fff; /* Change text color on hover */
}
.credit{
    text-align: center;
    color: #fff;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.credit a{
    text-decoration: none;
    color: #bcdee7;
    font-weight: bold;
}


    </style> 
</head>
<body> 
  <div class="covery">
  <section class="slider">
    <div>
      <img src="./images/book-2.png">
      <div class="desc">
        <h2><span>About</span> The First Night</h2>
        <p>999.99</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
  
    <div>
    <img src="./images/book-3.png">
      <div class="desc">
        <h2><span>Open</span> The Sky</h2>
        <p>699.99</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
  
    <div>
    <img src="./images/book-4.png">
      <div class="desc">
      <h2><span>Bo</span> ok</h2>
        <p>589.99</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
  
    <div>
    <img src="./images/book-5.png">
      <div class="desc">
        <h2><span>The Big</span> Book Of Science</h2>
        <p>599.99</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
  
    <div>
    <img src="./images/book-6.png">
      <div class="desc">
        <h2><span>The Big</span> Book Of Science</h2>
        <p>939.99</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
  </section> 
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> 
<script>

function createSlick(){  
  $(".slider").not('.slick-initialized').slick({
    centerMode: true,
      autoplay: true,
      dots: true, 
        arrows: true,
      slidesToShow: 3,
      responsive: [{ 
          breakpoint: 768,
          settings: {
              dots: false,
              arrows: false,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1
          } 
      }]
  }); 

} 
createSlick();
$(window).on( 'resize', createSlick );


</script>
</body>
</html>
