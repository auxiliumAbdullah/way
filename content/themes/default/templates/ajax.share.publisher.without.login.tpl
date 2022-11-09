<div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-share mr5"></i>{__("Share")}
  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="posts/share.php?do=publish&post_id={$post['post_id']}">
  <div class="modal-body">
    <div style="margin: 25px auto; width: 60%;">
      <div class="input-group">
        <input type="text" disabled class="form-control" value="{$system['system_url']}/posts/{$post['post_id']}">
        <div class="input-group-append">
          <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="{$system['system_url']}/posts/{$post['post_id']}" data-toggle="tooltip" data-placement="top" title='{__("Copy")}'>
            <i class="fas fa-copy"></i>
          </button>
        </div>
      </div>
    </div>

    {if $system['social_share_enabled']}
      <div class="post-social-share">
        <a href="http://www.facebook.com/sharer.php?u={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://vk.com/share.php?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
          <i class="fab fa-vk"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://api.whatsapp.com/send?text={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://reddit.com/submit?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
          <i class="fab fa-reddit"></i>
        </a>
        <a href="https://pinterest.com/pin/create/button/?url={$system['system_url']}/posts/{$post['post_id']}" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
          <i class="fab fa-pinterest"></i>
        </a>
      </div>
    {/if}

</form>

<script>
  /* share post */
  $('input[type=radio][name=share_to]').on('change', function() {
    switch ($(this).val()) {
      case 'timeline':
        $('#js_share-to-page').hide();
        $('#js_share-to-group').hide();
        $('#js_share-to-event').hide();
        break;
      case 'page':
        $('#js_share-to-page').fadeIn();
        $('#js_share-to-group').hide();
        $('#js_share-to-event').hide();
        break;
      case 'group':
        $('#js_share-to-page').hide();
        $('#js_share-to-group').fadeIn();
        $('#js_share-to-event').hide();
        break;
      case 'event':
        $('#js_share-to-page').hide();
        $('#js_share-to-group').hide();
        $('#js_share-to-event').fadeIn();
        break;
    }
  });
</script>