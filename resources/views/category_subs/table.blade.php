<div class="table-responsive">
    <table class="table" id="categorySubs-table">
        <thead>
            <tr>
                 {{-- <th>Categories</th> --}}
                <th>Categories</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorySubs as $categorySub)
            <tr>
                {{-- <td>
                    <a href="{!! route('categorySubs.show', [$categorySub->id]) !!}" class='btn btn-default btn-xs'> 
                    {!! $categorySub->category['name'] !!}
                   </a>
                </td> --}}
                <td>
                    
                        <a href="{!! route('categorySubs.show', [$categorySub->id]) !!}" class='btn btn-default btn-xs'>
                    {!! $categorySub->name !!}
                        </a>
                </td>
           
                <td>
                    {!! Form::open(['route' => ['categorySubs.destroy', $categorySub->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{!! route('categorySubs.show', [$categorySub->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                        <a href="{!! route('categorySubs.edit', [$categorySub->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
