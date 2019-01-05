$(document).ready(function() {
    function testearray(){
        var tx1 = $("#edit1").val();
        var tx2 = $("#edit2").val();

        $.ajax({
          url:'array.php',
          type: 'POST',
          data:{edit1:tx1, edit2:tx2},
          success:function(data)
          {
            var string = data;
            var array = string.split("%");

            $("#resultado1").html(array[1]);
            $("#resultado2").html(array[0]);
          }
        })
    }

    $("#bt1").on("click",function(){
        testearray();
    });
});