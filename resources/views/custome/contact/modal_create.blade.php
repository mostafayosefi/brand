

<button type="button" class="btn btn-success  "  data-toggle="modal" data-target="#create" ><i data-feather="user-plus"></i>
  ثبت اکانت جدید  </button>
<div class="modal fade bd-example-modal-lg" id="create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel"> حذف  </h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    @include('custome.contact.form_store', [ 'routecreate' => $routecreate , 'countries' => $countries , 'user_id' => $user_id  ])

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن صفحه</button>

</div>
</div>
</div>
</div>
