$(document).ready(function(){
    $(function () {
        $("#example1,#example2").DataTable({
            language:{
                "sProcessing":   "Đang xử lý...",
                "sLengthMenu":   "Xem _MENU_ mục",
                "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
                "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
                "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                "sInfoPostFix":  "",
                "sSearch":       "Tìm:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Đầu",
                    "sPrevious": "Trước",
                    "sNext":     "Tiếp",
                    "sLast":     "Cuối"
                }
            }

        });
    });
});

$(document).ready( function ( e ){
    $('input#name').keyup(function(event) {
        var title, slug;

        title = $(this).val();

        slug = title.toLowerCase();

        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        slug = slug.replace(/\[|\]|\{|\}|\\/gi, '');

        $('input#slug').val(slug);
    });
});


$(document).ready(function(){
    $('#chkAll').change(function(event){
        var checkAll = $('#chkAll:checked').length > 0;

        if (checkAll) {
            $('input[name="chkItem[]"]').prop('checked', true);
        }else{
            $('input[name="chkItem[]"]').prop('checked', false);
        }
    });
});

$(function() {
    $('body').on('click', '.btn-destroy', function(event) {
        var action = $(this).attr('data-href');
        $('#form-destroy').attr('action', action);
    });
    $('body').on('click', '.kv-error-close', function(event) {
        event.preventDefault();
    });
    $('#frm_product').on('submit', function() {
        price = parseInt($("input[name='price']").val());
        price_promotion = parseInt($("input[name='price_promotion']").val());
        if(price <= price_promotion ){
            alert('Giá khuyến mại phải nhỏ hơn giá bán !');
            return false;
        }
    });
    $('#form_post').on('submit', function() {
        img = $("input[name='image']").val();
        if(img == ''){
            alert('Bạn chưa chọn hình ảnh cho bài viết.');
            $(".image__thumbnail img").css({"border": "2px", "border-style": "solid", "border-color": "red"});
            return false;
        }
        var listArr = [];
        $("input[name='category[]']:checked").each(function() {
           listArr.push($(this).val());
        });
        if (listArr.length == 0) {
            $('.category-box').css({
                'border': '2px',
                'border-style': 'solid',
                'border-color' : 'red'
            });
            alert('Bạn chưa chọn danh mục bài viết.');
            var $container = $("html,body");
            var $scrollTo = $('.category-box');
            $container.animate({scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop() - 200, scrollLeft: 0},300);
            return false;
        }
    });

});
CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    config.toolbarGroups = [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
        {name: 'forms', groups: ['forms']},
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
        {name: 'links', groups: ['links']},
        {name: 'insert', groups: ['insert']},
        {name: 'styles', groups: ['styles']},
        {name: 'colors', groups: ['colors']},
        {name: 'tools', groups: ['tools']},
        {name: 'others', groups: ['others']},
        {name: 'about', groups: ['about']}
    ];
    config.removeButtons = 'Styles,Font,Save,NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Replace,Find,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,Blockquote,Language,BidiRtl,BidiLtr,Anchor,Flash,Smiley,About';
};
$(function () {
    var ckeditor = $('textarea.content');
    if (ckeditor.length) {
        ckeditor.each(function () {
            var editor = CKEDITOR.replace($(this).attr('name'));
            CKFinder.setupCKEditor(editor);
        });
    }
    window.init = function() {
        var imgDefer = document.querySelectorAll('img.lazy');
        for (var i=0; i<imgDefer.length; i++) {
            var url = imgDefer[i].getAttribute('data-src');
            if(url) {
                imgDefer[i].setAttribute('src',url);
                imgDefer[i].setAttribute('srcset',url );
            }
        }
    }
    window.onload = init;
});
$(function () {
    var ckeditor = $('textarea.sort_desc');
    if (ckeditor.length) {
        ckeditor.each(function () {
            var editor = CKEDITOR.replace($(this).attr('name'));
            CKFinder.setupCKEditor(editor);
        });
    }
    window.init = function() {
        var imgDefer = document.querySelectorAll('img.lazy');
        for (var i=0; i<imgDefer.length; i++) {
            var url = imgDefer[i].getAttribute('data-src');
            if(url) {
                imgDefer[i].setAttribute('src',url);
                imgDefer[i].setAttribute('srcset',url );
            }
        }
    }
    window.onload = init;
});
$(function () {
    var ckeditor = $('textarea.desc');
    if (ckeditor.length) {
        ckeditor.each(function () {
            var editor = CKEDITOR.replace($(this).attr('name'));
            CKFinder.setupCKEditor(editor);
        });
    }
    window.init = function() {
        var imgDefer = document.querySelectorAll('img.lazy');
        for (var i=0; i<imgDefer.length; i++) {
            var url = imgDefer[i].getAttribute('data-src');
            if(url) {
                imgDefer[i].setAttribute('src',url);
                imgDefer[i].setAttribute('srcset',url );
            }
        }
    }
    window.onload = init;
});
$(function () {
    var ckeditor = $('textarea.info');
    if (ckeditor.length) {
        ckeditor.each(function () {
            var editor = CKEDITOR.replace($(this).attr('name'));
            CKFinder.setupCKEditor(editor);
        });
    }
    window.init = function() {
        var imgDefer = document.querySelectorAll('img.lazy');
        for (var i=0; i<imgDefer.length; i++) {
            var url = imgDefer[i].getAttribute('data-src');
            if(url) {
                imgDefer[i].setAttribute('src',url);
                imgDefer[i].setAttribute('srcset',url );
            }
        }
    }
    window.onload = init;
});
$(function () {
    var ckeditor = $('textarea.review');
    if (ckeditor.length) {
        ckeditor.each(function () {
            var editor = CKEDITOR.replace($(this).attr('name'));
            CKFinder.setupCKEditor(editor);
        });
    }
    window.init = function() {
        var imgDefer = document.querySelectorAll('img.lazy');
        for (var i=0; i<imgDefer.length; i++) {
            var url = imgDefer[i].getAttribute('data-src');
            if(url) {
                imgDefer[i].setAttribute('src',url);
                imgDefer[i].setAttribute('srcset',url );
            }
        }
    }
    window.onload = init;
});
function fileSelect(el) {
    CKFinder.modal({
        chooseFiles: true,
        width: 1200,
        height: 600,
        language: 'vi',
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var parent = $(el).closest('.image');
                var img = parent.find('img').first();
                var input = parent.find('input').first();
                var file = evt.data.files.first();
                var url = file.getUrl();
                img.attr('src', url);
                input.val(url);
            });
            finder.on('file:choose:resizedImage', function (evt) {
                var parent = $(el).closest('.image');
                var img = parent.find('img').first();
                var input = parent.find('input').first();
                var url = evt.data.resizedUrl;
                img.attr('src', url);
                var result = url.substr(url);
                input.val(result);
            });
        }
    });
}
function urlFileDelete(el) {
    var parent = $(el).closest('.image');
    var img = parent.find('img').first();
    var input = parent.find('input').first();

    img.attr('src', img.data('init'));
    input.val('');
}
function fileMultiSelect(el) {
    CKFinder.modal({
        chooseFiles: true,
        width: 1000,
        height: 500,
        language: 'vi',
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var parent = $(el).closest('.image');
                var gallery = parent.find('.image__gallery');
                var files = evt.data.files;
                files.forEach(function (file) {
                    var url = file.getUrl();
                    var result = '<div class="image__thumbnail image__thumbnail--style-1">' +
                        '<img src="' + url + '" >' +
                        '<a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)"><i class="fa fa-times"></i></a>' +
                        '<input type="hidden" name="gallery[]" value="' + url + '">' +
                        '</div>';
                    gallery.append(result)
                })
            });
            finder.on('file:choose:resizedImage', function (evt) {
                var parent = $(el).closest('.image');
                var gallery = parent.find('.image__gallery');
                var url = evt.data.resizedUrl;
                var result = '<div class="image__thumbnail image__thumbnail--style-1">' +
                    '<img src="' + url + '" >' +
                    '<a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)"><i class="fa fa-times"></i></a>' +
                    '<input type="hidden" name="gallery[]" value="' + url    + '">' +
                    '</div>';
                gallery.append(result)
            });
        }
    });
}

