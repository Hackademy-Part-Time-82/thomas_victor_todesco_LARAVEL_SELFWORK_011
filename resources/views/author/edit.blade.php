<x-layout>


    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <p class="text-uppercase small text-secondary mb-1 page-heading">Archivio</p>
                <h1 class="h2 mb-4 text-center text-lg-start">Modifica i dati dell'autore</h1>

                <div class="card card-lumen p-4 p-md-5">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('authors.update', ['author' => $author]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label" for="title">Nome</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                type="text" placeholder="Nome dell'autore" name="name"
                                value="{{ $author->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label" for="surname">Cognome</label>
                            <input class="form-control @error('surname') is-invalid @enderror" id="surname"
                                type="text" placeholder="Cognome dell'autore" name="surname"
                                value="{{ $author->surname }}">
                            @error('surname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="d-flex flex-wrap justify-content-between gap-2">
                            <button class="btn btn-success" type="submit">Aggiorna</button>
                            <a class="btn btn-lumen" href="{{ route('authors.index') }}">Torna agli autori</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#AuthorDeleteModal">Elimina l'autore</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- modale per eliminazione autore --}}

        <div class="modal fade" id="AuthorDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Stai eliminando dall'archivio l'autore {{ $author->name }} {{ $author->surname }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        La modifica è <i>definitiva e non reversibile</i>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" form="AuthorDelete">Elimina</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- form eliminazione --}}
        <form action="{{ route('authors.destroy', ['author'=>$author]) }}" id="AuthorDelete" method="POST">
            @csrf
            @method('DELETE')
        </form>

    </section>





</x-layout>
