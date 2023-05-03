$(document).ready(function () {
    $("input#autocomplete").autocomplete({
        source: ["c++", "java", "php", "coldfusion", "javascript", "asp", "ruby"]
    });
		    $("input#extname").autocomplete({
        source: ["zip", "rar", "swf", "mp4", "mov", "pdf", "doc" , "mpeg" , "wma", "avi" , "rm" ,"ram" , "movie" , "divx" ,"mpg" ,"bmb" ,"jpg" ,"gif" ,"jpeg" ,"png"]
    });
});