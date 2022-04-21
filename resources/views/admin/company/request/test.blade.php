@extends('teach.layoutteach')


@section('title')
<title>ثبت دوره  </title>
@stop


@section('body')



         <div class="main-content"   >

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">

<div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">ثبت</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">ثبت دوره</li>
                                    </ol>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- end page title -->





                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">ثبت دوره </h4>
 <form  method="post" action=""  class="repeater" enctype="multipart/form-data" action=""  enctype="multipart/form-data"  onsubmit="return Validate(this);"  >
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item class="row">



@if(count($errors))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<p>لطفا اطلاعات را به درستی وارد نمایید</p>

@foreach($errors->all() as $error)
<i class="mdi mdi-alert-outline mr-2"></i>  {{$error}}<br>
@endforeach

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif





 <div class="col-lg-6">





 <div class="form-group  col-lg-11">
 <label for="name">نام دوره</label>
 <input  name="name" type="text" class="form-control"   value="{{old('name')}}" required>
 </div>




 <div class="form-group  col-lg-11">
 <label class="control-label">انتخاب پروفایل</label>
 <select class="form-control select2" id="demo-select2-5" name="idprofile"  required  >

 @foreach($profiles as $profile)
 <option value="{{$profile->profile_id}}"   >{{$profile->profile_name}} {{$profile->profile_family}} ({{$profile->catcourse_name}} / {{$profile->subcatcourse_name}} )</option>
 @endforeach

</select>

</div>

 <div class="form-group  col-lg-11">
 <label for="dur">مدت دوره (با توضیحات)</label>
 <input  name="dur" type="text" class="form-control"   value="{{old('dur')}}" required>
 </div>

 <div class="form-group  col-lg-11">
 <label for="sis">تعداد جلسات (با توضیحات)</label>
 <input  name="sis" type="text" class="form-control"   value="{{old('sis')}}" required>
 </div>









<script type="text/javascript">
function fetch_select(val){

	var val = document.getElementById("demo-select2-4").value;$.ajax({type: 'get',url: '{{env("APP_URL")}}/superadmin/fechwebinar/'+val,data: {get_option:val},success: function (response) {document.getElementById("catam").innerHTML=response;}});


	}
</script>


     		<input type="hidden" name="course_linkweb" value="" />



 <div class="form-group  col-lg-11">
 <label class="control-label">نوع دوره</label>
 <select     class="form-control select2"   onchange="fetch_select(this.value);"    id="demo-select2-4"        name="typ"  required  >
<option   value=""  >لطفا انتخاب نمایید</option>
 <option value="1">آنلاین</option>
 <option value="2">آفلاین</option>
 <option value="3">وبینار</option>
</select>

</div>




 <!--

 <div class="form-group  col-lg-11"  id="catam">

</div>

 -->










 <div class="form-group  col-lg-11">
 <label for="kh">توضیحات دوره</label>
 <textarea class="form-control" name="kh" rows="3" required >{{old('kh')}}
</textarea>
 </div>


 <div class="form-group  col-lg-11">
 <label for="des">درباره دوره</label>
 <textarea class="form-control" name="des" rows="5" required >{{old('des')}}
</textarea>
 </div>

   <script>
   	function separateNum(value, input) {
        /* seprate number input 3 number */
        var nStr = value + '';
        nStr = nStr.replace(/\,/g, "");
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        if (input !== undefined) {

            input.value = x1 + x2;
        } else {
            return x1 + x2;
        }
    }
   </script>


 <div class="form-group col-lg-11">
 <label for="cost">هزینه (به تومان)</label>
 <input  name="cost" type="text" class="form-control"     onkeyup="separateNum(this.value,this);"     maxlength="10"    value="{{old('cost')}}" required>
 </div>





  <hr>

   <div class="form-group  col-lg-11">
 <label for="name"> عکس دوره</label>


