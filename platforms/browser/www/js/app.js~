// Dom7
var $$ = Dom7;

// Framework7 App main instance
var app  = new Framework7({
  root: '#app', // App root element
  id: 'io.framework7.testapp', // App bundle ID
  name: 'Start11', // App name
  material: true,
  animate: false,
 // theme: 'auto', // Automatic theme detection
   cache: false, /* disable caching */
    // App root data
 init: true,
  
  
  data: function () {
    return {
      user: {
        firstName: 'John',
        lastName: 'Doe',
      },
      // Demo products for Catalog section
      products: [
        {
          id: '1',
          title: 'Apple iPhone 8',
          description: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempora similique reiciendis, error nesciunt vero, blanditiis pariatur dolor, minima sed sapiente rerum, dolorem corrupti hic modi praesentium unde saepe perspiciatis.'
        },
        {
          id: '2',
          title: 'Apple iPhone 8 Plus',
          description: 'Velit odit autem modi saepe ratione totam minus, aperiam, labore quia provident temporibus quasi est ut aliquid blanditiis beatae suscipit odio vel! Nostrum porro sunt sint eveniet maiores, dolorem itaque!'
        },
        {
          id: '3',
          title: 'Apple iPhone X',
          description: 'Expedita sequi perferendis quod illum pariatur aliquam, alias laboriosam! Vero blanditiis placeat, mollitia necessitatibus reprehenderit. Labore dolores amet quos, accusamus earum asperiores officiis assumenda optio architecto quia neque, quae eum.'
        },
      ]
    };
  },
  // App root methods
  methods: {
    helloWorld: function () {
      app.dialog.alert('Hello World!');
    },
  },
  // App routes
  routes: routes,
});

var dynamicPopup = app.popup.create({
  content: '<div class="popup">'+
  					'<div class="navbar">'+
    '<div class="navbar-inner">'+
     '<div class="title" id="playername"></div>'+
     '<div class="right">'+
      '<p><a href="#" class="link popup-close">Close</a></p>'+'</div>'+
    '</div>'+
    '</div>'+
              '<div class="block">'+
                '<div class="row">'+
                '<div></div>'+
                '<div>CREDITS</div>'+
                '<div>TOTAL POINTS</div>'+
                '</div>'+'<div class="row">'+
                '<div><img src="" id="playerpic" width="55px" alt="player pic"></div>'+
                '<div id="credits">CREDITS</div>'+
                '<div>total points</div>'+
                '</div>'+
                '<div class="block block-strong">'+
                '<div class="row">'+
                 '<div class="col">TEAM</div>'+
                 '<div class="col">ROLE</div>'+
                 '</div>'+
                 '<div class="row">'+
                 '<div class="col" id="team">TEAM</div>'+
                 '<div class="col" id="role">ROLE</div>'+
                 '</div>'+
                '</div>'+
                 '<div class="block">'+
                '<div>Match wise Fantasy Stats</div>'+
                '</div>'+
                 '<div class="block block-strong">'+
                '<div class="row">'+
                '<div>MATCH</div>'+
                '<div>POINTS</div>'+
                '<div>SELECTED BY</div>'+
                '</div>'+
                '</div>'+
              '</div>'+
            '</div>'
});


 // Select Template
var cricketTemplate = $$('#crickettemplate').html();
var footballTemplate = $$('#footballtemplate').html();
var kabaddiTemplate = $$('#kabadditemplate').html();

// Compile and render
var compiledcricketTemplate = Template7.compile(cricketTemplate);
var compiledfootballTemplate = Template7.compile(footballTemplate);
var compiledkabaddiTemplate=Template7.compile(kabaddiTemplate);


app.request.postJSON('http://localhost/start11app/star11/www/load_match_data.php', function (data) {
      
    //console.log(data);
    //console.log(data.maindata["0"].data1["0"].trnid);
    //app.dialog.alert(data.maindata["0"].data1["0"].teamid1);
     
    localStorage.removeItem("sports");
    localStorage.setItem('sports','criket');
    
    //localStorage.MATCHID = data.maindata["0"].data1["0"].matchid;
    //localStorage.TRNID = data.maindata["0"].data1["0"].trnid;
   
      $$('#load_cricket_match').html(compiledcricketTemplate(data)); 
      $$('#load_football_match').html(compiledfootballTemplate(data));
      $$('#load_kabaddi_match').html(compiledkabaddiTemplate(data));
              
  // 	 	 app.dialog.alert(data.posts[0].start_time);
//for (var cou= 1; cou <= data.posts.length; cou++) {
  //    var start_date=data.posts[cou].start_time;
      //app.dialog.alert(start_date);
    //  var countDownDate = new Date(start_date).getTime();
      //$$('#first_load_match').html(data.card["0"][cou]);
       //var counttim = countdown( new Date(2000, 0, 1) ).toString(); 
      
     // $$('#clocktm1').innerHTML('hiajai');
     //settime(countDownDate,cou);
    
      //}
   });
      
  /*  var time = app.utils.now();
setInterval(function () {
  var timeDiff = app.utils.now() - time;
  console.log(timeDiff + 'ms past');
  $$('#clocktm1').html(timeDiff);
}, 2000);      
      
      var cotime;
      var pos='';
        function settime(cotime,pos)
      {
			var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  //var now =  new Date().toLocaleString();

  // Find the distance between now an the count down date
  var distance = cotime - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="clocktm"
 //document.getElementById("clocktm"+pos).innerHTML = days + "d " + hours + "h "
  //+ minutes + "m " + seconds + "s ";
    $$('#clocktm'+pos).text(days + "d " + hours + "h"+ minutes + "m" + seconds + "s ");

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("clocktm"+pos).innerHTML = "EXPIRED";
  }
  }, 1000);      
      }*/
         
      
     // Login Screen Demo
