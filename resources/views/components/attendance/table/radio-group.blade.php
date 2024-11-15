@props([
    'name',
])

<label class="flex cursor-pointer flex-row-reverse items-center gap-2">
	<input type="radio" name="{{ $name }}" value="1" class="peer form-radio checked:bg-blue-600" />
	<span class="font-semibold group-hover:text-blue-400 peer-checked:text-blue-600">Đi học</span>
</label>
<label class="flex cursor-pointer flex-row-reverse items-center gap-2">
	<input type="radio" name="{{ $name }}" value="0" class="peer form-radio checked:bg-red-600" />
	<span class="font-semibold group-hover:text-red-400 peer-checked:text-red-600">Nghỉ</span>
</label>
<label class="flex cursor-pointer flex-row-reverse items-center gap-2">
	<input type="radio" name="{{ $name }}" value="2" class="peer form-radio checked:bg-orange-600" />
	<span class="font-semibold group-hover:text-orange-400 peer-checked:text-orange-600">Muộn</span>
</label>
<label class="flex cursor-pointer flex-row-reverse items-center gap-2">
	<input type="radio" name="{{ $name }}" value="3" class="peer form-radio checked:bg-green-600" />
	<span class="font-semibold group-hover:text-green-400 peer-checked:text-green-600">Có phép</span>
</label>
