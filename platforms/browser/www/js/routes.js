var timestamp   = Date.now();


routes = [
  {
    path: '/',
    url: './index.html',
  },
  {
    path: '/about/',
    url: './pages/about.html',
  },
 
  {
    path: '/catalog/',
    componentUrl: './pages/catalog.html',
  },
  {
    path: '/product/:id/',
    componentUrl: './pages/product.html',
  },
  {
    path: '/settings/',
    url: './pages/settings.html',
  },
  {
    path: '/myaccount/',
    url: './pages/myaccount.html',
  },
  {
    path: '/mytransactions/',
    url: './pages/mytransactions.html',
  },
  {
    path: '/personaldetails/',
    url: './pages/personal_details.html',
  },
 
  {
    path: '/ckt_point_system/',
    url: './pages/ckt_point_system.html',
  },
   {
    path: '/ckt_pointt20/',
    url: './pages/ckt_pointt20.html',
  },
   {
    path: '/ckt_pointodi/',
    url: './pages/ckt_pointodi.html',
  },
   {
    path: '/ckt_pointtest/',
    url: './pages/ckt_pointtest.html',
  },
   {
    path: '/contests/',
    url: './pages/contests.html',
  },
  {
    path: '/createteam/',
    url: './pages/create_team.html',
  },
   {
    path: '/allcontest/',
    url: './pages/allcontest.html',
  },
  {
    path: '/signup/',
    url: './pages/signup.html',
  },
  {
    path: '/termsconditions/',
    url: './pages/terms_conditions.html',
  },
  {
    path: '/joinedcontests/',
    url: './pages/joinedcontests.html',
  },
  {
    path: '/joinedcontestformatch/',
    url: './pages/joinedcontestformatch.html',
  },
    {
    path: '/viewusers/',
    url: './pages/viewusers.html',
  },
   {
    path: '/contestdetails/',
    url: './pages/contestdetails.html',
  },
   {
    path: '/withdraw/',
    url: './pages/withdraw.html',
  },
  {
    path: '/ranking/',
    url: './pages/ranking.html',
  },
  
  // Page Loaders & Router
  {
    path: '/page-loader-template7/:user/:userId/:posts/:postId/',
    templateUrl: './pages/page-loader-template7.html',
  },
  {
    path: '/page-loader-component/:user/:userId/:posts/:postId/',
    componentUrl: './pages/page-loader-component.html',
  },
  {
    path: '/request-and-load/user/:userId/',
    async: function (routeTo, routeFrom, resolve, reject) {
      // Router instance
      var router = this;

      // App instance
      var app = router.app;

      // Show Preloader
      app.preloader.show();

      // User ID from request
      var userId = routeTo.params.userId;

      // Simulate Ajax Request
      setTimeout(function () {
        // We got user data from request
        var user = {
          firstName: 'Vladimir',
          lastName: 'Kharlampidi',
          about: 'Hello, i am creator of Framework7! Hope you like it!',
          links: [
            {
              title: 'Framework7 Website',
              url: 'http://framework7.io',
            },
            {
              title: 'Framework7 Forum',
              url: 'http://forum.framework7.io',
            },
          ]
        };
        // Hide Preloader
        app.preloader.hide();

        // Resolve route to load page
        resolve(
          {
            componentUrl: './pages/request-and-load.html',
          },
          {
            context: {
              user: user,
            }
          }
        );
      }, 1000);
    },
  },
  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './pages/404.html',
  },
];
