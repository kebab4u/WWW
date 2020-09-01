<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-image: url(weed2.jpg);
  background-repeat: no-repeat;
  b
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
  width: 100%;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #bcc;
  padding: 20px;
  background-image: url(weed1.jpg);
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>


<header>
  <h2>easyweed.com</h2>
</header>

<section>
  <nav>
<center>

    <ul>
      <li><a href="index.html">Welcome</a></li>
      <li><a href="Page1.html">Page1</a></li>
      <li><a href="Page2.html">Page2</a></li>
    </ul>
  </nav>
</section>

  <article>
    <h1>Buy cheap Weed Online</h1>
    <p>easyweed.com sells weed for everyone, and even for people who are mentally retarded</p>
    <p>This is a preview of our products</p>
    <img src="https://scx1.b-cdn.net/csz/news/800/2018/3-cannabis.jpg">
  </article>


</section>


</body>
</html>
