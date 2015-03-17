$(document).ready(function(){
    
    $('.popup').load('empty.php');
    
    $('nav ul li a').click(function(){
        var page = $(this).attr('href');
        $('.popup').load(page +'.php');
        return false;
    });
    
    $('.close').click(function() {
        $('.popup').load('empty.php');
        return false;
    });
});
