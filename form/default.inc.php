<style type="text/css">
header .logo {
    width: 30%;
    display: inline-block;
    padding: 10px 15px;
}

header nav {
    width: 65%;
    display: inline-block;
    font-weight: bold;
    color: #022245;
}

.menu ul {
    list-style-type: none;
    color:#022245;
    text-align:right;
    padding-bottom: 15px;
}

.menu > ul >li {
    display:inline-block;
    position: relative;
    vertical-align: center;
}

.menu ul li a {
    display: block;
    padding: 15px;
    text-decoration: none;
}

.menu a:hover {
    text-decoration: underline solid #022245;
}

.menu-item:hover .sub-menu {
    display: block;
    position: absolute;
    transition: .3s;
    background:#022245;
    color: white;
    top: 50px;
    width: 200px;
}

.sub-menu {
    display: none;
    color: white;
    border-radius: 5px;
}

.sub-menu a {
    text-align: left;
    margin-top: 5px;
}

.sub-menu a:hover {
    text-decoration: underline solid white;
}

.sub-menu a:visited {
    color: white;
}

a:visited {
    color:#022245;
}

h1 {
    font-family: 'lato-bold', sans-serif;
    font-size: 70px;
    text-align: center;
}

.wrong {
    background: #77B6EA;
    padding: 20px;
    max-width: 800px;
    border-radius: 7px;
    margin: 0 auto;
    box-shadow: #022245;
    font-family: 'opensans-regular';
}

footer {
    text-align: center;
    font-weight: bold;
    padding: 10px;
    background: #77B6EA;
    bottom: 0;
}

footer a {
    text-decoration: none;
    color:#022245;
}

footer a:hover {
    text-decoration: underline solid #022245;
}

footer a:visited {
    color: #022245;
}

footer ul li {
    list-style-type: none;
    display: inline-block;
    position: relative;
    padding: 15px;
}

.active a {
    text-decoration: underline solid #022245;
}
</style>
<header>
    <a class="logo" href="index.html"><img src="images/logo.png" alt="logo" title="logo" width=50></a>
    <nav class="menu">
        <ul>
            <li class="menu-item"><a href="index.html">Home</a></li>
            <li class="menu-item"><a href="about.html">About</a></li>
            <li class="menu-item"><a href="#">Projects</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="design.html">Graphic Design</a></li>
                    <li class="menu-item"><a href="uxd.html">UX Design</a></li>
                    <li class="menu-item"><a href="writing.html">Writing Samples</a></li>
                </ul>
            </li>
            <li class="menu item"><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</header>
<div class="wrong">
    <h1>Sorry, something went wrong with your submission </h1>
    <p>Please try again</p>
</div>
<footer>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li class="active"><a href="contact.html">Contact</a></li>
        <li<a href="mailto:jourdan.dekle@gmail.com">Email</a></li>
        <li><a href="https://www.linkedin.com/in/jourdan-dekle-ma-student-8a0383136/" target="_blank">LinkedIn</a></li>
    </ul>
</footer>