<?php
include 'config.php';
?>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>It's Me!</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/semantic.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <style>
            @font-face {
                font-family: 'TheLightFont';
                src: url("assets/fonts/TheLightFont.ttf");
            }

            #home {
                background: url('assets/img/background.jpg');
                background-size: cover;
                width: 100%;
            }

            .navbar-fixed {
                top: 0;
                z-index: 1;
                position: fixed;
                width: 100%;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                -webkit-transition-duration: 0.25s;
            }
            /* Change the link color to #111 (black) on hover */

            li a:hover {
                text-decoration: none;
                background-color: #fff;
                color: black;
            }

            div#schools {
                width: 100%;
                height: 100%;
                background-color: #323232;
                padding: 10em 2em 2em 2em;
            }
        </style>

    </head>

    <body class="pushable">
        <div id="alert">
            <div class="ui success message transition hidden">
                <i class="close icon"></i>
                <div class="header">
                    Your user registration was successful.
                </div>
                <p>You may now log-in with the username you have chosen</p>
            </div>
        </div>
        <!-- START HOME -->
        <div class="ui center aligned" style="height:100%" id="home">

            <nav id="navbar">
                <ul>
                    <li>
                        <a class="item" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="item" href="#about">About</a>
                    </li>
                    <li>
                        <a class="item" href="#schools">Schools</a>
                    </li>
                    <li>
                        <a class="item" href="#experience">Experience</a>
                    </li>
                    <li>
                        <a class="item" href="#comment">Comment Me</a>
                    </li>
                    <li>
                        <a class="item" href="#see-comment">See your comment</a>
                    </li>
                </ul>
            </nav>
            <div class="ui container">
                <div style="font-family: TheLightFont; color: white; padding-left: 200px; padding-top: 250px; font-size: 60px;">
                    Akbar Anung Yudha Saputra
                </div>
            </div>
        </div>
        <!-- END HOME -->

        <!-- START ABOUT -->
        <div class="ui vertical stripe segment" id="about" style="height:100%;background:white;">
            <div class="ui middle aligned stackable grid container" style="padding-top:5em; padding-bottom:5em;">
                <div class="row">
                    <div class="eight wide column">
                        <h1 class="ui header">Let me introduce myself</h1>
                        <p class="sub header">My name is Akbar Anung Yudha Saputra used to be called Yudha. I was born in Pasuruan, December 26,
                            2000. I am the second child of 3 siblings. Now I am 16 years old. I am a student at XI RPL Senior
                            High Schools 1 Purwosari.</p>
                        <div class="ui button icon">
                            <a href="http://www.facebook.com/yudhaweb" target="_blink" style="color: black;">
                                <i class="fa fa-facebook-official fa-2x " aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="ui button icon">
                            <a href="https://twitter.com/akbarsaputrait" target="_blink" style="color: black;">
                                <i class="fa fa-twitter fa-2x fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="ui button icon">
                            <a href="https://www.instagram.com/akbarsaputrait/" target="_blink" style="color: black;">
                                <i class="fa fa-instagram fa-2x fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="ui button icon" data-tooltip="+62-8193-1006-841" data-inverted="" data-position="bottom center">
                            <a style="color: black;">
                                <i class="fa fa-whatsapp fa-2x fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="ui button icon" data-tooltip="akbarsaputrait@outlook.com" data-inverted="" data-position="bottom center">
                            <a style="color: black;">
                                <i class="fa fa-envelope-o fa-2x fa-fw" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="six wide right floated column">
                        <img src="assets/img/pp.jpg" class="ui large bordered rounded image" style="border-radius: 50%;">
                    </div>
                </div>

            </div>
        </div>
        <!-- END ABOUT -->

        <!-- START SCHOOLS -->
        <div id="schools">
            <div class="ui three column grid">
                <div class="center aligned column">
                    <div class="ui segment">
                        <img src="assets/img/pp.jpg" alt="" style="border-radius:100%; width:200px; height:200px;">
                        <p>Hai this is meHai this is meHai this is meHai this is meHai this is meHai this is meHai this is meHai
                            this is meHai this is meHai this is me</p>
                    </div>
                </div>
                <div class="center aligned column">
                    <div class="ui segment">
                        <img src="assets/img/pp.jpg" alt="" style="border-radius:100%; width:200px; height:200px;">
                        <p>Hai this is meHai this is meHai this is meHai this is meHai this is meHai this is meHai this is meHai
                            this is meHai this is meHai this is me</p>
                    </div>
                </div>
                <div class="center aligned column">
                    <div class="ui segment">
                        <img src="assets/img/pp.jpg" alt="" style="border-radius:100%; width:200px; height:200px;">
                        <p>Hai this is meHai this is meHai this is meHai this is meHai this is meHai this is meHai this is meHai
                            this is meHai this is meHai this is me</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SCHOOLS -->

        <!-- START EXPERIENCE -->
        <div id="experience" style="height:100%; margin-bottom: 4px; background-color:white;">
            <div class="ui text container center aligned">
                <h1 class="ui header" style="color:#323232; padding-top:2.5em;">My Experience</h1>
            </div>
            <div class="ui container" style="padding-top: 1em;">
                <div class="ui orange active large progress" data-tooltip="HTML" data-position="top center">
                    <div class="bar" style="width:75%;"></div>
                </div>
                <div class="ui blue active large progress" data-tooltip="CSS" data-position="top center">
                    <div class="bar" style="width:65%;"></div>
                </div>
                <div class="ui purple active large progress" data-tooltip="Semantic UI" data-position="top center">
                    <div class="bar" style="width:45%;"></div>
                </div>
                <div class="ui blue active large progress" data-tooltip="Visual Basic" data-position="top center">
                    <div class="bar" style="width:50%;"></div>
                </div>
                <div class="ui green active large progress" data-tooltip="C++" data-position="top center">
                    <div class="bar" style="width:50%;"></div>
                </div>
                <div class="ui yellow active large progress" data-tooltip="PHP" data-position="top center">
                    <div class="bar" style="width:75%;"></div>
                </div>
            </div>
        </div>
        <!-- END EXPERIENCE -->

        <!-- START COMMENt BOX -->
        <div id="comment" style="height:100%; background:white;">
            <form action="tambah.php" method="post" class="ui form container" enctype="multipart/form-data" style="margin-bottom: 0; height: 100%;">
                <h1 class="ui dividing header" style="padding-top:2.5em">Who are you?</h1>
                <div class="field">
                    <label for="firstname">Name</label>
                    <div class="two fields">
                        <div class="field">
                            <input type="text" name="firstname" placeholder="First Name" id="firstname">
                        </div>
                        <div class="field">
                            <input type="text" name="lastname" placeholder="Last Name" id="lastname">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="grade">Schools</label>
                    <div class="three fields">
                        <div class="field">
                            <input type="text" name="schools" placeholder="Your Schools" id="schools">
                        </div>
                        <div class="field">
                            <input type="text" name="grades" placeholder="Your Grade" id="grades">
                        </div>
                        <div class="field">
                            <input type="text" name="majors" placeholder="Your Majors" id="majors">
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="comment">Write your comment</label>
                    <div class="three fields">

                        <div class="field">
                            <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
                        </div>

                        <div class="field">
                            <div class="pp">
                                <input type='file' id="inputFile" name="gambar" />
                                <img id="image_upload_preview" src="assets/img/user.png" style="border-radius:100%; width:200px; height:200px;" />
                            </div>
                        </div>

                        <div class="field">
                            <button type="submit" name="tambah" class="massive ui black button">Send</button>
                        </div>
                    </div>
            </form>
            </div>
            <!-- END COMMENt BOX -->


            <!-- START SEE COMMENt -->
            <div id='see-comment' style="padding-bottom: 2em; background-color:#1d1c1b; color:white;">
                <div class="ui text container">
                    <h1 class="ui inverted header" style="padding-top:2em;">Thanks for your comment!</h1>
                    <?php
                $sql = "SELECT * FROM comment ORDER BY date DESC";
                $query = mysqli_query($db,$sql);

                while($comment = mysqli_fetch_array($query)){
           ?>
                        <form action="" class="ui form segment" style="color:#1d1c1b;">
                            <div class="ui field">
                                <div class="two fields">
                                    <div class="">
                                        <img src="upload/<?=$comment['img']?>" alt="gg" style="width:100px; height: 100px; border-radius:50%; margin-right:5px;">
                                    </div>
                                    <div class="field">
                                        <b>
                                            <!-- PHOTO PROFILE -->
                                            <?php echo $comment['firstname']." ".$comment['lastname'];?>
                                            <br/>
                                            <?php echo $comment['schools'];?>
                                            <br/>
                                            <?php echo $comment['grades']." ".$comment['majors'];?>
                                        </b>
                                    </div>

                                    <div class="field">
                                        <?php echo $comment['comment'];?>
                                    </div>
                                </div>

                            </div>
                            <br>
                        </form>

                        <?php
                            }
                    ?>

                </div>
            </div>

            <!-- JS -->
            <script src="assets/js/jquery-3.2.1.min.js"></script>
            <script src="assets/js/bootstrap.js"></script>
            <script src="assets/js/semantic.min.js"></script>
            <script src="assets/js/aos.js"></script>
            <script src="assets/js/smooth.js"></script>
            <script src="assets/js/upload.js"></script>
            <script src="assets/js/navbar.js"></script>
            <script>
                AOS.init();
            </script>
    </body>

    </html>