<table width="100%" id="multi_file_uploader" class="table table-bordered dt-responsive nowrap" >
	<tbody>
		<tr class="imageSelectorContainer">
			<td valign="top" align="right">
			 <input type="button" value="اضافه کردن فایل" title="Add" class="btn btn-success btn-sm" style="" onclick="add_new_file_uploader(this)">
				<input type="button" value="حذف فایل" title="Remove" class="btn btn-danger btn-sm" style="display:none;  "   onclick="remove_file_uploader(this)">

				</input></td>
			<td valign="top">
				<input type="file" name="image_uploader_multiple[]" value="" class="multipleImageFileInput"   onchange="show_image_preview(this);" accept="image/*" multiple="">
				<table class="imagePreviewTable"></table>
			</td>
		</tr>
	</tbody>

</table>




<input name="rnd" type="hidden" value="{{$rnd}}" />

 </div>
 <span style="color: #0079ff">راهنمایی : دقت نمایید عکس مناسب برای دوره مربوطه به فرمت jpg , png , gif انتخاب نمایید. </span>


<style>
	.buttonBox{
	padding: 20px;
	text-align: center;
}
.imagePreviewTable{
	border: 1px solid #000;
	display: none;
}
.overlay {
    position:absolute; top:0; left:0; right:0; bottom:0; background-color:rgba(0, 0, 0, 0.85); background: url(data:;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAABl0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjUuNUmK/OAAAAATSURBVBhXY2RgYNgHxGAAYuwDAA78AjwwRoQYAAAAAElFTkSuQmCC) repeat scroll transparent\9; /* ie fallback png background image */ z-index:9999; color:white; text-align:center; height:5000px; display:none;
}
.overlay_content{
    padding:300px;
}
</style>


<script>
 $(document).ready(function(){
	$('form').submit(function(ev){
		$('.overlay').show();
		$(window).scrollTop(0);
		return upload_images_selected(ev, ev.target);
	})
})
function add_new_file_uploader(addBtn) {
	var currentRow = $(addBtn).parent().parent();
	var newRow = $(currentRow).clone();
	$(newRow).find('.previewImage, .imagePreviewTable').hide();
	$(newRow).find('.btn, btn-danger').show();
	$(newRow).find('table.imagePreviewTable').find('tr').remove();
	$(newRow).find('input.multipleImageFileInput').val('');
	$(addBtn).parent().parent().parent().append(newRow);
}

function remove_file_uploader(removeBtn) {
	$(removeBtn).parent().parent().remove();
}

function show_image_preview(file_selector) {
	//files selected using current file selector
	var files = file_selector.files;
	//Container of image previews
	var imageContainer = $(file_selector).next('table.imagePreviewTable');
	//Number of images selected
	var number_of_images = files.length;
	//Build image preview row
	var imagePreviewRow = $('<tr class="imagePreviewRow_0"><td valign=top style="width: 200px;"></br>' +
		 '<input type="button" value="حذف " title="Remove Image" class="btn btn-warning btn-sm btn-block waves-effect waves-light mb-1"  imageIndex="0" onclick="remove_selected_image(this)" /></td>' +
		'</tr> ');
	//Add image preview row
	$(imageContainer).html(imagePreviewRow);
	if (number_of_images > 1) {
		for (var i =1; i<number_of_images; i++) {
			/**
			 *Generate class name of the respective image container appending index of selected images,
			 *sothat we can match images selected and the one which is previewed
			 */
			var newImagePreviewRow = $(imagePreviewRow).clone().removeClass('imagePreviewRow_0').addClass('imagePreviewRow_'+i);
			$(newImagePreviewRow).find('input[type="button"]').attr('imageIndex', i);
			$(imageContainer).append(newImagePreviewRow);
		}
	}
	for (var i = 0; i < files.length; i++) {
		var file = files[i];
		/**
		 * Allow only images
		 */
		var imageType = /image.*/;
		if (!file.type.match(imageType)) {
		  continue;
		}

		/**
		 * Create an image dom object dynamically
		 */
		var img = document.createElement("img");

		/**
		 * Get preview area of the image
		 */
		var preview = $(imageContainer).find('tr.imagePreviewRow_'+i).find('td:first');

		/**
		 * Append preview of selected image to the corresponding container
		 */
		preview.append(img);

		/**
		 * Set style of appended preview(Can be done via css also)
		 */
		preview.find('img').addClass('previewImage').css({'max-width': '200px', 'max-height': '200px'});

		/**
		 * Initialize file reader
		 */
		var reader = new FileReader();
		/**
		 * Onload event of file reader assign target image to the preview
		 */
		reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
		/**
		 * Initiate read
		 */
		reader.readAsDataURL(file);
	}
	/**
	 * Show preview
	 */
	$(imageContainer).show();
}

