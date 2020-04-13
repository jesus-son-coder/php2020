
$(document).ready(function(){
     


});

function listbox_selectall(listID, isSelect) {
    var listbox = document.getElementById(listId);

    for(var count=0; count < listbox.options.length; count++) {
        listbox.options[count].selected = isSelect;
    }
}