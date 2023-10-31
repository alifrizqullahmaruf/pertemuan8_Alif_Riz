<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kirim Email</title>
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan link ke file CSS kustom -->
    <link href="path-to-your-custom-style.css" rel="stylesheet">
    <!-- Tambahkan link ke Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{ route('post-email') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
                            </div>
                            {{-- <div class="form-group">
                                <label for="email">Username</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Username">
                            </div> --}}
                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" class="form-control" name="email" id="email" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="email">Ulangi Password</label>
                                <input type="password" class="form-control" name="email" id="email" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek">
                            </div>
                            <div class="form-group">
                                <label for="body">Body Deskripsi</label>
                                <textarea name="body" class="form-control" id="body" rows="5"></textarea>
                            </div>
                            <button class="btn btn-primary"><i class="fas fa-envelope"></i> Kirim Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Tambahkan link ke file JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