function remove_selected_image(close_button)
{
	/**
	 * Remove this image from preview
	 */
	var imageIndex = $(close_button).attr('imageindex');
	$(close_button).parents('.imagePreviewRow_' + imageIndex).remove();
}

function upload_images_selected(event, formObj)
{
	event.preventDefault();
	//Get number of images
	var imageCount = $('.previewImage').length;
	//Get all multi select inputs
	var fileInputs = document.querySelectorAll('.multipleImageFileInput');
	//Url where the image is to be uploaded
	var url= "public/";
	//Get number of inputs
	var number_of_inputs = $(fileInputs).length;
	var inputCount = 0;

	//Iterate through each file selector input
	$(fileInputs).each(function(index, input){

		fileList = input.files;
		// Create a new FormData object.
		var formData = new FormData();
		//Extra parameters can be added to the form data object
		formData.append('bulk_upload', '1');
		formData.append('username', $('input[name="username"]').val());
		//Iterate throug each images selected by each file selector and find if the image is present in the preview
		for (var i = 0; i < fileList.length; i++) {
			if ($(input).next('.imagePreviewTable').find('.imagePreviewRow_'+i).length != 0) {
				var file = fileList[i];
				// Check the file type.
				if (!file.type.match('image.*')) {
					continue;
				}
				// Add the file to the request.
				formData.append('image_uploader_multiple[' +(inputCount++)+ ']', file, file.name);
			}
		}
		// Set up the request.
		var xhr = new XMLHttpRequest();
		xhr.open('POST', url, true);
		xhr.onload = function () {
			if (xhr.status === 200) {
				var jsonResponse = JSON.parse(xhr.responseText);
				if (jsonResponse.status == 1) {
					$(jsonResponse.file_info).each(function(){
						//Iterate through response and find data corresponding to each file uploaded
						var uploaded_file_name = this.original;
						var saved_file_name = this.target;
						var file_name_input = '<input type="hidden" class="image_name" name="image_names[]" value="' +saved_file_name+ '" />';
						file_info_container.append(file_name_input);

						imageCount--;
					})
					//Decrement count of inputs to find all images selected by all multi select are uploaded
					number_of_inputs--;
					if(number_of_inputs == 0) {
						//All images selected by each file selector is uploaded
						//Do necessary acteion post upload
						$('.overlay').hide();
					}
				} else {
					if (typeof jsonResponse.error_field_name != 'undefined') {
						//Do appropriate error action
					} else {
						alert(jsonResponse.message);
					}
					$('.overlay').hide();
					event.preventDefault();
					return false;
				}
			} else {
				/*alert('Something went wrong!');*/
				$('.overlay').hide();
				event.preventDefault();
			}
		};
		xhr.send(formData);
	})

	return false;
}


 </script>










 </div>



 <div class="col-lg-6">



 <div class="form-group  col-lg-11">
 <label for="course_linkcourse">لینک دوره</label>
<input name="course_linkcourse" type="text" class="form-control" value="{{old('course_linkcourse')}}">
 </div>


 <div class="form-group  col-lg-11">
