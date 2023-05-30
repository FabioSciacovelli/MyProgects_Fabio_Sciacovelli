<x-layout>
    <div class="bgLavoraconnoi">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">


                    @if(session('message'))
                        <div class="alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    @endif

                    <div class="container my-5" >
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="titletable text-center">Articoli da revisionare</h2>
                                <x-articles-table :articles="$unrevisionedArticles" />
                            </div>
                        </div>
                    </div>

                    <div class="container my-5" >
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="titletable text-center">Articoli pubblicati</h2>
                                <x-articles-table :articles="$acceptedArticles" />
                            </div>
                        </div>
                    </div>

                    <div class="container my-5" >
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="titletable text-center">Articoli respinti</h2>
                                <x-articles-table :articles="$rejectedArticles" />
                            </div>
                        </div>
                    </div>

</x-layout>