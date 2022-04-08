

 <option value="">لطفا وضعیت نمایش هوایز راانتخاب نمایید   </option>
 <option value="private_off" {{(old('private', $order->private)  == 'private_off' ? 'selected' : '')}} > قابل مشاهده </option>
 <option value="private_on" {{(old('private', $order->private)  == 'private_on' ? 'selected' : '')}} > غیرقابل مشاهده </option>
 