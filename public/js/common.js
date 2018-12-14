webpackJsonp([2],{

/***/ 49:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(50);


/***/ }),

/***/ 50:
/***/ (function(module, exports, __webpack_require__) {

window._ = __webpack_require__(3);
window.$ = window.jQuery = __webpack_require__(2);

__webpack_require__(51);
__webpack_require__(52);
__webpack_require__(53);
__webpack_require__(54);

/***/ }),

/***/ 51:
/***/ (function(module, exports) {

$(document).on('keyup keypress', 'form', function (e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
        e.preventDefault();
        return false;
    }
});

$(document).on('submit', '.ajax-form', function (event) {
    event.preventDefault();

    var $form = $(this),
        $success = $form.data('success'),
        $error = $form.data('error'),
        $submitButton = $form.find('[type="submit"]'),
        formData = new FormData($(this)[0]);

    $form.find('.error').html('');
    $submitButton.attr('disabled', true);

    $.ajax({
        url: $form.attr('action'),
        type: 'post',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        success: function success(resp) {
            $submitButton.attr('disabled', false);
            $(document).trigger($success, [$form, resp]);
        },
        error: function error(resp) {
            $submitButton.attr('disabled', false);
            $(document).trigger($error, [$form, resp]);
        }
    });
}).on('form:success', function (event, $form, resp) {}).on('form:error', function (event, $form, resp) {
    $form.find('.error.main-error').html(resp.responseJSON.message);

    $.each(resp.responseJSON.errors, function (name, messages) {
        var nameItems = name.split('.');
        nameItems.forEach(function (value, number) {
            if (number) nameItems[number] = '[' + value + ']';
        });
        name = nameItems.join('');

        messages.forEach(function (value, number) {
            messages[number] = value.replace(/\.(\d+)\./g, ' ').replace('_', ' ');
        });

        $form.find('[name="' + name + '"]').next('.error').html(messages.join());
    });
});

/***/ }),

/***/ 52:
/***/ (function(module, exports) {

$(document).on('change', '.upload-image-file', function (event) {
    event.preventDefault();

    var $image = $(this),
        $id = $image.closest('.form-group').find('.upload-image-id'),
        $name = $image.closest('.form-group').find('.upload-image-name'),
        $preview = $image.closest('.form-group').find('.upload-image-preview'),
        formData = new FormData();

    formData.append('image', $image.prop('files')[0]);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

    $.ajax({
        url: '/admin/image/upload',
        type: 'post',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        dataType: 'json',
        success: function success(resp) {
            console.log(resp);
            $id.val(resp.id);
            $name.val(resp.alt);
            $preview.html('<img src="' + resp.url + '">');
        },
        error: function error(resp) {
            console.log(resp);
        }
    });
}).on('click', '.upload-image-button', function () {
    $(this).closest('.form-group').find('.upload-image-file').click();
});

/***/ }),

/***/ 53:
/***/ (function(module, exports) {

$(function () {
    if (!$('.multi').length) return;

    $('.multi .item').append('\n        <div class="multi-controls">\n            <div class="add"></div>        \n            <div class="delete"></div>        \n        </div>\n    ');

    $('.multi').each(function () {
        if ($(this).find('.item').length === 1) $(this).find('.delete').hide();
    });

    $(document).on('click', '.multi-controls .add', function () {
        var $container = $(this).closest('.multi'),
            $item = $(this).closest('.item'),
            template = $('<div>').append($container.find('.item:first').clone()).html(),
            index = new Date().getTime() / 1000 | 0;

        $template = $(template.replace(/\[(\d+)\]/g, '[' + index + ']'));
        $template.find('input, textarea').val('');
        $template.find('.upload-image-preview').html('');
        $item.after($template);
        $container.find('.delete').show();
    });

    $(document).on('click', '.multi-controls .delete', function () {
        var $container = $(this).closest('.multi'),
            $item = $(this).closest('.item'),
            count = $container.find('.item').length - 1;

        $item.remove();
        if (count <= 1) $container.find('.item .delete').hide();
    });
});

/***/ }),

/***/ 54:
/***/ (function(module, exports) {

function initEditor() {
    tinymce.init({
        selector: '.editor',
        plugins: "image, link, code",
        toolbar: "link image code",
        language: 'ru'
        // file_browser_callback : elFinderBrowser,
        // init_instance_callback: function (editor) {
        //     editor.on('blur', function (e) {
        //         editor.save();
        //         multiItemFill($('#' + editor.id).data('target'));
        //
        //         var matches;
        //         if (typeof app != 'undefined' && (matches = /block-(\d+)/ig.exec(editor.id))) {
        //             app.__vue__.$refs.contentBuilder.blocks[matches[1]].text = editor.getContent();
        //         }
        //     });
        // }
    });
}

function stopEditor() {
    tinymce.remove();
}

if (typeof tinymce !== 'undefined') initEditor();

/***/ })

},[49]);