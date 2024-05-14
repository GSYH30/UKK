<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../css/notif-user-login.css" />

    <!-- FONT -->

    <!-- Martian Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet" />
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
                    <label for="admin-link">Register Successfully</label>
                    <a id="admin-link" href="login">Login</a>

                    <!-- SCRIPT PW JS -->
                    <!-- <script>
                    document.getElementById("admin-link").addEventListener("click", function(event) {
                        event.preventDefault(); // Menghentikan perilaku default link
                        
                        var password = prompt("Please enter your password:");

                        // Gantilah "password-yang-diinginkan" dengan kata sandi yang benar
                        if (password === "admin") {
                            // Jika kata sandi benar, arahkan pengguna ke halaman admin
                            window.location.href = event.target.href;
                        } else {
                            // Jika kata sandi salah, tampilkan pesan kesalahan
                            alert("Password incorrect. Please try again.");
                        }
                    });
                    </script> -->
                    <!-- END SCRIPT PW JS -->

                </div>
            </div>
        </div>
    </div>
</body>

</html>