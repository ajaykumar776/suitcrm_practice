

    <select name="{$fields.state_c.name}"
            id="{$fields.state_c.name}"
            title=''  tabindex="1"              
            >

        {if isset($fields.state_c.value)}
            {html_options options=$fields.state_c.options selected=$fields.state_c.value}
        {else}
            {html_options options=$fields.state_c.options selected=$fields.state_c.default}
        {/if}
    </select>


