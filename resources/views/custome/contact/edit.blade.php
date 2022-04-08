  @component('custome.layouts.content', [
      'title' => 'ویرایش اکانت',
      'tabTitle' => ' ویرایش اکانت',
      'breadcrumb' => [['title' => 'لیست اکانت های من ', 'url' => route('user.contact.index')], ['title' => 'ویرایش اکانت  ',
      'class' => 'active']],
      ])



<div class="row">



@if($contact == Null)
@include('admin.errors.404')
@elseif($contact != Null)


    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">ویرایش اکانت  </h6>

                <form class="forms-sample" method="POST" action="{{ route('user.contact.update' , $contact) }}" style="direction: ltr;"
                enctype="multipart/form-data" onsubmit="return Validate(this);">
                @csrf


                @include('admin.layouts.errors')

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('firstname') ? 'red' : '' }}"  > <span class="red" >*</span> Firstname</label>
                            <input id="firstname" class="form-control" name="firstname" type="text"  value="{{$contact->firstname}}"   required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('lastname') ? 'red' : '' }}"  > <span class="red" >*</span> Lastname</label>
                            <input id="lastname" class="form-control" name="lastname" type="text"  value="{{$contact->lastname}}"   required="required">
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('nikname') ? 'red' : '' }}"  > <span class="red" >*</span>  NikName</label>
                            <input id="nikname" class="form-control" name="nikname" type="text"  value="{{$contact->nikname}}"   required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('phone') ? 'red' : '' }}"  >  <span class="red" >*</span> Phone</label>
                            <input id="phone" class="form-control" name="phone" type="text"  value="{{$contact->phone}}"   required="required">
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('email') ? 'red' : '' }}"  > <span class="red" >*</span> Email</label>
                            <input id="email" class="form-control" name="email" type="text"  value="{{$contact->email}}"   required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('zip') ? 'red' : '' }}"  > <span class="red" >*</span> Zip Code/Postal</label>
                            <input id="zip" class="form-control" name="zip" type="text"  value="{{$contact->zip}}"   required="required">
                        </div>
                    </div>




                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('state') ? 'red' : '' }}"  > <span class="red" >*</span> State/Province/Territory</label>
                            <input id="state" class="form-control" name="state" type="text"  value="{{$contact->state}}"   required="required">
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('adress') ? 'red' : '' }}"  >  <span class="red" >*</span> Address</label>
                            <input id="adress" class="form-control" name="adress" type="text"  value="{{$contact->adress}}"   required="required">
                        </div>
                    </div>




                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('country') ? 'red' : '' }}"  > <span class="red" >*</span> Country</label>
                            <select  name="country" id="form-field-name"
                            class="form-control"
                            placeholder="" required="required"

        value="{{$contact->country}}" aria-required="true" >
        @foreach ($countries as $key => $value )
        {{-- <option value="{{$value->ios2}}"  {{(old('country', $user->title_id) == $value->ios2 ? 'selected' : '')}}  > --}}
            <option value="{{$value->iso2}}"  {{($contact->country  == $value->iso2 ? 'selected' : '')}}  >
                {{$value->emoji}} {{$value->name}}</option>
        @endforeach
                        </select>
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('city') ? 'red' : '' }}"  >  <span class="red" >*</span> City</label>
                            <input id="city" class="form-control" name="city" type="text"   value="{{$contact->city}}"   required="required">
                        </div>
                    </div>






                    <div class="form-group row">
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('company') ? 'red' : '' }}"  > Company</label>
                            <input id="company" class="form-control" name="company" type="text"    value="{{$contact->company}}"  >
                        </div>
                        <div class="col-md-6">
                            <label  class="{{ $errors->has('adres2') ? 'red' : '' }}"   value="{{$contact->firstname}}"  >  Address 2</label>
                            <input id="adres2" class="form-control" name="adres2" type="text"    value="{{$contact->adres2}}"   >
                        </div>
                    </div>





                    <div class="form-group row">
                        <div class="col-md-6">
                            <label> .US Nexus Categories</label>
                            <select  name="nexus" id="form-field-name"
                            class="form-control"
                            placeholder=""
                            value="{{$contact->nexus}}" aria-required="true" >
                            <option value="">Please select an item</option>
                            <option value="C11"  {{$contact->nexus == 'C11' ? 'selected' : ''}}  >US Citizen</option>
                            <option value="C12"  {{$contact->nexus == 'C12' ? 'selected' : ''}}  >US Permanent Resident</option>
                            <option value="C21"  {{$contact->nexus == 'C21' ? 'selected' : ''}}  >Incorporated or organized in US</option>
                            <option value="C31"  {{$contact->nexus == 'C31' ? 'selected' : ''}}  >Foreign entity doing business in US</option>
                            <option value="C32"  {{$contact->nexus == 'C32' ? 'selected' : ''}}  >Foreign entity with office in US</option>
                        </select>                       </div>
                        <div class="col-md-6">
                            <label> .US Application Purposes</label>

                            <select  name="purpose" id="form-field-name"
                            class="form-control"
                            placeholder=""
                            value="{{$contact->purpose}}" aria-required="true" >
                            <option value="">Please select an item</option>
                            <option value="P1"  {{$contact->purpose == 'P1' ? 'selected' : ''}}  >Business for Profit</option>
                            <option value="P2"  {{$contact->purpose == 'P2' ? 'selected' : ''}}  >Non-Profit</option>
                            <option value="P3"  {{$contact->purpose == 'P3' ? 'selected' : ''}}  >Personal</option>
                            <option value="P4"  {{$contact->purpose == 'P4' ? 'selected' : ''}}  >Educational</option>
                            <option value="P5"  {{$contact->purpose == 'P5' ? 'selected' : ''}}  >Governmental</option>
                        </select>
                                            </div>
                    </div>




                    @method('PUT')




                    <div class="card-footer">
                        <a href="{{ route('user.contact.index') }}" class="btn btn-danger">بازگشت</a>
                        <button type="submit" class="btn btn-primary float-right">ویرایش</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    @endif

</div>








      @slot('script')
      @endslot
  @endcomponent
