<x-layout>


    <section class="container-lg mt-5">

        <div class="row">

            {{-- riquadro con titolo in alto al centro --}}
            <div class="col-lg-12 mb-5">
                <h3 class="text-center">{{ $author->name }} {{ $author->surname }}</h3>
            </div>


            <div class="col-lg-4 border-end">
                <div class="d-flex">
                    <h3 class="col-lg-12 text-center">{{ $author->name }} {{ $author->surname }}</h3>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="card w-50 ">
                        <div class="card-body">

                            {{-- inserisci controllo per utente loggato che ha inserito autore --}}

                            <p class="card-text text-center">Autore inserito da {{ $author->user->name }}.
                            </p>
                            @auth
                                @if ($author->user_id == Auth::user()->id)
                                    <a href="{{ route('authors.edit', ['author' => $author]) }}"
                                        class="btn btn-outline-primary">Modifica i dati dell'autore</a>
                                @endif
                            @endauth

                        </div>
                    </div>
                </div>
            </div>


            {{-- scheda tecnica RIGHT --}}
            <div class="col-lg-8">

                {{-- wrapper titolo tabella --}}
                <div class="row">
                    <div class="col-lg-12 d-lg-flex justify-content-center">
                        <h3 class="">Libri scritti da {{ $author->name }} {{ $author->surname }}</h3>
                    </div>
                </div>

                {{-- eor tab wrapper --}}
                <div class="row justify-content-center">

                    <div class="col-lg-10 table-responsive mt-3 d-flex justify-content-center">

                        <table class="table">

                            {{-- riga elementi in grassetto --}}
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Titolo</th>
                                    <th scope="col">Pagine</th>
                                    <th scope="col">Dettagli</th>
                                </tr>
                            </thead>

                            {{-- corpo tabella --}}
                            @forelse ($author->books as $book)
                                <tbody>

                                    <tr>
                                        <th scope="row">{{ $book->id }}</th>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->pages }}</td>
                                        <td><a href="">Dettagli</a></td>
                                    </tr>
                                </tbody>
                            @empty
                                <div class="col-lg-8 alert alert-danger">
                                    Nessun libro disponibile per questo autore!
                                </div>
                            @endforelse
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </section>


</x-layout>

    
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