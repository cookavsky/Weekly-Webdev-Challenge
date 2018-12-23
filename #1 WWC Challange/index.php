<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, Chrome=1">
    <title>Wekly WebDev Challenge #1</title>
    <meta name="description" content="HTML, CSS, Javascript and WWC">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  type="text/css" media="screen" href="./css/style.css">
    <link rel="stylesheet"  type="text/css" media="screen" href="./css/media.css">
</head>

<body>
    <header>
        <img src="img/WhiteLogo.png" />
    </header>
    <main>
        <article class="Left">
            <form class="Register">
                <h1>Register form</h1>
                <div class="Content">
                    <div class="User">
                        <div class="Icon">
                            <img src="img/glyphicons_003_user.png" alt="User"/>
                        </div>
                        <div class="Text">
                            <input type='text' name='username' placeholder="Username">
                        </div>
                    </div>
                    <div class="Password">
                        <div class="Icon">
                            <img src="img/glyphicons_203_lock.png" alt="Password"/>
                        </div>
                        <div class="Text">
                            <input type='password' name='password' placeholder="Password">
                        </div>
                    </div>
                    <div class="Password">
                        <div class="Icon">
                            <img src="img/glyphicons_203_lock.png" alt="Password"/>
                        </div>
                        <div class="Text">
                            <input type='password' name='password' placeholder="Confirm password">
                        </div>
                    </div>
                    <div class="Email">
                        <div class="Icon">
                            <img src="img/glyphicons_010_envelope.png" alt="Email"/>
                        </div>
                        <div class="Text">
                            <input type='text' name='email'  placeholder="Email">
                        </div>
                    </div>
                    <div class="Location">
                        <div class="Icon">
                            <img src="img/glyphicons_242_google_maps.png" alt="Location"/>
                        </div>
                        <div class="Text">
                            <input type='text' name='location' placeholder="Your location">
                        </div>
                        <div class="BottomTriangle"></div>
                    </div>
                    <div class="CheckList">
                        <div class="Check red"></div>
                        <div class="CheckText">
                            <p>I have read and accept the terms of use.</p>
                        </div>
                    </div>
                    <div class="Button">
                        <h2>Sign up</h2>
                    </div>
                </div>
            </form>
            <form class="Send">
                <h1>Send form</h1>
                <div class="Content">
                    <div class="Name">
                        <div class="Icon">
                            <img src="img/glyphicons_003_user.png" alt="User"/>
                        </div>
                        <div class="Text">
                            <input type='text' name='name' placeholder="Your name">
                        </div>
                    </div>
                    <div class="Email">
                        <div class="Icon">
                            <img src="img/glyphicons_010_envelope.png" alt="Email"/>
                        </div>
                        <div class="Text">
                            <input type='text' name='email'  placeholder="Your email">
                        </div>
                    </div>
                    <textarea name="message" placeholder="Type your message ..."></textarea>
                    <div class="CheckList">
                        <div class="Check red"></div>
                        <div class="CheckText">
                            <p>Send a copy to my Email</p>
                        </div>
                    </div>
                    <div class="Button">
                        <h2>Send email</h2>
                    </div>
                </div>
            </form>
        </article>
        <article class="right">
            <form class="Sign">
                <h1>Sign in form</h1>
                <div class="Content">
                    <div class="User">
                        <div class="Icon">
                            <img src="img/glyphicons_003_user.png" alt="User" />
                        </div>
                        <div class="Text">
                            <input type='text' name='username' placeholder="Username">
                        </div>
                    </div>
                    <div class="Password">
                        <div class="Icon">
                            <img src="img/glyphicons_203_lock.png" alt="Password" />
                        </div>
                        <div class="Text">
                            <input type='password' name='password' placeholder="Password">
                        </div>
                    </div>
                    <div class="Row">
                        <div class="CheckList">
                            <div class="Check red"></div>
                                <div class="CheckText">
                                    <p>Remember me</p>
                                </div>
                        </div>
                        <div class="Button">
                            <h2>Sign in</h2>
                        </div>
                    </div>
                </div>
            </form>
            <form class="Rec">
                <h1>Recover form</h1>
                <div class="Content">
                    <div class="Email">
                        <div class="Icon">
                            <img src="img/glyphicons_010_envelope.png" alt="Email" />
                        </div>
                        <div class="Text">
                            <input type='text' name='email' placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="Phone">
                        <div class="Icon">
                            <img src="img/glyphicons_139_phone.png" alt="Location" />
                        </div>
                        <div class="Text">
                            <input type="tel" name="phone" placeholder="Enter your photo number">
                        </div>
                    </div>
                    <div class="Row">
                        <div class="Button">
                            <h2>Send</h2>
                        </div>
                        <div class="ButtonTwo">
                            <h2>Done</h2>
                        </div>
                    </div>
                </div>
            </form>
            <form class="Sub">
                <h1>Subscribe form</h1>
                <div class="Content">
                    <div class="Email">
                        <div class="Icon">
                            <img src="img/glyphicons_010_envelope.png" alt="Email" />
                        </div>
                        <div class="Text">
                            <input type='text' name='email' placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="Row">
                        <div class="ButtonSub">
                            <h2>Subscribe</h2>
                        </div>
                        <div class="ButtonNoT">
                            <h2>Done</h2>
                        </div>
                    </div>
                </div>
            </form>
            <footer>
                <img src="img/BlackLogo.png" />
            </footer>
        </article>
    </main>
    <script src="js/script.js"></script>
</body>

</html>