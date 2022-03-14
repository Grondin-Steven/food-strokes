<form method="POST" action="/admin/clients/delete/{{ $id }}">
    @csrf
    <button type="submit" class="btn btn-danger mt-1" value="Supprimer">
        <i class='bx bx-trash'></i>
    </button>
</form>
