<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ef2b1048440cc62439dddd288aababfc */
class __TwigTemplate_2e549310ad32f3b8037e84aa01eb5fab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Pedidos • prestaChaves</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '40d8ac9a484e9719cf06dfe0234740ee';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = 'b59b3142ee4c2a2d35f6cbe8c040441e';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin1310hstme7qt8zau1na/index.php/improve/modules/manage?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU';
    var admin_notification_get_link = '/admin1310hstme7qt8zau1na/index.php/common/notifications?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU';
    var admin_notification_push_link = adminNotificationPushLink = '/admin1310hstme7qt8zau1na/index.php/common/notifications/ack?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU';
    var tab_modules_list = '';
    var update_success_msg = 'Actua";
        // line 42
        echo "lización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin1310hstme7qt8zau1na/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin1310hstme7qt8zau1na/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1310hstme7qt8zau1na/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1310hstme7qt8zau1na/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin1310hstme7qt8zau1na\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin1310hstme7qt8zau1na\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"";
        // line 68
        echo "#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psgdprNoAddresses = \"Datos del cliente borrados por el m\\u00f3dulo oficial RGPD.\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin1310hstme7qt8zau1na/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/admin1310hstme7qt8zau1na/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/admin1310hstme7qt8zau1na/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin1310hstme7qt8zau1na/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin1310hstme7qt8zau1na/index.php/common/notifications?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DN";
        // line 95
        echo "yAU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminorders\"
  data-base-url=\"/admin1310hstme7qt8zau1na/index.php\"  data-token=\"RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminDashboard&amp;token=d693e844f91f91485814b287359d0e5f\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=27199973b91111dc3cbbcdf6c876eb2b\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/improve/modules/manage?token=802ecf5893a5289c1f9fe3dbe7821715\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/sell/catalog/categories/new?token=802ecf5893a5289c1f9fe3dbe7821715\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/sell/catalog/products-v2/create?token=802ecf5893a";
        // line 139
        echo "5289c1f9fe3dbe7821715\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2410e46cf8789acdf1bb04631dbe8926\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/sell/orders?token=802ecf5893a5289c1f9fe3dbe7821715\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"59\"
        data-icon=\"icon-AdminParentOrders\"
        data-method=\"add\"
        data-url=\"index.php/sell/orders/?-OMjOdmBVG-McB6y9AYgh2DNyAU\"
        data-post-link=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminQuickAccesses&token=400ded67199431110c8b99beeafd1547\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Pedidos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminQuickAccesses&token=400ded67199431110c8b99beeafd1547\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin1310hstme7qt8zau1na/index.php?controller=AdminSearch&amp;token=031a87fabfc583f9";
        // line 178
        echo "faeca66a8f1592ac\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" d";
        // line 195
        echo "ata-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=27199973b91111dc3cbbcdf6c876eb2b\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/improve/modules/manage?token=802ecf5893a5289c1f9fe3dbe7821715\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/sell/catalog/categories/new?token=802ecf5893a5289c1f9fe3dbe7821715\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/sell/catalog/products-v2/create?token=802ecf5893a5289c1f9fe3dbe7821715\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
   ";
        // line 232
        echo "    href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2410e46cf8789acdf1bb04631dbe8926\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php/sell/orders?token=802ecf5893a5289c1f9fe3dbe7821715\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"114\"
      data-icon=\"icon-AdminParentOrders\"
      data-method=\"add\"
      data-url=\"index.php/sell/orders/?-OMjOdmBVG-McB6y9AYgh2DNyAU\"
      data-post-link=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminQuickAccesses&token=400ded67199431110c8b99beeafd1547\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Pedidos - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminQuickAccesses&token=400ded67199431110c8b99beeafd1547\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://lamplemp.giize.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"n";
        // line 276
        echo "otification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCarts&action=filterOnlyAbandonedCa";
        // line 327
        echo "rts&token=00e3b78319bb57fcbd77ff7e23c5d53a\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employ";
        // line 375
        echo "ee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://lamplemp.giize.com/img/pr/default.jpg\" alt=\"David\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, David</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/employees/1/edit?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminLogin&amp;logout=1&amp;token=1b640b4adc46ce5f63fe13490e88c094\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/employees/toggle-navigation?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminDashboard&amp;token=d693e844f91f91485814b287359d0e5f\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
             ";
        // line 421
        echo "       
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminDashboard&amp;token=d693e844f91f91485814b287359d0e5f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/?_t";
        // line 457
        echo "oken=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/invoices/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/credit-slips/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/delivery-slips/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"s";
        // line 488
        echo "ubtab-AdminCarts\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCarts&amp;token=00e3b78319bb57fcbd77ff7e23c5d53a\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/catalog/products?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/catalog/products?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                    ";
        // line 520
        echo "                                        
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/catalog/categories?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/catalog/monitoring/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminAttributesGroups&amp;token=668f8b96550514d79eea056bbbc3e2da\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/catalog/brands/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Marcas y Proveedores
                ";
        // line 547
        echo "                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/attachments/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCartRules&amp;token=2410e46cf8789acdf1bb04631dbe8926\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/stocks/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" i";
        // line 580
        echo "d=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/customers/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/customers/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/addresses/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
       ";
        // line 610
        echo "           
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCustomerThreads&amp;token=2a52d34c640649cdc77ca87f66753abc\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCustomerThreads&amp;token=2a52d34c640649cdc77ca87f66753abc\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/sell/customer-service/order-messages/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Mensajes de Pedidos
                                </a";
        // line 637
        echo ">
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminReturn&amp;token=e2f7c81257b84ecdbbc95f70f01fa0e1\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminStats&amp;token=27199973b91111dc3cbbcdf6c876eb2b\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                     ";
        // line 677
        echo "                                 
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/modules/manage?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/modules/manage?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/design/themes/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i cl";
        // line 706
        echo "ass=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/design/themes/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/design/mail_theme/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/design/cms-pages/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-Mc";
        // line 735
        echo "B6y9AYgh2DNyAU\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/design/modules/positions/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminImages&amp;token=d10875839daea0a58ad63823f712714c\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/modules/link-widget/list?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      ";
        // line 767
        echo "
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCarriers&amp;token=8c0df7734759b77a27513bcd3cc3accb\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminCarriers&amp;token=8c0df7734759b77a27513bcd3cc3accb\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/shipping/preferences/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                    ";
        // line 796
        echo "          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/payment/payment_methods?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/payment/payment_methods?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/payment/preferences?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Prefere";
        // line 825
        echo "ncias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/international/localization/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/international/localization/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
      ";
        // line 858
        echo "                          <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/international/zones/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/international/taxes/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/improve/international/translations/settings?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
