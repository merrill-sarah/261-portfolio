$(document).ready(function(){
    
    $('#content').load('cats/index.php');
    
    $('ul#nav li a').click(function(){
        var page = $(this).attr('href');
        $('#content').load('cats/'+ page +'.php');
        return false;
    });
    
});

