<?php
include './db_connnection.php';
$conn = OpenCon();
CloseCon($conn);
include_once 'header.html';
?>
<main>
    <div class="container">
        <div class="landingPageBackground">
            <?php
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
            <h1>About Me</h1>
            <p>Hi, I'm Sem Piekar, a 16-year-old learning software developer. I am currently focused on enhancing my
                skills and knowledge through my education. What I enjoy most about software development is the ability
                to build and create using CSS. I am always experimenting with new CSS techniques and finding new ways to
                express my ideas. I like to play guitar and game in my free time.</p>
        </div>
        <img src=" ./images/foto-sem.jpg" alt="Foto Sem">
    </section>
    <section class="portfolio">
        <h2 data-aos="slide-right">Portfolio</h2>
        <p data-aos-delay="75" data-aos="slide-right">As a software developer student, I have a strong passion for
            website development. My skills range from front-end technologies such as HTML, CSS, and JavaScript, to
            back-end languages like Python and PHP. I have experience in creating responsive and user-friendly websites
            that are optimized for various devices and browsers. I have a keen eye for design and can create visually
            appealing and functional websites. I am also familiar with various content management systems (CMS) like
            WordPress and can customize existing templates to meet the specific needs of a client. In my free time, I
            enjoy working on personal projects and continuously expanding my skillset in the field of web development.
        </p>
    </section>
    <section class="project">
        <h2 data-aos-duration="1000" data-aos="slide-left">Projects</h2>
        <div data-aos-duration="1000" data-aos="slide-left" class="projectContainer">
            <div class="projectCard">
                <div class="projectCardUp">
                    <h3>Tic-Tac-Toe</h3>
                    <div class="projectCardImage"></div>
                </div>
                <div class="projectCardDown">
                    <p>This game was an assigment for Javascript project. We had to make a game using DOM manipulation
                        and some game components without any errors or problems. Click <a href="">here</a> if you want
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
                    <h3>Header</h3>
                    <div class="projectCardImage1"></div>
                </div>
                <div class="projectCardDown">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam porro expedita debitis veniam,
                        tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a
                            href="">here</a> if you want to read more.</p>
                    <div>
                        <p>Want to explore?</p>
                        <button class="githubButton">Github</button>
                        <button class="tryitButton">Try it</button>
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
                        tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a
                            href="">here</a> if you want to read more.</p>
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
                        tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a
                            href="">here</a> if you want to read more.</p>
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
                        tenetur minima magni nesciunt atque, rerum aperiam non facilis, error itaque. Click <a
                            href="">here</a> if you want to read more.</p>
                    <div>
                        <p>Want to explore?</p>
                        <button class="githubButton">Github</button>
                        <button class="tryitButton">Try it</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills">
        <h1>Skills</h1>
        <div class="skillsContainer">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore consequuntur obcaecati ullam
                exercitationem numquam ducimus amet sunt vero odio, est officiis, tenetur tempora id, magnam sed eos
                perferendis eveniet. Consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos hic
                tenetur dicta placeat consequatur eaque sit corrupti amet exceptu doloribus aut unde, deserunt nisi
                fugiat sed sapiente ad ut blanditiis.</p>
            <div>
                <h2>Try clicking the boxes.</h2>
                <div class="container2">
                    <div class="div" id="div1"><img src="./images/JS.png" alt=""></div>
                    <div class="div" id="div2"><img src="./images/HTML.png" alt=""></div>
                    <div class="div" id="div3"><img src="./images/PHP.png" alt=""></div>
                    <div class="div" id="div4"><img src="./images/CSS.png" alt=""></div>
                    <div class="div" id="div5"><img src="./images/SQL.jpg" alt=""></div>
                    <div class="div" id="div6"><img src="./images/PYTHON.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once 'includes/footer.html';
?>