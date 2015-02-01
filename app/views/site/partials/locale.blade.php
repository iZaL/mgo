@if(App::getLocale() == 'en')
    <div class="intl-tel-input">
        <img src="" class="flag kw"/>
        {{link_to_route('language.select', 'العربية', array('ar'))}}
    </div>
@else
    <div class="intl-tel-input">
        <img src="" class="flag us"/>
        {{link_to_route('language.select', 'En', array('en'))}}
    </div>
@endif