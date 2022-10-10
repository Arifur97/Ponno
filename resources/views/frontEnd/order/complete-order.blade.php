@extends('frontEnd.master')

@section('body')

    <section>
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="row">
                <div class="col-sm-12">
                    <div style="height: 15px;"></div>
                </div>
                <div class="col-sm-12">
                    <div class="well well-sm text-center" style="background-color: transparent; border: 1px solid deeppink; border-radius: 0px; margin-bottom: 10px;">
                        <h4>Your order successfully post. Thanks for you valuable order. We will contact with you soon.</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section style="padding: 20px; background-color: white;">
        <div class="container" style="padding: 0px;">
            <div class="row">
                <div class="col-sm-12" style="margin-top: -35px;">
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_grey header-underline vc_separator-has-text" style="margin-bottom: 0px;">
                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line" style="border: 1px solid deeppink; margin-right: 5px; margin-left: 10px;"></span></span><h3 style="font-size: 20px; color: deeppink;"> OFFERED PRODUCT </h3><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line" style="border: 1px solid deeppink; margin-left: 5px; margin-right: 10px;"></span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($firstTopProducts as $firstTopProduct)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding-right: 0px;">
                        <a href="{{ url('/category/'.$firstTopProduct->category_id) }}"><img src="{{ asset($firstTopProduct->product_image) }}" alt="" style="height: 300px; border-radius: 5px;"/></a>
                    </div>
                @endforeach
            </div>
            <br/>
            <div class="row" style="margin-top: -14px;">
                @foreach($secondTopProducts as $secondTopProduct)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding-right: 0px;">
                        <a href="{{ url('/category/'.$secondTopProduct->category_id) }}"><img src="{{ asset($secondTopProduct->product_image) }}" alt="" style="height: 300px; border-radius: 5px;"/></a>
                    </div>
                @endforeach
            </div>
            <br/>
            <div class="row" style="margin-top: -14px;">
                @foreach($thirdTopProducts as $thirdTopProduct)
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding-right: 0px;">
                        <a href="{{ url('/category/'.$thirdTopProduct->category_id) }}"><img src="{{ asset($thirdTopProduct->product_image) }}" alt="" style="height: 300px; border-radius: 5px;"/></a>
                    </div>
                @endforeach
            </div>
            <br/>
        </div>
    </section>
@endsection