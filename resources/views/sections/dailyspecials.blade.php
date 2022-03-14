        <!-- Les plats du jour -->
        <p data-aos="zoom-in" id="dailyspecials" data-aos-duration="1000" class="text-center mb-6 title-presentation-dishes">PLATS<br> <span
                style="color: #FF3800;font-size: 34px;">DU JOUR</span></p>

        <hr class="divider">

        @foreach ($dailyspecials as $dailyspecial)
            <div class="container col-10">
                <div class="read-dailyspecials">
                    <img class="img-dailyspecials" data-aos="zoom-in" data-aos-duration="1200" src="{{ $dailyspecial->picture }}" width="200px" alt="">
                    <div data-aos="fade-right" data-aos-duration="1200" class="card-body">

                        <h5 class="card-title">{{ $dailyspecial->title }}</h5>

                        <p class="card-description" style="
                        font-size: 16px;"">{{ $dailyspecial->description }}</p>
                    </div>
                </div>
                <br>
            </div>
            <br>
 @endforeach
