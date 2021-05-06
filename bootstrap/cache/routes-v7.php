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
            '_route' => 'generated::babFakFZIZa4na50',
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
            '_route' => 'generated::gl9L37eGRdh8VHqv',
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
            '_route' => 'generated::yWEWytYqJqhEEuLe',
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
            '_route' => 'generated::0sUoreZniumLUUhG',
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
            '_route' => 'generated::9tAZOQoaaXNdiDcP',
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
            '_route' => 'generated::xYvXgeOlHdz1biCj',
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
      0 => '{^(?|/api/Blaxk(?|Blog/([^/]++)/(?|CategoryAll(*:48)|Blog(?|All(*:65)|ByCat/([^/]++)(*:86)))|Store/([^/]++)(?|(*:112)|/(?|SaveCust(*:132)|CustLogin(*:149))))|/users/(?|([^/]++)/([^/]++)/(?|CategoryList(*:203)|A(?|d(?|d(?|Category(*:231)|Author(*:245))|evertisments(*:266)|Update(?|(*:283)|Aj(*:293)))|uthorList(*:312))|Update(?|Category(?|Aj(*:343)|Post(*:355))|Author(?|(*:373)|Aj(*:383)))|Del(?|Category(*:407)|Author(*:421)))|(Blogger)/([^/]++)/Dashboard(*:459)|(PDFCenter)/([^/]++)/(?|BookList(?|(*:502))|AddBook(?|(*:521))|DelBookPost(*:541)|UpdateBook(?|Aj(*:564)|Post(*:576)))|(Blogger)/([^/]++)/(?|AddBlog(?|(*:618))|SaveImage(*:636)|DelImage(*:652))|(Store)/([^/]++)/(?|ProductList(*:692)|AddProduct(?|(*:713))|DelProdPost(*:733))))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fb250C7vz2sMguUL',
          ),
          1 => 
          array (
            0 => 'SiteId',
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
      65 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4OaKv679nNmyCZvv',
          ),
          1 => 
          array (
            0 => 'SiteId',
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
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::otYtKaizhaDtTNMg',
          ),
          1 => 
          array (
            0 => 'SiteId',
            1 => 'CatId',
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
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LVDcnSdEXaRAmpy8',
          ),
          1 => 
          array (
            0 => 'SiteId',
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
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::blUobwx8E3Pqor3Z',
          ),
          1 => 
          array (
            0 => 'SiteId',
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
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0nfY6abUtI6AfuL6',
          ),
          1 => 
          array (
            0 => 'SiteId',
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
      203 => 
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
      231 => 
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
      245 => 
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
      266 => 
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
      283 => 
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
      293 => 
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
      312 => 
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
      343 => 
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
      355 => 
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
      373 => 
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
      383 => 
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
      407 => 
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
      421 => 
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
      459 => 
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
      502 => 
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
      521 => 
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
      541 => 
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
      564 => 
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
      576 => 
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
      618 => 
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
      636 => 
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
      652 => 
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
      692 => 
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
      713 => 
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
      733 => 
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
    'generated::babFakFZIZa4na50' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":278:{@o1ALhUEGxI0KMr+ex8uc+cFDuu73SZMQNXnhPO2WCC8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:66:"function(){
 return \\bcrypt(\'e173ed367256db629e2e664f727886f0\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001de38fe1000000000ae5f5a6";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::babFakFZIZa4na50',
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
    'generated::gl9L37eGRdh8VHqv' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":242:{@+IF/+HOaJMb91TkGRGa+iKEOf4Met6GKGLJXmd9rGmA=.a:5:{s:3:"use";a:0:{}s:8:"function";s:30:"function(){
  return \'test\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001de38fe7000000000ae5f5a6";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gl9L37eGRdh8VHqv',
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
    'generated::yWEWytYqJqhEEuLe' => 
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
        'as' => 'generated::yWEWytYqJqhEEuLe',
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
    'generated::fb250C7vz2sMguUL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/BlaxkBlog/{SiteId}/CategoryAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@CatGetApi',
        'controller' => 'App\\Http\\Controllers\\CategoryController@CatGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/BlaxkBlog/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::fb250C7vz2sMguUL',
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
    'generated::4OaKv679nNmyCZvv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/BlaxkBlog/{SiteId}/BlogAll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@BlogGetApi',
        'controller' => 'App\\Http\\Controllers\\BloggerController@BlogGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/BlaxkBlog/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::4OaKv679nNmyCZvv',
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
    'generated::otYtKaizhaDtTNMg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/BlaxkBlog/{SiteId}/BlogByCat/{CatId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\BloggerController@BlogsByCatGetApi',
        'controller' => 'App\\Http\\Controllers\\BloggerController@BlogsByCatGetApi',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/BlaxkBlog/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::otYtKaizhaDtTNMg',
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
    'generated::LVDcnSdEXaRAmpy8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/BlaxkStore/{SiteId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":246:{@uQiVk2KbFLjIltLoXrRIvn2qbpoNy5a6eQdkVrDnJZw=.a:5:{s:3:"use";a:0:{}s:8:"function";s:34:"function(){
    return \'done\';
  }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001de38fe8000000000ae5f5a6";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/BlaxkStore/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::LVDcnSdEXaRAmpy8',
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
    'generated::blUobwx8E3Pqor3Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/BlaxkStore/{SiteId}/SaveCust',
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
        'prefix' => 'api/BlaxkStore/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::blUobwx8E3Pqor3Z',
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
    'generated::0nfY6abUtI6AfuL6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/BlaxkStore/{SiteId}/CustLogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'CheckSite',
        ),
        'uses' => 'App\\Http\\Controllers\\CustController@CustLogin',
        'controller' => 'App\\Http\\Controllers\\CustController@CustLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/BlaxkStore/{SiteId}',
        'where' => 
        array (
        ),
        'as' => 'generated::0nfY6abUtI6AfuL6',
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
    'generated::0sUoreZniumLUUhG' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":259:{@HxV9x56L7Y8oZJ3TTM41dxsbyabWVcL+3P+rLAZMxgk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:47:"function () {
    return \\bcrypt(\'a5522122\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001de38fec000000000ae5f5a6";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::0sUoreZniumLUUhG',
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
    'generated::9tAZOQoaaXNdiDcP' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":323:{@XCb14EP88csHX4GCoMaaggAui683Mbi+FRVF+m0PnA4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:110:"function() {
    \\Storage::cloud()->put(\'fuck.txt\', \'FuckYou\');
    return \'File was saved to Google Drive\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001de38fd2000000000ae5f5a6";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::9tAZOQoaaXNdiDcP',
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
    'generated::xYvXgeOlHdz1biCj' => 
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
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":498:{@Dqurq+n3+N4IKqb+cUc6IAiRQWCpTvsGEBblGBPrKKo=.a:5:{s:3:"use";a:0:{}s:8:"function";s:285:"function() {
    $dir = \'/\';
    $recursive = false; // Get subdirectories also?
    $contents = \\collect(\\Storage::cloud()->listContents($dir, $recursive));

    //return $contents->where(\'type\', \'=\', \'dir\'); // directories
    return $contents->where(\'type\', \'=\', \'file\'); // files
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000001de38fd0000000000ae5f5a6";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::xYvXgeOlHdz1biCj',
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
        'uses' => 'App\\Http\\Controllers\\DashboardController@BloggerMainDashboard',
        'as' => 'MainDashboard',
        'controller' => 'App\\Http\\Controllers\\DashboardController@BloggerMainDashboard',
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
  ),
)
);
