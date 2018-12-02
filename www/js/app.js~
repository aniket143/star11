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


app.request.postJSON('http://139.59.36.238/star11APP/load_match_data.php', function (data) {
	
	
	if(typeof localStorage.userid === 'undefined' || localStorage.userid == ''){
  
    console.log(data);
    //console.log(data.maindata["0"].data1["0"].sportsid1);
     //console.log(data.maindata["1"].data2["0"].sportsid2);
      //console.log("sportid="+data.maindata["2"].data3["0"].sportsid3);
    
    //localStorage.SPORTID1 = data.maindata["0"].data1["0"].sportsid1;
    //localStorage.SPORTID2 = data.maindata["1"].data2["0"].sportsid2;
    //localStorage.SPORTID3 = data.maindata["2"].data3["0"].sportsid3;
   
      $$('#load_cricket_match').html(compiledcricketTemplate(data)); 
      $$('#load_football_match').html(compiledfootballTemplate(data));
      $$('#load_kabaddi_match').html(compiledkabaddiTemplate(data));
              
              }
              
              else {
 app.router.navigate('/about/', {
  										reloadCurrent: true,
  										ignoreCache: true,
										});                
              }
  for (var cou= 0; cou < data.maindata["0"].data1.length; cou++)
    {
     //calling clock function
     var matchtime = data.maindata["0"].data1[cou].start_time;
     var matchtm = new Date(matchtime).getTime();

     //console.log("servertim"+matchtime);
     var crkdiv = "clocktm";
  //call countdown clock
      countdown(cou,matchtime,crkdiv);
    }
    
        
    for (var cou1= 0; cou1 < data.maindata["1"].data2.length; cou1++)
    {
     //calling clock function
     var matchtime1 = data.maindata["1"].data2[cou1].start_time1;
     var matchtm1 = new Date(matchtime1).getTime();
     //console.log("time-".maindata["1"].data2[cou1].start_time1);
     //console.log("servertim"+matchtime);
     var crkdiv1 = "clocktm1";
  //call countdown clock
      countdown(cou1,matchtime1,crkdiv1);
    }

        for (var cou2= 0; cou2 < data.maindata["2"].data3.length; cou2++)
    {
     //calling clock function
     var matchtime2 = data.maindata["2"].data3[cou2].start_time2;
     var matchtm2 = new Date(matchtime2).getTime();
     //console.log("time-".maindata["1"].data2[cou1].start_time1);
     //console.log("servertim"+matchtime);
     var crkdiv2 = "clocktm2";
  //call countdown clock
      countdown(cou2,matchtime2,crkdiv2);
    }
   });
      
  //++++++++++++++++new countdown clock

 function countdown(tm,match_date,loc) {
  let days, hours, minutes, seconds;
  
  var endDate = new Date(match_date).getTime();
  
  if (isNaN(endDate)) {
	return;
  }
  

  setInterval(function () {
    let startDate = new Date();
    startDate = startDate.getTime();
    
    let timeRemaining = parseInt((endDate - startDate) / 1000);
    
    if (timeRemaining >= 0) {
      days = parseInt(timeRemaining / 86400);
      timeRemaining = (timeRemaining % 86400);
      
      hours = parseInt(timeRemaining / 3600);
      timeRemaining = (timeRemaining % 3600);
      
      minutes = parseInt(timeRemaining / 60);
      timeRemaining = (timeRemaining % 60);
      
      seconds = parseInt(timeRemaining);
      days = parseInt(days, 10);
      hours = ("0" + hours).slice(-2);
      minutes = ("0" + minutes).slice(-2);
      seconds = ("0" + seconds).slice(-2);
      //console.log(days);

        				$$('#'+loc+tm).text(days + "d " + hours + "h "+ minutes + "m " + seconds + "s ");
        				//document.getElementById('clocktm'+tm).innerHTML = (days + "d " + hours + "h "+ minutes + "m" + seconds + "s ");
    } else {
      return;
    }
  },1000);
}
// End Countdown clock ++++++++++++++++++++++++++++++

         
      
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
 app.request.postJSON('http://139.59.36.238/star11APP/chklogin.php', { email:email, pass:fpass }, function (data) {
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
  var gender = $$('#gender').val();
  var state = $$('#state').val();
  var referral = $$('#referral').val();
  var res= mailid.substring(0,4);
   
  var randomstring=stringGen(6);
     
  var teamnm = res.concat(randomstring);
  
  var result=isEmail(mailid);
  var respass=isPassword(password);
  
  var now = new Date();
  var born = new Date(birthdate.toString());
  age=get_age(born, now);
  //console.log(result);
  
if (result==true) {
	
	if (respass==true) {
		
		 if (age>18){
		 	
		 	if (state=="Assam" || state=="Nagaland" || state=="Orissa" || state=="Sikkim") {
		 		
		     app.dialog.alert("Can't select this state");
		      $$('#state').val(' ');
		 }
		 
else {
  	
app.request.postJSON('http://139.59.36.238/star11APP/user_registration.php', {mailid:mailid,password:password,contactno:contactno,birthdate:birthdate,gender:gender,state:state,referral:referral,teamnm:teamnm}, function (data) {
	
	
	//console.log(data);
	
	if (data == "Success") {
		
	app.dialog.alert('User Registration Done Successfully...', function () {
		
   app.loginScreen.open('#my-login-screen');
   
  });
		
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

function stringGen(len) {
  var text = "";
  
  var charset = "abcdefghijklmnopqrstuvwxyz0123456789";
  
  for (var i = 0; i < len; i++)
    text += charset.charAt(Math.floor(Math.random() * charset.length));
  
  return text;
}


}); 



$$('#my-login').on('click', function () 	{
	
 app.loginScreen.open('#my-login-screen');
	
}); 

}); 
//tab functions

$$('#critab').on('click', function (e) {
      //app.dialog.alert("cricket");
      localStorage.removeItem("sports");
      localStorage.setItem('sports','criket');
});
$$('#foottab').on('click', function (e) {
      //app.dialog.alert("football");
       localStorage.removeItem("sports");
      localStorage.setItem('sports','football');
});
$$('#kabtab').on('click', function (e) {
      //app.dialog.alert("kabbadi");
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
		
		if(typeof userid !== 'undefined' && userid !== ' '){
			console.log('logon');
			
		var teamname1=localStorage.teamname1afterlogin;
		console.log(teamname1);
		var teamname2=localStorage.teamname2afterlogin;
		var teamid1=localStorage.teamid1afterlogin;
		var teamid2=localStorage.teamid2afterlogin;
			
	   $$('#matchid').text(teamname1+' Vs '+teamname2);
}

	else {
		var datime = e.detail.route.query.dtetime ;
	var teamname1 = e.detail.route.query.teamA;
	var teamname2 = e.detail.route.query.teamB;	
	var teamid1 = e.detail.route.query.teamidA;
	var teamid2 = e.detail.route.query.teamidB;
	var matchid1 = e.detail.route.query.matchID;
	var trnid1 = e.detail.route.query.trnID;
	var sportID1 = e.detail.route.query.sportID;
   	console.log("before login"+sportID1);
   localStorage.MATCHID = matchid1;
   localStorage.TOURNAMENTID = trnid1;
   //localStorage.SPORTSID = sportID1;
   
		
	$$('#matchid').text(teamname1+' Vs '+teamname2);
	$$('#team1').text(teamname1);
	$$('#team2').text(teamname2);
	
	}
	
	
	//call timer
	var timloc = "mtime";
	var couloc='';
	 countdown(couloc,datime,timloc);
	
	var wkTemplate=$$('#wktemplate').html();
	var compiledwkTemplate=Template7.compile(wkTemplate);
	
	var batsmanTemplate=$$('#batsmantemplate').html();
	var compiledbtTemplate=Template7.compile(batsmanTemplate);
	
	var arTemplate=$$('#ARtemplate').html();
	var compiledarTemplate=Template7.compile(arTemplate);
	
	var ballerTemplate=$$('#ballertemplate').html();
	var compiledballerTemplate=Template7.compile(ballerTemplate);
	
	app.request.postJSON('http://139.59.36.238/star11APP/load_cricketplayers.php', { teamid1:teamid1,teamid2:teamid2 }, function (data) {
 	
 	$$('#wicketkp').html(compiledwkTemplate(data)); 
 	$$('#batsman').html(compiledbtTemplate(data));
 	$$('#allrounder').html(compiledarTemplate(data));  
 	$$('#baller').html(compiledballerTemplate(data));  
 	
	var totalcount=totalcount1=0;    		
var team1counter=team2counter=0;
var team11counter=team22counter=0;
var credit=0;

	$$('.checkbox').on('change', function (e) {
		
      	var chkbid = e.target.dataset.plyid;
      	chkbid="#"+chkbid;
      	var chkname = e.target.dataset.plyname;
      	
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

	app.request.postJSON('http://139.59.36.238/star11APP/getplayerdata.php', {pid:pid}, function (data) {
		
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
 
  $$("input[type='radio']").on('change', function (e) {
 	
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
     
  		
app.request.postJSON('http://139.59.36.238/star11APP/saveteam.php', { allwk:allwk,allplydata:allplydata,MATCHID:MATCHID,TRNID:TRNID,userid:userid,captain:captain,vice_captain:vice_captain}, function (data) {
  			
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
	
	app.request.postJSON('http://139.59.36.238/star11APP/load_contest.php',{testdata:"testdata",}, function (data) {
	
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
	
	app.request.postJSON('http://139.59.36.238/star11APP/checkteam.php',{userid:userid,matchid:matchid,trnid:trnid},function (data) {
	
	
	 localStorage.userteamid=data[1];
	 
	if (data[0] == "team is created") {
		
	 if(entryfee == 0){
	 
	 var userteamid=localStorage.userteamid;
	 console.log("userteamid"+userteamid)
	 app.request.postJSON('http://139.59.36.238/star11APP/savecontest.php',{userid:userid,userteamid:userteamid,contestid:contestid},function (data) {
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
   	
   app.request.postJSON('http://139.59.36.238/star11APP/checkamount.php',{userid:userid},function (data) {
   	
   	console.log("balance"+data);
   	console.log("entryfee"+entryfee);
   
   if (parseFloat(data) > parseFloat(entryfee)) {
   	
   	var userteamid=localStorage.userteamid;
   	console.log(userteamid);
   	
   app.request.postJSON('http://139.59.36.238/star11APP/savecontest.php',{userid:userid,userteamid:userteamid,contestid:contestid},function (data) {
	 	
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
	
	
	app.request.postJSON('http://139.59.36.238/star11APP/load_contest.php',{testdata:"testdata"}, function (data) {
	
	console.log(data);
	$$("#showallcontest1").html(compiledallcontestTemplate(data));
	$$("#showallcontest2").html(compiledallcontestTemplate(data));
	$$("#showallcontest3").html(compiledallcontestTemplate(data));
	$$("#showallcontest4").html(compiledallcontestTemplate(data));
	
});
});

$$(document).on('page:init', '.page[data-name="about"]', function (e) {
	
	 var logincricketTemplate = $$('#logincrickettemplate').html();
    //var loginfootballTemplate = $$('#loginfootballtemplate').html();
    var loginkabaddiTemplate = $$('#loginkabadditemplate').html();
    
    var logincompiledcricketTemplate = Template7.compile(logincricketTemplate);
    //var logincompiledfootballTemplate = Template7.compile(loginfootballTemplate);
    var logincompiledkabaddiTemplate=Template7.compile(loginkabaddiTemplate);
	
    app.request.postJSON('http://139.59.36.238/star11APP/load_match_data.php', function (data) {
      
    console.log(data);
    
     //localStorage.MATCHID = data.maindata["0"].data1["0"].matchid1;
     //localStorage.TOURNAMENTID = data.maindata["0"].data1["0"].trnid1;
     
      $$('#load_cricket_match').html(logincompiledcricketTemplate(data)); 
      //$$('#load_football_match').html(logincompiledfootballTemplate(data));
      $$('#load_kabaddi_match').html(logincompiledkabaddiTemplate(data));
              
   });
   
   var userid = localStorage.userid;
   var cktfixturesTemplate = $$('#cktfixturestemplate').html();
   var compiledcktfixturesTemplate = Template7.compile(cktfixturesTemplate);
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_ckt_fixtures_data.php',{userid:userid},function (data) {
   	
   console.log(data);
   	
   $$('#fix-cricket').html(compiledcktfixturesTemplate(data)); 
   	
   	 });
   	 
   var cktliveTemplate = $$('#cktlivetemplate').html();
   var compiledcktliveTemplate = Template7.compile(cktliveTemplate);
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_ckt_live_data.php',{userid:userid}, function (data) {
   	
   	 console.log(data);
   	
   	 $$('#live-cricket').html(compiledcktliveTemplate(data)); 
   	
   	 });
   	 
   	  var cktresultTemplate = $$('#cktresulttemplate').html();
   var compiledcktresultTemplate = Template7.compile(cktresultTemplate);
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_ckt_result_data.php',{userid:userid}, function (data) {
   	
   	 console.log(data);
   	
   	 $$('#result-cricket').html(compiledcktresultTemplate(data)); 
   	
   	 });
   	 
   	
   	 
   var kbdfixturesTemplate = $$('#kbdfixturestemplate').html();
   var compiledkbdfixturesTemplate = Template7.compile(kbdfixturesTemplate);
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_kbd_fixtures_data.php',{userid:userid},function (data) {
   	
   	
   	console.log("kbdfix"+data);
   	
   	 $$('#fix-kabaddi').html(compiledkbdfixturesTemplate(data)); 
   	 });
   	 
   	 
   	 var kbdliveTemplate = $$('#kbdlivetemplate').html();
   var compiledkbdliveTemplate = Template7.compile(kbdliveTemplate);
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_kbd_live_data.php',{userid:userid}, function (data) {
   	
   	console.log("kbdlive"+data);
   	
   	 $$('#live-kabaddi').html(compiledkbdliveTemplate(data)); 
   	
   	 });
   	 
   	 var kbdresultTemplate = $$('#kbdresulttemplate').html();
   var compiledkbdresultTemplate = Template7.compile(kbdresultTemplate);
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_kbd_result_data.php',{userid:userid}, function (data) {
   	
   	 console.log("kbdresult"+data);
   	 
   	 $$('#result-kabaddi').html(compiledkbdresultTemplate(data)); 
   	
   	 });


$$('#logout').on('click', function (e) {
    //console.log(e);
	    
      	    localStorage.userid = '';
      	    localStorage.enc_id = '';
      	   // console.log(localStorage.userid);
	      	  //  console.log(localStorage.enc_id);
     	    app.router.navigate('/', {
	  										reloadCurrent: true,
  										ignoreCache: true,
										});      
	});	      	      
});


$$(document).on('page:init', '.page[data-name="joinedcontests"]', function (e) {
	
	 var joinedcontestTemplate = $$('#joinedcontesttemplate').html();
	 var compiledjoinedcontestTemplate = Template7.compile(joinedcontestTemplate);
	 
	 var userid = localStorage.userid;
	 
	 app.request.postJSON('http://139.59.36.238/star11APP/load_joinedcontest.php',{userid:userid},function (data) {

      console.log(data);
      
      $$('#joinedcontest').html(compiledjoinedcontestTemplate(data)); 
	
});
});

$$(document).on('page:init', '.page[data-name="joinedcontestformatch"]', function (e) {
	
	 var joinedcontestformatchTemplate = $$('#joinedcontestformatchtemplate').html();
	 var compiledjoinedcontestformatchTemplate = Template7.compile(joinedcontestformatchTemplate);
	 
	 var userid = localStorage.userid;
	 var matchid = e.detail.route.query.matchid;
	 
	 app.request.postJSON('http://139.59.36.238/star11APP/load_joinedcontestformatch.php',{userid:userid,matchid:matchid},function (data) {

      //console.log(data);
      
      $$('#joinedcontestformatch').html(compiledjoinedcontestformatchTemplate(data)); 
      
$$('.viewusers').on('click', function (e){
	
	var chkid = e.target.id;
	    chkid="#"+chkid;
	
	var contestid = $$(chkid).data("contestid");
	
 app.request.postJSON('http://139.59.36.238/star11APP/load_allcontestusers.php',{contestid:contestid,matchid:matchid},function (data) {
 
    
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
	 
	 app.request.postJSON('http://139.59.36.238/star11APP/load_allcontestusers.php',{contestid:contestid,matchid:matchid},function (data) {
 
      console.log(data);
      
      var allcontestusersTemplate = $$('#allcontestusers').html();
	   var compiledallcontestusersTemplate = Template7.compile(allcontestusersTemplate);
	   
      $$('#contestusers').html(compiledallcontestusersTemplate(data)); 
	
});
	 

});

$$(document).on('page:init','.page[data-name="personaldetails"]', function (e) {
	
	var userid = localStorage.userid;
	
	console.log(userid);
	 
	 app.request.postJSON('http://139.59.36.238/star11APP/load_personaldetails.php',{userid:userid},function (data) {
 
      console.log(data);
      
      var email=data.personaldata["0"].email;
      var state=data.personaldata["0"].state;
      var dob=data.personaldata["0"].dob;
      var gender=data.personaldata["0"].gender;
      var teamname=data.personaldata["0"].teamname;
      var username=data.personaldata["0"].username;
      
      console.log(email);
       
      $$('#email1').val(email);
      $$('#state').val(state);
      $$('#dob').val(dob);
      $$('#gender').val(gender);
      $$('#teamname').val(teamname);
      $$('#fullname').val(username);
      
});

$$('.savedetails').on('click', function (){
	
	 var teamname = $$('#teamname').val();
	 var fullname = $$('#fullname').val();
	 var dob = $$('#dob').val();
	 var state = $$('#state').val();
	 var userid = localStorage.userid;
	 
	 console.log(teamname);
	 
	 app.request.postJSON('http://139.59.36.238/star11APP/save_personaldetails.php',{userid:userid,teamname:teamname,fullname:fullname,dob:dob,state:state},function (data) {
	 	
	 	console.log(data);
	 	
	 	if (data == "Success") {
		
	app.dialog.alert('Your Profile has been Successfully Updated...');
		
  }
	 	
});	 
	
});

});


$$(document).on('page:init', '.page[data-name="createteamkabaddi"]', function (e) {
	
		var userid = localStorage.userid;
		
		if(typeof userid !== 'undefined' && userid !== ''){
		
		console.log('logon');
			
		var teamname1=localStorage.teamname1afterlogin;
		console.log("hiii"+teamname1);
		var teamname2=localStorage.teamname2afterlogin;
		var teamid1=localStorage.teamid1afterlogin;
		var teamid2=localStorage.teamid2afterlogin;
			
	   $$('#matchid').text(teamname1+' Vs '+teamname2);
}

	else {
		
	var timlockab = e.detail.route.query.dtetime;
	var teamname1 = e.detail.route.query.teamA;
	var teamname2 = e.detail.route.query.teamB;	
	var teamid1 = e.detail.route.query.teamidA;
	var teamid2 = e.detail.route.query.teamidB;
	var matchid1 = e.detail.route.query.matchID;
	var trnid1 = e.detail.route.query.trnID;
	//var sportID1 = e.detail.route.query.sportID;
   	console.log("before login"+matchid1);
   	console.log("before login"+trnid1);
   localStorage.MATCHIDKBD = matchid1;
   localStorage.TOURNAMENTIDKBD = trnid1;
   //localStorage.SPORTSID = sportID1;
   
		
	$$('#matchid').text(teamname1+' Vs '+teamname2);
	$$('#team1').text(teamname1);
	$$('#team2').text(teamname2);
	
	}
	
	var timloc = "mtimekab";
   var couloc='';
   countdown(couloc,timlockab,timloc);
	
	
	var defenderTemplate=$$('#defendertemplate').html();
	var compileddefenderTemplate=Template7.compile(defenderTemplate);
	
	var arTemplate=$$('#allroundertemplate').html();
	var compiledarTemplate=Template7.compile(arTemplate);
	
	var raiderTemplate=$$('#raidertemplate').html();
	var compiledraiderTemplate=Template7.compile(raiderTemplate);
	
	app.request.postJSON('http://139.59.36.238/star11APP/load_kabbaddiplayers.php', { teamid1:teamid1,teamid2:teamid2 }, function (data) {
 	
 	console.log(data);
 	
 	$$('#defender').html(compileddefenderTemplate(data)); 
 	$$('#allrounder').html(compiledarTemplate(data)); 
 	$$('#raiders').html(compiledraiderTemplate(data)); 
 	
var totalcount=totalcount1=0;    		
var team1counter=team2counter=0;
var team11counter=team22counter=0;
var credit=0;
var counterar =0;

	$$('.checkbox').on('change', function (e) {
		
      	var chkbid = e.target.dataset.plyid;
      	chkbid="#"+chkbid;
      	var chkname = e.target.dataset.plyname;
      	
      	console.log(chkbid);
      	console.log(chkname);
      	
      	var defenderteamcode = $$(chkbid).data("defenderteamcode");
      	//console.log(wkteamcode);
      	var arteamcode = $$(chkbid).data("arteamcode");
      	var raiderteamcode = $$(chkbid).data("raiderteamcode");
      	
      	var defendercredit = parseInt($$(chkbid).data("defendercredit"));
      	//console.log(defendercredit);
      	var arcredit = parseInt($$(chkbid).data("arcredit"));
      	var raidercredit = parseInt($$(chkbid).data("raidercredit"));
      
   	   var isChecked = $$(chkbid).prop('checked'); 
   	   console.log(isChecked);
   	    

if (chkname=="defender_chk") {	
		  if(isChecked ==true){
		  	
			  	team1counter=parseInt($$('#team1cnt').html());
		   	team2counter=parseInt($$('#team2cnt').html());
				var counter = parseInt($$('#countDEF').html());
				totalcount = parseInt($$('#totalplayer').html());
				console.log(parseInt($$('#countDEF').html()));
				credit = parseInt($$('#credit').html());
				
		if (totalcount<7) {
				    
		  if(counter >= 4){
		    		 app.dialog.alert("Only 4 defenders are Allowed ");
		    		 $$(chkbid).prop('checked',false)
		    		 }
		    		 
		    		 
		  else{
		  	credit=credit+defendercredit;
		  	 if (credit<=100) {
		    		  credit=credit+"/100";
		    		 $$('#credit').html(credit);
		   		 
		    		 if (defenderteamcode==teamname1) {
		    		 	if (team1counter<5) {
		    		 	 counter++;
		    		 	 if (counter==4) {
		    		 	   $$('#countDEF').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team1counter++;
		    		 $$('#countDEF').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team1cnt').html(team1counter);
		    		 }else {
							app.dialog.alert("Max 5 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		 if(defenderteamcode==teamname2){
		    		 		if (team2counter<5) {
		    		 	 counter++;
		    		 	 if (counter==4) {
		    		 	   $$('#countDEF').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team2counter++;
		    		 $$('#countDEF').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team2cnt').html(team2counter);
		    		 }else {
							app.dialog.alert("Max 5 players allowed from one team");
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
		    		 app.dialog.alert("Only 7 Players are Allowed ");
		    		 $$(chkbid).prop('checked',false);
		    		}
		    	
	       }
	       
	     else if (isChecked ==false){
	     	var couter1 = parseInt($$('#countDEF').html());
	     	totalcount1 = parseInt($$('#totalplayer').html());
	     	team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				counter1 = couter1-1;
				totalcount1--;
				credit1=credit1-defendercredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (counter1 >= 0) {
				$$('#countDEF').html(counter1);
				if (counter1<4) {
				$$('#countDEF').removeClass('badge color-green');
				$$('#countDEF').addClass('badge color-red');
				}
				$$('#totalplayer').html(totalcount1);
		    	}
		    	
		    	if (defenderteamcode==teamname1) {
		    		 team11counter--;
		    		 $$('#team1cnt').html(team11counter);
		    		 }
		    		 if(defenderteamcode==teamname2){
		    		 team22counter--;
		    		 $$('#team2cnt').html(team22counter);
		    		 }
		     	}
	     }
	   

else if (chkname=="ar_chk") {	
		  if(isChecked ==true){
		  	
		  		team1counter=parseInt($$('#team1cnt').html());
		   	team2counter=parseInt($$('#team2cnt').html());
				counterar = parseInt($$('#countALL').html());
				totalcount = parseInt($$('#totalplayer').html());
				credit = parseInt($$('#credit').html());
				
				 if (totalcount<7) {
				    
		       if(counterar >= 2){
		    		 app.dialog.alert("Only 2 Allrounders are Allowed ");
		    		 $$(chkbid).prop('checked',false)
		    		 }
		    		 
		     else{
		     	
		     	
		     	credit=credit+arcredit;
		     	
		     	 if (credit<=100) {
		    		  credit=credit+"/100";
		    		 $$('#credit').html(credit);
		    		 
		    		 if (arteamcode==teamname1 ) {
		    		 	if (team1counter<5) {
		    		 		counterar++;
		    		 		totalcount++;
		    		 		team1counter++;
		    		 		$$('#countALL').html(counterar);
		    		 		if (counterar==2) {
		    		 	   $$('#countALL').addClass('badge color-green');
		    		 		}
		    		 		$$('#totalplayer').html(totalcount);
		    		 		$$('#team1cnt').html(team1counter);
		    		 }else {
							app.dialog.alert("Max 5 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		
		    		 if(arteamcode==teamname2){
		    		 		if (team2counter<5) {
		    		 counterar++;
		    		 totalcount++;
		    		 team2counter++;
		    		 $$('#countALL').html(counterar);
		    		 if (counterar==2) {
		    		 	   $$('#countALL').addClass('badge color-green');
		    		 		}
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team2cnt').html(team2counter);
		    		 }else {
							app.dialog.alert("Max 5 players allowed from one team");
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
		    		 app.dialog.alert("Only 7 Players are Allowed ");
		    		  $$(chkbid).prop('checked',false);
		    		}
	       }
	       
	     else if (isChecked ==false){
	     	var couterar1 = parseInt($$('#countALL').html());
	     	totalcount1 = parseInt($$('#totalplayer').html());
	     	team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				couterar1 = couterar1-1;
				totalcount1--;
				credit1=credit1-arcredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (couterar1 >= 0) {
					
				$$('#countALL').html(couterar1);
				if (couterar1<2) {
				$$('#countALL').removeClass('badge color-green');
				$$('#countALL').addClass('badge color-red');
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

	     	
else if (chkname=="raider_chk") {	
		  if(isChecked ==true){
		  	
			  	team1counter=parseInt($$('#team1cnt').html());
		   	team2counter=parseInt($$('#team2cnt').html());
				var counter = parseInt($$('#countRAI').html());
				totalcount = parseInt($$('#totalplayer').html());
				console.log(parseInt($$('#countRAI').html()));
				credit = parseInt($$('#credit').html());
				
		if (totalcount<7) {
				    
		  if(counter >= 3){
		    		 app.dialog.alert("Only 3 raiders are Allowed ");
		    		 $$(chkbid).prop('checked',false)
		    		 }
		    		 
		    		 
		  else{
		  	credit=credit+raidercredit;
		  	 if (credit<=100) {
		    		  credit=credit+"/100";
		    		 $$('#credit').html(credit);
		   		 
		    		 if (raiderteamcode==teamname1) {
		    		 	if (team1counter<5) {
		    		 	 counter++;
		    		 	 if (counter==3) {
		    		 	   $$('#countRAI').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team1counter++;
		    		 $$('#countRAI').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team1cnt').html(team1counter);
		    		 }else {
							app.dialog.alert("Max 5 players allowed from one team");
							$$(chkbid).prop('checked',false);
						}
		    		 }
		    		 if(raiderteamcode==teamname2){
		    		 		if (team2counter<5) {
		    		 	 counter++;
		    		 	 if (counter==3) {
		    		 	   $$('#countRAI').addClass('badge color-green');
		    		 		}
		    		 totalcount++;
		    		 team2counter++;
		    		 $$('#countRAI').html(counter);
		    		 $$('#totalplayer').html(totalcount);
		    		 $$('#team2cnt').html(team2counter);
		    		 }else {
							app.dialog.alert("Max 5 players allowed from one team");
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
		    		 app.dialog.alert("Only 7 Players are Allowed ");
		    		 $$(chkbid).prop('checked',false);
		    		}
		    	
	       }
	       
	     else if (isChecked ==false){
	     	var couter1 = parseInt($$('#countRAI').html());
	     	totalcount1 = parseInt($$('#totalplayer').html());
	     	team11counter=parseInt($$('#team1cnt').html());
	      team22counter=parseInt($$('#team2cnt').html());
	      credit1 = parseInt($$('#credit').html());
	      
				counter1 = couter1-1;
				totalcount1--;
				credit1=credit1-raidercredit;
				credit1=credit1+"/100";
				$$('#credit').html(credit1);
				
				if (counter1 >= 0) {
				$$('#countRAI').html(counter1);
				if (counter1<3) {
				$$('#countRAI').removeClass('badge color-green');
				$$('#countRAI').addClass('badge color-red');
				}
				$$('#totalplayer').html(totalcount1);
		    	}
		    	
		    	if (raiderteamcode==teamname1) {
		    		 team11counter--;
		    		 $$('#team1cnt').html(team11counter);
		    		 }
		    		 if(raiderteamcode==teamname2){
		    		 team22counter--;
		    		 $$('#team2cnt').html(team22counter);
		    		 }
		     	}
	     }
	     
	     if (totalcount==7 && counterar==0 && totalcount1==0) {
	     
	         app.dialog.alert("Pick atleast one Allrounder");	
	     
	     }
	     
	      if (totalcount==7) {
	      $$('#selec_cp').prop('disabled', false);
	     }
	     else {
	      $$('#selec_cp').prop('disabled', true);
	     }
	   

});



$$('.teamselection_kbd').on('click', function (e) {
	
	var invar = $$('input[name="defender_chk"]:checked');
	var invar1 = $$('input[name="ar_chk"]:checked');
	var invar2 = $$('input[name="raider_chk"]:checked');

var defender=[];
var ar=[];
var raider=[];

 for (var sel_ctr= 0 ;sel_ctr < invar.length; sel_ctr++) {
   	
   	 	var defender_id = invar[sel_ctr].id;
   	 	var defender_name = $$('#'+defender_id).data("defenderplayername");
   	 	var defender_credit = $$('#'+defender_id).data("defendercredit");
   	 	var defender_playerpic = $$('#'+defender_id).data("defenderplayerpic");
   	 	var defender_playerid = $$('#'+defender_id).data("defenderplayerid");
   	 	defender.push({"defendername":defender_name,"defendercredit":defender_credit,"defenderplayerpic":defender_playerpic,"defenderplyid":defender_playerid});
  
}

for (var sel_ctr= 0 ;sel_ctr < invar1.length; sel_ctr++) {
			
   	   var ar_id = invar1[sel_ctr].id;
   	 	var ar_name = $$('#'+ar_id).data("arname");
   	 	var ar_credit = $$('#'+ar_id).data("arcredit");
   	 	var ar_playerpic = $$('#'+ar_id).data("arplayerpic");
   	 	var ar_playerid = $$('#'+ar_id).data("arplayerid");
   	 	
   	 	ar.push({"arname":ar_name,"arcredit":ar_credit,"arplayerpic":ar_playerpic,"arplyid":ar_playerid});
}

for (var sel_ctr= 0 ;sel_ctr < invar2.length; sel_ctr++) {
   		
   	 	var raider_id = invar2[sel_ctr].id;
   	 	var raider_name = $$('#'+raider_id).data("raidername");
   	 	var raider_credit = $$('#'+raider_id).data("raidercredit");
   	 	var raider_playerpic = $$('#'+raider_id).data("raiderplayerpic");
   	 	var raider_playerid = $$('#'+raider_id).data("raiderplayerid");
   	 	
   	 	raider.push({"raidername":raider_name,"raidercredit":raider_credit,"raiderplayerpic":raider_playerpic,"raiderplayerid":raider_playerid});
   	 
}
   


var defenderdata = {data1: [defender]};
var ardata = {data2: [ar]};
var raiderdata = {data3: [raider]};

var alldata={defenderdata,ardata,raiderdata};
console.log(alldata);

 var teampreviewTemplate = $$('#team_preview').html();
 var compiledteampreviewTemplate = Template7.compile(teampreviewTemplate);
 
 var selectcpTemplate = $$('#select_captain').html();
 var compiledselectcpTemplate = Template7.compile(selectcpTemplate);
 
 $$('#select_team').html(compiledteampreviewTemplate(alldata));
 $$('#select_cp').html(compiledselectcpTemplate(alldata));  
             
});


$$('#popup-selecpt').on('popup:opened', function (e, popup) {
 
  $$("input[type='radio']").on('change', function (e) {
 	
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
	
	var MATCHID_KBD = localStorage.MATCHIDKBD;
	var TRNID_KBD = localStorage.TOURNAMENTIDKBD;
	var userid = localStorage.userid;
	
	//console.log("matchidkbd"+MATCHID_KBD);
	//console.log("trid"+TRNID_KBD);
	//console.log(userid);
	
	if(typeof userid !== 'undefined' && userid !== ''){
		
		var MATCHID_KBD=localStorage.matchid1afterlogin;
		var TRNID_KBD=localStorage.trnid1afterlogin;	
	
	}
	
	 //console.log("computreeeeeeeeeee"+TRNID);
	
	
	 var alldefender = [];
	 var allar = [];
	 var allraider = [];
	
	 
    $$('.list1').each(function() {
       alldefender.push($$(this).data("defenderplyid1"));
        });
        
    $$('.list2').each(function() {
       allar.push($$(this).data("arplayerid1"));
        });
        
    $$('.list3').each(function() {
       allraider.push($$(this).data("raiderplayerid1"));
        });
     
     var allplykbddata = alldefender.concat(allar, allraider);
    
     //console.log(allplydata);
     
  		
app.request.postJSON('http://139.59.36.238/star11APP/saveteam_kbd.php', {allplykbddata:allplykbddata,MATCHID_KBD:MATCHID_KBD,TRNID_KBD:TRNID_KBD,userid:userid,captain:captain,vice_captain:vice_captain}, function (data) {
  			
  			 if (data == "Success") {
  			 	
  			 	app.popup.close('#popup-selecpt');
  			 	
  			 	 //$$("#myteam").show();
  			 	  	
  			 	app.router.navigate('/contestskabaddi/', {
  										reloadCurrent: true,
  										 force: true,
										});  	
										
  			 	}
  		
  		});
  		
  		});


});

});


});


$$(document).on('page:init', '.page[data-name="contestkbd"]', function (e) {
	
	var kbdcontestTemplate=$$("#kbdcontesttemplate").html();
	var compiledkbdcontestTemplate=Template7.compile(kbdcontestTemplate);
	
	var teamname1 = e.detail.route.query.teamA;
	var teamname2 = e.detail.route.query.teamB;
	var teamid1 = e.detail.route.query.teamidA;
	var teamid2 = e.detail.route.query.teamidB;
	var matchid1 = e.detail.route.query.matchID;
	var trnid1 = e.detail.route.query.trnID;
	var sportID = e.detail.route.query.sportID;
	
	//console.log("sportID"+teamname1);
	//console.log("team"+teamname2);
	
	localStorage.teamname1afterlogin=teamname1;
	localStorage.teamname2afterlogin=teamname2;
	localStorage.teamid1afterlogin=teamid1;
	localStorage.teamid2afterlogin=teamid2;
	localStorage.matchid1afterlogin=matchid1;
	localStorage.trnid1afterlogin=trnid1;
	
	//console.log(teamid1);
	//console.log(teamid2);
	
	app.request.postJSON('http://139.59.36.238/star11APP/load_kbdcontest.php',{testdata:"testdata"}, function (data) {
	
	console.log(data);
	
	$$("#showcontest").html(compiledkbdcontestTemplate(data));
	
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
	
	app.request.postJSON('http://139.59.36.238/star11APP/checkteamforkabaddi.php',{userid:userid,matchid:matchid,trnid:trnid},function (data) {
	
	
	 localStorage.userteamid=data[1];
	 
	if (data[0] == "team is created") {
		
	 if(entryfee == 0){
	 
	 var userteamid=localStorage.userteamid;
	 console.log("userteamid"+userteamid)
	 app.request.postJSON('http://139.59.36.238/star11APP/savecontest.php',{userid:userid,userteamid:userteamid,contestid:contestid},function (data) {
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
   	
   app.request.postJSON('http://139.59.36.238/star11APP/checkamount.php',{userid:userid},function (data) {
   	
   	console.log("balance"+data);
   	console.log("entryfee"+entryfee);
   
   if (parseFloat(data) > parseFloat(entryfee)) {
   	
   	var userteamid=localStorage.userteamid;
   	console.log(userteamid);
   	
   app.request.postJSON('http://139.59.36.238/star11APP/savecontest.php',{userid:userid,userteamid:userteamid,contestid:contestid},function (data) {
	 	
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

$$(document).on('page:init', '.page[data-name="joinedcontestskbd"]', function (e) {
	
	 var kbdjoinedcontestTemplate = $$('#kbdjoinedcontesttemplate').html();
	 var compiledkbdjoinedcontestTemplate = Template7.compile(kbdjoinedcontestTemplate);
	 
	 var userid = localStorage.userid;
	 
	 app.request.postJSON('http://139.59.36.238/star11APP/load_kbdjoinedcontest.php',{userid:userid},function (data) {

      console.log(data);
      
      $$('#kbdjoinedcontest').html(compiledkbdjoinedcontestTemplate(data)); 
	
});
});


$$(document).on('page:init', '.page[data-name="cktpointsys"]', function (e) {
	
	
		
  $$('#home1').on('click', function (e) {
 
  if(typeof localStorage.userid === 'undefined' || localStorage.userid == ' '){
  	
  app.router.navigate('/', {
  										reloadCurrent: true,
  										//ignoreCache: true,
										});   
										
}

else {

app.router.navigate('/about/', {
  										reloadCurrent: true,
  										//ignoreCache: true,
										});  
}
            
});
		
		
});


$$(document).on('page:init', '.page[data-name="mykbdteam"]', function (e) {
	
	var userid = localStorage.userid;
	var matchid=localStorage.matchid1afterlogin;
   var trnid=localStorage.trnid1afterlogin;
   
   console.log("myteam"+userid);
   console.log("myteam"+matchid);
   console.log("myteam"+trnid);
   
   var mykbdteamTemplate = $$('#mykbdteamtemplate').html();
   var compiledmykbdteamTemplate = Template7.compile(mykbdteamTemplate); 	
   
   app.request.postJSON('http://139.59.36.238/star11APP/load_team.php', { userid:userid,matchid:matchid,trnid:trnid}, function (data) {
 	
   console.log(data);
 
 
  $$('#mykbdteam').html(compiledmykbdteamTemplate(data)); 
 	

});

});

$$(document).on('page:init', '.page[data-name="myteampreviewkbd"]', function (e) {
	
	var kbdcustteamid = e.detail.route.query.custteamid;
	
	console.log(kbdcustteamid);
	
	var mykbdteampreviewTemplate = $$('#mykbdteampreview').html();
   var compiledmykbdteampreviewTemplate = Template7.compile(mykbdteampreviewTemplate); 
   
	app.request.postJSON('http://139.59.36.238/star11APP/teampreviewkbd.php', { kbdcustteamid:kbdcustteamid}, function (data) {
	
	
	//console.log("teampreview"+data);
	
	$$('#mykabadditeam').html(compiledmykbdteampreviewTemplate(data));  
	 
	});
	});
	
	$$(document).on('page:init', '.page[data-name="withdraw"]', function (e) {
	
	
		var userid = localStorage.userid;
		
		console.log("useridforveri"+userid);
		
	$$('.mobileverify').on('click', function () 	{
		
		
		 var email = $$('#email').val();
       var mobileno = $$('#mobileno').val();
       
       //console.log("email"+email);
        // console.log("mobileno"+mobileno);
	
	app.request.postJSON('http://139.59.36.238/star11APP/mobile_verify.php', { userid:userid,email:email,mobileno:mobileno}, function (data) {
	
	console.log(data);
	
	if (data=="success") {
	
	app.dialog.alert('Your mailid and mobile number is verified');
	}
	
	else {
	
	app.dialog.alert('Incorrect Input data');
	}
	 });
	 
	});
	
	
	$$('.panverify').on('click', function () 	{
		
		var userid=localStorage.userid;
		
		var username = $$('#name').val();
      var panno = $$('#panno').val();
      var birthdate = $$('#birthdate').val();
      var state = $$('#state').val();
      var panimage = $$('#panimage').val();
		console.log(panimage);
		
		app.request.postJSON('http://139.59.36.238/star11APP/pan_verify.php', {userid:userid,username:username,panno:panno,birthdate:birthdate,state:state}, function (data) {
		
		console.log(data);
		
		 });
		 });
	
	});
	



