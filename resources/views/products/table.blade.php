<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Amount</th>
                <th>Sub Category</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
                <?php 

              
                // $product_img = json_decode($products->image);
               //  dd($product_img);
               
                ?>
        @foreach($products as $product)
            <tr>
            <td>  <a href="{!! route('products.show', [$product->id]) !!}" >
                {!!  $product->name !!}
                 </a>
           </td>
            <td>
                {{-- {!! $product->description !!} --}}
                <?php echo html_entity_decode(Ucfirst(str_limit($product->description , $limit = 50, $end = '...' )));?>
            </td>
            <td>
                <img class="img_radius" src="{{ url('storage/'.json_decode($product->image)[0])}}" width="50" height="50"/>
                {{-- {!! $product->image !!} --}}
            </td>
            <td>&#8358; {!! number_format($product->amount, 2 ,'.',',') !!}</td>
            <td>{!! $product->subcategory['name'] !!}</td>
           
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
