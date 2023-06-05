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
                    <td class="text-white">{{$article->subtitle}}</td>
                    <td class="text-white">{{$article->category->name ?? 'Non categorizzato'}}</td>
                    <td class="text-white">
                            @foreach($article->tags as $tag)
                                {{$tag->name}},
                            @endforeach
                        </td>
                        <td class="text-white">{{$article->created_at->format('d/m/Y')}} </td>
                        <td>
                          <div class="d-flex">
                            <a href="{{route('article.show', compact('article'))}}" class="btn back rounded-0 text-white btnMobile mx-1 mx-md-2">Leggi</a>
                            <a href="{{route('article.edit', compact('article'))}}" class="btn back rounded-0 text-white btnMobile mx-1 mx-md-2">Modifica</a>
                            <form action="{{route('article.destroy', compact('article'))}}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger rounded-0 btnMobile mx-1 mx-md-2">Elimina</button>
                            </form>
                          </div>
                        </td>
                </tr>
                @endforeach
          </tbody>
        </table>
                
      </div>
    </div>
  </div>
        