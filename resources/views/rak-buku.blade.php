<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rak Buku</title>
    <link rel="stylesheet" href="../css/rak-buku.css">

    <!-- FONT -->

    <!-- Martian Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">
    <!-- END Martian Mono -->

    <!-- END FONT -->

    <!-- ICON FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- END ICON FONT AWESOME -->
</head>

<body>
    <div class="container">
        <div class="dalam-container">
            <div class="rgb">
                <div class="background">
                    <h1>Rak Buku</h1>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <p for="">Welcome {{Auth::user()->name}} <button class="button"><i class="fa-solid fa-right-from-bracket"></i></button></p>
                    </form>
                    <br>
                    <div class="search-container">
                        <form action="/buku/search" method="get">
                            <input type="search" name="search" placeholder="Cari buku..."> <i class="fas fa-search"></i>
                        </form>
                    </div>
                    <hr>
                    <br>
                    <!-- Nav Bar -->
                    <header>
                        <a href="" class="logo"><i class="fa-solid fa-home"></i><span>UNIBOOKSTORE</span></a>
                        <ul class="navbar">
                            <li><a href="/" class="">Home</a></li>
                            <li><a href="" class="active">Buku</a></li>
                            <li><a href="" class="">Contact</a></li>
                            <li><a href="" class="">About</a></li>
                        </ul>
                        <div class="nav-user">
                            <a href="notif-admin" class="user"><img src="{{ asset('images/mail.jpg') }}" alt="" srcset=""></a>
                        </div>
                    </header>
                    <!-- END NAV BAR -->
                    <div class="rak-buku">
                        @foreach ( $buku as $buku )
                        @csrf
                        <div class="buku">
                            <div class="image-container"> 
                                @if ($buku->image)
                                    <img src="{{ asset('image/'.$buku->image) }}">
                                @endif
                                <label for="">{{$buku -> penerbit }}</label>
                                <br>
                                <br>
                                <div class="data-buku">
                                    <div class="judul-buku">
                                        <p>{{$buku -> judul }}</p>
                                    </div>
                                    <div class="stock-buku">
                                        <p><i class="fa-solid fa-cart-shopping"></i> {{$buku -> stock}}</p>
                                    </div>
                                    <div class="harga-buku">
                                        <p class="harga-buku"><i> <i class="fa-solid fa-tag"></i> {{$buku -> price}}</i></p>
                                    </div>
                                </div>
                                <button class="beli-btn">Beli <i class="fa-solid fa-bag-shopping"></i></button>
                            </div>
                        </div>
                        @endforeach
                    </div>       
                </div>
            </div>
            
        </div>
    </div>
    </div>
</body>

</html>