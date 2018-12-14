webpackJsonp([4],{

/***/ 55:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(56);


/***/ }),

/***/ 56:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(4);

$(function () {
    var controller = _.take(location.pathname.split('/'), 3).join('/');
    $('.sidebar [href*="' + controller + '"]').addClass('active');

    $('[data-toggle="tooltip"]').tooltip();

    $('[href="#modal-lg"]').click(function () {
        $('#modal-lg .modal-content').load($(this).data('from'));
    });

    var resource = location.pathname.split('/')[2];
    if ($('.nestable').length) $('.nestable').nestable({
        callback: function callback(el) {
            $.post('/admin/nestable/save', {
                _token: $('meta[name="csrf-token"]').attr('content'),
                resource: resource,
                data: el.nestable('serialize')
            });
        }
    });
});

/***/ })

},[55]);