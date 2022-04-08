
@foreach($textdeses as $key => $textdese)
@if($textdese->id==$id)


<div class="row">
    <div class="col-12 col-md-12 grid-margin">
        <div class="card bg-light">
          <div class="card-header">{{$textdese->title}}</div>
          <div class="card-body">
             @php echo $textdese->text; @endphp
          </div>
        </div>
      </div>
      </div>

@endif
@endforeach
