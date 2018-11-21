var search = $('#search'); 
var autocomplete = $('#auto-complete');
var listLength;


search.keyup(function (e){
    var queryStr = this.value;
    var queryStrLength = queryStr.length;

    if(queryStrLength > 0) {
        $.post(
            'search.php',
            {
                queryStr: queryStr
            },
            function(data) {             
                autocomplete.html(data);
            }
        )
    } else if (queryStrLength === 0) {
        autocomplete.html('');
    } 
});