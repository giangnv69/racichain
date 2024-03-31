<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index">{{ $index }}</td>
	<td>
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" name="content[list][{{ $id }}][title]" class="form-control" value="{{ @$value->title }}">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content[list][{{ $id }}][content]" id="content{{ $id }}">{!! @$value->content !!}</textarea>
        </div>
    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>

<script>
    var editor = CKEDITOR.replace( 'content{{ $id }}');
    CKFinder.setupCKEditor(editor);
</script>