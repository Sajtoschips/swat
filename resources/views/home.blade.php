<x-layout>
    <div class="container">
        <h1>Episodes</h1>
        <form class="mb-3" action="/show-season" method="POST">
            @csrf
            <div class="row">
                <div class="col-3"><label class="form-label" for="season">Season:</label></div>
                <div class="col-3"><select class="form-select" name="season" id=""></div>
                    @foreach ($series as $season)
                    <div class="col-3"><option value="{{$season}}">{{$season}}</option></div>
                    @endforeach
                </select>
                <div class="col-3"><input class="btn btn-primary" type="submit" value="Show"></div>
            </div>
        </form>

        <div class="row">
            @foreach ($episodes as $episode)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <x-card :episode="$episode"></x-card>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
