<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
 
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-12">

                    {{-- <div class="alert alert-success">{{ App\Issue::where('user_id',$user->id)->get()[0]->msg }}</div> --}}
                    <div class="alert alert-success">Userame: {{ $user->name }}</div>
                    <hr>
                    <ul>
                        @foreach ($user->issues as $issue)
                            <li>{{ $issue->msg }}</li>                        
                        @endforeach
                    </ul>

                </div>
                
            @endforeach
           
        </div>
    </div>
</body>
</html>