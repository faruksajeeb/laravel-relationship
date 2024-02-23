<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row col-md-12">
        <h1>Create Post</h1>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            Post Title:
            <input type="text" name="name"><br/>
            Categories:
            <select multiple name="category[]">
                <option>--select categories</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Submit" name="submit-btn" />
        </form>
    </div>
</body>
</html>