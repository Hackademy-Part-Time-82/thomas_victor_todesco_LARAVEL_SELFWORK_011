<x-layout>
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center">
                <h1 class="h2 mb-4 text-center text-lg-start">Modifica i dati del tuo libro</h1>
            </div>
            <div class="col-lg-4"> {{-- contenitore anteprima libro --}}
                <div class="">
                    <div class="card text-center">
                        <x-book_image :$book />
                        <div class="card-body border-black border-top">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p class="card-text">Pagine: {{ $book->pages ?? 'N/D' }}</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-6"> {{-- contenitore from modifica libro --}}

                <div class="card card-lumen p-4 p-md-5">


                    <form action="{{ route('book.update', ['book' => $book]) }}" method="POST"
                        enctype="multipart/form-data">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @csrf
                        @method('PUT')
                        <div class="mb-3">

                            <label class="form-label" for="title">Titolo</label>
                            <input class="form-control @error('title') is-invalid @enderror" id="title"
                                type="text" placeholder="Titolo del libro" name="title"
                                value="{{ $book->title }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="year">Anno</label>
                            <input class="form-control" id="year" type="number"
                                placeholder="Anno di pubblicazione" name="year" value="{{ $book->year }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="pages">Pagine</label>
                            <input class="form-control" id="pages" type="number" placeholder="Numero di pagine"
                                name="pages" value="{{ $book->pages }}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="image">Copertina</label>
                            <input class="form-control" id="image" type="file" placeholder="Copertina del libro"
                                name="image" value="">
                        </div>
                        {{-- wrapper con bottoni --}}
                        <div class="d-flex flex-wrap justify-content-between gap-2">
                            <button class="btn btn-lumen" type="submit">Invia</button>
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                data-bs-target="#DeleteModal">Cancella libro</button> {{-- bottone che triggera modale --}}
                        </div>
                    </form>

                    {{-- modale con form cancellazione --}}
                    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Stai eliminando
                                        "{{ $book->title }}"</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    La modifica è <i>definitiva e non reversibile</i>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Chiudi</button>
                                    <button type="submit" class="btn btn-danger" form="delete-form">Elimina
                                        libro</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- form cancellazione libro --}}
                    <form action="{{ route('book.destroy', ['book' => $book]) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
