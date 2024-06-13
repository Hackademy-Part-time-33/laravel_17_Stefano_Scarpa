<div class="container">
<table class="table border mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Immagine</th>
            <th scope="col">Titolo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)    
        <tr> 
            <th scope="row">{{$product->id}}</th>
            <td>
                <img class="card-img-top" style="width:3rem"
                    src="https://images.freeimages.com/images/large-previews/83c/barn-silo-detail-5-1210478.jpg"
                    alt="..." />
            </td>
            <td>{{$product->name}}</td>
            <td>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-primary me-md-2">Visualizza</a>
                    <a href="#" class="btn btn-warning me-md-2">Modifica</a>
                    <button type="button" class="btn btn-danger me-md-2">Elimina</button>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    {{ $products->links() }}
</div>