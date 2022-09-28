<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2></h2>
                    </div>
                    <div class="card-body">
                        <form action="/update-data/{{$user->id }}" method="POST" >
                            {{ csrf_field() }}
                            @method('POST')
                            <div class="mb-3">
                                <label class="form-label" >Name</label>
                                <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Enter Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" >Email</label>
                                <input type="text" class="form-control" value="{{ $user->email }}" name="email" placeholder="Enter Email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>