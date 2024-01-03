<section class="faq-sec-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                <div class="faq-heading">
                    <h2>Frequently Asked <span>Questions</span></h2>
                    <p>Got a question? Get your answer.</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                <div class="faq-accordian">
                    <div class="wrapper center-block">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach($faqData as $key => $val)
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-{{$key}}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$key}}" aria-expanded="true" aria-controls="collapse-{{$key}}">
                                                {{$val->question}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-{{$key}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{$key}}">
                                        <div class="panel-body">
                                            <p>{{$val->answer}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(isset($needFooterBtn))
            <div class="faq-btns">
                <a href="{{route('user.select.submission')}}" class="btn btn-primary">SUBMIT MY SONG</a>
                <a href="{{route('become-a-curator')}}" class="btn btn-primary">Become a Curator</a>
            </div>
            <div class="faq-design-img">
                <img src="{{asset('assets/front/images/top-curator-design.png')}}" alt="image" class="img-fluid">
            </div>
        @endif
    </div>
</section>