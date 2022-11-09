{if $_tpl == "featured"}
  <div class="{if $_iteration == 1}col-sm-12 col-md-8 col-lg-6{else}col-sm-6 col-md-4 col-lg-3{/if}" data-aos="fade-up" data-aos-duration="1000">
    <a href="{$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="blog-container {if $_iteration == 1}primary{/if}">
      <div class="blog-image">
        <img src="{$article['article']['parsed_cover']}">
      </div>
      <div class="blog-content">
        <div class="text">{$article['article']['text_snippet']|truncate:400}</div>
        <div>
          <div class="post-avatar">
            <div class="post-avatar-picture small" style="background-image:url('{$article['post_author_picture']}');">
            </div>
          </div>
          <div class="post-meta">
            <span class="text-link">
              {$article['post_author_name']}
            </span>
            <div class="post-time">
              <span class="js_moment" data-time="{$article['time']}">{$article['time']}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-more">
        <span>{__("More")}</span>
      </div>
    </a>
  </div>
{else}
  <div class="post-media list post" data-id="{$article['post_id']}">
    	<div class="post-media-meta">
          <h2><a href="{$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}">{$article['article']['title']}</a></h2>
          <div class="info">
            {__("By")}
            <span class="js_user-popover pr10" data-type="{$article['user_type']}" data-uid="{$article['user_id']}">
              <a href="{$article['post_author_url']}">{$article['post_author_name']}</a>
            </span>
            <i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="{$article['time']}">{$article['time']}</span>
            <i class="fa fa-comments pr5"></i><span class="pr10">{$article['comments']}</span>
            <i class="fa fa-eye pr5"></i><span class="pr10">{$article['article']['views']}</span>
          </div>
        </div>
    
    
        <div class="post-media-image-wrapper">
          <a class="post-media-image" href="{$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}">
            <div style="padding-top: 50%; background-position: center center; background-size: cover; background-image:url('{$article['article']['parsed_cover']}');"></div>
          </a>
          <div class="post-media-image-meta" style="display:none;">
            <a class="article-category {if $_small}small{/if}" href="{$system['system_url']}/blogs/category/{$article['article']['category_id']}/{$article['article']['category_url']}">
              {__($article['article']['category_name'])}
            </a>
          </div>
        </div>
        
    <div class="post-media-meta">
      <div class="text mb5 js_readmore" dir="auto">
        {if $_small}
          {$article['article']['parsed_text']|truncate:100}
        {else}
          {$article['article']['parsed_text']|truncate:5000}
        {/if}
		
		{if $article['article']['parsed_tags']}
		  <div class="article-tags">
			<ul>
			  {foreach $article['article']['parsed_tags'] as $tag}
				<li>
				  <a href="{$system['system_url']}/search/hashtag/{$tag}">{__($tag)}</a>
				</li>
			  {/foreach}
			</ul>
		  </div>
		{/if}
      </div>
   </div>
   
	<div class="post-text-translation x-hidden" dir="auto"></div>

 <!-- post footer -->

	  <!-- post actions -->
      {if $user->_logged_in && $_get != "posts_information"}
        <div class="post-actions clearfix">
          <!-- reactions -->
          <div class="action-btn unselectable reactions-wrapper {if $article['i_react']}js_unreact-post{/if}" data-reaction="{$article['i_reaction']}">
            <!-- reaction-btn -->
            <div class="reaction-btn">
              {if !$article['i_react']}
                <div class="reaction-btn-icon">
                  <i class="far fa-smile fa-lg fa-fw"></i>
                </div>
                <span class="reaction-btn-name">{__("React")}</span>
              {else}
                <div class="reaction-btn-icon">
                  <div class="inline-emoji no_animation">
                    {include file='__reaction_emojis.tpl' _reaction=$article['i_reaction']}
                  </div>
                </div>
                <span class="reaction-btn-name {$article['i_reaction_details']['color']}">{$article['i_reaction_details']['title']}</span>
              {/if}
            </div>
            <!-- reaction-btn -->

            <!-- reactions-container -->
            <div class="reactions-container">
              {foreach $reactions as $reaction}
                <div class="reactions_item reaction reaction-{$reaction@iteration} js_react-post" data-reaction="{$reaction['reaction']}" data-reaction-color="{$reaction['color']}" data-title="{$reaction['title']}">
                  {include file='__reaction_emojis.tpl' _reaction=$reaction['reaction']}
                </div>
              {/foreach}
            </div>
            <!-- reactions-container -->
          </div>
          <!-- reactions -->

          <!-- comment -->
          <div class="action-btn js_comment {if $article['comments_disabled']}x-hidden{/if}">
            {include file='__svg_icons.tpl' icon="comment" width="16px" height="16px" class="mr5"}
            <span>{__("Comment")}</span>
          </div>
          <!-- comment -->

          <!-- share -->
            <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id={$article['post_id']}">
              {include file='__svg_icons.tpl' icon="share" width="16px" height="16px" class="mr5"}
              <span>{__("Share")}</span>
            </div>

          <!-- save post -->
		  {if $_post['i_save']}
            <div href="#" class="action-btn pointer js_unsave-post">
              <div class="action no-desc">
                <i class="fa fa-bookmark fa-fw"></i> <span>{__("Unsave Post")}</span>
              </div>
            </div>
          {else}
            <div class="action-btn pointer js_save-post">
              <div class="action no-desc">
                <i class="fa fa-bookmark fa-fw"></i> <span>{__("Save Post")}</span>
              </div>
            </div>
          {/if}
        </div>
    {if $user->_logged_in}
      <div class="post-footer {if !$standalone}x-hidden{/if}">
        <!-- comments -->
        {include file='__feeds_post.comments.category.tpl'}
        <!-- comments -->
      </div>
    {else}
      <div class="post-footer">
        <div class="post-comments">
          <div class="pb10">
            <a href="{$system['system_url']}/signin">{__("Please log in to like and comment!")}</a>
          </div>
		  {if $article['privacy'] == "public" || ($article['in_group'] && $article['group_privacy'] == "public") || ($article['in_event'] && $article['event_privacy'] == "public") }
            <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id={$article['post_id']}">
              {include file='__svg_icons.tpl' icon="share" width="16px" height="16px" class="mr5"}
              <b>{__("Share")}</b>
            </div>
          {/if}
        </div>
      </div>
    {/if}
         {else}
         
        <div class="post-footer" id="article-comments">
                    <div class="mb20" style="margin-top: 20px;">
            	        <a href="http://www.facebook.com/sharer.php?u={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
            	    	<i class="fab fa-facebook-f"></i>
            	        </a>
                    	<a href="https://twitter.com/intent/tweet?url={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
                    	<i class="fab fa-twitter"></i>
                    	</a>
                	    <a href="https://vk.com/share.php?url={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
                		<i class="fab fa-vk"></i>
                	    </a>
                	    <a href="https://www.linkedin.com/shareArticle?mini=true&url={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
                		<i class="fab fa-linkedin"></i>
                	    </a>
                	    <a href="https://api.whatsapp.com/send?text={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
                		<i class="fab fa-whatsapp"></i>
                	    </a>
                	    <a href="https://reddit.com/submit?url={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
                		<i class="fab fa-reddit"></i>
                	    </a>
                	    <a href="https://pinterest.com/pin/create/button/?url={$system['system_url']}/blogs/{$article['post_id']}/{$article['article']['title_url']}" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
                		<i class="fab fa-pinterest"></i>
                	    </a>
            	    </div>
            	
            	     <div class="text-left">
                     <a href="{$system['system_url']}/signin">{__("Please log in to like, share and comment!")}</a>
                    </div>
            </div>

            {/if}
      <!-- post actions -->
  </div>
{/if}