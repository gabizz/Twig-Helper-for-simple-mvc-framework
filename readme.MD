# Twig-Helper-for-simple-mvc-framework
The helper makes Twig template engine available for Simple MVC Framework 
(<a href = "http://simplemvcframework.com/" target="_new">simplemvcframework.com</a>).

<h5>USAGE</h5>

<hr style ="border:2px solid #000">
<h6>Note:</h6><i> This section is probably going to be modified 
as soon as the new implementation of ADD-ONS will be available in SMVC Framework.
The above instructions are related to #simple-mvc-framework/framework as it is issued today, 2015.11.03.</i>
<hr style ="border:2px solid #000">

The purpose has been to implement an easily replacement for  
<b><i>View::render($path, $data)</i></b> with <b><i>Twig::render($path, $data, $extension)</i></b> .<br/>
The default extension defined in helper for templates is <b>.tpl</b>.  $extension may be skipped from the above syntax, 
as the used templates extension is .tpl<br/>

<b>Step1:</b> Install twig via composer - open cmd or a terminal window, point to your smvc installation folder and then type <br/>
<b>composer require twig/twig</b>

<b>Step2:</b> copy Twig.php to app/Helpers<br/>

<b>Step3:</b> in a controller you wish to use Twig with:<br/>
1. type: use helpers\Twig; (preferably at the beginning of file)<br/>
2. replace View::render(...) with Twig::render(...)<br/>

<b>Step4:</b> learn Twig syntax ;)