 <!-- Gereeting -->
 
 
  <div class="row align-items-center">
    <div class="col">
       <img src="{$system['system_url']}/content/uploads/photos/icon1.png"/>
         <strong>Good {$gretting}{if $user->_data['name']},{/if} {$user->_data['name']}</strong>  
    </div>
    <div class="col-md-auto">
      <img src="http://openweathermap.org/img/wn/{$get_weather['icon']}@2x.png" style="width:25%">{$get_weather['temp']}<span>&nbsp;{$get_weather['desc']}</span>
    </div>
    <div class="col-md-auto" padding:left ='20px'>
       {$current_time}
    </div>
  </div>
     
<!-- end Gereeting -->

 <!-- Gereeting -->
   <!-- <div class="alert bg-white banner_bottom_wrapper">
      <div class="left_wraper">
         <img src="{$system['system_url']}/content/uploads/photos/icon1.png"/>
         <strong>Good {$gretting}{if $user->_data['name']},{/if} {$user->_data['name']}</strong>
      </div>
      <div class="right_wraper">
          <div class="weather_wrapper"><img src="http://openweathermap.org/img/wn/{$get_weather['icon']}@2x.png">{$get_weather['temp']}<span>&nbsp;{$get_weather['desc']}</span></div>
          {$current_time}
      </div>
    </div> -->
<!-- end Gereeting -->