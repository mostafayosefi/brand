




<script>
    function readMore() {
    let readLess = document.getElementById("readLess");
    let readMore = document.getElementById("readMore");
    let moreBtn = document.getElementById("morebtn");

    if (readLess.style.display === "none") {
        readLess.style.display = "inline";
        moreBtn.innerHTML = "مشاهده بیشتر";
        readMore.style.display = "none";
    } else {
        readLess.style.display = "none";
        moreBtn.innerHTML = "مشاهده کمتر";
        readMore.style.display = "inline";
    }
}
</script>

<style>
    #readMore {
    display: none;
}
</style>

<p>
    <span id="readLess">. . . </span>
    <div id="readMore">




        @foreach ($contentdomains->chunk(12) as $chunk)
        <br>
        <div
        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100">

            @foreach ($chunk as  $key => $contentdomain)
        <p class="domain-price text-center"  ><span dir="ltr"><small style="color: red; font_size: 16px; ">.</small><small title="{{$contentdomain->text}}" >{{$contentdomain->name}}</small>${{$contentdomain->price}}</span></p>

        @endforeach
        </div>
        @endforeach




    </div>
    </p>
    <button onclick="readMore()" id="morebtn">مشاهده دامنه های ما</button>
<hr>

