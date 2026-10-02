<x-layout title="Home — Biblioteca Lumen">
    <section class="hero-lumen py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <p class="text-uppercase small mb-2" style="letter-spacing: 0.18em; color: #d4b483;">
                        Lettura, memoria, comunità
                    </p>
                    <h1 class="display-4 fw-semibold mb-3">Biblioteca Lumen</h1>
                    <p class="lead mb-4">
                        Un catalogo aperto dove ogni volume trova luce: esplora i titoli in archivio
                        oppure registra un nuovo libro nella collezione.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-lumen btn-lg px-4" href="{{ route('index') }}">Vedi il catalogo</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('create') }}">
                            Aggiungi un titolo
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
{{--                     <div class="card card-lumen p-4">
                        <h2 class="h5 mb-3">Oggi in sala</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Sala lettura</span>
                                <span class="text-secondary">Aperta</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span>Consultazione</span>
                                <span class="text-secondary">Su prenotazione</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span>Nuove acquisizioni</span>
                                <span class="text-secondary">Aggiornate ogni lunedì</span>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <article class="card card-lumen h-100 p-4">
                    <div class="icon-circle mb-3">01</div>
                    <h2 class="h5">Catalogo</h2>
                    <p class="mb-0 text-secondary">
                        Sfoglia i libri già registrati con titolo, anno di pubblicazione e numero di pagine.
                    </p>
                </article>
            </div>
            <div class="col-md-4">
                <article class="card card-lumen h-100 p-4">
                    <div class="icon-circle mb-3">02</div>
                    <h2 class="h5">Registrazione</h2>
                    <p class="mb-0 text-secondary">
                        Inserisci un nuovo volume nel database: i dati restano salvati per le consultazioni successive.
                    </p>
                </article>
            </div>
            <div class="col-md-4">
                <article class="card card-lumen h-100 p-4">
                    <div class="icon-circle mb-3">03</div>
                    <h2 class="h5">Spazio di studio</h2>
                    <p class="mb-0 text-secondary">
                        Un luogo fittizio pensato per imparare Laravel: routing, viste Blade e un po’ di Bootstrap.
                    </p>
                </article>
            </div>
        </div>
    </section>
</x-layout>
