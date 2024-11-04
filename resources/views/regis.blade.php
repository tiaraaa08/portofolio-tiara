<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buat Akun - Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .element {
            width: 200px;
            /* Contoh lebar */
            height: 100px;
            /* Contoh tinggi */
            background-color: #f8f9fa;
            /* Contoh warna latar belakang */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan */
            border-radius: 8px;
            /* Membulatkan sudut (opsional) */
        }

        body {
            background-color: rgb(15, 15, 40);
        }

        .bayangan {
            background-color: white;
            border-radius: 3px;
            box-shadow: 0px 0px 8px 8px rgb(131, 102, 48);
            /* Menambahkan bayangan */
            border-radius: 8px;
            /* Membulatkan sudut (opsional) */

        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-5 border border-black bayangan">
                <div class="mx-4 my-4 justify-content-center card-body">
                    <p class="fs-2 text-center fw-medium">Buat Akun Admin </p>
                    <form method="POST"
                    action="{{ url('submit') }}"
                    >
                        @csrf
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control""
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control""
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-4">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Buat Akun</button>
                        <div class="text-center mt-4"><a href="{{ url('login') }}">Sudah punya akun ?</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>