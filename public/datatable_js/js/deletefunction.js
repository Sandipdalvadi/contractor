
 function deleteRecord(urls){
    if(confirm("Are you sure you want to delete this?")){ 
        $.ajax({
            type : 'POST',
            // dataType : 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url :urls, 
            data : {id:id},
            success:function(responce)
            {
                // for(var i=0; i<id.length; i++)
                // {
                    // $('#'+id[i]+'').closest('tr').remove();
                    // $('tr#'+id[i]+'').css('background-color', '#ccc');
                    // $('tr#'+id[i]+'').fadeOut('slow');
                    $('#'+id+'').closest('tr').remove();
                    $('tr#'+id+'').css('background-color', '#ccc');
                    $('tr#'+id+'').fadeOut('slow');
                // }
            }, 
            error: function (e) {
                alert('error'); 
                e.preventDefault();
            } 
            }); 
    } 
    else {
        return false;
    }
}