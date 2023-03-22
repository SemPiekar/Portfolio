<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // include the header file
    include_once 'header.html';
    ?>
    <main>
        <div class="container">
            <div class="landingPageBackground">
                <?php
                // include the navigation menu
                include_once 'includes/nav.html';
                ?>
                <div class="landingPageHeader">
                    <h1>Sem Piekar</h1>
                    <p>Software Developer</p>
                </div>
            </div>
        </div>
        <section class="aboutMe">
            <div>
                <h1 id="anchor-about">About Me</h1>
                <p>Hi, I'm Sem Piekar, a 16-year-old learning software developer. I am currently focused on enhancing my
                    skills and knowledge through my education. What I enjoy most about software development is the
                    ability
                    to build and create using CSS. I am always experimenting with new CSS techniques and finding new
                    ways to
                    express my ideas. I like to play guitar and game in my free time.</p>
            </div>
            <img src=" ./images/foto-sem.jpg" alt="Foto Sem">
        </section>
        <section id="anchor-portfolio" class="portfolio">
            <h2 data-aos="slide-right">Portfolio</h2>
            <p data-aos-delay="75" data-aos="slide-right">As a software developer student, I have a strong passion for
                website development. My skills range from front-end technologies such as HTML, CSS, and JavaScript, to
                back-end languages like Python and PHP. I have experience in creating responsive and user-friendly
                websites
                that are optimized for various devices and browsers. I have a keen eye for design and can create
                visually
                appealing and functional websites. I am also familiar with various content management systems (CMS) like
                WordPress and can customize existing templates to meet the specific needs of a client. In my free time,
                I
                enjoy working on personal projects and continuously expanding my skillset in the field of web
                development.
            </p>
        </section>
        <section id="anchor-project" class="project">
            <h2 data-aos-duration="1000" data-aos="slide-left">Projects</h2>
            <div data-aos-duration="1000" data-aos="slide-left" class="projectContainer">
                <div class="projectCard">
                    <div class="projectCardUp">
                        <h3>Tic-Tac-Toe</h3>
                        <div class="projectCardImage"></div>
                    </div>
                    <div class="projectCardDown">
                        <p>This game was an assigment for Javascript project. We had to make a game using DOM
                            manipulation
                            and some game components without any errors or problems. Click <a href="">here</a> if you
                            want
                            to read more.</p>
                        <div>
                            <p>Want to explore?</p>
                            <button class="githubButton">Github</button>
                            <button class="tryitButton">Try it</button>
                        </div>
                    </div>
                </div>
                <div class="projectCard">
                    <div class="projectCardUp1">
                        <h3>Linear Regression</h3>
                        <div class="projectCardImage1"></div>
                    </div>
                    <div class="projectCardDown">
                        <p>Linear regression is a statistical technique to model the relationship between two variables
                            by
                            fitting a linear equation to the observed data. Click <a href="">here</a> if you want to
                            read
                            more.</p>
                        <div>
                            <p>Want to explore?</p>
                            <button class="githubButton1">Github</button>
                        </div>
                    </div>
                </div>
                <div class="projectCard">
                    <div class="projectCardUp2">
                        <h3>Header</h3>
                        <div class="projectCardImage2"></div>
                    </div>
                    <div class="projectCardDown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam porro expedita debitis veniam,
                            tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a href="">here</a> if you want to read more.</p>
                        <div>
                            <p>Want to explore?</p>
                            <button class="githubButton">Github</button>
                            <button class="tryitButton">Try it</button>
                        </div>
                    </div>
                </div>
                <div class="projectCard">
                    <div class="projectCardUp3">
                        <h3>Header</h2>
                            <div class="projectCardImage3"></div>
                    </div>
                    <div class="projectCardDown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam porro expedita debitis veniam,
                            tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a href="">here</a> if you want to read more.</p>
                        <div>
                            <p>Want to explore?</p>
                            <button class="githubButton">Github</button>
                            <button class="tryitButton">Try it</button>
                        </div>
                    </div>
                </div>
                <div class="projectCard">
                    <div class="projectCardUp4">
                        <h3>Coming Soon...</h2>
                            <div class="projectCardImage4"></div>
                    </div>
                    <div class="projectCardDown">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam porro expedita debitis veniam,
                            tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a href="">here</a> if you want to read more.</p>
                        <div>
                            <p>Want to explore?</p>
                            <button class="githubButton">Github</button>
                            <button class="tryitButton">Try it</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="skills" id="anchor-skills">
            <h1>Skills</h1>
            <div class="skillsContainer">
                <p>Here you will find my skills. I currently have Javascript, HTML, CSS, PHP, SQL and Python in the
                    list. On the course of time that will extend to much more. You can click on the images on my right
                    and see the details about have well I know the language and more. For know this is what I have to show.</p>
                <div>
                    <h2>Try clicking the boxes.</h2>
                    <div class="container2">
                        <div class="div" id="div1"><img src="./images/JS.png" alt="">
                            <div class="box-info">
                                <p class="box-text">Javascript. <br>
                                    I know DOM Manupilation for Javascript, it as the first thing we learned for
                                    Javascript. I made a Tic-Tac-Toe game for a school project.<br> I know the basics.
                                </p>
                                <div class="progress-bar">
                                    <div class="p-begin"></div>
                                </div>
                            </div>
                        </div>
                        <div class="div" id="div2"><img src="./images/HTML.png" alt="">
                            <div class="box-info">
                                <p class="box-text">HTML. <br>
                                    HTML was the first thing I learned in school. It is a fundemental for building
                                    website, I would consider myself good in HTML.
                                </p>
                            </div>
                        </div>
                        <div class="div" id="div3"><img src="./images/CSS.png" alt="">
                            <div class="box-info">
                                <p class="box-text">CSS. <br>
                                    CSS is my favorite language. I like building visual projects like this website self.
                                    CSS is defenetly one of my strong languages.
                                </p>
                            </div>
                        </div>
                        <div class="div" id="div4"><img src="./images/PHP.png" alt="">
                            <div class="box-info">
                                <p class="box-text">PHP. <br>
                                    I find PHP a difficult language to learn. Even tho I know PHP it still hunts my
                                    dreams.
                                </p>
                            </div>
                        </div>
                        <div class="div" id="div5"><img src="./images/SQL.jpg" alt="">
                            <div class="box-info">
                                <p class="box-text">SQL. <br>
                                    I know the basics for SQL. In a database it is even easier. I have not much more to
                                    say about SQL.
                                </p>
                            </div>
                        </div>
                        <div class="div" id="div6"><img src="./images/PYTHON.jpg" alt="">
                            <div class="box-info">
                                <p class="box-text">Pyhton. <br>
                                    I find Python interesting. I am working on building a AI and I know the basics and
                                    theory of Machine Learning.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include_once 'includes/footer.html';
    ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./functions/skills.js"></script>
    <script src="./functions/scrollIndicator.js"></script>
    <script src="./functions/navbarScroll.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>