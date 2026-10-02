<x-layout>

    <section class="container lg mt-5">

        <div class="row justify-content-between">


            <div class="col-lg-4 gap-1">

                <div class="d-flex justify-content-center"> {{-- div wrapper --}}

                    <div class="d-lg-inline-flex justify-content-center border border-dark rounded-4 px-4">
                        i miei dati
                    </div>

                </div>

                {{-- card user --}}
                <div class="col-lg-12 d-lg-flex justify-content-center mt-3 mb-3">
                    <div class="card p-2">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card’s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- 
            col-lg-auto -> classe bootstrap,la colonna si adatta al contenuto, ma resta comunque dentro la logica del grid (utile se è dentro una row).
            --}}

            <div class="col-lg-7">

                <div class="d-flex justify-content-center"> {{-- div wrapper --}}

                    <div class="d-lg-inline-flex justify-content-center border border-dark rounded-4 px-4">
                        i miei libri
                    </div>

                </div>

                {{-- card libro --}}
                <div class="col-lg-8 d-lg-flex justify-content-center mt-3 gap-2">
                    <div class="d-lg-flex">

                        <table class="table">
                            <thead>
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Titolo</th>
                                        <th scope="col" class="text-center">Anno</th>
                                        <th scope="col" class="text-center">Pagine</th>
                                        <th scope="col" class="text-center">Vai al dettaglio</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr id="riga-{{ $book->id }}" //onclick="showHide('riga-{{ $book->id }}')">
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="checkDefault">
                                                </label>
                                            </div>
                                        </th>
                                        <td class="text-center"> {{ $book->title }}</td>
                                        <td class="text-center">{{ $book->year }}</td>
                                        <td class="text-center">{{ $book->pages }}</td>
                                        <td>
                                            <a href="{{ route('show', ['book' => $book]) }}"
                                                class="p-2 ms-5 btn btn-outline-primary text-center">Dettagli</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>

    </section>



</x-layout>
