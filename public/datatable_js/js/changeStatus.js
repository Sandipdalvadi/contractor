function changeStatus(objs,urls){
    jQuery.ajax({
          type: "get",
          url: urls,
          data: {'status':objs.value},
          success: function(resultData){

          }
    });
}