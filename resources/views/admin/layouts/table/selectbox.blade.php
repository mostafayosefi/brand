
   <div class="form-group" >
    <label for="{{$index_id}}">{{$name_select}}</label>
        <select  class="js-example-basic-single w-100"   name="{{$index_id}}"   style="font-size: 18px;" {{$required}} >
        <option value="">لطفا {{$name_select}} مورد نظر را انتخاب نمایید</option>
        @foreach($allforeachs as $option)
        <option value="{{$option->id}}"  {{($option->id  == $value ? 'selected' : '')}}  >{{$option->$input_name}}</option>
        @endforeach
    </select>
    </div>
