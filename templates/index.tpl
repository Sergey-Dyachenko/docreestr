{include 'header.tpl'}  
Hello, {$name} How do yoy do?
{include 'footer.tpl'}
{foreach $names as $name}
<p>{$name}</p> 
{/foreach}