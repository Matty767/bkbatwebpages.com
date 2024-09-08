<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"></meta>

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  ></meta>

  <meta
    name="description"
    content="Bike hiring and Bike trail wbesite"
  ></meta>

  <link
    rel="stylesheet"
    href="style.css"
  ></link>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  ></link>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="script.js"></script>

  <script
    src="https://kit.fontawesome.com/a076d05399.js"
    crossorigin="anonymous"
  ></script>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  ></link>

  <head>
    <!-- Font Awesome icons -->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    ></link>
  </head>
</head>

<body class="light-mode">
  <main>
  <?php include 'templates/header.php'?>


  
    <aside>
      <form
        class="registration form"
        action="https://httpbin.org/post"
        method="post"
      >
        <label for="fname">First Name</label>

        <input
          type="text"
          id="fname"
          name="firstname"
          placeholder="Your name.."
        ></input>

        <label for="lname">Last Name</label>

        <input
          type="text"
          id="lname"
          name="lastname"
          placeholder="Your last name.."
        ></input>

        <label for="country">Country</label>

        <select
          id="country"
          name="country"
        >
          <option value="australia">Scotland</option>

          <option value="canada">England</option>

          <option value="usa">Wales</option>
        </select>

        <label for="subject">Subject</label>

        <textarea
          id="subject"
          name="subject"
          placeholder="Write something.."
          style="height:200px"
        ></textarea>

        <input
          type="submit"
          value="Submit"
        ></input>
      </form>
    </aside>

   
    <section>
      <div class="news-letter-container" style="margin-top: 20px;">
        <h2>Subscribe to Our Newsletter</h2>

        <form
        class="registration form"
        action="https://httpbin.org/post"
        method="post"
      >
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email address"
            required="required"
          ></input>

          <button
            type="newsletter-submit"
            id="submit"
          >Subscribe</button>
        </form>
      </div>
    </section>

    <section
      class="testimonial-container"
      style="text-align: center;"
    >
      <h2>Testimonials</h2>

      <h6>
        Our company is proud to share glowing testimonials from satisfied cyclists who have experienced the excellence of our services. Customers applaud our top-notch bike rentals, efficient repairs, and friendly staff. Their testimonials highlight our commitment to quality, promptness, and personalized attention. Join the ranks of delighted cyclists who have chosen us for their biking needs, and discover the unparalleled satisfaction that our company consistently delivers.
      </h6>

      <div class="item">
        <p
          class="price"
          style="color: black; font-weight: 800"
        >Tom Hynds</p>

        <p
          class="price"
          style="color: black;font-weight: 100;"
        >'Motherwell'</p>

        <p
          class="price"
          style="color:black ;font-weight: 700;margin: 10px;"
        >
          'I got all 4 bikes in perfect condition & the bike kings team Helped me with everything from start to finish'
        </p>
      </div>

      <div class="item">
        <p
          class="price"
          style="color: black; font-weight: 800"
        >Mary Harris</p>

        <p
          class="price"
          style="color: black;font-weight: 100;"
        >'Coatbridge'</p>

        <p
          class="price"
          style="color: black;font-weight: 700; margin: 10px"
        >
          'First class aftercare & everything was done so quickly & the Products are reasonably priced'
        </p>
      </div>

      <div class="item">
        <p
          class="price"
          style="color: black; font-weight: 800"
        >Terry Goodman</p>

        <p
          class="price"
          style="color: black;font-weight: 100;"
        >'Edinburgh'</p>

        <p
          class="price"
          style="color: black;font-weight: 700;margin: 10px"
        >
          'Great product, competitive prices & great customer service, I would highly reccommend'
        </p>
      </div>
    </section>
    <?php include 'templates/footer.php';?>
</main>
<script src="script.js"></script>
</body>
</html>