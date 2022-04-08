


 

                                            @foreach ($subcategorybrands as $subcategorybrand  )
                                           <option value="{{$subcategorybrand->id}}"
                                                {{(old('subcategorybrand_id')  == $subcategorybrand->id ? 'selected' : '')}}   >{{$subcategorybrand->name}}</option>
                                           @endforeach

