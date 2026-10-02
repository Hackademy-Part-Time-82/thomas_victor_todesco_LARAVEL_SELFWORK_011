<x-layout>

    <section class="container-lg mt-5">

        <div class="row">

            {{-- riquadro con titolo --}}
            <div class="col-lg-12 mb-5">
                <h3 class="text-center">{{ $book->title }}</h3>
            </div>

            {{-- scheda del libro LEFT --}}
            <div class="col-lg-4 border-end border-black">
                <div class="card p-3" //style="width:18rem;">
                            <x-book_image :$book />

                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $book->title }}.</h5>
                    </div>
                </div>




            </div>

            {{-- scheda tecnica RIGHT --}}
            <div class="col-lg-8 d-flex flex-column">
                <h3 class="text-center">Dettagli</h3>

                <div class="flex-grow-1 d-flex justify-content-center align-items-center">
                    <ul>
                        <li> <h5>Pagine: {{$book->pages }}</h5> </li>
                        <li> <h5>Anno di publicazione: {{$book->year }}</h5> </li>
                    </ul>
                </div>

                <div class="col-lg-12 text-center">
                    @auth
                    @if (auth()->user()->id == $book->user_id)
                    {{ Auth::user()->name }}, se necessario puoi apportare modifiche il tuo libro!
                    <div class="d-lg-flex justify-content-center mt-3 ">
                        <a href="{{ route('books.edit', ['book'=>$book]) }}" class="btn btn-primary col-lg-2">Modifica libro</a>
                    </div>
                    @endif
                    @endauth
                </div>

            </div>

        </div>

    </section>
</x-layout>
