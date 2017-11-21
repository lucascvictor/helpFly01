@extends('layouts.default')

@section('title', 'Products registered | Test WebDeveloper Leroy Merlin')

@section('content')

 <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Products  <small> registered </small> 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard">Product Editing</i> 
                            </li>
                        </ol>
                    </div>
                </div>
                @include('partials.message')
                 <div class="row">
                    
                    <div class="col-lg-10">
                   
                            <div class="panel-body">
                                <div class="list-group">
                                    @foreach($products as $product)
                                    <a href="#" class="list-group-item">
                                        <span class="badge">
                                        {{ $product->categorie }}
                                        </span>
                                        <h4>{{ $product->name }}</h4>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                    	<th width="20px">LM</th>
                                        <th width="20px">Price</th>
                                        <th width="200px">Description</th>
                                        <th width="20px">Free Shipping</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $product->lm }}</td>
                                    
                                        <td>R$ {{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>@if($product->free_shipping == 1) Yes 
                                        	@else No
                                        	@endif
                                       	</td>
                                    </tr>
                                    <tr>
                                    <td>
                                    <a href="{{ url('/edit')}}/{{ $product->lm}}" class="btn btn-primary">Edit</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button>

                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                                  <div class="modal-content">
                                        <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Delete Product!</h4>
                                                </div>
                                                    <div class="modal-body">
                                                      <p>Do you really want to delete the product? {{ $product->name }}?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="{{ url('/delete') }}/{{ $product->id }}" class="btn btn-danger btn-block">
                                                          Yes
                                                        </a>
                                              <button type="button" class="btn btn-info btn-block" data-dismiss="modal">No</button>
                                        </div>  
                                  </div>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                                    </a>
                                    @endforeach
                                    {{ $products->links() }} 
                                </div>
                           
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection