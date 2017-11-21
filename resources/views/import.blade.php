@extends('layouts.default')

@section('title', 'IMPORT | Test WebDeveloper Leroy Merlin')

@section('content')

 <div id="wrapper">

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Import 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard">Products Import</i> 
                            </li>
                        </ol>
                    </div>
                </div>


  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/import')}}">
		{{ csrf_field() }}
		
		<fieldset>

				
				<legend>Upload the file please</legend>
				<!-- Aviso sobre o tipo de arquivo -->
					<div class="form-group">
						<div class="col-md-4"></div>
						  <div class="col-md-4 alert alert-info alert-dismissable" role="alert">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  	<strong>Please.</strong> Upload the file below with .xlsx extension.
						  </div>
					 </div>

					 </fieldset>

					 <!-- File Button --> 
					<div class="form-group" id="message">
					  <label class="col-md-4 control-label" for="file">File: </label>
					  <div class="col-md-4">
					    <input id="file" name="file" class="input-file" type="file"> 
					  </div>
					</div>
					<!-- Send Button -->
					<div class="form-group"> 
					<label class="col-md-4 control-label" for="send">
					</label>
						<div class="col-md-4">
							<button type="submit" name="send" id="send" class="btn btn-primary"> Import </button>
						</div>
					</div>
			</form>


    		</div>
    	</div>
    </div>


@endsection

@section('extrascript')

<script type="text/javascript">
	var i = 0;
	$('#file').on('change',function () {
            var file = $(this).val();
            var format = '';
            var limit = file.length - 4;
            while(limit < file.length)
            {
            	format = format + file[limit];
            	limit++;
            }
      		
      		if(format != 'xlsx'){
  
      			if(i < 1){
      			$("#message").append('<div id="filemessage" class=" alert alert-danger" role="alert"><strong>Caution:</strong> This file is not of type xlsx </div>');
      			i++;
      		}
      			$("#file").val('');
      		}else{
      			document.getElementById("filemessage").remove();
      		}
      		
        });
</script>
@endsection