<label for="course_linkrecord">لینک رکورد دوره</label>
<input name="course_linkrecord" type="text" class="form-control" value="{{old('course_linkrecord')}}">
 </div>


 <div class="form-group  col-lg-11">
 <label for="operator">برگزار کننده</label>
 <input  name="operator" type="text" class="form-control"   value="{{old('operator')}}" required>
 </div>




 <div class="col-lg-6">
  <label for="recvdoc">ارائه مدرک</label> 	</div>
 <div class="col-lg-6">
  <input type="checkbox" name="recvdoc" id="switch1" switch="none" checked/>
 <label for="switch1" data-on-label="بله" data-off-label="خیر"></label></div>




 <div class="form-group  col-lg-11">
 <label class="control-label">سطح دوره</label>

 <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder=""  name="level[]" required="">
@foreach($levels as $level)
 <option value="{{$level->levelt_id}}">{{$level->levelt_name}}</option>
@endforeach
 </select>

</div>






 <div class="form-group  col-lg-11">
 <label class="control-label">زبانهای ارائه</label>

 <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="" name="lang[]" required="">
@foreach($langs as $lang)
 <option value="{{$lang->lang_id}}">{{$lang->lang_name}}</option>
@endforeach
 </select>

</div>









 <div class="form-group  col-lg-11">
 <label class="control-label">رده سنی </label>

 <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder=""  name="sen[]" required="">
 @foreach($sens as $sen)
 <option value="{{$sen->sen_id}}">{{$sen->sen_name}}</option>
@endforeach
 </select>

</div>



 <link rel="stylesheet" href="{{env('APP_URL')}}/build/tutoo/css/Mh1PersianDatePicker.css" />
 <script src="{{env('APP_URL')}}/build/tutoo/js/Mh1PersianDatePicker.js"></script>





<div class="row">


  <div class="form-group col-lg-6">

 <label class="control-label">تاریخ شروع</label>
<input type="text" placeholder="تاریخ شروع"  name="startdate" onclick="Mh1PersianDatePicker.Show(this,'{{jDate::forge()->format('Y/m/d')}}',window.holidays)" class="form-control"   pattern="((13.*[0-9]{2})+)/([0-9]{1,2}+)/([0-9]{1,2})"   @if($errors->has('startdate'))   style="background-color: #f8d7da;" @endif  value="{{old('startdate')}}"  required >

</div>


<div class="form-group  col-lg-6">
 <label class="control-label"> ساعت شروع  </label>
 <div class="col-md-10">
 <input class="form-control" type="time"  name="course_startdatetime" value="{{old('course_startdatetime')}}" required  id="example-time-input">
</div>
</div>

</div>



<div class="row">

  <div class="form-group col-lg-6">

 <label class="control-label">تاریخ پایان</label>
<input type="text" placeholder="تاریخ پایان"  name="enddate" onclick="Mh1PersianDatePicker.Show(this,'{{jDate::forge()->format('Y/m/d')}}',window.holidays)" class="form-control"   pattern="((13.*[0-9]{2})+)/([0-9]{1,2}+)/([0-9]{1,2})"   @if($errors->has('enddate'))   style="background-color: #f8d7da;" @endif  value="{{old('enddate')}}"   >

</div>



<div class="form-group  col-lg-6">
 <label class="control-label"> ساعت پایان  </label>
 <div class="col-md-10">
 <input class="form-control" type="time"   name="course_enddatetime"  value="{{old('course_enddatetime')}}" required  id="example-time-input">
</div>
</div>


