 <!-- pro pages -->
              {if $suggested_pages}
              <div class="card bg-gradient-teal border-0" data-aos="fade-up"
     data-aos-duration="1000">
                <div class="card-header ptb20 bg-transparent border-bottom-0">
                  {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                    <div class="float-right">
                      <small><a class="text-white text-underline" href="{$system['system_url']}/packages">{__("Upgrade")}</a></small>
                    </div>
                  {/if}
                  <h6 class="pb0"><i class="fa fa-flag-checkered mr5"></i> {__("Pro Pages")}</h6>
                </div>
                <div class="card-body pt0 plr5">
                  <div class="pro-box-wrapper {if count($suggested_pages) > 3}js_slick{else}full-opacity{/if}">
                    {foreach $suggested_pages as $_page}
                      <a class="user-box text-white" href="{$system['system_url']}/pages/view/{$_page['page_name']}">
                        <img alt="{$_page['page_title']}" src="{$_page['page_picture']}" />
                        <div class="newname" title="{$_page['page_title']}">
                          <span>{$_page['page_title']}</span>
                        </div>
                      </a>
                    {/foreach}
                  </div>
                </div>
              </div>
            {/if} 
            <!-- pro pages -->