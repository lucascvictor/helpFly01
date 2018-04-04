<script type="text/javascript">
 
    $('#nomeSearch').on('keyup',function(){
    
        $value=$(this).val();
        
        $.ajax({
        
        type : 'get',
        
        url : "{{ url('/cadastros/clientes/search') }}",
        
        customers:{'search':$value},
        
        success:function(customers){
        
         $('#fly01dt').html('lucas');
         
        
        }
        
        });
    })
 
</script>
 
<script type="text/javascript">
 
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>