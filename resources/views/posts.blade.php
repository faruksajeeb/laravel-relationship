<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row col-md-12">
        <table border="1"  width="100%">
            <tr>
                <td>SL</td>
                <td>Name</td>
                <td>Categories</td>
                <td>Action</td>
            </tr>
            @foreach($posts as $key => $post)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$post->name}}</td>
                <td>
                    @foreach($post->categories as $category)
                        @if($loop->iteration > 1)
                            ,
                        @endif
                        <span>{{$category->name}}</span>
                    @endforeach
                </td>
                <td>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>