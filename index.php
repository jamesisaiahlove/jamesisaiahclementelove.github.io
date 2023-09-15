<!DOCTYPE html>
<html lang="en">
<head>
    <title>isaiah</title>
    <meta charset="UTF-8">
    <meta name="description" content="Explore my portfolio and resume. I'm James Love, an IT specializing in Webdev. Discover my work, skills, and experiences.">
    <meta name="keywords" content="James Love, Love, Isaiah, Webdev, Tour Guide, Coder Guide, Mt. Kulis">
    <meta name="author" content="James Isaiah Love">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon/favicon-16x16.png">
    
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index-media-query-one.css" media="screen and (max-width: 1120px)">

    <link rel="stylesheet" type="text/css" href="fonts/Ubuntu/ubuntu.css">
    <link rel="stylesheet" type="text/css" href="fonts/Cubano/cubano.css">
    <link rel="stylesheet" type="text/css" href="fonts/Dosis Bold/dosis bold.css">

</head>
<body>
    <div class="part-one" id="part-one">
        <nav class="navbar part-one-one">
            <div class="navbar-one">
                <button  type="button" id="mobile-toggle-button" class="mobile-toggle-button">&#9776;</button>
                <a class="logo" href="">ᜎᜊ᜔</a>
            </div>
            <ul class="nav-links">
                <li><a class="navbar-contact-button" href="" onclick="alert('This feature or resource is not available at the moment.');">Contact</a></li>
                <li><a href="#part-three">Services</a></li>
                <li><a href="#part-two">About</a></li>
                <li><a href="#part-one">Home</a></li>
            </ul>
        </nav>
        <script>
// JavaScript for toggling the mobile menu
const mobileToggleButton = document.getElementById('mobile-toggle-button');
const mobileNavLinks = document.querySelector('.nav-links');
const mobileNavLinks2 = document.querySelector('.part-one-one');

