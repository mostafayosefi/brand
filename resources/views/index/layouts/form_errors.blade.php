
                                        @if (count($errors))
                                        <div class="elementor-message elementor-message-danger" role="alert">
                                            خطای ثبت اطلاعات
                                            <hr>
                                            <ul>
                                                @foreach ($errors->all() as $error)<br>
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
