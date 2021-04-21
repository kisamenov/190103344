<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Kissamenov</a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">@lang('main.home')</a></li>
                <li><a href="#about" class="menu-btn">@lang('main.about')</a></li>
                <li><a href="#skills" class="menu-btn">@lang('main.skills')</a></li>
                <li><a href="#contact" class="menu-btn">@lang('main.contact')</a></li>
                <li><a href="/post" class="menu-btn">@lang('main.posts')</a></li>
                <li><a href="/blog" class="menu-btn">@lang('main.blogs')</a></li>
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">

                    <div class="dropdown-menu dropdown-menu-right" style="display:flex;margin-left:80px" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="locale/ru">Russian</a>
                        <a class="dropdown-item" href="locale/kz">Kazakh</a>
                        <a class="dropdown-item" href="locale/en"> English</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>


    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">@lang('main.myname')</div>
                <div class="text-2">@lang('main.Ars')</div>
                <a href="#">@lang('main.learn')</a>
            </div>
        </div>
    </section>


    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">@lang('main.am')</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="https://sun9-28.userapi.com/impg/KF99MnIjUL65W22G_5MF9lI8GVO4sNfnfmei1w/yEYhSgihtbQ.jpg?size=1440x1920&quality=96&proxy=1&sign=2d6b62344cd3389fab0a75270236fc36" alt="">
                </div>
                <div class="column right">
                    <div class="text">@lang('main.im') @lang('main.Ars') <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="#">@lang('main.learn')</a>
                </div>
            </div>
        </div>
    </section>


    <hr color="black">


    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">@lang('main.ms')</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">@lang('main.skills') & @lang('main.experience')</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                    <a href="#">@lang('main.learn')</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>

                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars"></div>
                    <div class="bars"></div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <hr color="black">

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">@lang('main.cm')</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">@lang('main.name')</div>
                                <div class="sub-title">@lang('main.Ars')</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">@lang('main.address')</div>
                                <div class="sub-title">@lang('main.Kazakhstan'), @lang('main.Semey')</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">@lang('main.email')</div>
                                <div class="sub-title">kisamenov@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right sss">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis minima quos, veniam, laudantium commodi quisquam odit deserunt esse labore laborum molestias itaque reprehenderit nemo qui possimus quam voluptatum ipsum iusto.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <span>Created By <a href="#">Kissamenov</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>