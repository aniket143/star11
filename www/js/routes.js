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
    path: '/terms_con/',
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
  {
    path: '/helpdesk/',
    url: './pages/helpdesk.html',
  },
  {
    path: '/footballpointsystem/',
    url: './pages/footballpointsystem.html',
  },
   {
    path: '/Kabbadi_point/',
    url: './pages/kabbadipointsystem.html',
  },
  {
    path: '/howtoply_ckt/',
    url: './pages/howtoply_ckt.html',
  },
   {
    path: '/howtoply_ftbl/',
    url: './pages/howtoply_ftbl.html',
  },
  
  {
    path: '/howtoply_kabaddi/',
    url: './pages/howtoply_kabaddi.html',
  },
   {
    path: '/createteamkabaddi/',
    url: './pages/create_team_kabaddi.html',
  },
  {
    path: '/mykbdteam/',
    url: './pages/myteam.html',
  },
   {
    path: '/contestskabaddi/',
    url: './pages/contests_kbd.html',
  },
   {
    path: '/joinedcontests_kbd/',
    url: './pages/joinedcontests_kbd.html',
  },
   {
    path: '/privacy_pol/',
    url: './pages/privacypolicy.html',
  },
  
   {
    path: '/myteampreview_kbd/',
    url: './pages/myteampreview_kbd.html',
  },
  
  
   {
    path: '/aboutus/',
    url: './pages/aboutus.html',
  },
  
   {
    path: '/legality/',
    url: './pages/legality.html',
  },
  
   {
    path: '/fairplay/',
    url: './pages/fairplay.html',
  },
  
   {
    path: '/faqs/',
    url: './pages/faqs.html',
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
