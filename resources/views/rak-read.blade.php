<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rak Read</title>
    <link rel="stylesheet" href="../css/rak-read.css">

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
                    <h1>Rak Buku - Read</h1>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <p for="">Welcome Admin {{Auth::user()->name}} <button class="button"><i class="fa-solid fa-right-from-bracket"></i></button></p>
                    </form>
                    <br>
                    <div class="search-container">
                        <input type="text" name="query" placeholder="Cari buku..."> <i class="fas fa-search"></i>
                    </div>
                    
                    <hr>
                    <br>
                    <!-- Nav Bar -->
                    <header>
                        <a href="rak-buku" class="logo"><i class="fa-solid fa-home"></i><span>UNIBOOKSTORE</span></a>
                        <ul class="navbar">
                            <li><a href="create" class="">Create</a></li>
                            <li><a href="rak-read" class="active">Read</a></li>
                            <li><a href="rak-update" class="">Update</a></li>
                            <li><a href="rak-delete" class="">Delete</a></li>
                        </ul>
                        <div class="nav-user">
                            <a href="notif-admin-" class="user"><img src="images/mail.jpg" alt="" srcset=""></a>
                        </div>
                    </header>
                    <!-- END NAV BAR -->
                    <div class="rak-buku">
                        @foreach($buku as $buku)
                        @csrf
                        @if(isset($buku->image))
                            <div class="buku">
                                <div class="image-container">
                                    <img src="{{ asset('image/'.$buku->image) }}" alt="">
                                    <label for="">{{ $buku->penerbit }}</label>
                                    <br><br>
                                    <div class="data-buku">
                                        <div class="judul-buku">
                                            <p>{{ $buku->judul }}</p>
                                        </div>
                                        <div class="stock-buku">
                                            <p><i class="fa-solid fa-cart-shopping"></i> {{ $buku->stock }} Stock</p>
                                        </div>
                                        <div class="harga-buku">
                                            <p class="harga-buku"><i class="fa-solid fa-tag"></i> {{ $buku->price }} Rb</p>
                                        </div>
                                    </div>
                                    <button class="beli-btn">Beli <i class="fa-solid fa-bag-shopping"></i></button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>