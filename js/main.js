$(function() {
  $("form").submit(function(e) {
    var form = $(this);
      var id = form.attr('id');
      var url = "guardarjson.php";

      $.ajax({
             type: "POST",
             url: url,
             data: $("#"+id).serialize(),
             success: function(data)
             {
                 console.log(data);
             }
           });

      e.preventDefault();
  });
})
