$(document).ready(function () {
    $('#logout').on('click', function () {
        $('#logout-form').submit();
    });

    $('#searchMember').keyup(function(){
        $.get('search/member', { name: $('#searchMember').val() }, function (data) {
            $('#content').html(data);
        });
    });

    $('#submit').keyup(function(){
        $.get('search/member', { name: $('#searchMember').val() }, function (data) {
            $('#content').html(data);
        });
    });
});
