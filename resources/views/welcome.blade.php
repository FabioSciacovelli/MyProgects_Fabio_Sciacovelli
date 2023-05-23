<x-layout headerTitle="HealthyEarth">
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="d-flex justify-content-center m-3">
        <a href="{{route('article.create')}}" type="submit" class="btn btn-success">Inserisci il tuo articolo</a>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-8">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                      <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        <a href="#" class="btn btn-success text-white">Leggi</a>
                    </div>
                </div>            
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
                



