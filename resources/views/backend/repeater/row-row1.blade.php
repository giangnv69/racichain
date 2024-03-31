<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index">{{ $index }}</td>
	<td>
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" class="form-control" name="content[row1][list][{{$id}}][title]" value="{{ @$value->title }}">
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" min="1" max="5" class="form-control" name="content[row1][list][{{$id}}][link]" value="{{ @$value->link }}">
        </div>
    </td>
    <td style="text-align: center">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
