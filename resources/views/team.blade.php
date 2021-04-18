<style type="text/css">
.slick-dots li button {
    display: none;
}
</style>
<section id="team">
    <div class="container">
        <div class="text-center team_heder_txt_col">
            <h2 class="hue_blue">{{__("Our Team")}}</h2>
            <p class="hue_black">{{__("Meet our talented team members who shine when it comes to what they do the best")}}</p>
        </div>
        <div class="members-slider mb-4">
            <div class="member-single autoplay text-center">
                <div class="team_member_row">
                    <img src="{{asset('images/team_images/Davit_.png')}}" alt="Davit" class="img-fluid m-auto">
                    <h4 class="hue_black pt-3">{{__("Davit Grigoryan")}}</h4>
                    <p class="hue_black pb-3">{{__("Senior QA Engineer")}}</p>
                    <div class="layer hue_aqua"></div>
                </div>
            </div>
            <div class="member-single autoplay text-center">
                <div class="team_member_row">
                    <img src="{{asset('images/team_images/Davit.png')}}" alt=" Davit" class="img-fluid m-auto">
                    <h4 class="hue_black pt-3">{{__("Davit Kartashyan")}}</h4>
                    <p class="hue_black pb-3">{{__("Senior QA Engineer")}}</p>
                    <div class="layer hue_royal"></div>
                </div>
            </div>
            <div class="member-single autoplay text-center">
                <div class="team_member_row">
                    <img src="{{asset('images/team_images/Armen.png')}}" alt="Armen" class="img-fluid m-auto">
                    <h4 class="hue_black pt-3">{{__("Armen Grigoryan")}}</h4>
                    <p class="hue_black pb-3">{{__("Product Lead")}}</p>
                    <div class="layer hue_aqua"></div>
                </div>
            </div>
            <div class="member-single autoplay text-center">
                <div class="team_member_row">
                    <img src="{{asset('images/team_images/Arpine.png')}}" alt="Arpine" class="img-fluid m-auto">
                    <h4 class="hue_black pt-3">{{__("Arpine Aleksanyan")}}</h4>
                    <p class="hue_black pb-3">{{__("Senior QA Engineer")}}</p>
                    <div class="layer hue_royal"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" align="center">
        <div class="custom-btn">
            <a class="hue_bg_b hue_blue" href="{{ route('teams') }}">See All</a>
        </div>
    </div>
</section>