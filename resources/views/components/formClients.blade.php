    <!-- Button trigger modal -->
    @if (isset($clie))
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal{{ $clie->id }}">
            <i class='bx bx-edit-alt'></i>
        </button>
    @else
        <button type="button" class="btn btn-primary" style="margin-top: 15px;margin-left: 93px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create
        </button>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ isset($clie) ? $clie->id : '' }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ isset($clie) ? 'Modifier' : 'Ajouter' }}
                        un client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="/admin/clients{{ isset($clie) ? '/' . $clie->id : '' }}" method="POST">
                        @csrf
                        <div>
                            <label for="res_name">Nom :</label>
                            <input type="text" name="name" value="{{ isset($clie) ? $clie->name : '' }}">
                        </div>
                        <div>
                            <label for="res_email">Email :</label>
                            <input type="email" name="email" value="{{ isset($clie) ? $clie->email : '' }}">
                        </div>
                        <div>
                            <label for="res_phone">Téléphone :</label>
                            <input type="text" name="phone" value="{{ isset($clie) ? $clie->phone : '' }}">
                        </div>
                        <input type="submit" value="Create">
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
