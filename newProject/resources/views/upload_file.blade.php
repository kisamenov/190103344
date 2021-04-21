<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        File Uplaod
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('upload-store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" name="name" class="form-control" id="firstName" placeholder="" value="">
                                <label for="username" class="form-label">Lastname</label>
                                <input name="surname" style="margin-bottom: 20px;" type="text" class="form-control" id="firstName" placeholder="" value="">
                                <label for="username" class="form-label">Email</label>
                                <input name="email" style="margin-bottom: 20px;" type="text" class="form-control" id="firstName" placeholder="" value="">
                                <label for="file">Choose file</label>
                                <input type="file" style="margin-bottom: 20px;" class="form-controll" name="file" id="file">
                            </div>
                            <button type="submit" class="btn btn-success">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>