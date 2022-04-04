<section class="container">
    @include('layouts.flash')
    <form action="/update/{{$edit -> id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" name="name" value="{{old('name') == '' ? $edit->name : old('name')}}" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Text</label>
            <input type="text" name="text" value="{{old('text') == '' ? $edit->text : old('text')}}" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Note</label>
            <input type="number" name="note" value="{{old('note') == '' ? $edit->note : old('note')}}" class="form-control" id="formGroupExampleInput2">
        </div>
        <button type="submit" class="btn btn-outline-primary">Edit</button>
    </form>
</section>
