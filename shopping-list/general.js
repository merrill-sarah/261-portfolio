$(document).ready(function(){
    
    $('.popup').load('empty.php');
    
    $('nav ul li a').click(function(){
        var page = $(this).attr('href');
        $('.popup').load(page + '.php');
        return false;
    });
    $('a.close').click(function(){
        $('.popup').load('empty.php');
        return false;
    });
    
});

function doSetItem() {
    var name = document.forms.editor.name.value;
    var data = document.forms.editor.data.value;
    localStorage.setItem(name, data);
    doShowAll();
    document.forms.editor.name.value= '';
    document.forms.editor.data.value= '';
}

function doRemoveItem() {
    var name = document.forms.editor.name.value;
    localStorage.removeItem(name);
    doShowAll();
    document.forms.editor.name.value='';
}

function doClear() {
    localStorage.clear();
    doShowAll();
}

function doShowAll() {
    var key = "";
    var pairs = "<tr><th>Name</th><th>Value</th></tr>\n";
    var i=0;
    for (i=0; i<=localStorage.length-1; i++) {
        key = localStorage.key(i);
        pairs += "<tr><td>"+key+"</td>\n<td>"+localStorage.getItem(key)+"</td></tr>\n";
    }
    if (pairs === "<tr><th>Name</th><th>Value</th></tr>\n") {
        pairs += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
    }
    document.getElementById('items_table').innerHTML = pairs;
}
