<div class="container">
    <div class="row">
      <div class="table-responsive">
        <table class="bg-dark opacity table table-custom btnMobile table-striped  border text-white">
          <thead class="table-success">
            <tr>
              <th  scope="col">#</th>
              <th  scope="col">Titolo</th>
              <th  scope="col">Sottotitolo</th>
              <th  scope="col">Categoria</th>
              <th  scope="col">Tags</th>
              <th  scope="col">Creato il</th>
              <th  scope="col">Azioni</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($articles as $article)
                <tr>
                    <th class="text-white" scope="row">{{$article->id}}</th>
                    <td class="text-white">{{$article->title}}</td>
                    <td class="text-white">{{$article->subtitlel}}</td>
                    <td class="text-white">{{$article->category->name ?? 'Non categorizzato'}}</td>
                    <td>
                            @foreach($article->tags as $tag)
                                {{$tag->name}},
                            @endforeach
                        </td>
                        <td>{{$article->created_at->format('d/m/Y')}} </td>
                        <td>
                            <a href="{{route('article.show', compact('article'))}}" class="btn back rounded-0 text-white btnMobile">Leggi</a>
                            <a href="{{route('article.edit', compact('article'))}}" class="btn back rounded-0 text-white btnMobile">Modifica</a>
                            <form action="{{route('article.destroy', compact('article'))}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger rounded-0 btnMobile">Elimina</button>
                            </form>
                        </td>
                </tr>
                @endforeach
          </tbody>
        </table>
                
      </div>
    </div>
  </div>
        