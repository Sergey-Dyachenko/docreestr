$(function(){

    $('#month').autocomplete(['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'], {
        width: 200,
        max: 3
    });

    $('#year').autocomplete('data.php?mode=xml', {
        width: 200,
        max: 5
    });

    $('#customer').autocomplete('data.php?mode=sql', {
        width: 200,
        max: 5
    });
    
     $('#doctype').autocomplete('data.php?mode=sql_doctype', {
        width: 200,
        max: 5
    });
    
     $('#num_reestr').autocomplete('data.php?mode=sql_reestr', {
        width: 200,
        max: 5
    });

});