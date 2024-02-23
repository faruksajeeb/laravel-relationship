<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Post details -->
    <label for="title">Title:</label>
    <input type="text" name="name" value="{{ $post->name }}"><br>
    <!-- Other fields... -->

    <!-- Categories -->
    <label for="categories">Categories:</label><br>
    <select name="categories[]" multiple>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $post->categories->contains($category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Update</button>
</form>
