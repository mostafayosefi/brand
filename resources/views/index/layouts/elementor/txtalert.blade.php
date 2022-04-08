
@foreach($textdeses as $key => $textdese)
@if($textdese->id==$id)

 
<div class="alert alert-secondary" role="alert">
    @php echo $textdese->text; @endphp
</div>
 

@endif
@endforeach
