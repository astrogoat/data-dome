@if(Astrogoat\DataDome\Settings\DataDomeSettings::isEnabled())
    @push('body')
    <script>
        !function(a,b,c,d,e,f){a.ddjskey=e;a.ddoptions=f||null;var m=b.createElement(c),n=b.getElementsByTagName(c)[0];m.async=1,m.src=d,n.parentNode.insertBefore(m,n)}(window,document,"script","https://js.datadome.co/tags.js", "{{ app(Astrogoat\DataDome\Settings\DataDomeSettings::class)->js_key }}", { ajaxListenerPath: true });
    </script>
    @endpush
@endif