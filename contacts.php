<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">

    <div class="menu_wrapper">
        <div class="media-head">
            <span class="media-head_line">
                <svg width="2" height="191" viewBox="0 0 2 191" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.499995 191L0.500004 0L1.5 4.37114e-08L1.5 191L0.499995 191Z" fill="#ABB2BF"/>
                </svg>
            </span>
            <div class="media-head_icons">
                <a href="https://github.com/mikuskuk" class="contact" target="_blank">
                    <img src="img/github.svg" alt="github">
                </a>
                <a href="https://www.linkedin.com/in/mikus-kukainis/" class="contact" target="_blank">
                    <img src="img/linkedin.svg" alt="linkedin">
                </a>
                <a href="mailto:mikuskukainis@gmail.com" class="contact" target="_blank">
                    <img src="img/email.svg" alt="email">
                </a>
            </div>
        </div>

        <div class="top_menu">
            <a href="index.html" class="logo">
                <img src="img/logo.svg" alt="logo">
            </a>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <nav class="navmenu">
                <a href="index.html"><span>#</span>home</a>
                <a href="projects.html"><span>#</span>projects</a>
                <a href="about.html"><span>#</span>about-me</a>
                <a href="contacts.php" class="active"><span>#</span>contacts</a>
            </nav>
        </div>
    </div>

</head>

<body>

    <div class="container content">

        <div class="path">
            <h1><span>/</span>contacts</h1>
            <p class="description">Want to get in touch?</p>

            <div class="contacts__content">
                <div class="description">
                    I’m interested in freelance opportunities as well as entry positions in web development. However, if you have other request or question, don’t hesitate to contact me.
                </div>
                <div class="contacts_table">
                    <h3 class="contacts_title">Message me here</h3>
                    <div class="contacts__list">
                        <a class="contact" href="https://www.linkedin.com/in/mikus-kukainis/" target="_blank">
                            <img src="img/linkedin.svg" alt="Linkedin">
                            <div class="contact_type">Linkedin</div>
                        </a>
                        <a class="contact" href="mailto:mikuskukainis@gmail.com">
                            <img src="img/email.svg" alt="">
                            <div class="contact_type">mikuskukainis@gmail.com</div>
                        </a>
                    </div>
                </div>
            </div>

            <section class="book">
            <h2><span>#</span>book-a-meeting</h2>

                <div class="bookmeeting">
                    <button class="button" id="bookme">Book NOW ##</button>
                </div>

                <div class="book-form">
                    <div class="closebtn">x</div>
                    <h1>Book a Meeting</h1>
                    <p>Send me a message</p>
                    
                    <form method="post" action="send.php">
                        <input type="text" placeholder="Name" class="name" name="name" required>
                        <input type="email" placeholder="Email" class="email" name="email" required>
                        <input type="date" class="date" name="date" required>
                        <textarea name="questions" class="questions" id="" cols="30" rows="10" placeholder="Questions"></textarea>

                        <input class="button" type="submit" id="bookbtn" name="submit">
                        <input class="button" type="reset" id="resetbtn" name="reset">
                    </form>
                </div>
            </section>

        </div>
        
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_left">
                    <div class="footer_title">
                        <div class="logo">
                            <img src="img/logo.svg" alt="logo">
                        </div>
                        <a href="mailto:mikuskukainis@gmail.com">mikuskukainis@gmail.com</a>
                    </div>
                    <div class="footer_description">
                        Web developer based in Latvia
                    </div>
                </div>
                <div class="footer_right">
                    <div class="footer_title">Media</div>
                    <div class="footer__list">
                        <a class="contact" href="https://github.com/mikuskuk" target="_blank">
                            <img src="img/github.svg" alt="github">
                        </a>
                        <a class="contact" href="https://www.linkedin.com/in/mikus-kukainis/" target="_blank">
                            <img src="img/linkedin.svg" alt="linkedin">
                        </a>
                        <a class="contact" href="https://twitter.com/thekukoss" target="_blank">
                            <img src="img/twitter.svg" alt="twitter">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>

</body>
</html>