require('./jquery.multi-select');

var select = $('form #dishes-select');
var hidden_input = $('form .dishes-select-ids');
processDishesSelect(select, hidden_input);

function processDishesSelect(select, hidden_input) {
    var select_data = select.data('ids');
    select.multiSelect({
        keepOrder: true,
        afterInit: function () {
            select_data = hidden_input.val().split(',');
        },
        afterSelect: function (values) {
            select_data.push(parseInt(values[0]));
            hidden_input.val(select_data);
        },
        afterDeselect: function (values) {
            select_data.splice($.inArray(values[0], select_data), 1); //удалить по переданному значению
            hidden_input.val(select_data); //обновить данные в инпуте
        }
    });
    $('form').submit(function () {
        hidden_input.val(select_data);
        return true;
    });
}
