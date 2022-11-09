<div class="tab-outer-box-1" data-aos-duration="1000">
<div class="tab" data-aos="fade-up" data-aos-duration="1000">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Popular</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Discover</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Trending</button>
</div> 

<div id="London" class="tabcontent">
{if $popular}
    <ul>
      <!-- posts -->
      {foreach $popular as $post}
	  {if !empty($post['article']['title']) && !empty($post['article']['text_snippet']) }
       <li data-aos="fade-up" data-aos-duration="1000"> <a href="https://waybillion.link/blogs/{$post['article']['post_id']}/{$post['article']['title_url']}" ><h5>{$post['article']['title']|truncate:90}</h5></a> <div class="post-time"><i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="{$post['time']}">{$post['time']}</span></div>
       <a href="https://waybillion.link/blogs/{$post['article']['post_id']}/{$post['article']['title_url']}" >{$post['article']['text_snippet']|truncate:90}</a></li>
	    {/if}
      {/foreach}
	  </ul>
{/if}
</div>

<div id="Paris" class="tabcontent">
{if $discover}
    <ul>
      <!-- posts -->
      {foreach $discover as $post}
		 {if !empty($post['article']['title']) && !empty($post['article']['text_snippet']) }
       <li data-aos="fade-up" data-aos-duration="1000"> <a href="https://waybillion.link/blogs/{$post['article']['post_id']}/{$post['article']['title_url']}" ><h5>{$post['article']['title']|truncate:90}</h5></a> <div class="post-time"><i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="{$post['time']}">{$post['time']}</span></div>
       <a href="https://waybillion.link/blogs/{$post['article']['post_id']}/{$post['article']['title_url']}" >{$post['article']['text_snippet']|truncate:90}</a></li>
	    {/if}
      {/foreach}
	  </ul>
	  
{/if}
</div> 

<div id="Tokyo" class="tabcontent"> 
</div>
 {if $trending}
    <ul>
      <!-- posts -->
      {foreach $trending as $post}
       <li data-aos="fade-up" data-aos-duration="1000"><a href="https://waybillion.link/search/hashtag/{$post['hashtag']}" ><h5>#{$post['hashtag']}</h5></a></li>
      {/foreach}
	 </ul> 
{/if}
</div>
<script>
document.getElementById("defaultOpen").click();
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>



   

