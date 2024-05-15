<style>
    /* Reset styles and box-sizing */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

/* Styling for the special offer section */
.info_container {
      height: 100vh; /* Make the container fill the viewport height */
      overflow-y: auto; /* Allow vertical scrolling */
  }
.info {
      position: sticky;
      top: 0;
      text-align: center;
      background-image: url("./images/cov2.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      height: 400px; /* Define a fixed height */
  }

.info-container {
    max-width: 1200px;
    margin: 0 auto;
}

.info-subtitle {
    font-size: 18px;
    color: red;
    margin-bottom: 10px;
}

.info-title {
    font-size: 32px;
    color: #000;
    margin-bottom: 20px;
}

.info-section-text {
    font-size: 16px;
    font-weight: 500;
    /* color: #666; */
    color: #000;
    margin-bottom: 30px;
}

.info-list {
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.info-list li {
    margin: 0 10px;
    text-align: center;
}

.info-time {
    font-size: 24px;
    /* color: #333; */
    color: #000;
    font-weight: bold;
}

.info-countdown {
    font-size: 14px;
    color: blue;
}

.info-btn {
    display: inline-block;
    padding: 10px 20px;
    border: 3px solid black;
    color: #000; /* Changed text color */
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    z-index: 800;
}

.info-btn:hover {
    background-color: var(--black); /* Changed hover background color */
    color: #fff; /* Changed hover text color */
}

/* Media query for responsiveness */
@media (max-width: 768px) {
    .info-title {
        font-size: 28px;
    }

    .info-section-text {
        font-size: 14px;
    }

    .info-list {
        flex-wrap: wrap;
    }

    .info-list li {
        margin: 10px 0;
    }
}

</style>
<div class="info_container">
<section class="info" aria-label="special offer">
  <div class="info-container">

    <p class="info-subtitle">Special Offers</p>

    <h2 class="info-title">All books are 50% off now! Don't miss such a deal!</h2>

    <p class="info-section-text">
      You will learn how to animate shapes like circles, lines, and polygons. You'll also learn how to animate CSS
      properties
      like color and size.
    </p>

    <ul class="info-list">

      <li>
        <p class="info-time">15</p>

        <p class="info-countdown">Days</p>
      </li>
      <li>
        <p class="info-time">12</p>

        <p class="info-countdown">Hours</p>
      </li>
      <li>
        <p class="info-time">1</p>

        <p class="info-countdown">min</p>
      </li>
      <li>
        <p class="info-time">40</p>

        <p class="info-countdown">sec</p>
      </li>

      

    </ul>

    <a href="#" class="info-btn">Explore More</a>

  </div>
</section>
</div>
