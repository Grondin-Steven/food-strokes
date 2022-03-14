    <!-- Button trigger modal -->
    @if (isset($plat))
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal{{ $plat->id }}">
            <i class='bx bx-edit-alt'></i>
        </button>
    @else
        <button type="button" class="btn btn-primary" style="margin-top: 15px;margin-left: 93px;" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Create
        </button>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ isset($plat) ? $plat->id : '' }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ isset($plat) ? 'Modifier' : 'Ajouter' }}
                        un plat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="/admin/dailyspecials{{ isset($plat) ? '/' . $plat->id : '' }}" method="POST">
                        @csrf
                        <div>
                            <label for="title">Title :</label>
                            <input type="text" id="title" name="title" value="{{ isset($plat) ? $plat->title : '' }}">
                        </div>
                        <div>
                            <label for="description">Description :</label>
                            <input type="text" id="desciption" name="description"
                                value="{{ isset($plat) ? $plat->description : '' }}">
                        </div>
                        <div>
                            <label for="picture">Picture :</label>
                            <textarea id="text" name="picture">{{ isset($plat) ? $plat->picture : '' }}</textarea>
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
