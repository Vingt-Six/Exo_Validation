<section>
    @include('layouts.flash')
    <button type="button" class="btn btn-primary">
        Notes <span class="badge bg-secondary">{{$total}}</span>
    </button>
    @foreach ($books as $book)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $book->name }}</h5>
                <p class="card-text">{{ $book->text }}</p>
                <p>{{ $book->note }}</p>
                <form action="/delete/{{ $book->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger mt-2">Delete</button>
                </form>
                <a href="/edit/{{ $book->id }}" class="btn btn-outline-secondary mt-2">Edit</a>
            </div>
        </div>
    @endforeach
</section>
