<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row col-md-12">
        <table border="1" width="100%">
            <tr>
                <td>SL</td>
                <td>Name</td>
                <td>Posts</td>
            </tr>
            @foreach($categories as $key => $category)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$category->name}}</td>
                <td>
                    @foreach($category->posts as $post)
                        @if($loop->iteration > 1)
                        ,
                        @endif
                        <span>{{$post->name}}</span>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>