mobileToggleButton.addEventListener('click', () => {
    mobileNavLinks.classList.toggle('show-menu');
    mobileNavLinks2.classList.toggle('navbar2');
});
        </script>
        <script src="js/index-navbar.js"></script>
        <div class="part-one-two">
            <div>
                <div class="part-one-two-one">
                    <h4 class="part-one-two-one-h4">Hi, I am James Love</h4>
                    <h1 class="part-one-two-one-h1">Coder, Tour Guide</h1>
                    <p class="part-one-two-one-p">I love Coding and Photography and have been working on my portfolio since June 2023. I Can give your business a new Creative start right away!</p>
                </div>
                <div class="part-one-two-two">
                    <input type="button" value="Hire Me" class="part-one-two-two-button hire-me-button" onclick="alert('This feature or resource is not available at the moment.');"/>
                    <input type="button" value="Download CV" class="part-one-two-two-button download-cv-button" onclick="alert('This feature or resource is not available at the moment.');"/>
                </div>
            </div>
                <img src="images/pictures/me3.png" alt="Me" class="me-png"/>
            </div>
        </div>
    </div>
    <div class="part-two" id="part-two">
        <div class="part-two-one">
            <img src="images/pictures/20230623_055111.jpg" alt="Me" class="part-two-one-images"/>
        </div>
        <div class="part-two-two">
            <h4>MY BIOGRAPHY</h4>
            <h1 class="part-two-two-info-h1">I am a versatile professional with a background in tourism, IT support, and a passion for photography</h1>
            <p>I have had a diverse career journey that showcases my varied interests and skills. Since 2020, I've been a dedicated tour guide under Tanay Tourism, where I've honed my storytelling abilities while exploring the beauty of various destinations. Additionally, I've served as a Tour Coordinator for different travel agencies, enhancing my organizational and customer service skills. My passion for photography has led me to capture the essence of the places I visit. While I pursued a non-degree course in computer studies, it opened doors for me to work as an IT support specialist in a real estate company in Taytay, Rizal, shortly after graduation. Beyond that, I've provided freelance IT support for various clients, offering home services to meet their tech needs. Currently, I'm further expanding my skill set by working as a mobile and computer technician, driven by my unwavering passion for learning and technology.</p>
            <hr>
            <div>
              <div class="part-two-two-info">
                <p class="part-two-two-info-p"><b>Name: </b>James Isaiah Love</p>
                <p class="part-two-two-info-p"><b>From: </b>Tanay, Rizal</p>
              </div>
              <div class="part-two-two-info">
                <p class="part-two-two-info-p"><b>Email: </b>jamesisaiahclementelove@gmail.com</p>
                <p class="part-two-two-info-p"><b>Phone: </b>+63 9636 496 942</p>
              </div>
            </div>
            <br>
            <div class="part-two-two-social">
              <p class="part-two-two-info-p"><b>Follow Me: </b></p>
              <a target="_blank" href="https://www.facebook.com/jamesisaiahclementelove/">
                <img src="images/icons/facebook.png" alt="Facebook" class="social facebook-png">
              </a>
            </div>
        </div>
    </div>
    <div class="part-three" id="part-three">
        <h1 class="part-three-title">What I Do For You</h1>
        <div class="part-three-services">
            <div class="services">
                <img alt="icon" src="images/icons/code.svg"/>
                <a href=""><h3>Web Development</h3></a>
                <p>Crafting responsive and user-friendly websites to boost your online presence.</p>
            </div>
            <div class="services">
                <img alt="icon" src="images/icons/explore.svg"/>
                <a href=""><h3>Tour Guiding</h3></a>
                <p>Guided Tours with a Photographer's Eye: Explore, Capture, and Cherish Your Memories.</p>
            </div>
            <div class="services">
                <img alt="icon" src="images/icons/computer.svg"/>
                <a href=""><h3>Technical Support</h3></a>
                <p>Your Tech Lifesaver: Solving IT Challenges with Precision and Care.</p>
            </div>
        </div>
    </div>
    <div class="part-four" id="part-four">
        <div class="part-two-one">
            <img src="images/pictures/skills-image.jpg" alt="Me" class="part-two-one-images part-four-one-image"/>
        </div>
        <div class="part-two-two">
            <h4>MY SKILLS</h4>
            <h1 class="part-two-two-info-h1">My Featured Skills</h1>
            <p>Versatile professional with tech expertise, web wizardry, and tour guide charm.</p>
            <br>
            <h4 class="part-four-percentage-title">Responsive Web Design</h4>
            <div class="percentage-indicator">
              <div class="bar">
                <div class="fill-one"></div>
              </div>
            </div>
            <br>
            <h4 class="part-four-percentage-title">Communication</h4>
            <div class="percentage-indicator">
              <div class="bar">
                <div class="fill-two"></div>
              </div>
            </div>
            <br>
            <h4 class="part-four-percentage-title">Software</h4>
            <div class="percentage-indicator">
              <div class="bar">
                <div class="fill-three"></div>
              </div>
            </div>
            <br>
            <h4 class="part-four-percentage-title">Hardware</h4>
            <div class="percentage-indicator">
              <div class="bar">
                <div class="fill-four"></div>
              </div>
            </div>
            <br>
            <h4 class="part-four-percentage-title">Problem Solving</h4>
            <div class="percentage-indicator">
              <div class="bar">
                <div class="fill-five"></div>
              </div>
            </div>
        </div>
    </div>
    <div class="part-five" id="part-five">
        <div class="part-five-one">
            <div class="part-five-one-one">
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/code.svg"/>
                    <h4>Web Development</h4>
                    <p>Web development with HTML, CSS, and JavaScript for frontend, and MySQL with PHP for backend, combines client-side interactivity with server-side data management to create dynamic and responsive websites.</p>
                </div>
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/camera.svg"/>
                    <h4>Photography</h4>
                    <p>Using mobile devices harnesses the power of modern smartphones to capture and convey moments, stories, and emotions with remarkable versatility and accessibility.</p>
                </div>
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/explore.svg"/>
                    <h4>Tour Guiding</h4>
                    <p>Skillfully conveying information, history, and insights through engaging narratives, expertly facilitating exploration while creating unforgettable experiences for travelers.</p>
                </div>
            </div>
            <div class="part-five-one-one">
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/image.svg"/>
                    <h4>Photo Editing</h4>
                    <p>using Adobe Photoshop is a multifaceted and artistic endeavor that involves the skilled application of a comprehensive suite of digital tools and techniques to transform and refine images, unleashing a world of creative possibilities.</p>
                </div>
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/video.svg"/>
                    <h4>Video Editing</h4>
                    <p>Using Kinemaster entails a creative and dynamic process whereby individuals, whether they are novice or experienced video editors, harness the power of this versatile mobile application to meticulously assemble, refine, and enhance multimedia content, including videos, images, and audio elements, by utilizing an intuitive and user-friendly interface replete with an array of sophisticated tools and features.</p>
                </div>
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/repair.svg"/>
                    <h4>Device Repair</h4>
                    <p>Throughout this intricate journey of mobile device and computer part repair, attention to detail, technical proficiency, and quality assurance are paramount, ensuring that the end result not only resolves the issue at hand but also extends the device's lifespan, usability, and overall performance, ultimately providing a seamless and reliable user experience.</p>
                </div>
            </div>
            <div class="part-five-one-one">
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/coding.svg"/>
                    <h4>Coding</h4>
                    <p>Intricate and versatile craft, involves the use of diverse programming languages as tools for translating human logic and ideas into the intricate, structured instructions that power the digital world, enabling the creation of software, websites, applications, and systems, each language possessing its unique strengths and nuances, as developers meticulously construct and innovate in the realm of technology.</p>
                </div>
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/UI.svg"/>
                    <h4>UI/UX Design</h4>
                    <p>Using Figma and Canva is the creative process of crafting user-friendly digital experiences. Figma facilitates collaborative prototyping and design, while Canva simplifies graphic creation, ensuring cohesive and visually appealing results for user satisfaction and product success.</p>
                </div>
                <div class="part-five-one-one-description">
                    <img alt="icon" src="images/icons/internet.svg"/>
                    <h4>Internet Troubleshooting</h4>
                    <p>Efficient and comprehensive internet troubleshooting, encompassing both wired and wireless connections, is a multifaceted process that involves the systematic identification and resolution of network issues to ensure seamless online connectivity.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="part-six" id="part-six">
        <img alt="logo" class="part-six-logo" src="images/icons/vs-code.png"/>
        <img alt="logo" class="part-six-logo" src="images/icons/figma.png"/>
        <img alt="logo" class="part-six-logo" src="images/icons/ps.png"/>
        <img alt="logo" class="part-six-logo" src="images/icons/xampp.png"/>
    </div>
    <div class="footer" id="footer">
        <h2>ᜎᜊ᜔</h2>
        <h4>© 2023 isaiah. All rights reserve.
    </div>
</body>
</html>