</div>






 <div class="form-group col-lg-11">
 <label for="pes">ظرفیت</label>
 <input  name="pes" type="number" class="form-control"   value="{{old('pes')}}" required>
 </div>




  <hr>
  <p>در پایان این دوره، چه عناوینی را فرا می گیرید </p>



 <div class="form-group  col-lg-11">
 <label for="skill1">مهارت اول</label>
 <textarea class="form-control" name="skill1" rows="2" required ></textarea>
 </div>

 <div class="form-group  col-lg-11">
 <label for="skill2">مهارت دوم</label>
 <textarea class="form-control" name="skill2" rows="2"   ></textarea>
 </div>

 <div class="form-group  col-lg-11">
 <label for="skill3">مهارت سوم</label>
 <textarea class="form-control" name="skill3" rows="2"   ></textarea>
 </div>




    <input type="hidden" name="dateshamsi" value="{{jDate::forge()->format('Y/m/d')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">





 </div>


   <hr>









   <div class="col-md-6"><hr>
   <div class="mt-4 mt-lg-0">
   <h5 class="font-size-14 mb-4">اطلاع رسانی پیامک</h5>

   <div class="custom-control custom-radio mb-2">
   <input type="radio" id="allsms" name="allsms"   value="2" class="custom-control-input">
   <label class="custom-control-label" for="allsms">همه کاربران</label>
   </div>

   <div class="custom-control custom-radio mb-2">
   <input type="radio" id="paysms" name="allsms"  value="1" class="custom-control-input" checked >
   <label class="custom-control-label" for="paysms">کاربران پرداخت شده</label>
   </div>

   <div class="custom-control custom-radio mb-2">
   <input type="radio" id="nopaysms" name="allsms" class="custom-control-input" value="0" >
   <label class="custom-control-label" for="nopaysms">کاربران پرداخت نشده</label>
   </div>


   </div>
   </div>


   <div class="col-md-6"><hr>
   <div class="mt-4 mt-lg-0">
   <h5 class="font-size-14 mb-4">اطلاع رسانی ایمیل</h5>

   <div class="custom-control custom-radio mb-2">
   <input type="radio" id="allmail" name="allmail"   value="2" class="custom-control-input">
   <label class="custom-control-label" for="allmail">همه کاربران</label>
   </div>

   <div class="custom-control custom-radio mb-2">
   <input type="radio" id="paymail" name="allmail"  value="1" class="custom-control-input" checked >
   <label class="custom-control-label" for="paymail">کاربران پرداخت شده</label>
   </div>

   <div class="custom-control custom-radio mb-2">
   <input type="radio" id="nopaymail" name="allmail" class="custom-control-input" value="0" >
   <label class="custom-control-label" for="nopaymail">کاربران پرداخت نشده</label>
   </div>


   </div>
   </div>



 <div class="col-lg-12">
 <hr>

 <div class="form-group  col-lg-11">
 <label for="kh">متن اطلاع رسانی پیامک</label>
 <textarea class="form-control" name="course_messagetell" rows="4"   ></textarea>
 </div>


 <div class="form-group  col-lg-11">
 <label for="kh">متن اطلاع رسانی ایمیل</label>
 <textarea class="form-control" name="course_messageemail" rows="6"  id="elm1"   ></textarea>
 </div>





 <hr />
<span style="color: blue;">*دقت نمایید برای نام و نام خانوادگی کاربر از #user استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای نام دوره از #sef استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای نوع دوره از #type استفاده نمایید.</span>
<br>

<span style="color: blue;">*دقت نمایید برای هزینه دوره از #pay استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای برگزار کننده دوره از #oper استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای تاریخ و ساعت شروع دوره از #starttime استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای تاریخ و ساعت پایان دوره از #endtime استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای لینک دوره از #linkcourse استفاده نمایید.</span>
<br>
<span style="color: blue;">*دقت نمایید برای لینک رکورد دوره از #linkrecord استفاده نمایید.</span>


 <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1"> ثبت دوره   </button>




 </div>









 <input type="hidden" name="dateshamsi" value="{{jDate::forge()->format('Y/m/d')}}">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">


</div>
</div>
 </form>
 </div>
 </div>
</div>








                    <!-- end row -->

                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Qovex.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Tutoo
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>




@stop

