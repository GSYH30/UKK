<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../css/create.css">

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
                    <h2>Create</h2>
                    <form action="/rak-buku" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="file" placeholder="Image" id="image" name="image" required> <i class="fa-solid fa-file"></i> <!-- Icon user -->
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Penerbit" id="penerbit" name="penerbit" required 
                                minlength="5"> <i class="fa-solid fa-star"></i> <!-- Icon user -->
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Judul" id="judul" name="judul" required><i class="fa-solid fa-heading"></i> <!-- Icon email -->
                        </div>
                        <div class="input-group">
                            <input type="number" placeholder="Stock" id="stock" name="stock" required minlength="12"><i class="fa-solid fa-arrow-trend-up"></i> <!-- Icon email -->
                        </div>
                        <div class="input-group">
                            <input type="number" placeholder="Price" id="price" name="price" required minlength="8"><i class="fa-solid fa-rupiah-sign"></i><!-- Icon lock -->
                        </div>
                        @if ($errors->any())
                            <div class="error-message">
                                <label>Check file sebelum di kirim</label>
                            </div>
                        @endif
                        <button type="submit" class="btn">Add New Book</button>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>