<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table-custom btnMobile table table-striped table-hover border bg-dark opacity">
                <thead class="table-success">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome tag</th>
                    <th scope="col">Q.tà articoli collegati</th>
                    <th scope="col">Aggiorna</th>
                    <th scope="col">Cancella</th>      
                  </tr>
                </thead>
                <tbody>
            
                    @foreach ($metaInfos as $metaInfo)
                    <tr>
                        <th class="text-white" scope="row">{{$metaInfo->id}}</th>
                        <td class="text-white">{{$metaInfo->name}}</td>
                        <td class="text-white" >{{count($metaInfo->articles)}}</td>
                        @if($metaType == "tags")
                        <td>
                            <form action="{{route('admin.editTag', ['tag'=> $metaInfo])}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="d-flex" >
                                    <input type="text" name="name" placeholder="New tag" class="inputMobile form-control w-50 d-inline rounded-0">
                                    <button type="submit" class="btn btnMobile back rounded-0 text-white mx-5 mx-md-2">Aggiorna</button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('admin.deleteTag',['tag' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btnMobile rounded-0 btn-danger runded-0 text-white">Elimina</button>
                            </form>
                        </td>
                        @else
                        <td>
                            <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('put')
                                <div class="d-flex">
                                    <input type="text" name="name" placeholder="Nuova categoria" class="btnMobile form-control w-50 d-inline rounded-0">
                                    <button type="submit" class="btn btnMobile back rounded-0 text-white mx-5 mx-md-2">Aggiorna</button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btnMobile rounded-0 btn-danger runded-0 text-white">Elimina</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
                       
        </div>
    </div>    
</div> 