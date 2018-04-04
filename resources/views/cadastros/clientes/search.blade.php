<script type="text/javascript">
 
    $('#nomeSearch').on('keyup',function(){
    
        $value=$(this).val();
        
        $.ajax({
        
        type : 'get',
        
        url : "{{ url('/cadastros/clientes/search') }}",
        
        data:{'search':$value},
        
        success:function(data){
        
         $('tbody').html(data);
        
        }
        
        });
    })
 
</script>
 
<script type="text/javascript">
 
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>