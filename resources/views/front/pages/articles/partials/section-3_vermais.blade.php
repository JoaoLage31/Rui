<div id="total" class="center_div col-11">
  @foreach($data as $key=>$collection)
    <div data-aos="fade-right"  data-aos-duration="2000" class="col-12"> <h2 class="section_3__title_buttons"> {{$collection['title']}} </h2></div>
  @endforeach
    <div class="total__vermais">
    @foreach($data as $key=>$collection)
            @foreach($collection['items'] as $item)
                    <div class="col-12 col-lg-6 col-xl-4 individual__vermais" data-aos="fade-up"  data-aos-duration="800">
                        @foreach($item["images"] as $img)
                        <button type="button"  data-toggle="modal" data-target="#exampleModal2" class="a__bottom__add_info2 button_img">
                            <div class="img" style="background-image: url({{($img)}}); "></div>
                        </button>
                        @endforeach
                        <div class="slider_01__bottom">
                            @include('front.components.sections_components.section_3-components',[
                            'title'=>$item['title'],
                            'date'=>$item['date'],
                            ])
                        </div>
                        <button type="button"  data-toggle="modal" data-target="#exampleModal2" class="a__bottom__add_info d-flex align-items-center">
                            <div class="slider_01__bottom__add_info__line col-4"></div>
                            @include('front.components.sections_components.section_3-components',[
                                'add_info'=>$item['add_info'],
                                ])
                        </button>
                        
            </div>
        @endforeach
    @endforeach
  </div>
</div>


@foreach($data as $key=>$collection)
  @foreach($collection['items'] as $item)
    <div class="modal fade" id="find" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            
          <div class="col-xl-1 col-md-1 col-2 pop_up_close">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img src="{{URL::asset('front/media/svgs/setaesquerda.svg')}}" alt="">
            </button>
          </div>
          <div class="col-xl-11 col-12">
            <div class="modal-header">
              <div class="col-xl-5">
                <div class="pop_up">
                @include('front.components.sections_components.section_3-components',[
                  'title'=>$item['title'],
                  'date'=>$item['date'],
                  'by'=>$item['by'],
                  ])
              </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="pop_up_flex">
                <div class="col-lg-6 col-xl-6 col-12">
                    @foreach($item["images"] as $img)
                      <div class="img" style="background-image: url({{($img)}}); "></div>
                    @endforeach
                    <div class="partilhar d-flex align-items-center">
                      <div class="line"></div>
                      <div class="partilhar__buttons d-flex">
                        <p>Partilhar Noticia</p>
                        <div class="d-flex partilhar__buttons__icons">
                          <div>
                              <a href="#" class="mdi mdi-facebook"></a>
                          </div>
                          <div>
                              <a href="#" class="mdi mdi-twitter"></a>
                          </div>
                          <div>
                              <a href="#" class="mdi mdi-linkedin"></a>
                          </div>
                          <div>
                              <a href="#" class="mdi mdi-instagram"></a>
                          </div>
                      </div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 col-12 d-flex justify-content-around">
                  <div class="col-xl-10 col-12">
                      @include('front.components.sections_components.section_3-components',[
                      'paragraph_1'=>$item['paragraph_1'],
                      'paragraph_2'=>$item['paragraph_2'],
                      'paragraph_3'=>$item['paragraph_3'],
                      ])
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endforeach

@push('scripts')
<script>

var x=0;
    $('.a__bottom__add_info2').each(function(){
        x++;
        var newModal='#modal'+x;
        $(this).attr('data-target',newModal);
        $(this).val(x);
    });


    var i=0;
    $('.a__bottom__add_info').each(function(){
        i++;
        var newModal='#modal'+i;
        $(this).attr('data-target',newModal);
        $(this).val(i);
    });
    
    var j=0;
    $('.modal').each(function(){
        j++;
        var newModalOpen='modal'+j;
        $(this).attr('id',newModalOpen);
        $(this).val(j);
    });

    AOS.init({
    })

    $(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#total').offset().top
    }, 'slow');
});

</script>

@endpush