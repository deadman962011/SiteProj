<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HnNT2XSVIRTg9Jb5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Pq8FrwWYNcJODIl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mB7W5ml9ME26BNyp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u9ea2HdetDAq4geA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/put' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r4rpwxGTSZn67d9t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C7Kn0h1OVHjVFQNx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/BigLogIn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BigLogInGet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'BigLogInPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/Login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LogIn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'LogInPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/BigMain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BigMain',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/BigAddSite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BigAddSite',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/BigLogOut' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BigLogOut',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/LogOut' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LogOut',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/([^/]++)/([^/]++)(?|/(?|SaveCust(*:44)|C(?|ustLogin(*:63)|ategoryAll(*:80))|A(?|uthorAll(*:100)|dAll(*:112))|ProductAll(*:131)|Blog(?|All(*:149)|ByCat/([^/]++)(*:171)))|(*:181))|/users/(?|([^/]++)/([^/]++)/(?|CategoryList(*:233)|A(?|d(?|d(?|Category(*:261)|Author(*:275))|evertisments(*:296)|Update(?|(*:313)|Aj(*:323)))|uthorList(*:342))|Update(?|Category(?|Aj(*:373)|Post(*:385))|Author(?|(*:403)|Aj(*:413)))|Del(?|Category(*:437)|Author(*:451)))|(Store)/([^/]++)/Dashboard(*:487)|(PDFCenter)/([^/]++)/(?|BookList(?|(*:530))|AddBook(?|(*:549))|DelBookPost(*:569)|UpdateBook(?|Aj(*:592)|Post(*:604)))|(Blogger)/([^/]++)/(?|AddBlog(?|(*:646))|SaveImage(*:664)|DelImage(*:680))|(Store)/([^/]++)/(?|ProductList(*:720)|AddProduct(?|(*:741))|DelProdPost(*:761)|UpdateProd(?|Aj(*:784)|Post(*:796)))))/?$}sDu',
    ),
    3 => 
    array (
      44 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::brqAyWK2kimi0Aak',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      63 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EJAMosCazAdMnA4p',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      80 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Sxk9RIcT4i0F9QU',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XP29y1hdUphC2HI7',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lqcAOiO7gpDlZADl',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KpTT2ENfDcee6WPN',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ykVOhUpwEBi023lG',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kenpxm1w2V2MWlOy',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
            2 => 'CatId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dXR64tXpMiLEpQG8',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CategoryList',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddCategoryPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddAuthorPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AdvertismentGet',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateAd',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateAdAj',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AuthorList',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateCategoryAj',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateCategoryPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateAuthorPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateAuthorAj',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DelCategoryPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DelAuthorPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'MainDashboard',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'BookListGet',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'BookListPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddBookGet',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'AddBookPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DelBookPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateBookAj',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      604 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateBookPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddBlogGet',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'AddBlogPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'SaveImage',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DelImage',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ProductListGet',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddProductGet',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'AddProductPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DelProdPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateProdAj',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateProdPost',
          ),
          1 => 
          array (
            0 => 'SiteType',
            1 => 'SiteId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::HnNT2XSVIRTg9Jb5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":248:{@pxXmWF6k933zdSDQBpw+Rg0V45yyywqvb/M/JkOAVdo=.a:5:{s:3:"use";a:0:{}s:8:"function";s:36:"function(){

  return \\bcrypt(6);

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000009fc9260000000003c98585";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HnNT2XSVIRTg9Jb5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6Pq8FrwWYNcJODIl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":242:{@sUZ3O4wTTCIQ76xVZu1BD/RiH3vQIY7SS2HehzZ8G5Y=.a:5:{s:3:"use";a:0:{}s:8:"function";s:30:"function(){
  return \'test\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000009fc9200000000003c98585";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6Pq8FrwWYNcJODIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mB7W5ml9ME26BNyp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@LoginPost',
        'controller' => 'App\\Http\\Controllers\\SiteController@LoginPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mB7W5ml9ME26BNyp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::brqAyWK2kimi0Aak' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/SaveCust',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\CustController@SaveCust',
        'controller' => 'App\\Http\\Controllers\\CustController@SaveCust',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::brqAyWK2kimi0Aak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EJAMosCazAdMnA4p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/CustLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\CustController@CustLogin2',
        'controller' => 'App\\Http\\Controllers\\CustController@CustLogin2',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::EJAMosCazAdMnA4p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5Sxk9RIcT4i0F9QU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/CategoryAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@CatGetApi',
        'controller' => 'App\\Http\\Controllers\\CategoryController@CatGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::5Sxk9RIcT4i0F9QU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XP29y1hdUphC2HI7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/AuthorAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthorController@AuthorGetApi',
        'controller' => 'App\\Http\\Controllers\\AuthorController@AuthorGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::XP29y1hdUphC2HI7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lqcAOiO7gpDlZADl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/AdAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@AdAllGetApi',
        'controller' => 'App\\Http\\Controllers\\SiteController@AdAllGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::lqcAOiO7gpDlZADl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KpTT2ENfDcee6WPN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/ProductAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@ProductAll',
        'controller' => 'App\\Http\\Controllers\\ProductController@ProductAll',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}/',
        'where' => 
        array (
          0 => 'SiteType',
          1 => 'BlaxkStore',
        ),
        'as' => 'generated::KpTT2ENfDcee6WPN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        0 => 'SiteType',
        1 => 'BlaxkStore',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dXR64tXpMiLEpQG8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\ApiController@BlaxkBlogGet',
        'controller' => 'App\\Http\\Controllers\\ApiController@BlaxkBlogGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}/',
        'where' => 
        array (
          0 => 'SiteType',
          1 => 'BlaxkBlog',
        ),
        'as' => 'generated::dXR64tXpMiLEpQG8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        0 => 'SiteType',
        1 => 'BlaxkBlog',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ykVOhUpwEBi023lG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/BlogAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@BlogGetApi',
        'controller' => 'App\\Http\\Controllers\\BloggerController@BlogGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}/',
        'where' => 
        array (
          0 => 'SiteType',
          1 => 'BlaxkBlog',
        ),
        'as' => 'generated::ykVOhUpwEBi023lG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        0 => 'SiteType',
        1 => 'BlaxkBlog',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Kenpxm1w2V2MWlOy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{SiteType}/{SiteId}/BlogByCat/{CatId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@BlogsByCatGetApi',
        'controller' => 'App\\Http\\Controllers\\BloggerController@BlogsByCatGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/{SiteType}/{SiteId}/',
        'where' => 
        array (
          0 => 'SiteType',
          1 => 'BlaxkBlog',
        ),
        'as' => 'generated::Kenpxm1w2V2MWlOy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        0 => 'SiteType',
        1 => 'BlaxkBlog',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u9ea2HdetDAq4geA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":259:{@/hS3usGVwFS4k2CGTuZFsxoIb7h3t26hRHd5Bz0esaU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:47:"function () {
    return \\bcrypt(\'a5522122\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000009fc9290000000003c98585";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::u9ea2HdetDAq4geA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r4rpwxGTSZn67d9t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'put',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":323:{@DV1TIvsyHhRvK8iCVvEn4a/3wtQcTL1pmlWzFLqtUKI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:110:"function() {
    \\Storage::cloud()->put(\'fuck.txt\', \'FuckYou\');
    return \'File was saved to Google Drive\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000009fc9170000000003c98585";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::r4rpwxGTSZn67d9t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::C7Kn0h1OVHjVFQNx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":498:{@/GeRKxcwOQgZC/YRUUw68xWnHJ9xlEL6EsO7ntOAzO8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:285:"function() {
    $dir = \'/\';
    $recursive = false; // Get subdirectories also?
    $contents = \\collect(\\Storage::cloud()->listContents($dir, $recursive));

    //return $contents->where(\'type\', \'=\', \'dir\'); // directories
    return $contents->where(\'type\', \'=\', \'file\'); // files
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000009fc9110000000003c98585";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::C7Kn0h1OVHjVFQNx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BigLogInGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/BigLogIn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@BigBlaxkLogInGet',
        'as' => 'BigLogInGet',
        'controller' => 'App\\Http\\Controllers\\UserController@BigBlaxkLogInGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BigLogInPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/BigLogIn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@BigBlaxkLogInPost',
        'as' => 'BigLogInPost',
        'controller' => 'App\\Http\\Controllers\\UserController@BigBlaxkLogInPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'LogIn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/Login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@UserLogInGet',
        'as' => 'LogIn',
        'controller' => 'App\\Http\\Controllers\\UserController@UserLogInGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'LogInPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/Login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@UserLogInPost',
        'as' => 'LogInPost',
        'controller' => 'App\\Http\\Controllers\\UserController@UserLogInPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BigMain' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/BigMain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BigBlaxk',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@MainBig',
        'as' => 'BigMain',
        'controller' => 'App\\Http\\Controllers\\UserController@MainBig',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BigAddSite' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/BigAddSite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BigBlaxk',
        ),
        'uses' => 'App\\Http\\Controllers\\SiteController@BigAddSite',
        'as' => 'BigAddSite',
        'controller' => 'App\\Http\\Controllers\\SiteController@BigAddSite',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BigLogOut' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/BigLogOut',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BigBlaxk',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@LogoutBig',
        'as' => 'BigLogOut',
        'controller' => 'App\\Http\\Controllers\\UserController@LogoutBig',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'LogOut' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/LogOut',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@LogOut',
        'as' => 'LogOut',
        'controller' => 'App\\Http\\Controllers\\UserController@LogOut',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'CategoryList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/CategoryList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@CategoryListGet',
        'as' => 'CategoryList',
        'controller' => 'App\\Http\\Controllers\\CategoryController@CategoryListGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddCategoryPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@AddCategoryPost',
        'as' => 'AddCategoryPost',
        'controller' => 'App\\Http\\Controllers\\CategoryController@AddCategoryPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateCategoryAj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateCategoryAj',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@UpdateCategoryAj',
        'as' => 'UpdateCategoryAj',
        'controller' => 'App\\Http\\Controllers\\CategoryController@UpdateCategoryAj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateCategoryPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateCategoryPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@UpdateCategoryPost',
        'as' => 'UpdateCategoryPost',
        'controller' => 'App\\Http\\Controllers\\CategoryController@UpdateCategoryPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DelCategoryPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/DelCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@DelCategoryPost',
        'as' => 'DelCategoryPost',
        'controller' => 'App\\Http\\Controllers\\CategoryController@DelCategoryPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AuthorList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AuthorList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthorController@AuthorListGet',
        'as' => 'AuthorList',
        'controller' => 'App\\Http\\Controllers\\AuthorController@AuthorListGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddAuthorPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddAuthor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthorController@AddAuthorPost',
        'as' => 'AddAuthorPost',
        'controller' => 'App\\Http\\Controllers\\AuthorController@AddAuthorPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateAuthorPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateAuthor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthorController@UpdateAuthorPost',
        'as' => 'UpdateAuthorPost',
        'controller' => 'App\\Http\\Controllers\\AuthorController@UpdateAuthorPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateAuthorAj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateAuthorAj',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthorController@UpdateAuthorAj',
        'as' => 'UpdateAuthorAj',
        'controller' => 'App\\Http\\Controllers\\AuthorController@UpdateAuthorAj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DelAuthorPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/DelAuthor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthorController@DelAuthorPost',
        'as' => 'DelAuthorPost',
        'controller' => 'App\\Http\\Controllers\\AuthorController@DelAuthorPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AdvertismentGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/Adevertisments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@AdvertismentGet',
        'as' => 'AdvertismentGet',
        'controller' => 'App\\Http\\Controllers\\DashboardController@AdvertismentGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateAd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AdUpdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@AdUpdatePost',
        'as' => 'UpdateAd',
        'controller' => 'App\\Http\\Controllers\\DashboardController@AdUpdatePost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateAdAj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AdUpdateAj',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@AdUpdatePostAj',
        'as' => 'UpdateAdAj',
        'controller' => 'App\\Http\\Controllers\\DashboardController@AdUpdatePostAj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'MainDashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/Dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Controller@StoreMainDashboard',
        'as' => 'MainDashboard',
        'controller' => 'App\\Http\\Controllers\\Controller@StoreMainDashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BookListGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/BookList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@BooksListGet',
        'as' => 'BookListGet',
        'controller' => 'App\\Http\\Controllers\\PdfController@BooksListGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'BookListPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/BookList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@BooksListPost',
        'as' => 'BookListPost',
        'controller' => 'App\\Http\\Controllers\\PdfController@BooksListPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddBookGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddBook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@AddBookGet',
        'as' => 'AddBookGet',
        'controller' => 'App\\Http\\Controllers\\PdfController@AddBookGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddBookPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddBook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@AddBookPost',
        'as' => 'AddBookPost',
        'controller' => 'App\\Http\\Controllers\\PdfController@AddBookPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DelBookPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/DelBookPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@DelBookPost',
        'as' => 'DelBookPost',
        'controller' => 'App\\Http\\Controllers\\PdfController@DelBookPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateBookAj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateBookAj',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@UpdateBookAj',
        'as' => 'UpdateBookAj',
        'controller' => 'App\\Http\\Controllers\\PdfController@UpdateBookAj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateBookPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateBookPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\PdfController@UpdateBookPost',
        'as' => 'UpdateBookPost',
        'controller' => 'App\\Http\\Controllers\\PdfController@UpdateBookPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'PDFCenter',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'PDFCenter',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddBlogGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddBlog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@AddBlogGet',
        'as' => 'AddBlogGet',
        'controller' => 'App\\Http\\Controllers\\BloggerController@AddBlogGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Blogger',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Blogger',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddBlogPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddBlog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@AddBlogPost',
        'as' => 'AddBlogPost',
        'controller' => 'App\\Http\\Controllers\\BloggerController@AddBlogPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Blogger',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Blogger',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'SaveImage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/SaveImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@SaveImage',
        'as' => 'SaveImage',
        'controller' => 'App\\Http\\Controllers\\BloggerController@SaveImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Blogger',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Blogger',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DelImage' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/DelImage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@DelImage',
        'as' => 'DelImage',
        'controller' => 'App\\Http\\Controllers\\BloggerController@DelImage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Blogger',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Blogger',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ProductListGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/ProductList',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@ProductListGet',
        'as' => 'ProductListGet',
        'controller' => 'App\\Http\\Controllers\\ProductController@ProductListGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddProductGet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@AddProductGet',
        'as' => 'AddProductGet',
        'controller' => 'App\\Http\\Controllers\\ProductController@AddProductGet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'AddProductPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/AddProduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@AddProductPost',
        'as' => 'AddProductPost',
        'controller' => 'App\\Http\\Controllers\\ProductController@AddProductPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'DelProdPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/DelProdPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@DelProdPost',
        'as' => 'DelProdPost',
        'controller' => 'App\\Http\\Controllers\\ProductController@DelProdPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateProdAj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateProdAj',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@UpdateProdAj',
        'as' => 'UpdateProdAj',
        'controller' => 'App\\Http\\Controllers\\ProductController@UpdateProdAj',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'UpdateProdPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{SiteType}/{SiteId}/UpdateProdPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:BlaxkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@UpdateProdPost',
        'as' => 'UpdateProdPost',
        'controller' => 'App\\Http\\Controllers\\ProductController@UpdateProdPost',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'users/{SiteType}/{SiteId}',
        'where' => 
        array (
          'SiteType' => 'Store',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'SiteType' => 'Store',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
