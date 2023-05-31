<x-layout>
    <div class="bgcreate">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8">
           
                    <form class="bg-light p-5 border rounded-1 opacity mt-5 mb-5" action="" method="" enctype="multipart/form-data">
                        
                        <h1 class="text-blackcustom text-center titlecreate mb-5">
                            MODIFICA UN ARTICOLO
                        </h1>
                         
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 

                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">Titolo</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Min 5, max 100" value="{{$article->title}}">
                                                       
                           

                        </div>

                        <div class="mb-3">
                            <label for="subtitle" class="form-label fw-bold">Sottotitolo</label>
                            <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Min 5, max 150" value="{{$article->subtitle}}">
                            
                            
                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Immagine</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <span class="small fst-italic">Inserisci una immagine</span>
                            
                            
                        </div>


                        
                        <div class="mb-3">
                                <label for="category" class="form-label fw-bold">Categoria:</label>
                                <select  name="category"  class="form-control text-capitalize" id="category">                                  
                                    <option value="">--Seleziona--</option>    
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                                    @endforeach                                   
                                </select> 
                                
                                
                               
                        </div>
                            


                        <div class="mb-3">
                            <label for="tags" class="form-label fw-bold">Tags:</label>
                            <input  name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name', ', ')}}" placeholder="Dividi ogni tag con una virgola">
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label fw-bold">Corpo del testo:</label>
                            <textarea  name="body"  rows="7" cols="30" class="form-control" id="body" placeholder="Il corpo del teste dev' essere tra i 10 e i 1000 caratteri">{{$article->body}}</textarea>
                            
                            
                        </div>

                        <div class="mt-2">
                            <button class="btn btn-success back text-white m-3 rounded-0">Modifica un articolo</button>
                            <a class="btn oran rounded-0" href="{{route('homepage')}}">Torna alla home</a>
                        </div>
                        
                    </form>
                </div>

               
                  
            </div>
        </div>
    </div>
</x-layout>