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
 <script>
    // Hide menus by ID
    function hideMenusByIds() {
      var idsToHide = ["cms-plugins-gallery", 
      "cms-plugins-team",
      "cms-plugins-location",
      "cms-plugins-ads",
      "cms-plugins-newsletter",
      "cms-core-appearance",
      "cms-core-plugins",
      "cms-plugin-translation",
      "cms-core-platform-administration",
      "cms-plugins-team",
      "cms-plugins-location"
      ];

      idsToHide.forEach(function(id) {
        var element = document.getElementById(id);
        if (element) {
          element.style.display = 'none';
        }
      });
    }

    // Call the function to hide menus when the page loads
    window.onload = hideMenusByIds;
  </script>