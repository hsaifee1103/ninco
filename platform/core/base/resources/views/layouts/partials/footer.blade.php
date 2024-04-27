<div class="page-footer">
    <div class="page-footer-inner">
        <div class="row">
            <div class="col-md-6">
                {!! BaseHelper::clean(
                    trans('core/base::layouts.copyright', [
                        'year' => Carbon\Carbon::now()->format('Y'),
                        'company' => setting('admin_title', config('core.base.general.base_name')),
                        'version' => get_cms_version(),
                    ]),
                ) !!}
            </div>
            <div class="col-md-6 text-end">
                @if (defined('LARAVEL_START'))
                    {{ trans('core/base::layouts.page_loaded_time') }}
                    {{ round(microtime(true) - LARAVEL_START, 2) }}s
                @endif
            </div>
        </div>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up-circle"></i>
    </div>
</div>
<style>
    .page-logo {
    background: #fff;
    padding: 0 20px;
    }
</style>
 <script>
    // Hide menus by ID
    function hideMenusByIdsAndHrefs() {
  var elementsToHide = [
    "cms-plugins-gallery", 
    "cms-plugins-team",
    "cms-plugins-location",
    "cms-plugins-ads",
    "cms-plugins-newsletter",
   // "cms-core-appearance",
    "cms-core-plugins",
    "cms-plugin-translation",
    "cms-core-platform-administration",
    "cms-plugins-team",
    "cms-plugins-location",
    // Hrefs to hide
    { href: "flash-sales" },
    { href: "sale-popup/settings" },
    { href: "ecommerce/tracking-settings" },
    { href: "ecommerce/advanced-settings" },
    { href: "settings/media" },
    { href: "settings/permalink" },
    { href: "settings/api" },
    { href: "social-login/settings" },
    { href: "settings/languages" },
    { href: "settings/email" },
    { href: "settings/cronjob" },
    { href: "admin/widgets" },
    { href: "theme/custom-css" },
    { href: "theme/custom-js" },
    { href: "theme/custom-html" },
    { href: "invoice-template" },
    { href: "theme/all" }
  ];

  elementsToHide.forEach(function(item) {
    if (typeof item === 'string') {
      var element = document.getElementById(item);
      if (element) {
        element.style.display = 'none';
      }
    } else if (item.hasOwnProperty('href')) {
      var linksToHide = document.querySelectorAll('a[href*="' + item.href + '"]');
      linksToHide.forEach(function(link) {
        link.style.display = 'none';
      });
    }
  });
}


    // Call the function to hide menus when the page loads
    window.onload = hideMenusByIdsAndHrefs;
  </script>