    <!-- Bloc de reservation -->
    <div class="blocs">
        <div class="reservation-card" data-aos="fade-up" data-aos-duration="1000">
            <div class=" container">
                <p class="slogan-card pt-3">Faite votre <span style="color: #FF3800;">réservation</span> en quelques
                    cliques.
                </p>

<!-- FORMULAIRE RESERVATION -->
 <form id="resForm" method="post" target="_self">
    <div class="mb-4 ml-1">
        <label for="res_name"></label>
        <input type="text" required name="name" placeholder="Nom complet" class="form-input" id="name"
            value="" />

        <label for="res_email"></label>
        <input type="email" required name="email" placeholder="Email" class="form-input" id="evenement"
            value="" />
    </div>
    <div class="mb-4 ml-1">
        <label for="res_tel"></label>
        <input type="text" required name="tel" placeholder="Numéro de téléphone" class="form-input"
            id="tel" value="" />

        <label class="label-title" for="res_people">Nombre de personnes :</label>
        <input type="number" required id="people" class="form-people" name="people" min="2" max="10">
    </div>

    <label class="label-title">Date de reservation</label>
    <input type="date" class="form-input form-date" required id="res_date" name="date" min="">
    <br>

    <div class="mt-3">

        <label class="label-title">Choisissez l'heure de réservation</label>
        <input type="time" class="form-input form-time" id="res_time" name="time" min="08:00"
            max="23:00" required>

        <div class="d-flex justify-content-end mr-5 pr-4">
            <button type="submit" class="btn btn-reservation d-flex mt-4 justify-content-center"
                value="Submit" />Reserver<i class='bx bx-right-arrow-alt'></i></button>
        </div>
    </div>

</form>
</div>
</div>
<!-- Fin du formulaire de réservation -->