function fileMultiSelectCustom(el, name = 'gallery' ) {
    CKFinder.modal({
        chooseFiles: true,
        width: 1000,
        height: 500,
        language: 'vi',
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var parent = $(el).closest('.image');
                var gallery = parent.find('.image__gallery');
                var files = evt.data.files;
                files.forEach(function (file) {
                    var url = file.getUrl();
                    var result = '<div class="image__thumbnail image__thumbnail--style-1">' +
                        '<img src="' + url + '" >' +
                        '<a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)"><i class="fa fa-times"></i></a>' +
                        '<input type="hidden" name="'+name+'[]" value="' + url + '">' +
                        '</div>';
                    gallery.append(result)
                })
            });
            finder.on('file:choose:resizedImage', function (evt) {
                var parent = $(el).closest('.image');
                var gallery = parent.find('.image__gallery');
                var url = evt.data.resizedUrl;
                var result = '<div class="image__thumbnail image__thumbnail--style-1">' +
                    '<img src="' + url + '" >' +
                    '<a href="javascript:void(0)" class="image__delete" onclick="urlFileMultiDelete(this)"><i class="fa fa-times"></i></a>' +
                    '<input type="hidden" name="'+name+'[]" value="' + url    + '">' +
                    '</div>';
                gallery.append(result)
            });
        }
    });
}

