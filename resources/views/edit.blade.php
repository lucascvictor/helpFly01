@extends('layouts.default')

@section('title', 'Edit Product | Test WebDeveloper Leroy Merlin')

@section('content')

 <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Product <small>  </small> 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard">Edit</i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/update')}}/{{ $product[0]->id }}">

                            {{ csrf_field() }}
                                <fieldset>

                                
                                <legend>Product Data {{ $product[0]->lm }}</legend>
                                
                                <!-- Campo Nome -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="name">Name:</label>  
                                      <div class="col-md-4">
                                      <input id="name" name="name" type="text" placeholder="Nome" class="form-control input-md" required="" value="{{ $product[0]->name }}">
                                      </div>
                                    </div>
                                <!-- Campo Preço -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="price">Price:</label>  
                                      <div class="col-md-4">
                                      <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" required="" onkeyup="somenteNumeros(this);" value="{{ $product[0]->price }}">
                                      </div>
                                    </div>

                                <!-- Campo Descrição -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="price">Description:</label>  
                                      <div class="col-md-6">
                                      <textarea id="description" name="description" placeholder="Descrição" class="form-control" required="">{{ $product[0]->description }}</textarea>
                                      </div>
                                    </div>
                                <!-- Frete Grátis -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="free_shipping">Free Shipping</label>
                                      <div class="col-md-4">
                                        <select id="free_shipping" name="free_shipping" class="form-control">
                                          <option value="1"
                                          <?php 
                                          if($product[0]->free_shipping == 1)
                                          { echo ("selected"); }
                                          ?>>Yes</option>

                                          <option value="0"
                                          <?php 
                                          if($product[0]->free_shipping == 0)
                                          { echo ("selected"); }
                                          ?>>No</option>
                                        </select>
                                      </div>
                                    </div>

                                <!-- Categorias -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="category">Categories</label>
                                      <div class="col-md-4">
                                        <select id="category" name="category" class="form-control">
                                        @foreach($categories as $category)
                                          <option value="{{ $category->id }}"
                                          <?php if($product[0]->category == $category->id)
                                          {
                                            echo ("selected");
                                                    
                                          } ?>
                                          >{{ $category->name }}</option>
                                         @endforeach
                                        </select>
                                      </div>
                                    </div>

                        <!-- Botão submit-->
                        <div class="form-group">
                            <div class="col-md-4">
                                <button name="save" id="save" type="submit" class="btn btn-info">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extrascript')

<!--validar o campo somente numeros -->
<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
 </script>

@endsection