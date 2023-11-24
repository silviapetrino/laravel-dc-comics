    <form action="{{ route('comics.destroy', $comic)}}" method="POST" class="m-1">
    @csrf
    @method('delete')
        <button id="delete-button" class="btn btn-warning border-black border-1 fw-bold">
            <i class="fa-solid fa-trash fa-beat-fade"></i>
            <span>Delete</span>
        </button>
    </form>
