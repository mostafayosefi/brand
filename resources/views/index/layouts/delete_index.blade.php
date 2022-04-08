
        <a href="{{$route}}" onclick="event.preventDefault();
        document.getElementById('delete-form').submit();">
 {{$title}} <i aria-hidden="true" class="fas fa-trash"></i>
        </a>
        <form id="delete-form" action="{{$route}}" method="POST"
        class="d-none">
        @csrf
        @method('DELETE')
        </form>
