$(function () {
    $(".autolink").each(function() {
         var rgx = new RegExp('((https?|ftp|file)://[-A-Z0-9+&@#/%?=~_|!:,.;]*[-A-Z0-9+&@#/%=~_|])','ig');
         $(this).html($(this).html().replace(rgx,"<a href='$1'>$1</a>")); 
    });
});