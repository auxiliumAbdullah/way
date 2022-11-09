
{if $_master}

  {if $_ads && !in_array($page, ["static", "settings", "admin"])}
    <div class="container mtb20">
      <!-- ads -->
      {foreach $_ads as $ads_unit}
        <div class="card">
          <div class="card-header bg-transparent" data-aos="fade-up"
     data-aos-duration="1000">
            <i class="fa fa-bullhorn fa-fw mr5 yellow"></i>{__("Sponsored")}
          </div>
          <div class="card-body">{$ads_unit['code']}</div>
        </div>
      {/foreach}
      <!-- ads -->
    </div>
  {/if}

{else}

  {if $ads}
    <!-- ads -->
    {foreach $ads as $ads_unit}
      <div class="card">
        <div class="card-header bg-transparent" data-aos="fade-up"
     data-aos-duration="1000">
          <i class="fa fa-bullhorn fa-fw mr5 yellow"></i>{__("Sponsored")}
        </div>
        <div class="card-body">{$ads_unit['code']}</div>
      </div>
    {/foreach}
    <!-- ads -->
  {/if}

{/if}
