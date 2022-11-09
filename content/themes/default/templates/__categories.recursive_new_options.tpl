<option {if (array_key_exists($category['category_id'],$data_category))}selected style="font-weight: 600;" class="bg-info" {/if} value="{$category['category_id']}">
  {str_repeat("- - ", $category['iteration'])}{__($category['category_name']|truncate:30)}
</option>
{if $category['sub_categories']}
  {foreach $category['sub_categories'] as $_category}
    {include file='__categories.recursive_options.tpl' category = $_category}
  {/foreach}
{/if}