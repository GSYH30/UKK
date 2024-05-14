<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">

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
                    <div><img src="../images/mail.jpg" alt="" srcset=""></div>
                    <br>
                    <h2>Sign Up</h2>
                    
                    <form action="/user" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" placeholder="Username" id="name" name="name" required 
                                minlength="5"> <i class="fas fa-user"></i> <!-- Icon user -->
                        </div>
                        <div class="input-group">
                            <input type="email" placeholder="Email" id="email" name="email" required><i
                                class="fas fa-envelope"></i> <!-- Icon email -->
                        </div>
                        <div class="input-group">
                            <input type="type" placeholder="Phone" id="phone" name="number" required minlength="12"><i
                                class="fas fa-phone"></i> <!-- Icon email -->
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" id="password" name="password" required minlength="8"><i class="fas fa-lock"></i> <!-- Icon lock -->
                        </div>
                        <button type="submit" class="btn">Register</button>
                        <p>Sudah punya akun? <a href="/login">Login!</a></p>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>