$('#ParentContainer').scroll(function() {
    $('#FixedDiv').css('top', $(this).scrollTop());
});