<section class="d-flex ">
    <form action="usuarios/delete/{{$row->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/usuarios/edit{{$row->id}}">
        <button class="btn btn-primary ml-1">Edit</button>
    </a>
</section>