<x-layout headerTitle="Tutti gli articoli">
   

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-5 mt-4">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                      <p class="small text-muted fst-italic text-capitalize">
                        <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                    </p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
                        Redatto il {{$article->created_at->format('d/m/Y')}} da  <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic text-capitalize m-2">{{$article->user->name}}</a>
                        
                    </div>
                </div>            
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
                