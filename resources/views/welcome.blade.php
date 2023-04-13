<x-layout>


<div class=" container">
    <div class="row">
        <div class="col-12 ">


            <h1>Anime Card</h1>

        </div>
    </div>


</div>


<div class=" container">
    <div class="row">
        @foreach ($animes as $element)
        <div class="col-12 col-md-4 my-2">
            <x-animecard
            animeName="{{ $element['name'] }}"
            animeYear="{{ $element['year'] }}"
            animeGenre="{{ $element['genre'] }}"
            animeDescription="{{ $element['description'] }}"
            animeImg="{{$element['img']}}"
            animeID="{{$element['id']}}"
            
            />
            

        </div>
        @endforeach
    </div>


</div>



</x-layout>