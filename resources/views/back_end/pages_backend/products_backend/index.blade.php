@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')

<div class="content-body">
            <div class="container-fluid">

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            
                                <h4 class="card-title">View Products </h4>
                                <a href="{{ route('products.create') }}"><button  class="btn btn-primary">Add Product</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                               
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>Category</strong></th>
                                                <th><strong>Name</strong></th>
                                                <th><strong>Price</strong></th>
                                                <th><strong>Description</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                
                                                <td> {{ $product->id }}</td>
                                                <td>  {{ $product->category->name }}</td>
                                               
                                                <td> {{ $product->product_name }}	</td>
                                                <td> {{ $product->product_price }} </td>
                                                <td> {{ $product->product_description }} </td>
                                                <td>
													<div class="d-flex">
														<a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> 
                                                </div>
												</td>
                                            </tr>
                                            @endforeach

                                            <!-- end of table row -->
											
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
</div>

@endsection 