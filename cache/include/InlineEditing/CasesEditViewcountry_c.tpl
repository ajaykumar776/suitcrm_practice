

    <select name="{$fields.country_c.name}"
            id="{$fields.country_c.name}"
            title=''  tabindex="1"              
            >

        {if isset($fields.country_c.value)}
            {html_options options=$fields.country_c.options selected=$fields.country_c.value}
        {else}
            {html_options options=$fields.country_c.options selected=$fields.country_c.default}
        {/if}
    </select>


