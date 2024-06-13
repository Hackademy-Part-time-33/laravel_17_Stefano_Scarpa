<x-layouts.main>

    <main>

        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

            <div class="container mt-5">
                <div class="align-middle gap-2 d-flex justify-content-between">
                    <h3>Elenco Articoli inseriti</h3>
                    @livewire('products.search')
                    
                    <button type="button"
                        class="btn btn btn-success me-md-2"
                        data-bs-toggle="modal"
                        data-bs-target="#formModalArticle">
                        Crea Nuovo Articolo
                    </button>
                </div>

                @livewire('products.table')
            </div>
        </div>

    </main>

</x-layouts.main>