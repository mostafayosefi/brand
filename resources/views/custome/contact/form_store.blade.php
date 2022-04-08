

@include('index.layouts.elementor.txtdese', [ 'id' => '11' ])


<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">ثبت اکانت جدید</h6>

                <form class="forms-sample" method="POST" action="{{$routecreate}}" style="direction: ltr;"
                enctype="multipart/form-data" onsubmit="return Validate(this);">
                @csrf

<input type="hidden" name="user_id" value="{{$user_id}}" />
                @include('admin.layouts.errors')

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('firstname') ? 'red' : '' }}"  > <span class="red" >*</span> Firstname</label>
                            <input id="firstname" class="form-control" name="firstname" type="text"  value="{{old('firstname')}}"   required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('lastname') ? 'red' : '' }}"  > <span class="red" >*</span> Lastname</label>
                            <input id="lastname" class="form-control" name="lastname" type="text"  value="{{old('lastname')}}"   required="required">
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('nikname') ? 'red' : '' }}"  > <span class="red" >*</span>  NikName</label>
                            <input id="nikname" class="form-control" name="nikname" type="text"  value="{{old('nikname')}}"  required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('phone') ? 'red' : '' }}"  >  <span class="red" >*</span> Phone</label>
                            <input id="phone" class="form-control" name="phone" type="text"  value="{{old('phone')}}"  required="required">
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('email') ? 'red' : '' }}"  > <span class="red" >*</span> Email</label>
                            <input id="email" class="form-control" name="email" type="text"  value="{{old('email')}}"  required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('zip') ? 'red' : '' }}"  > <span class="red" >*</span> Zip Code/Postal</label>
                            <input id="zip" class="form-control" name="zip" type="text"  value="{{old('zip')}}"  required="required">
                        </div>
                    </div>




                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('state') ? 'red' : '' }}"  > <span class="red" >*</span> State/Province/Territory</label>
                            <input id="state" class="form-control" name="state" type="text"  value="{{old('state')}}"  required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('adress') ? 'red' : '' }}"  >  <span class="red" >*</span> Address</label>
                            <input id="adress" class="form-control" name="adress" type="text"  value="{{old('adress')}}"  required="required">
                        </div>
                    </div>




                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('country') ? 'red' : '' }}"  > <span class="red" >*</span> Country</label>
                            <select  name="country" id="form-field-name"
                            class="form-control"
                            placeholder="" required="required"
                            value="{{old('country')}}" aria-required="true" >
                            @foreach ($countries as $key => $value )
                            {{-- <option value="{{$value->ios2}}"  {{(old('country', $user->title_id) == $value->ios2 ? 'selected' : '')}}  > --}}
                                <option value="{{$value->iso2}}"  {{(old('country') == $value->iso2 ? 'selected' : '')}}  >
                                    {{$value->emoji}} {{$value->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('city') ? 'red' : '' }}"  >  <span class="red" >*</span> City</label>
                            <input id="city" class="form-control" name="city" type="text"  value="{{old('city')}}"  required="required">
                        </div>
                    </div>






                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('company') ? 'red' : '' }}"  > Company</label>
                            <input id="company" class="form-control" name="company"  value="{{old('company')}}"  type="text"   >
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('adres2') ? 'red' : '' }}"  >  Address 2</label>
                            <input id="adres2" class="form-control" name="adres2"  value="{{old('adres2')}}"  type="text"   >
                        </div>
                    </div>





                    <div class="form-group row">
                        <div class="col-md-6">
                            <label> .US Nexus Categories</label>
                            <select  name="nexus" id="form-field-name"
                            class="form-control"
                            placeholder=""
                            value="{{old('nexus')}}" aria-required="true" >
                            <option value="">Please select an item</option>
                            <option value="C11"  {{(old('nexus') == 'C11' ? 'selected' : '')}}  >US Citizen</option>
                            <option value="C12"  {{(old('nexus') == 'C12' ? 'selected' : '')}}  >US Permanent Resident</option>
                            <option value="C21"  {{(old('nexus') == 'C21' ? 'selected' : '')}}  >Incorporated or organized in US</option>
                            <option value="C31"  {{(old('nexus') == 'C31' ? 'selected' : '')}}  >Foreign entity doing business in US</option>
                            <option value="C32"  {{(old('nexus') == 'C32' ? 'selected' : '')}}  >Foreign entity with office in US</option>
                        </select>                        </div>
                        <div class="col-md-6">
                            <label> .US Application Purposes</label>

                            <select  name="purpose" id="form-field-name"
                            class="form-control"
                            placeholder=""
                            value="{{old('purpose')}}" aria-required="true" >
                            <option value="">Please select an item</option>
                            <option value="P1"  {{(old('purpose') == 'P1' ? 'selected' : '')}}  >Business for Profit</option>
                            <option value="P2"  {{(old('purpose') == 'P2' ? 'selected' : '')}}  >Non-Profit</option>
                            <option value="P3"  {{(old('purpose') == 'P3' ? 'selected' : '')}}  >Personal</option>
                            <option value="P4"  {{(old('purpose') == 'P4' ? 'selected' : '')}}  >Educational</option>
                            <option value="P5"  {{(old('purpose') == 'P5' ? 'selected' : '')}}  >Governmental</option>
                        </select>
                                            </div>
                    </div>








                    <div class="card-footer">
                        <a href="{{ route('user.contact.index') }}" class="btn btn-danger">بازگشت</a>
                        <button type="submit" class="btn btn-primary float-right">ثبت</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

