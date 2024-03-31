<?php $id  = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
	<td class="index">{{ $index }}</td>
	<td>
		<div class="form-group">
			<label for="">Giá bắt đầu</label>
			<input type="number" min="0" name="content[priceFromTo][list][{{ $id }}][from]" class="form-control" value="{{ @$value->from }}">
		</div>
		<div class="form-group">
			<label for="">Giá kết thúc</label>
			<input type="number" min="0" name="content[priceFromTo][list][{{ $id }}][to]" class="form-control" value="{{ @$value->to }}">
		</div>
	</td>
	<td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