$$('#my-login-screen .login-button').on('click', function () 	{
	
  var email = $$('#my-login-screen [name="email"]').val();
  var fpass = $$('#my-login-screen [name="password"]').val();
  
  if (email=='') {
  $$('#message1').html("Please Enter Email");
  }
  
  if (fpass=='') {
  $$('#message2').html("Please Enter Password");
  }
  
  if (email !== '' && fpass !== '') {
 app.request.postJSON('http://localhost/start11app/star11/www/chklogin.php', { email:email, pass:fpass }, function (data) {
      //$$('.articles').html(data);
      
      //app.dialog.alert(data[1]);
		//localStorage.removeItem(userid);       
       
      if (data[0] == "Success") {
      	
      	    //console.log('Load was performed-Success');
      	    localStorage.userid = data[1];
      	    localStorage.enc_id = data[2];
      		
             app.loginScreen.close('#my-login-screen');
				 app.router.navigate('/about/', {
  										reloadCurrent: true,
  										ignoreCache: true,
										});               
                
          } else {
          			//app.dialog.alert(app.router.currentRoute.url);
                //app.router.refreshPage('#my-login-screen');
                app.dialog.alert("Invalid Login...");
                $$('#message1').hide();
                $$('#message2').hide();
                $$('#email').val('');
                $$('#passwd').val('');
                //app.router.refreshPage('#my-login-screen');
              /* app.router.navigate('#my-login-screen', {
  						reloadCurrent: true,
 						 ignoreCache: true,
							});*/
                }
            
      });
      
      }

	     // app.initImagesLazyLoad('.page[data-page="about"]');
	
}); 

$$('.open-prompt').on('click', function () {
  app.dialog.prompt('Enter Mobile Number?', function (name) {
    app.dialog.confirm('Are you sure that your Mobile Number is ' + name + '?', function () {
     
    });
  });
});



$$('.signup-button').on('click', function () 	{
	
             app.loginScreen.close('#my-login-screen');
				 app.router.navigate('/signup/', {
  										reloadCurrent: true,
  										ignoreCache: true,
										});                
}); 

