<div class="elementor-message elementor-message-{{ $type }}" >
    خطای ثبت اطلاعات<hr>
    <ul>
     @foreach($message->all() as $error)<br>
    <li>{{ $error }}</li>
     @endforeach
    </ul>
</div>


