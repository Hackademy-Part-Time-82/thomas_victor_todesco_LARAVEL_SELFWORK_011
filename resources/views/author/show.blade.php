<x-layout>

    <section class="container-lg mt-5">

        <div class="row">

            {{-- riquadro con titolo --}}
            <div class="col-lg-12 mb-5">
                <h3 class="text-center">{{ $author->name }} {{ $author->surname }}</h3>
            </div>


            <div class="col-lg-4">
                <div>
                    <h3>{{ $author->name }} {{ $author->surname }}</h3>
                </div>

                <div>
                    <div class="card w-50">
                        <div class="card-body">

                                {{-- inserisci controllo per utente loggato che ha inserito autore --}}                                    

                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="{{ route('authors.edit', ['author'=>$author]) }}" class="btn btn-primary">Modifica i dati dell'autore</a>
                        </div>
                    </div>
                </div>
            </div>


            {{-- scheda tecnica RIGHT --}}
            <div class="col-lg-8"> {{-- d-flex flex-column text-center --}}
                <h3 class="text-center">Libri scritti da {{ $author->name }} {{ $author->surname }}</h3>

                <div class="col-lg-10 table-responsive mt-3 d-flex justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>@social</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>







            {{--                 <div class="col-lg-12 text-center">
                    @auth
                        @if (auth()->user()->id == $book->user_id)
                        {{ Auth::user()->name }}, se necessario puoi apportare modifiche il tuo libro!
                            <div class="d-lg-flex justify-content-center mt-3 ">
                                <a href="{{ route('books.edit', ['book' => $book]) }}"
                                    class="btn btn-primary col-lg-2">Modifica libro</a>
                            </div>
                        @endif
                        @endauth
                </div> --}}

        </div>
    </section>


</x-layout>
