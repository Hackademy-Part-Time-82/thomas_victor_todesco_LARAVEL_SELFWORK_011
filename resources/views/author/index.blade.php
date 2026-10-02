<x-layout>
        <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <p class="text-uppercase small text-secondary mb-1 page-heading">Collezione</p>
                <h1 class="h2 mb-4">Registro degli autori</h1>

                <div class="container-lg card card-lumen">

                    <div class="row justify-content-center">
                        <div class="col-lg-9 mt-5">
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Nome</th>
                                        <th scope="col" class="text-center">Cognome</th>
                                        <th scope="col" class="text-center">Dettagli</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($authors as $author)
                                        <tr id="riga-{{ $author->id }}">
                                            {{--                                             <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="checkDefault">
                                                    </label>
                                                </div>
                                            </th> --}}
                                            <td class="text-center"> {{ $author->name }}</td>
                                            <td class="text-center">{{ $author->surname }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center">

                                                    <a href="#"
                                                        class="p-2 mx-auto btn btn-outline-primary text-center rounded-pill">Dettagli</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
















                    {{-- 


                        @foreach ($books as $book)
                            <div class="card col-lg-3 p-1 text-center">
                                <img src="{{ $book->image ? Storage::url($book->image) : '\storage\covers\generic_cover.jpg' }}"
                                    class="card-img-top img-fluid" alt="..." width="560" height="350">
                                <div class="card-body border-black border-top">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                    <p class="card-text">Pagine: {{ $book->pages ?? 'N/D' }}</p>
                                    <a href="{{ route('show', ['book' => $book]) }}" class="btn btn-primary">Vai al
                                        dettaglio</a>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}
                </div>

                <div class="mt-4">
                    <a class="btn btn-lumen" href="{{ route('authors.create') }}">Registra un autore</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>