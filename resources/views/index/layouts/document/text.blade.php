

  @if($myurl=='all')
  @php
  echo $txtdese->text;
  @endphp
    @endif




    @if($myurl!='all')
    @if($textwebservices)


  <div class="elementor-element elementor-element-021bf96 elementor-view-framed rt-custom-style elementor-shape-circle elementor-widget elementor-widget-icon"
                                      data-id="021bf96" data-element_type="widget"
                                      data-widget_type="icon.default">
                                      <div class="elementor-widget-container">
                                          <div class="elementor-icon-wrapper">
                                              <div class="elementor-icon">
                                                  <i aria-hidden="true" class="fas fa-server"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

  @php
  echo $textwebservices->text;
  @endphp

                                  <div class="elementor-element elementor-element-ec6dea4 elementor-widget elementor-widget-rt-heading"
                                      data-id="ec6dea4" data-element_type="widget"
                                      data-widget_type="rt-heading.default">
                                      <div class="elementor-widget-container">
                                          <ul class="elementor-icon-list-items">
                                              <li>
                                  {{$textwebservices->title}}</li>
                                          </ul>
                                      </div>
                                      <br>
  <pre class="pre">{{$textwebservices->link}}</pre>

  <style>
  .pre {
  box-sizing: border-box;
  width: 100%;
  padding: 0;
  margin: 0;
  overflow: auto;
  overflow-y: hidden;
  font-size: 12px;
  line-height: 20px;
  background-color: #130000;
  border: 1px solid #777;
  padding: 10px;
  color: rgb(252, 252, 252);
  direction: ltr;
  }</style>

                                  </div>

                                  @endif

                                  @endif
