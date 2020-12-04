<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Forms</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="chocolate.html">Chocolates</a></li>
                <li><a href="contact.html">Contact Us</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Contact Us</h1>
            <p>Here's your chance to express your "sweet tooth" to your follow chocolate lovers!</p>
            <form class="contact-form" name="contact-form" method="POST" action="form.php" onsubmit="return validateForm(this)">
                <div class="first-name">
                    <label for="firstname" class="label_input_wrap">First Name:</label>
                    <input type="text" name="req_firstname" id="firstname" placeholder="ex. Willy" />
                </div>

                <div class="last-name">
                    <label for="lastname" class="label_input_wrap">Last Name:</label>
                    <input type="text" name="req_lastname" id="lastname" placeholder="ex. Wonka" />
                </div>

                <div class="email">
                    <label for="email" class="label_input_wrap">Email</label>
                    <input type="email" name="email" id="email" placeholder="ex. chocofactory123@gmail.com">
                </div>

                <div class="telephone">
                    <label for="telephone" class="label_input_wrap">Telephone</label>
                    <input type="tel" name="req_telephone" id="telephone" placeholder="123-456-7890">
                </div>

                <div class="comments">
                    <label for="comments" class="label_input_wrap">Comments</label>
                    <textarea name="comments" id="comments" cols="55" rows="5" placeholder="Send your love for chocolate here:"></textarea>
                </div>

                <div class="checkbox">
                    <h3>Favorite Chcolate Bar Flavor</h3>
                    <input type="checkbox" name="chocolatebars" value="darkchocolate" id="darkchocolate" /><label for="darkchocolate">Dark chocolate</label>
                    <input type="checkbox" name="chocolatebars" value="milkchocolate" id="milkchocolate" /><label for="milkchocolate">Milk chocolate</label>
                    <input type="checkbox" name="chocolatebars" value="nutchocolate" id="nutchocolate" /><label for="nutchocolate">Nut chocolate</label>
                    <input type="checkbox" name="chocolatebars" value="strawberrychocolate" id="strawberrychocolate" /><label for="strawberrychocolate">Strawberry chocolate</label>
                </div>

                <div class="reset">
                    <input type="reset" value="Refresh" />
                </div>

                <div class="submit">
                    <input type="submit" value="Submit" />
                </div>
            </form>

            <section class="rainbow">
                <h1>Here are some rainbow colors!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </section>
        </div>
    </main>

    <footer>
        <p class="footer">This page is designed by Tiffany Liu and approved by Willy Wonka</p>
    </footer>
</body>

</html>