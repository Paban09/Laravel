<form  action="{{route('category.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" value="{{$category->name}}" name="name" required /></td>
        </tr>

        <tr>
            <th>Description</th>
            <td><textarea  type="text"  name="description" required>{{$category->description}}</textarea></td>
        </tr>

        <tr>
            <th>Image</th>
            <td><input type="file" name="image"  /></td>
            <img src="{{$category->image}}" alt="" height="100" width="200" />
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Create New Category" /></td>
        </tr>

    </table>
</form>
