@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')


<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large orange" style="width: 100px; height: 100px;">
      Acesse o helpFly
    </a>
    <ul>
      <li><a class="btn-floating red" style="margin: 9px;"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1" style="margin: 9px;"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green" style="margin: 9px;"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue" style="margin: 9px;"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>



@endsection


@section('extrascript')

<script type="text/javascript">

  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();

</script>

@endsection