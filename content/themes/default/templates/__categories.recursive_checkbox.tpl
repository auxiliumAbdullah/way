<label>
<input type="checkbox" name="category[]" {if $data_category == $category['category_id']}checked{/if} value="{$category['category_id']}">
<span>{str_repeat("- - ", $category['iteration'])}{__($category['category_name']|truncate:30)}</span>
</label>
  
{if $category['sub_categories']}
  {foreach $category['sub_categories'] as $_category}
    {include file='__categories.recursive_checkbox.tpl' category = $_category}
  {/foreach}
{/if}