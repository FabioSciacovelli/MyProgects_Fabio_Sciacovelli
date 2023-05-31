<x-layout>
    <div class="bgLavoraconnoi">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 mt-5">

                    <h1 class="otherstitle text-center">Dashboard Redattore</h1>

                    @if(session('message'))
                        <div class="alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    @endif

                    
                    <div class="container my-5" >
                        <div class="row justify-content-center">
                            <div class="col-12 ">
                                <h2 class="titletable text-center text-white">Articoli in fase di revisione</h2>
                                <x-writer-articles-table :articles="$unrevisionedArticles" />
                            </div>
                        </div>
                    </div>

                    <div class="container my-5" >
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="titletable text-center text-white">Articoli pubblicati</h2>
                                <x-writer-articles-table :articles="$acceptedArticles" />
                                
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="container my-5" >
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="titletable text-center text-white">Articoli respinti</h2>
                                <x-writer-articles-table :articles="$rejectedArticles" />  
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </div>



</x-layout>