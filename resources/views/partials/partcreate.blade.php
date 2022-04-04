<section class="container">
    @include('layouts.flash')
    <form action="/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="text" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px">{{old('text')}}</textarea>
            <label for="floatingTextarea2">Text</label>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Note</label>
            <input type="number" name="note" value="{{ old('note') }}" class="form-control"
                id="formGroupExampleInput2">
        </div>
        <button type="submit" class="btn btn-outline-primary">Add Book</button>
    </form>
</section>
