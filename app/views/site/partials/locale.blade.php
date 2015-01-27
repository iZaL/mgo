@if(App::getLocale() == 'en')
    <div class="">
        {{link_to_route('language.select', 'العربية', array('ar'))}}
    </div>
@else
    <div class="">
        {{link_to_route('language.select', 'English', array('en'))}}
    </div>
@endif