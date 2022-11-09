   {if $_iteration != 1}
				 
				  <div class="list-blog test">
				    <div class="row">
					     <div class="col-sm-12 col-md-4 col-lg-3">
						    <div class="blog-img"><a href="{$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}"> <p><img src="{$article['article']['parsed_cover']}"/ 
						    style="width:100%"></p></a></div>
						 </div>
						 <div class="col-sm-12 col-md-8 col-lg-8">
						    <div class="blog-content">  <div> <div class="post-avatar"> <div class="post-avatar-picture small" style="background-image:url('{$article['post_author_picture']}');"> </div> </div> <div class="post-meta"> <span class="text-link"> <p>{$article['post_author_name']}</p>
                            </span> <div class="post-time"> <span class="js_moment" data-time="{$article['time']}" title="Friday, November 4, 2022 6:18 pm">{$article['time']}</span> </div> </div> </div> 
                            <div class="text"><h5>{$article['article']['title']}</h5></div>
							 <p><a href="{$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}">{$article['article']['text_snippet']|truncate:90}</a></p>
							</div>
						 </div>
					</div>
				 </div>
				 {/if}
				 