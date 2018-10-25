<form action="javascript:;" method="post" id="form_ajax">
    {{ csrf_field() }}
    <table class="table table-striped">

        <tr>
            <td class="td_left">区域：</td>
            <td>
                <select name="data[area]" id="" class="form-control input-sm">
                    @foreach($area as $a)
                    <option value="{{ $a->name }}" @if($a->name == $info->area) selected="selected"@endif>{{ $a->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td class="td_left">地址：</td>
            <td>
                <input type="text" name="data[address]" value="{{ $info->address }}" class="form-control input-sm">
                <p class="input-info"><span class="color_red">*</span>不超过255字符</p>
            </td>
        </tr>

        <tr>
            <td class="td_left">电话：</td>
            <td>
                <input type="text" name="data[phone]" value="{{ $info->phone }}" class="form-control input-sm">
                <p class="input-info"><span class="color_red">*</span>不超过255字符</p>
            </td>
        </tr>
    
        <tr>
            <td class="td_left">排序：</td>
            <td>
                <input type="text" name="data[sort]" value="{{ $info->sort }}" class="form-control input-xs">
                <p class="input-info"><span class="color_red">*</span>越大越靠前</p>
            </td>
        </tr>
        
        <tr>
            <td class="td_left">状态：</td>
            <td>
                <label class="radio-inline"><input type="radio" name="data[status]"@if($info->status == '1') checked="checked" @endif class="input-radio" value="1">
                    正常</label>
                <label class="radio-inline"><input type="radio" name="data[status]"@if($info->status == '0') checked="checked" @endif class="input-radio" value="0">关闭</label>
            </td>
        </tr>
        
    </table>


    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <div onclick='ajax_submit_form("form_ajax","{{ url('/console/extract/edit',['id'=>$info->id]) }}")' name="dosubmit" class="btn btn-info">提交</div>
    </div>
    
</form>