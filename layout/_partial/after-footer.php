<script src="<%- theme.cdn.mdui.js %>"></script>
<script src="<%- theme.cdn.jquery.js %>"></script>
<% if(theme.function.fancybox == true) { %> 
    <script src="<%- theme.cdn.fancybox.js %>"></script>
<% } %>

<% if(theme.function.SmoothScroll == true) { %> 
    <script src="<%- theme.cdn.SmoothScroll.js %>"></script>
<% } %>

<%- js('js/highlight.pack') %>
<script>hljs.initHighlightingOnLoad();</script>

<%- js_auto_version('js/app') %>
<script src="<%- theme.cdn.lazysizes.js %>"></script>