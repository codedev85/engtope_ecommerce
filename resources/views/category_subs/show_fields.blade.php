<!-- Id Field -->
<div class="form-group">
    {{-- {!! Form::label('id', 'Id:') !!} --}}
    <h3>{!! $categorySub->category['name'] !!}<small>( {!! $categorySub->name !!}) </small></h3>
</div>

<!-- Name Field -->
{{-- <div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $categorySub->name !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{!! $categorySub->category_id !!}</p>
</div> --}}

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $categorySub->created_at->format('D,m,Y') !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $categorySub->updated_at->format('D,m,Y') !!}</p>
</div>

