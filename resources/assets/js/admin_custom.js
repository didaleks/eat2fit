require('./jquery.multi-select');
require('./jquery.quicksearch');

var select = $('form #dishes-select');
var hidden_input = $('form .dishes-select-ids');
processDishesSelect(select, hidden_input);

function processDishesSelect(select, hidden_input) {
    var select_data = select.data('ids');
    select.multiSelect({
        keepOrder: true,
        selectableHeader: "<p class='font-weight-bold'>Список всех блюд</p><input type='text' class='search-input form-control mb-2' autocomplete='off' placeholder='Введите название'>",
        selectionHeader: "<p class='font-weight-bold'>Меню приёма пищи</p><input type='text' class='search-input form-control mb-2' autocomplete='off' placeholder='Введите название'>",
        afterInit: function(ms){
            var that = this,
                $selectableSearch = that.$selectableUl.prev(),
                $selectionSearch = that.$selectionUl.prev(),
                selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                .on('keydown', function(e){
                    if (e.which === 40){
                        that.$selectableUl.focus();
                        return false;
                    }
                });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                .on('keydown', function(e){
                    if (e.which == 40){
                        that.$selectionUl.focus();
                        return false;
                    }
                });
            select_data = hidden_input.val().split(',');
        },
        afterSelect: function(){
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function(){
            this.qs1.cache();
            this.qs2.cache();
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
