<style>
* {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: sans-serif;
    border-radius: 4px;
}

*::selection {
    background: rgb(128, 0, 117);
    color: yellow;
}

.contact-form {
    background: rgb(73, 52, 52);
    padding: 20px;
    max-width: 500px;
    border-radius: 4px;
    color: white;
    margin: 20px auto;
}

nav ul li {
    display: inline;
}

header {
    text-align: center;
    background: white;
    padding: 20px 0;
}

header nav a:hover {
    color: rgb(90, 49, 49);
}

header nav a:active {
    color: rgb(1, 141, 83);
}

nav a {
    font-weight: bold;
    text-decoration: none;
    color: rgb(0, 0, 0);
    padding: 5px;
}
</style>

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

<div class="container">
	<h1>Missing some love</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
    <p class="footer">This page is designed by Tiffany Liu and approved by Willy Wonka</p>
</footer>