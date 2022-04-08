


                                        @if (count($errors))

                                        <div class="card card-body bg-light mb-2 replay-text">
                                            <div class="replay-name"><span style="color: red;"> خطای ثبت اطلاعات </span></div>
                                            <hr>
                                            <ul>
                                                @foreach ($errors->all() as $error)<br>
                                                    <li><span style="color: red;">{{ $error }}</span></li>
                                                @endforeach
                                            </ul>
                                            <div class="close-replay-comment"><i class="fas fa-times"></i></div>

                                        </div>



                                     @endif
