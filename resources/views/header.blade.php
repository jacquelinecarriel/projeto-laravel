
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonte do google pra entrar no codigo -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <!-- Styles -->
    <style>
            html, body {
                font-family: 'Quicksand', sans-serif;

            }
                /*--INICIO PARTE SUPERIOR DO SITE --*/
                /*logo site*/

                .img1 {
                    width: 100px;
                    height: 100px;
                    float: left;
                    margin-left: 50px;
                }
              
                /*parte superior menu*/

                .tablink {
                    color: rgb(7, 95, 98);
                    float: left;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    padding: 10px 10px;
                    font-size: 15px;
                    border-radius: 2px;
                    width: 140px;
                    margin-top: 30px;
                    background-color: rgb(255, 255, 255);
                    font-family: 'Quicksand', sans-serif;
                    text-align: center;

                }
                
                /*parte superior menu apos mouse passar por cima*/

                .tablink:hover {
                    background-color: rgb(3, 152, 158);
                    color: rgb(255, 255, 255);
                    text-decoration:none;
                    cursor:pointer;
                }
                </style>
</head>

<body>
    <!-- Menu superior do site com logo -->

    <section class="container first-section">
    <a href="{{ route('home') }}"><img  class=img1 src="/img/logo1.png" alt="logo"></a>
        <a href="{{ route('home') }}" class="tablink"  onclick="openPage('Cadastro', this, 'white')">Nosso site</a>
        <a href="{{ route('ranking') }}" class="tablink"  onclick="openPage('Cadastro', this, 'white')">Ranking de Produtos</a>
        <a href="{{ route('cadastropet') }}"button class="tablink" onclick="openPage('Cadastro', this, 'white')">Cadastro do Seu Pet</button></a>
        <a href="{{ route('adote') }}"button class="tablink" onclick="openPage('Adote', this, 'white')">Adote!</button></a>
            @guest
            <a href="{{ route('login') }}"button class="tablink" onclick="openPage('Adote', this, 'white')">{{ __('Login') }}</button></a>
                @if (Route::has('register'))
                <a href="{{ route('login') }}"button class="tablink" onclick="openPage('Adote', this, 'white')">{{ __('Registrar') }}</button></a>
                    @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
    </section>
</body>