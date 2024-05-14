<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
    <link rel="stylesheet" href="../css/data-user.css">

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
            @foreach ($user as $user)
            @csrf
            <div class="rgb">
                <div class="background">
                    <div class="user">
                        <label><i class="fa-solid fa-user"></i> {{ $user->name}}</label>
                        |
                        <label><i class="fa-solid fa-envelope"></i> {{ $user->email}}</label>
                        |
                        <label><i class="fa-solid fa-phone"></i> {{ $user->number}}</label>
                        |
                        <label><i class="fa-solid fa-eye-slash"></i> YouCantSeeMe</label>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            @endforeach
        </div>
    </div>
    </div>
</body>

</html>