function urlFileMultiDelete(el) {
    $(el).closest('.image__thumbnail').remove();
}
function repeater(event, el, url, indexClass, type, table = null) {
    /*event.preventDefault();
    var target = $(el).closest('.repeater').find('table tbody');
    var indexs = $(indexClass).closest('table').find(indexClass);
    var index = indexs.length;
    $.get(url, {index: index + 1, type: type}, function (data) {
        target.append(data)
    });*/

    event.preventDefault();
    var target = $(el).closest('.repeater').find('table tbody');
    if (table != null) {
        var indexs = $(table).find(indexClass);
    }else{
        var indexs = $(indexClass).closest('table').find(indexClass);
    }
    var index = indexs.length;
    $.get(url, {index: index + 1, type: type}, function (data) {
        target.append(data)
    });
}

jQuery(document).ready(function($) {
    $("#meta_title").keyup(function(){
        var countTitle =  this.value.length;
        $('#countTitle').text(countTitle+'/70');
        $(".google__title span").text(this.value);
    });
    $("#meta_description").keyup(function(){
        var countMeta = this.value.length;
        $('#countMeta').text(countMeta+'/320');
        $(".google__description").text(this.value);
    });
});
$(document).on('ready', function() {
    $('.multislt').select2({
        placeholder: "Chọn danh mục",
    });
});

var regExp = /[0-9\.\,]/;
$('.number').on('keydown keyup', function(e) {

    var value = String.fromCharCode(e.which) || e.key;
    // Only numbers, dots and commas
    if (!regExp.test(value)
        && e.which != 188 // ,
        && e.which != 190 // .
        && e.which != 8   // backspace
        && e.which != 46  // delete
        && (e.which < 37  // arrow keys
            || e.which > 40)) {
        e.preventDefault();
        return false;
    }
    if ( event.which >= 37 && event.which <= 40 ) return;
    this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});// khong cho nhap chu vao text box

$('body').on('keydown keyup', '.number', function(e) {
    var value = String.fromCharCode(e.which) || e.key;
    // Only numbers, dots and commas
    if (!regExp.test(value)
        && e.which != 188 // ,
        && e.which != 190 // .
        && e.which != 8   // backspace
        && e.which != 46  // delete
        && (e.which < 37  // arrow keys
            || e.which > 40)) {
        e.preventDefault();
        return false;
    }
    if (event.which >= 37 && event.which <= 40) return;
    this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});


jQuery(document).ready(function($) {
    $('#change_slug').click(function(event) {
        $('#change_slug').hide();
        $('#btn-ok').show();
        $('.cancel.button-link').show();
        changeInput();
    });

    $('.cancel.button-link').click(function(event) {
        $('#change_slug').show();
        $('#btn-ok').hide();
        $('.cancel.button-link').hide();
        cancelInput();
    });
});

function changeInput(){
    var content = $('#current-slug').val();
    var base = $('#baseUrl').val();
    var html = '<span class="default-slug">'+base+'/<span id="editable-post-name"><input type="text" id="new-post-slug" value="'+content+'"></span></span>';
    $('#sample-permalink').html(html);
}

function cancelInput(slug = null){

    var current_slug;
    if(slug == null){
       current_slug = $('#current-slug').val();
    }else{
        current_slug = slug;
    }
    var base = $('#baseUrl').val();
    var html = '<a class="permalink" target="_blank" href="'+base+'/'+current_slug+'"><span class="default-slug">'+base+'/<span id="editable-post-name">'+current_slug+'</span></span></a>';
    $('#sample-permalink').html(html);
}

