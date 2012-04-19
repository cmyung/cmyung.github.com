{include file='header.tpl'}

{section name=idx loop=$recipes}

<section id='card'>
<h2>{$recipes[idx].name|escape}</h2>

<h3>Ingredients:</h3>
<p>{$recipes[idx].ingredients|escape}</p>

<h3>Steps:</h3>
<p>{$recipes[idx].steps|escape}</p>

<img src='{$recipes[idx].picture|escape}'/>
</section>

{/section}
</body>
</html>