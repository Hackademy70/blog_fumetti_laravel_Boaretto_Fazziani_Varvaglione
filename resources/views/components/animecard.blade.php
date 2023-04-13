
    
        <!-- prima riga -->
            <div class="col-4 d-flex my-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $animeImg }}" class="card-img-top" alt="{{ $animeName }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $animeName }}</h5>
                        <p class="card-text">{{ $animeYear }}</p>
                        <p class="card-text">{{ $animeGenre }}</p>
                        <p class="card-text">{{ $animeDescription }}</p>
                        <a href="{{route("servizi", [ 'id' => $animeID ])}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
 