";
        // line 895
        echo "                    <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/preferences/preferences?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/preferences/preferences?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/order-preferences/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                               ";
        // line 923
        echo "             
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/product-preferences/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/customer-preferences/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/contacts/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/shop/seo-urls/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Tráfico &amp; SEO
                              ";
        // line 950
        echo "  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminSearchConf&amp;token=ff34ca00747e2ad929a46a19c3d86750\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/system-information/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
    ";
        // line 982
        echo "                            <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/system-information/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/performance/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/administration/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/emails/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
    ";
        // line 1012
        echo "                                                        
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/import/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/employees/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/sql-requests/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/logs/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Registros/Logs
                                </a>
            ";
        // line 1040
        echo "                  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/webservice-keys/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/feature-flags/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin1310hstme7qt8zau1na/index.php/configure/advanced/security/?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\" class=\"link\"> Seguridad
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                             ";
        // line 1068
        echo " 
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Pedidos</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Pedidos    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/new?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\"                  title=\"Añadir nuevo pedido\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nuevo pedido
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin1310hstme7qt8zau1na/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminOrders%253Fversion%253D8.1.4%2526country%253Des/Ayuda?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collaps";
        // line 1129
        echo "e\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin1310hstme7qt8zau1na/index.php/sell/orders/new?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\"              title=\"Añadir nuevo pedido\"            >
              Añadir nuevo pedido
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin1310hstme7qt8zau1na/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminOrders%253Fversion%253D8.1.4%2526country%253Des/Ayuda?_token=RGaMpcgICR0yZekL-OMjOdmBVG-McB6y9AYgh2DNyAU\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1163
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"https://lamplemp.giize.com/admin1310hstme7qt8zau1na/index.php?controller=AdminDashboard&amp;token=d693e844f91f91485814b287359d0e5f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1197
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1163
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ef2b1048440cc62439dddd288aababfc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1362 => 1197,  1341 => 1163,  1330 => 105,  1321 => 1197,  1281 => 1163,  1245 => 1129,  1182 => 1068,  1152 => 1040,  1122 => 1012,  1090 => 982,  1056 => 950,  1027 => 923,  997 => 895,  958 => 858,  923 => 825,  892 => 796,  861 => 767,  827 => 735,  796 => 706,  765 => 677,  723 => 637,  694 => 610,  662 => 580,  627 => 547,  598 => 520,  564 => 488,  531 => 457,  493 => 421,  445 => 375,  395 => 327,  342 => 276,  296 => 232,  257 => 195,  238 => 178,  197 => 139,  158 => 105,  146 => 95,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ef2b1048440cc62439dddd288aababfc", "");
    }
}