$$(document).on('page:init', '.page[data-name="signup"]', function (e) {
	
	$$('.register-button').on('click', function () 	{
		
  var mailid = $$('#mailid').val();
  var password = $$('#password').val();
  var contactno = $$('#contactno').val();
  var birthdate = $$('#birthdate').val();
  var state = $$('#state').val();
  var referral = $$('#referral').val();
  console.log(birthdate);
  
  var result=isEmail(mailid);
  var respass=isPassword(password);
  
  var now = new Date();
  var born = new Date(birthdate.toString());
  age=get_age(born, now);
  //console.log(result);
  
if (result==true) {
	
	if (respass==true) {
		
		 if (age>18){
  	
app.request.postJSON('http://localhost/start11app/star11/www/user_registration.php', {mailid:mailid,password:password,contactno:contactno,birthdate:birthdate,state:state,referral:referral}, function (data) {
	
	
	console.log(data);
	
	if (data == "Success") {
		
		 app.loginScreen.open('#my-login-screen');
	}
	
	 else if(data == "fail") {
	 	app.dialog.alert("This Email is Already Exist...Please Enter another");
	 $$('#mailid').val(' ');
	 }
	  else if(data == "failed") {
	 	app.dialog.alert("This mobile number is Already Exist...Please Enter another");
	 $$('#contactno').val(' ');
	 }
	 
	 else {
	 	console.log(data);
	 	app.router.navigate('/', {
										reloadCurrent:true,
  										ignoreCache: true
  										
									});   
	 }
	 										
		}); 
		
	}
	else {
	
	 alert("You need to be 18 years of age");
	}
		
  }
  else {
    	app.dialog.alert("Please Enter correct Password.....");
  }
  }
  
else {
    	app.dialog.alert("Please Enter correct Email.....");
  }
  
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isPassword(pass) {
    var regex = /^(?=.*?[0-9])|(?=.*?[#?!@$%^&*-]).{8,}$/;
    return regex.test(pass);
}

function get_age(born, now) {
      var birthday = new Date(now.getFullYear(), born.getMonth(), born.getDate());
      //alert(birthday);
      if (now >= birthday) 
        return now.getFullYear() - born.getFullYear();
      else
        return now.getFullYear() - born.getFullYear() - 1;
    
}


}); 



$$('#my-login').on('click', function () 	{
	
 app.loginScreen.open('#my-login-screen');
	
}); 

}); 
//tab functions

$$('#critab').on('click', function (e) {
      app.dialog.alert("cricket");
      localStorage.removeItem("sports");
      localStorage.setItem('sports','criket');
});
$$('#foottab').on('click', function (e) {
      app.dialog.alert("football");
       localStorage.removeItem("sports");
      localStorage.setItem('sports','football');
});
$$('#kabtab').on('click', function (e) {
      app.dialog.alert("kabbadi");
      localStorage.removeItem("sports");
      localStorage.setItem('sports','kabbadi');
});

// Init/Create views
var homeView = app.views.create('#view-home', {
  url: '/'
});
var catalogView = app.views.create('#view-catalog', {
  url: '/catalog/'
});
var settingsView = app.views.create('#view-settings', {
  url: '/settings/'
});


var isChecked= " ";
$$(document).on('page:init', '.page[data-name="createteam"]', function (e) {
	
	
		console.log(e);
		
		console.log('inside');
		
		var userid = localStorage.userid;
		
		console.log(userid);
		
		if(typeof userid != 'undefined' && userid != ''){
			console.log('logon');
		var teamname1 = e.detail.route.query.teamA;
	var teamname2 = e.detail.route.query.teamB;	
		//var teamname1=localStorage.teamname1afterlogin;
		//var teamname2=localStorage.teamname2afterlogin;
		var teamid1=localStorage.teamid1afterlogin;
		var teamid2=localStorage.teamid2afterlogin;
			
	   $$('#matchid').text(teamname1+' Vs '+teamname2);
}

	else {
		
	var teamname1 = e.detail.route.query.teamA;
	var teamname2 = e.detail.route.query.teamB;	
	var teamid1 = e.detail.route.query.teamidA;
	var teamid2 = e.detail.route.query.teamidB;
	var matchid1 = e.detail.route.query.matchID;
	var trnid1 = e.detail.route.query.trnID;
   
   localStorage.MATCHID = matchid1;
   localStorage.TOURNAMENTID = trnid1;
		
	$$('#matchid').text(teamname1+' Vs '+teamname2);
	$$('#team1').text(teamname1);
	$$('#team2').text(teamname2);
	
	}
	
	var wkTemplate=$$('#wktemplate').html();
	var compiledwkTemplate=Template7.compile(wkTemplate);
	
	var batsmanTemplate=$$('#batsmantemplate').html();
	var compiledbtTemplate=Template7.compile(batsmanTemplate);
	
	var arTemplate=$$('#ARtemplate').html();
	var compiledarTemplate=Template7.compile(arTemplate);
	
	var ballerTemplate=$$('#ballertemplate').html();
	var compiledballerTemplate=Template7.compile(ballerTemplate);
	
	app.request.postJSON('http://localhost/start11app/star11/www/load_cricketplayers.php', { teamid1:teamid1,teamid2:teamid2 }, function (data) {
 	
 	$$('#wicketkp').html(compiledwkTemplate(data)); 
 	$$('#batsman').html(compiledbtTemplate(data));
 	$$('#allrounder').html(compiledarTemplate(data));  
 	$$('#baller').html(compiledballerTemplate(data));  
 	
	var totalcount=totalcount1=0;    		
var team1counter=team2counter=0;
var team11counter=team22counter=0;
var credit=0;

	$$('.checkbox').on('click', function (e) {
		
      	var chkbid = e.target.id;
      	chkbid="#"+chkbid;
      	var chkname = e.target.name;
      	
      	console.log(chkbid);
      	console.log(chkname);
      	
      	var wkteamcode = $$(chkbid).data("wkteamcode");
      	console.log(wkteamcode);
      	var batteamcode = $$(chkbid).data("batteamcode");
      	var arteamcode = $$(chkbid).data("arteamcode");
      	var ballerteamcode = $$(chkbid).data("ballerteamcode");
      	
      	var wkcredit = parseInt($$(chkbid).data("wkcredit"));
      	var batcredit = parseInt($$(chkbid).data("batcredit"));
      	var arcredit = parseInt($$(chkbid).data("arcredit"));
      	var ballercredit = parseInt($$(chkbid).data("ballercredit"));
   	   var isChecked = $$(chkbid).prop('checked'); 
   	   console.log(isChecked);
   	    

if (chkname == "WK_chk") {	
		  if(isChecked ==true){
		  
		   team1counter=parseInt($$('#team1cnt').html());
		   team2counter=parseInt($$('#team2cnt').html());
		   var counter = parseInt($$('#countWK').html());
		   console.log(counter);
			totalcount = parseInt($$('#totalplayer').html());
			credit = parseInt($$('#credit').html());
			    
		if (totalcount<11) {
		  	
		     if(counter >= 1){
		    		 app.dialog.alert("Only 1 Wicket Keeper Allowed ");
		    		 $$(chkbid).prop('checked',false);
		    		 }
		     else{
				     	 credit=credit+wkcredit;
				     	 if (credit<=100) {
			    		 credit=credit+"/100";
		   	 		 $$('#credit').html(credit);
		   	 		 
		    		 if (wkteamcode==teamname1) {
		    		 	console.log("team1");
		    		 	if (team1counter<7) {
		    		 		counter++;
		    		 		console.log(counter);
		    		 		totalcount++;
		    		 		team1counter++;
		    		 		$$('#team1cnt').html(team1counter);
		    		  		$$('#countWK').html(counter);
		    		  		$$('#countWK').addClass('badge color-green');	
		    		 		$$('#totalplayer').html(totalcount);
		    		 		
		    		 		}
		    		   else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
							}
							}
		    		 
		    		 if(wkteamcode==teamname2){
		    		 		console.log("team2");
		    		 	if (team2counter<7) {
		    		 		counter++;
		    		 		console.log(counter);
		    		 		totalcount++;
		    		 		team2counter++;
		    		 		$$('#team2cnt').html(team2counter);
		    		  		$$('#countWK').html(counter);
		    		  		$$('#countWK').addClass('badge color-green');
		    		 		$$('#totalplayer').html(totalcount);
		    		 		}
		    		  else {
							app.dialog.alert("Max 7 players allowed from one team");
		    		 		$$(chkbid).prop('checked',false);	    		 
		    		 		}
		    		 		}	 
		    		 		}
		    		 		 else {
								app.dialog.alert("You don't have enough credits to select this player");	
								$$(chkbid).prop('checked',false);   	 		 
		   	 		 }
		    		 
		    		 }
		    	
		    	}
		    	 else {
		    		 app.dialog.alert("Only 11 Players are Allowed ");
		    		  $$(chkbid).prop('checked',false);
		    		}
	       }
	       
	     else if (isChecked ==false){
	     	var couter1 = parseInt($$('#countWK').html());
	      totalcount1 = parseInt($$('#totalplayer').html());
	      team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				counter1 = couter1-1;
				totalcount1--;
				credit1=credit1-wkcredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (counter1 >= 0) {
				$$('#countWK').html(counter1);
				$$('#countWK').removeClass('badge color-green');
				$$('#countWK').addClass('badge color-red');
				$$('#totalplayer').html(totalcount1);
				
		    	}
		    	
		    	 if (wkteamcode==teamname1) {
		    		 team11counter--;
		    		 $$('#team1cnt').html(team11counter);
		    		 }
		    		 if(wkteamcode==teamname2){
		    		 team22counter--;
		    		 $$('#team2cnt').html(team22counter);
		    		 }
	     	}
}
	     		     		
else if (chkname=="batsman_chk") {	
		  if(isChecked ==true){
		  	
		  		team1counter=parseInt($$('#team1cnt').html());
		   	team2counter=parseInt($$('#team2cnt').html());
				var counter = parseInt($$('#countBAT').html());
				totalcount = parseInt($$('#totalplayer').html());
				credit = parseInt($$('#credit').html());
				
				 if (totalcount<11) {
				    
		       if(counter >= 5){
		    		 app.dialog.alert("Only 5 Batsman Allowed ");
		    		 $$(chkbid).prop('checked',false)
		    		 }
		    		 
		     else{
		     	
		     	
		     	credit=credit+batcredit;
		     	
		     	 if (credit<=100) {
		    		  credit=credit+"/100";
		    		 $$('#credit').html(credit);
		    		 
		    		 if (batteamcode==teamname1 ) {
		    		 	if (team1counter<7) {
		    		 		counter++;
		    		 		totalcount++;
		    		 		team1counter++;
		    		 		$$('#countBAT').html(counter);
		    		 		if (counter==5) {
		    		 	   $$('#countBAT').addClass('badge color-green');
		    		 		}
		    		 		$$('#totalplayer').html(totalcount);
		    		 		$$('#team1cnt').html(team1counter);
		    		 }else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		
		    		 if(batteamcode==teamname2){
		    		 		if (team2counter<7) {
		    		 counter++;
		    		 totalcount++;
		    		 team2counter++;
		    		 $$('#countBAT').html(counter);
		    		 if (counter==5) {
		    		 	   $$('#countBAT').addClass('badge color-green');
		    		 		}
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team2cnt').html(team2counter);
		    		 }else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
						}
		    		 }
		    		 else {
								app.dialog.alert("You don't have enough credits to select this player");	
								$$(chkbid).prop('checked',false);   	 		 
		   	 		 }
		    	}
		    	}
		    	 else {
		    		 app.dialog.alert("Only 11 Players are Allowed ");
		    		  $$(chkbid).prop('checked',false);
		    		}
	       }
	       
	     else if (isChecked ==false){
	     	var couter1 = parseInt($$('#countBAT').html());
	     	totalcount1 = parseInt($$('#totalplayer').html());
	     	team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				counter1 = couter1-1;
				totalcount1--;
				credit1=credit1-batcredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (counter1 >= 0) {
					
				$$('#countBAT').html(counter1);
				if (counter1<5) {
				$$('#countBAT').removeClass('badge color-green');
				$$('#countBAT').addClass('badge color-red');
				}
				
				$$('#totalplayer').html(totalcount1);
		    	}
		    	
		    	
		    	 if (batteamcode==teamname1) {
		    		 team11counter--;
		    		 $$('#team1cnt').html(team11counter);
		    		 }
		    		 if(batteamcode==teamname2){
		    		 team22counter--;
		    		 $$('#team2cnt').html(team22counter);
		    		 }
	     	}
}
	     	     		     		
else if (chkname=="ar_chk") {	
		  if(isChecked ==true){
		  	
		  		team1counter=parseInt($$('#team1cnt').html());
		   	team2counter=parseInt($$('#team2cnt').html());
				var counter = parseInt($$('#countAR').html());
				totalcount = parseInt($$('#totalplayer').html());
				console.log(parseInt($$('#countAR').html()));
				credit = parseInt($$('#credit').html());
				
		  if (totalcount<11) {
				    
		  if(counter >= 3){
		    		 app.dialog.alert("Only 3 All-Rounders Allowed ");
		    		 $$(chkbid).prop('checked',false)
		    		 }
		    		 
		  else{
		  	
		  	 credit=credit+arcredit;
		  	  if (credit<=100) {
		    		  credit=credit+"/100";
		    		 $$('#credit').html(credit);
		    	 if (arteamcode==teamname1) {
		    		 	if (team1counter<7) {
		    		 	counter++;
		    		 	if (counter==3) {
		    		 	   $$('#countAR').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team1counter++;
		    		 $$('#team1cnt').html(team1counter);
		    		  $$('#countAR').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 }else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		 if(arteamcode==teamname2){
		    		 	if (team2counter<7) {
		    		 	counter++;
		    		 	if (counter==3) {
		    		 	   $$('#countAR').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team2counter++;
		    		 $$('#team2cnt').html(team2counter);
		    		  $$('#countAR').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 }else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		 }
		    		  else {
								app.dialog.alert("You don't have enough credits to select this player");	
								$$(chkbid).prop('checked',false);   	 		 
		   	 		 }
		    		
		    	}
		    	}
		    else {
		    		 app.dialog.alert("Only 11 Players are Allowed ");
		    		  $$(chkbid).prop('checked',false);
		    		}
	       }
	       
	     else if (isChecked ==false){
	     	var couter1 = parseInt($$('#countAR').html());
	     	totalcount1 = parseInt($$('#totalplayer').html());
	     	team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				counter1 = couter1-1;
				totalcount1--;
				credit1=credit1-arcredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (counter1 >= 0) {
				$$('#countAR').html(counter1);
				if (counter1<3) {
				$$('#countAR').removeClass('badge color-green');
				$$('#countAR').addClass('badge color-red');
				}
				$$('#totalplayer').html(totalcount1);
		    	}
		    	
		    	if (arteamcode==teamname1) {
		    		 team11counter--;
		    		 $$('#team1cnt').html(team11counter);
		    		 }
		    		 if(arteamcode==teamname2){
		    		 team22counter--;
		    		 $$('#team2cnt').html(team22counter);
		    		 }
		    		
	     	}
	     	}
	     	
else if (chkname=="baller_chk") {	
		  if(isChecked ==true){
		  	
			  	team1counter=parseInt($$('#team1cnt').html());
		   	team2counter=parseInt($$('#team2cnt').html());
				var counter = parseInt($$('#countBOWL').html());
				totalcount = parseInt($$('#totalplayer').html());
				console.log(parseInt($$('#countBOWL').html()));
				credit = parseInt($$('#credit').html());
				
		if (totalcount<11) {
				    
		  if(counter >= 5){
		    		 app.dialog.alert("Only 5 Ballers are Allowed ");
		    		 $$(chkbid).prop('checked',false)
		    		 }
		    		 
		    		 
		  else{
		  	credit=credit+ballercredit;
		  	 if (credit<=100) {
		    		  credit=credit+"/100";
		    		 $$('#credit').html(credit);
		   		 
		    		 if (ballerteamcode==teamname1) {
		    		 	if (team1counter<7) {
		    		 	 counter++;
		    		 	 if (counter==5) {
		    		 	   $$('#countBOWL').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team1counter++;
		    		 $$('#countBOWL').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team1cnt').html(team1counter);
		    		 }else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		 if(ballerteamcode==teamname2){
		    		 		if (team2counter<7) {
		    		 	 counter++;
		    		 	 if (counter==5) {
		    		 	   $$('#countBOWL').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team2counter++;
		    		 $$('#countBOWL').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team2cnt').html(team2counter);
		    		 }else {
							app.dialog.alert("Max 7 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		 }
		    		  else {
								app.dialog.alert("You don't have enough credits to select this player");	
								$$(chkbid).prop('checked',false);   	 		 
		   	 		 }
		    		 
		    		 
		    	}
		    	}
		    	
		    	else {
		    		 app.dialog.alert("Only 11 Players are Allowed ");
		    		 $$(chkbid).prop('checked',false);
		    		}
		    	
	       }
	       
	     else if (isChecked ==false){
	     	var couter1 = parseInt($$('#countBOWL').html());
	     	totalcount1 = parseInt($$('#totalplayer').html());
	     	team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				counter1 = couter1-1;
				totalcount1--;
				credit1=credit1-ballercredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (counter1 >= 0) {
				$$('#countBOWL').html(counter1);
				if (counter1<5) {
				$$('#countBOWL').removeClass('badge color-green');
				$$('#countBOWL').addClass('badge color-red');
				}
				$$('#totalplayer').html(totalcount1);
		    	}
		    	
		    	if (ballerteamcode==teamname1) {
		    		 team11counter--;
		    		 $$('#team1cnt').html(team11counter);
		    		 }
		    		 if(ballerteamcode==teamname2){
		    		 team22counter--;
		    		 $$('#team2cnt').html(team22counter);
		    		 }
		     	}
	     }
	     
	     
	     console.log("totalcount:"+totalcount);
	     
	     if (totalcount==11) {
	      $$('#selec_cp').prop('disabled', false);
	     }
	     else {
	      $$('#selec_cp').prop('disabled', true);
	     }
	          	
});

$$('.dynamic-popup').on('click', function (e) {

 var pid = $$(this).attr('id');

	app.request.postJSON('http://localhost/start11app/star11/www/getplayerdata.php', {pid:pid}, function (data) {
		
		console.log(data);
		
		var credit=data.playerdata["0"].credits;
		var pic=data.playerdata["0"].pic;
		var team=data.playerdata["0"].team;
		var player_desc=data.playerdata["0"].player_desc;
		var playername=data.playerdata["0"].playername;
		
		dynamicPopup.open();
		 
		dynamicPopup.on('opened', function (popup) {
		 	
 $$('#credits').text(credit);
 $$('#playerpic').attr("src",pic);
 $$('#team').text(team);
$$('#role').text(player_desc);
$$('#playername').text(playername);
 
});
		
		
	
	});
	
});
      
$$('.teamselection').on('click', function (e) {
	
	var invar = $$('input[name="WK_chk"]:checked');
	var invar1 = $$('input[name="batsman_chk"]:checked');
	var invar2 = $$('input[name="ar_chk"]:checked');
	var invar3 = $$('input[name="baller_chk"]:checked');
	

var wk=[];
var batsman=[];
var ar=[];
var baller=[];


 for (var sel_ctr= 0 ;sel_ctr < invar.length; sel_ctr++) {
   	
   	 	var wk_id = invar[sel_ctr].id;
   	 	var wk_name = $$('#'+wk_id).data("wkplayername");
   	 	var wk_credit = $$('#'+wk_id).data("wkcredit");
   	 	var wk_playerpic = $$('#'+wk_id).data("wkplayerpic");
   	 	var wk_playerid = $$('#'+wk_id).data("wkplayerid");
   	 		//console.log(wk_playerid);
   	 	wk.push({"wkname":wk_name,"wkcredit":wk_credit,"wkplayerpic":wk_playerpic,"wkplyid":wk_playerid});
   	 	//console.log(wk);
}

for (var sel_ctr= 0 ;sel_ctr < invar1.length; sel_ctr++) {
   		
   	 	var batsman_id = invar1[sel_ctr].id;
   	 	var batsman_name = $$('#'+batsman_id).data("batsname");
   	 	var batsman_credit = $$('#'+batsman_id).data("batcredit");
   	 	var bat_playerpic = $$('#'+batsman_id).data("batplayerpic");
   	 	var bat_playerid = $$('#'+batsman_id).data("batsmanplayerid");
   	 	//console.log(bat_playerid);
   	 	//console.log('arch');
   	 	batsman.push({"batsmanname":batsman_name,"batsmancredit":batsman_credit,"batplayerpic":bat_playerpic,"batplayerid":bat_playerid});
   	 	//console.log(batsman);
}
   
for (var sel_ctr= 0 ;sel_ctr < invar2.length; sel_ctr++) {
			
   	   var ar_id = invar2[sel_ctr].id;
   	 	var ar_name = $$('#'+ar_id).data("arname");
   	 	var ar_credit = $$('#'+ar_id).data("arcredit");
   	 	var ar_playerpic = $$('#'+ar_id).data("arplayerpic");
   	 	var ar_playerid = $$('#'+ar_id).data("arplayerid");
   	 	//console.log("hiii"+ar_playerid);
   	 	
   	 	ar.push({"arname":ar_name,"arcredit":ar_credit,"arplayerpic":ar_playerpic,"arplyid":ar_playerid});
   	 	//console.log(ar);
}

for (var sel_ctr= 0 ;sel_ctr < invar3.length; sel_ctr++) {
			
   		var baller_id = invar3[sel_ctr].id;
   	 	var baller_name = $$('#'+baller_id).data("ballername");
   	 	var baller_credit = $$('#'+baller_id).data("ballercredit");
   	 	var baller_playerpic = $$('#'+baller_id).data("ballerplayerpic");
   	 	var baller_playerid = $$('#'+baller_id).data("ballerplayerid");
   	 	
   	 	baller.push({"ballername":baller_name,"ballercredit":baller_credit,"ballerplayerpic":baller_playerpic,"ballerplyid":baller_playerid});
   	   //console.log(baller);
}
var wkdata = {data1: [wk]};
var batsmandata = {data2: [batsman]};
var ardata = {data3: [ar]};
var ballerdata = {data4: [baller]};

var alldata={wkdata,batsmandata,ardata,ballerdata};
console.log(alldata);

 var teampreviewTemplate = $$('#team_preview').html();
 var compiledteampreviewTemplate = Template7.compile(teampreviewTemplate);
 
 var selectcpTemplate = $$('#select_captain').html();
 var compiledselectcpTemplate = Template7.compile(selectcpTemplate);
 
 $$('#select_team').html(compiledteampreviewTemplate(alldata));
 $$('#select_cp').html(compiledselectcpTemplate(alldata));  
             
});

$$('#popup-selecpt').on('popup:opened', function (e, popup) {
 
  $$("input[type='radio']").on('click', function (e) {
 	
 	var id1 = $$('input[name=demo-radio1]:checked').attr('id');
   var id2 = $$('input[name=demo-radio2]:checked').attr('id');
   console.log(id1);
   console.log(id2);

	var opt1 = $$('input[name=demo-radio1]:checked').data("ply1");
	var opt2 = $$('input[name=demo-radio2]:checked').data("ply2");
	
	//console.log(opt1);
   //console.log(opt2);
  
   if (opt1==opt2){
   	  var currentsel = $$(this).attr("id");
   	  //console.log(currentsel);
   	  
   	  if(currentsel==id1){
   	   $$('#'+id1).prop('checked', true);
   	   $$('#'+id2).prop('checked', false);
   	  }
   	  else if(currentsel==id2){
   	   $$('#'+id2).prop('checked', true);
   	   $$('#'+id1).prop('checked', false);
   	  }
    }
    
  if (id1!=null && id2!=null) {
    	 
    	 $$("#savedata").removeClass("disabled");
 }
   
});
  	

$$('#savedata').on('click', function () 	{
	
	var captain=$$('input[name=demo-radio1]:checked').data("ply1");
	var vice_captain=$$('input[name=demo-radio2]:checked').data("ply2");
	
	//console.log(captain);
	//console.log(vice_captain);
	
	var MATCHID = localStorage.MATCHID;
	var TRNID = localStorage.TOURNAMENTID;
	var userid = localStorage.userid;
	
	if(typeof userid !== 'undefined' && userid !== ''){
		
		var MATCHID=localStorage.matchid1afterlogin;
		var TRNID=localStorage.trnid1afterlogin;	
	
	}
	
	 //console.log("computreeeeeeeeeee"+TRNID);
	
	 var allwk="";
	 var allbatsman = [];
	 var allar = [];
	 var allballer = [];
	 
	 allwk = $$('input[name=demo-radio1]').data("wkplayerid1");
	 
    $$('.list2').each(function() {
       allbatsman.push($$(this).data("batplayerid1"));
        });
        
    $$('.list3').each(function() {
       allar.push($$(this).data("arplayerid1"));
        });
        
    $$('.list4').each(function() {
       allballer.push($$(this).data("ballerplayerid1"));
        });
     
     var allplydata = allbatsman.concat(allar, allballer);
    
     //console.log(allplydata);
     
  		
app.request.postJSON('http://localhost/start11app/star11/www/saveteam.php', { allwk:allwk,allplydata:allplydata,MATCHID:MATCHID,TRNID:TRNID,userid:userid,captain:captain,vice_captain:vice_captain}, function (data) {
  			
  			 if (data == "Success") {
  			 	
  			 	app.popup.close('#popup-selecpt');
  			 	
  			 	 //$$("#myteam").show();
  			 	 
  			 	 
  			 	
  			 	app.router.navigate('/contests/', {
  										reloadCurrent: true,
  										 force: true,
										});  	
										
  			 	}
  		
  		});
  		
  		});
});

});

});


$$(document).on('page:init', '.page[data-name="contest"]', function (e) {
	
	var contestTemplate=$$("#contesttemplate").html();
	var compiledcontestTemplate=Template7.compile(contestTemplate);
	
	var teamname1 = e.detail.route.query.teamA;
	var teamname2 = e.detail.route.query.teamB;
	var teamid1 = e.detail.route.query.teamidA;
	var teamid2 = e.detail.route.query.teamidB;
	var matchid1 = e.detail.route.query.matchID;
	var trnid1 = e.detail.route.query.trnID;
	
	localStorage.teamname1afterlogin=teamname1;
	localStorage.teamname2afterlogin=teamname2;
	localStorage.teamid1afterlogin=teamid1;
	localStorage.teamid2afterlogin=teamid2;
	localStorage.matchid1afterlogin=matchid1;
	localStorage.trnid1afterlogin=trnid1;
	
	console.log(teamid1);
	console.log(teamid2);
	
	app.request.postJSON('http://localhost/start11app/star11/www/load_contest.php',{testdata:"testdata"}, function (data) {
	
	console.log(data);
	
	$$("#showcontest").html(compiledcontestTemplate(data));
	
	$$('.joincontest').on('click', function (e){
		
	var chkid = e.target.id;
	chkid="#"+chkid;
	//console.log(chkid);
	var entryfee = $$(chkid).data("entryfee");
	var contestid = $$(chkid).data("contestid");
   console.log(contestid);
		
	var userid = localStorage.userid;
	
	if(typeof userid !== 'undefined' && userid !== ''){
	
	var matchid=localStorage.matchid1afterlogin;
	var trnid=localStorage.trnid1afterlogin;
	
	app.request.postJSON('http://localhost/start11app/star11/www/checkteam.php',{userid:userid,matchid:matchid,trnid:trnid},function (data) {
	
	
	 localStorage.userteamid=data[1];
	 
	if (data[0] == "team is created") {
		
	 if(entryfee == 0){
	 
	 var userteamid=localStorage.userteamid;
	 console.log("userteamid"+userteamid)
	 app.request.postJSON('http://localhost/start11app/star11/www/savecontest.php',{userid:userid,userteamid:userteamid,contestid:contestid},function (data) {
	 	console.log("output"+data)
	 if (data == "success") {
     app.dialog.alert('You Joined the contest....Now try one of our cash contest to win real money');
    }
    if (data=="fail") {
     app.dialog.alert('You already joined this contest.....try another one');
    }
    
	});
	}
	
   
   if(entryfee > 0){
   	
   app.request.postJSON('http://localhost/start11app/star11/www/checkamount.php',{userid:userid},function (data) {
   	
   	console.log("balance"+data);
   	console.log("entryfee"+entryfee);
   
   if (parseFloat(data) > parseFloat(entryfee)) {
   	
   	var userteamid=localStorage.userteamid;
   	console.log(userteamid);
   	
   app.request.postJSON('http://localhost/start11app/star11/www/savecontest.php',{userid:userid,userteamid:userteamid,contestid:contestid},function (data) {
	 	
	 if (data == "success") {
     app.dialog.alert('You have Joined the contest successfully......');
    }
    if (data=="fail") {
     app.dialog.alert('You already joined this contest.....try another one');
    }
	
	});
   
   }
   else {
 				app.popup.open('#popup-joincontest');   
   }
   
   });
   }
   
   }
	
	if (data == "fail"){
		app.dialog.alert('First Create a team to join the contest');
   }
   
   
	
	});
	
}

else {
app.loginScreen.open('#my-login-screen');
}
		
});


	
});
});


$$(document).on('page:init', '.page[data-name="allcontest"]', function (e) {
	
	
	var allcontestTemplate=$$("#allcontesttemplate").html();
	var compiledallcontestTemplate=Template7.compile(allcontestTemplate);
	
	
	app.request.postJSON('http://localhost/start11app/star11/www/load_contest.php',{testdata:"testdata"}, function (data) {
	
	console.log(data);
	$$("#showallcontest1").html(compiledallcontestTemplate(data));
	$$("#showallcontest2").html(compiledallcontestTemplate(data));
	$$("#showallcontest3").html(compiledallcontestTemplate(data));
	$$("#showallcontest4").html(compiledallcontestTemplate(data));
	
});
});

$$(document).on('page:init', '.page[data-name="about"]', function (e) {
	
	 var logincricketTemplate = $$('#logincrickettemplate').html();
    var loginfootballTemplate = $$('#loginfootballtemplate').html();
    var loginkabaddiTemplate = $$('#loginkabadditemplate').html();
    
    var logincompiledcricketTemplate = Template7.compile(logincricketTemplate);
    var logincompiledfootballTemplate = Template7.compile(loginfootballTemplate);
    var logincompiledkabaddiTemplate=Template7.compile(loginkabaddiTemplate);
	
    app.request.postJSON('http://localhost/start11app/star11/www/load_match_data.php', function (data) {
      
    console.log(data);
    
     //localStorage.MATCHID = data.maindata["0"].data1["0"].matchid;
     //localStorage.TRNID = data.maindata["0"].data1["0"].trnid;
     
      $$('#load_cricket_match').html(logincompiledcricketTemplate(data)); 
      $$('#load_football_match').html(logincompiledfootballTemplate(data));
      $$('#load_kabaddi_match').html(logincompiledkabaddiTemplate(data));
              
  // 	 	 app.dialog.alert(data.posts[0].start_time);
//for (var cou= 1; cou <= data.posts.length; cou++) {
  //    var start_date=data.posts[cou].start_time;
      //app.dialog.alert(start_date);
    //  var countDownDate = new Date(start_date).getTime();
      //$$('#first_load_match').html(data.card["0"][cou]);
       //var counttim = countdown( new Date(2000, 0, 1) ).toString(); 
      
     // $$('#clocktm1').innerHTML('hiajai');
     //settime(countDownDate,cou);
    
      //}
   });
   
   var userid = localStorage.userid;
   var cktfixturesTemplate = $$('#cktfixturestemplate').html();
   var compiledcktfixturesTemplate = Template7.compile(cktfixturesTemplate);
   
   app.request.postJSON('http://localhost/start11app/star11/www/load_ckt_fixtures_data.php',{userid:userid},function (data) {
   	
   	console.log(data);
   	
   	 $$('#fix-cricket').html(compiledcktfixturesTemplate(data)); 
   	
   	 });
   	 
   var cktliveTemplate = $$('#cktlivetemplate').html();
   var compiledcktliveTemplate = Template7.compile(cktliveTemplate);
   
   app.request.postJSON('http://localhost/start11app/star11/www/load_ckt_live_data.php',{userid:userid}, function (data) {
   	
   	 console.log(data);
   	
   	 $$('#live-cricket').html(compiledcktliveTemplate(data)); 
   	
   	 });
   	 
   	  var cktresultTemplate = $$('#cktresulttemplate').html();
   var compiledcktresultTemplate = Template7.compile(cktresultTemplate);
   
   app.request.postJSON('http://localhost/start11app/star11/www/load_ckt_result_data.php',{userid:userid}, function (data) {
   	
   	 console.log(data);
   	
   	 $$('#result-cricket').html(compiledcktresultTemplate(data)); 
   	
   	 });
	
	      
});


$$(document).on('page:init', '.page[data-name="joinedcontests"]', function (e) {
	
	 var joinedcontestTemplate = $$('#joinedcontesttemplate').html();
	 var compiledjoinedcontestTemplate = Template7.compile(joinedcontestTemplate);
	 
	 var userid = localStorage.userid;
	 
	 app.request.postJSON('http://localhost/start11app/star11/www/load_joinedcontest.php',{userid:userid},function (data) {

      console.log(data);
      
      $$('#joinedcontest').html(compiledjoinedcontestTemplate(data)); 
	
});
});

$$(document).on('page:init', '.page[data-name="joinedcontestformatch"]', function (e) {
	
	 var joinedcontestformatchTemplate = $$('#joinedcontestformatchtemplate').html();
	 var compiledjoinedcontestformatchTemplate = Template7.compile(joinedcontestformatchTemplate);
	 
	 var userid = localStorage.userid;
	 var matchid = e.detail.route.query.matchid;
	 
	 app.request.postJSON('http://localhost/start11app/star11/www/load_joinedcontestformatch.php',{userid:userid,matchid:matchid},function (data) {

      //console.log(data);
      
      $$('#joinedcontestformatch').html(compiledjoinedcontestformatchTemplate(data)); 
      
$$('.viewusers').on('click', function (e){
	
	var chkid = e.target.id;
	    chkid="#"+chkid;
	
	var contestid = $$(chkid).data("contestid");
	
 app.request.postJSON('http://localhost/start11app/star11/www/load_allcontestusers.php',{contestid:contestid,matchid:matchid},function (data) {
 
    
      var contestname=data.contestuserdata["0"].contestname;
      var logo=data.contestuserdata["0"].logo;
      
      $$('#contestname').text(contestname);
      $$('#logo').attr("src",logo);
      
      var viewcontestusersTemplate = $$('#viewcontestusers').html();
	   var compiledviewcontestusersTemplate = Template7.compile(viewcontestusersTemplate);
      $$('#viewallcontestusers').html(compiledviewcontestusersTemplate(data)); 
});
	
});

	
});

});

$$(document).on('page:init', '.page[data-name="contestdetails"]', function (e) {
	
	 var contestid = e.detail.route.query.contestid;
	 //console.log(contestid);
	 
	 var matchid=localStorage.matchid1afterlogin;
	 
	 app.request.postJSON('http://localhost/start11app/star11/www/load_allcontestusers.php',{contestid:contestid,matchid:matchid},function (data) {
 
      console.log(data);
      
      var allcontestusersTemplate = $$('#allcontestusers').html();
	   var compiledallcontestusersTemplate = Template7.compile(allcontestusersTemplate);
	   
      $$('#contestusers').html(compiledallcontestusersTemplate(data)); 
	
});
	 

});



