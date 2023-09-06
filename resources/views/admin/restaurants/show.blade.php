@section('contents')
    <div class="row">
        <div class="col-4 offset-4">
            <div class="card h-100" style="border: 1px solid black">
                <div class="card-body">
                    <h5 class="card-title">{{ $dish->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Descrizione: {{ $dish->description}}</li>
                </ul>

                <div class="card-body">
                    <p>{{ $dish->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection