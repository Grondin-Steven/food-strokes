    <!-- Button trigger modal -->
    @if (isset($res))
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal{{ $res->id }}">
            <i class='bx bx-edit-alt'></i>  
        </button>
    @else
        <button type="button" class="btn btn-primary" style="margin-top: 15px;margin-left: 93px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create
        </button>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ isset($res) ? $res->id : '' }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ isset($res) ? 'Modifier' : 'Ajouter' }}
                        une reservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- FORMULAIRE RESERVATION -->
                    <form action="/admin/reservations{{ isset($res) ? '/' . $res -> id : '' }}" method="POST">
                        @csrf

                        <div class="mb-4 ml-1">

                            <label class="label-title" for="res_people">Nombre de personnes :</label>
                            <input type="number" required id="people" class="form-people"
                                value="{{ isset($res) ? $res->people : '' }}" name="people" min="2" max="10">
                        </div>

                        <label class="label-title">Date de reservation</label>
                        <input type="date" class="form-input form-date" required id="res_date" name="date" min=""
                            value="{{ isset($res) ? $res->date : '' }}">
                        <br>

                        <div class="mt-3">

                            <label class="label-title">Choisissez l'heure de réservation</label>
                            <input type="time" class="form-input form-time" id="res_time" name="time" min="08:00"
                                max="23:00" required value="{{ isset($res) ? $res->time : '' }}">

                            <div class="d-flex justify-content-end mr-5 pr-4">
                                <input type="submit" value="Create">
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
