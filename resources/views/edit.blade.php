<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">

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
                    <label>UNIBOOKSTORE | UPDATE</label>
                    <br>
                    <br>
                    <div class="input">
                        <form method="post" action="/buku/{{ $buku->id }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="text" name="penerbit" value="{{ $buku->penerbit }}" placeholder="Penerbit..." required>
                            <input type="text" name="judul" value="{{ $buku->judul }}" placeholder="Judul..." required>
                            <input type="number" name="stock" value="{{ $buku->stock }}" placeholder="Stock..." required>
                            <input type="number" name="price" value="{{ $buku->price }}" placeholder="Harga..." required>
                            <input type="file" name="image" accept="image/*"> <!-- Menghapus value dan menambahkan accept -->
                            <hr class="animated"> 
                            <p>Data buku akan di edit ke dalam file "rak-buku"</p>
                            <button type="submit" name="submit" class="submit-button"><i class="fa-solid fa-tools"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
