<div class="row">
    <div class="col-md-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('diet.edit', ['id'=>$diet->id])}}">Рацион "{{$diet->name}}"</a></li>
                <li class="breadcrumb-item active" aria-current="page">День №{{$number}}</li>
            </ol>
        </nav>
        <input id="diet_id" type="input" class="form-control "
               name="diet_id"
               hidden
               value="{{$diet->id}}">

        <input id="number"
               hidden
               type="number" name="number"
               value="{{$number}}">
    </div>
</div>