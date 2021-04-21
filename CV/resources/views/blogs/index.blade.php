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
            <div class="logo"><a href="/" style="color:black;">Kissamenov</a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn" style="color:black;">Home</a></li>
                <li><a href="#about" class="menu-btn" style="color:black;">About</a></li>
                <li><a href="#skills" class="menu-btn" style="color:black;">Skills</a></li>
                <li><a href="#contact" class="menu-btn" style="color:black;">Contact</a></li>
                <li><a href="/post" class="menu-btn" style="color:black;">Post</a></li>
                <li><a href="/blog" class="menu-btn" style="color:black;">Blog</a></li>
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">

                    <div class="dropdown-menu dropdown-menu-right" style="display:flex;margin-left:80px" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="locale/ru" style="color:black;">Russian</a>
                        <a class="dropdown-item" href="locale/kz" style="color:black;">Kazakh</a>
                        <a class="dropdown-item" href="locale/en" style="color:black;"> English</a>
                    </div>
                </li>
            </ul>
            <div class="menu-btn"></div>

        </div>
        </div>
    </nav>



    <section class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div>
                        <h2>Все блоги</h2>
                    </div><!-- /.col -->
                    <div style="margin-top:10px;">
                        <button>
                        <a style="font-size:16px;" href="blog/create">Добавить новый блог</a>
                        </button>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width:5%;">
                        ID
                    </th>
                    <th style="width:20%;">
                        Название
                    </th>
                    <th style="width:55%;">
                        Описание
                    </th>
                    <th>
                    </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>
                        {{$blog['id']}}
                    </td>
                    <td>
                        {{$blog['title']}}
                    </td>
                    <td>
                        {{$blog['description']}}
                    </td>
                    <td>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Удалить
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </section>

    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>