<x-layout>

        <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <p class="text-uppercase small text-secondary mb-1 page-heading">Archivio</p>
                <h1 class="h2 mb-4 text-center text-lg-start">Registra i dati dell'autore</h1>

                <div class="card card-lumen p-4 p-md-5">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('authors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">

                            <label class="form-label" for="title">Nome</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name"
                                type="text" placeholder="Nome dell'autore" name="name"
                                value="{{ old('name') }}">
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
                                value="{{ old('surname') }}">
                            @error('surname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        <div class="d-flex flex-wrap justify-content-between gap-2">
                            <button class="btn btn-lumen" type="submit">Invia</button>
                            <button class="btn btn-outline-secondary" type="reset">Reset campi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




</x-layout>