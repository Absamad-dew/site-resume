<?php
include("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="sass/index.css">

    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Roboto:300,400,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/030c442d47.js"></script>
    <style>
        
        </style>
</head>
<body>
    <header>
        <div class="header">
            <nav class="header-container-nav row"> 
                <nav class="header-nav">
                    <a href="#" class="header-nav">Abouut</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Experience</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Skills</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Education</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Services</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Portfolios</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Achievement</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Blog</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Publications</a>
                </nav>
                <nav class="header-nav">
                        <a href="#" class="header-nav">Contact</a>
                </nav>
            </nav>
            <!-- header-container-nav  -->
            <div class="header-bottom">
                <div class="header-bottom__title">
                    Absamad Azamatovich Manturov
                </div>
                <div class="header-bottom__subtitle">
                    Frontend  & Java Script Developer
                </div>
            </div>
            <div class="header-img">
                <div class="header-item__img">
                    <img class="header-circule" src="img/my face.jpg" alt="">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-one">
            <div class="container main-one__container">
                <div class="main-one__contacts">
                    <div class="row main-one__contacts_row">
                    <a href="https://github.com/Absamad-dew/site-resume" class="main-one__icon"><i class="fab fa-github"></i></a>
                    <a  href="#" class="main-one__icon"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://vk.com/id398640838" class="main-one__icon"><i class="fab fa-vk"></i></a>
                    <a href="#" class="main-one__icon"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
                <div class="main-one__descp">
                Обо мне: в 2016 году поступил в колледж по профессии "Программирование в компьютерных
                 технологиях" отучился там два с половиной года очно, но после понял что практически 
                 полезных знаний я там не получу поэтому перешел на заочное обучение и занялся самообучением (03.2019).                </div>
                <div class="row main-one__download">
                    <div class="main-one__button">
                        <a href="file/resume.docx">DOWNLOAD RESUME</a>
                    </div>
                    <div onclick="contactme()" class="main-one__button">
                        CONTACT ME
                    </div>
                </div>
            </div>
        </div>
        <div class="main-two">
            <div class="container ">
                <div class="main-two__one_title">
                    SKILLS
                </div>
                <div class="row main-two__animation">
                    <div class="main-two__skills_one skills_one col-12 col-md">
                        <div class="main-two__title">
                            Professional
                        </div>
                        <div  class="main-two__subtitle">
                            Java Script
                        </div>
                        <input value="60" type="range" name="" id="">
                        
                        <div class="main-two__subtitle">
                            React SPA
                        </div>
                        <input value="30" type="range" name="" id="">

                        <div class="main-two__subtitle">
                            HTML5/SASS
                        </div>
                        <input value="65" type="range" name="" id="">

                        <div class="main-two__subtitle">
                            Adobe Design Tools
                        </div>
                        <input value="90" type="range" name="" id="">

                        <div class="main-two__subtitle">
                            PHP Web Application
                        </div>
                        <input value="40" type="range" name="" id="">
                    </div>
                    <!-- /.main-two__skills_one -->

                    <div class="main-two__skills_one skills_two col-12 col-md">
                        <div class="main-two__title">
                            Personal
                        </div>
                        <div class="main-two__subtitle">
                            Committed
                        </div>
                        <input value="60" type="range" name="" id="">
                        
                        <div value="60" class="main-two__subtitle">
                            Punctual
                        </div>
                        <input value="90" type="range" name="" id="">

                        <div class="main-two__subtitle">
                            Leadership
                        </div>
                        <input value="60" type="range" name="" id="">

                        <div class="main-two__subtitle">
                            Communicative
                        </div>
                        <input value="70" type="range" name="" id="">

                        <div class="main-two__subtitle">
                            Analytical Skill
                        </div>
                        <input value="70" type="range" name="" id="">
                    </div>
                    <!-- /.main-two__skills_one -->
                </div>
            </div>
        </div>
        <!-- main-two  -->
        <div class="main-three">
            <div class="container">
                <div class="main-three__title">
                    SERVICES
                </div>
                <div class="row">
                        <div class="main-three__container animation_left col-md-4 col-xl-4">
                            <div class="main-three__one  col ">
                                <div class="main-three__one_icon">
                                    <i class="fab fa-android"></i>
                                </div>
                                <div class="main-three__one_title">
                                    SPA
                                </div>
                                <div class="main-three__one_descp">
                                        Есть небольшой опыт в создании и проектировании SPA пока что только в учебных целях. 
                                        В данный момент двигаюсь в этом направлении.
                                </div>
                            </div>
                            <!-- main-three__one  -->
                        </div>
                        <!-- main-three__container  -->
                   
                   <div class="main-three__container col-md-4 col-xl-4">
                        <div class="main-three__one black col ">
                            <div class="main-three__one_icon">
                                    <i class="fas fa-code"></i>
                            </div>
                            <div class="main-three__one_title">
                                Web Development
                            </div>
                            <div class="main-three__one_descp">
                                    Веб разработка различных сайтов начиная с лендингов ( landing page ) заканчивая созданием социальной сети. ( Пока что только в учебных целях )
                            </div>
                        </div>
                        <!-- main-three__one  -->
                   </div>
                   <!-- /.main-three__container -->
                    <div class="main-three__container animation_right col-md-4 col-xl-4">
                            <div class="main-three__one col ">
                                <div class="main-three__one_icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <div class="main-three__one_title">
                                    UI/UX Design
                                </div>
                                <div class="main-three__one_descp">
                                        Есть продвинутые знания графических редакторов( более года работал графическим дизайнером ). Сам разрабатываю дизайн сайтов.
                                </div>
                            </div>
                            <!-- main-three__one  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-three  -->
        <div class="main-foo">
            <div class="main-foo__title">CONTACT</div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 main-foo__one">
                        <div class="main-foo__icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="main-foo__descp">
                            +7(999)-533-78-93
                        </div>

                        <div class="main-foo__icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <div class="main-foo__descp">
                            absamad.manturov@gmail.com
                        </div>

                        <div class="main-foo__icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="main-foo__descp">
                            http://site-dew-resume.000webhostapp.com
                        </div>

                        <div class="main-foo__icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="main-foo__descp">
                            Москва Ул. Дмитрия Ульянова
                        </div>
                    </div>
                    <!-- col-4  -->
                    <div class="main-foo__two col-xl-8">
                        <form method="POST" action="config/active-form.php" class="main-foo__two_shadow">
                                <input type="text" placeholder="Name" name="Name" class="main-foo__two_input">                        
                                <input type="text" placeholder="Subject" name="Sughect" class="main-foo__two_input">
                                <input type="text" placeholder="Email" name="Email" class="main-foo__two_input">
                                <input type="text" placeholder="Massage" name="Massage" class="main-foo__two_input">
                                <input value="Send" type="submit"  class="main-foo__two_button">
                                    
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-five">
            <div class="container">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7bf9de7e9b1b8db6cdea730cc9d3f690b469877784c1c2ee63c791070ef9bd1f&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
            </div>
        </div>
    </main>
</body>
 <script src="js/index.js"></script>
</html>