<script type="text/javascript">
jQuery.fn.extend({
    live: function (event, callback) {
       if (this.selector) {
            jQuery(document).on(event, this.selector, callback);
        }
    }
});
</script>



<script type="text/javascript">
             
             // Search  
             $(document).ready(function() {  
                 // Icon Click Focus
                 $('div.icon').click(function(){
                     $('input#nomeSearch').focus();
                 });
                 // Live Search
                 // On Search Submit and Get Results
                 function search() {
                     var query_value = $('input#nomeSearch').val();
                      $('b#search-string').text(query_value);
                     if(query_value !== ''){
                         $.ajax({
                             type: "POST",
                             url: "/cadastros/clientes/search/",
                             data: { query: query_value}, //this can be more complex if needed
                             cache: false,
                             success: function(data){
                                 //at each request - every written letter is request, firstly we delete old results, and fetch new ones.
                                 $('#fly01dt').empty();
                                 $.each(data.result, function(index, item) {
                                     //now you can access properties using dot notation
                                     //  console.log(data.result[index].first_name);
                                     // Here I am fetching users names from users table, and echoing ther profile url
                                       $('#fly01dt').append("<li><a href='" + data.result[index].id + "'>" + data.result[index].name + "</a></li>");
                                 });
                             }
                         });
                     }return false;    
                 }
                 $("input#nomeSearch").live("keyup", function(e) {
                     // Set Timeout
                     clearTimeout($.data(this, 'timer'));
                     // Set Search String
                     var search_string = $(this).val();
                     // Do Search
                     if (search_string == '') {
                         $("ul#fly01dt").fadeOut();
                         $('h4#fly01dt-text').fadeOut();
                     }else{
                         $("ul#fly01dt").fadeIn();
                         $('h4#fly01dt-text').fadeIn();
                         $(this).data('timer', setTimeout(search, 100));
                     };
                 });
             });
</script>