<?php

use Faker\Factory as Faker;

class QuestionTableSeeder extends Seeder {
    
    public function run() {

        $user_id = 1;

        $question = new Question();
        $question->Premium = 'Yes';
        $question->title = <<<'TITLE'
                javascript - Android phonegap application having issues with SQlite and local storage on Samsung Galaxy devices 
TITLE;
        $question->content = <<<'CONTENT'
        <p>I am having an issue with a PhoneGap app that has been built for both Android and iOS. On iOS and most Android devices, it's functioning perfectly, except for Samsung Galaxy S3 and S4.</p><p>On the first page load, the app creates a local SQL database. This database is used to store values from questions and answers throughout the app.</p><p>The issue I am having on the Samsung devices is that the database will not load properly the first time the app is run, however if a user closes the app completely and reopens it, the database is created with no errors. Because the first page requires a user to enter their age and then stores the value in a SQL database, users are getting the impression that the app has frozen at this point.</p> <pre class="language-javascript"><code>Initialization code for database;index.html;document.addEventListener("deviceready", onDeviceReady, false);
            function onDeviceReady();
            populateDB();
            main_js.js;
            function populateDB();
            var db = window.openDatabase("Database", "1.0", "My Database", 20000);
            db.transaction(populate_DB, errorCB, successCB);
            function populate_DB(tx);tx.executeSql('CREATE TABLE IF NOT EXISTS Options (ID INTEGER UNIQUE NOT NULL, Name TEXT NOT NULL, Value INTEGER NOT NULL)');
            tx.executeSql('CREATE TABLE IF NOT EXISTS Questions (ID INTEGER UNIQUE NOT NULL, Question TEXT NOT NULL, Answer TEXT)');
            tx.executeSql('INSERT OR IGNORE INTO Options (ID, Name, Value) VALUES (1, "License", 0)');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (0, "Age","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (1, "two","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (2, "three","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (3, "four","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (4, "five","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (5, "six","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (6, "seven","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (7, "eigth","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (8, "nine","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (9, "ten","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (10, "eleven","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (11, "twelve","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (12, "thirteen","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (13, "fourteen","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (14, "fifteen","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (15, "sixteen","")');
            tx.executeSql('INSERT OR IGNORE INTO Questions (ID, Question, Answer) VALUES (16, "seventeen","")');
            age_button_pressed;
            function age_save();
            var db = window.openDatabase("Database", "1.0", "My Database", 20000);
            loc = "q_sex.html;
            db.transaction(age_query, errorCB);
            function age_query(tx);
            var age = document.getElementById("a_age").value;tx.executeSql('UPDATE Questions SET Answer = "' + age + '" WHERE ID="0",', [], q_querySuccess, errorCB)</code></pre><p>After age_button_pressed, there is nothing that happens and the database does not update the result.;It is only a problem on the Samsung Galaxy S3 and S4, and I am wondering if Samsung's WebKit has something to do with it?</p>
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Ember.js: Reloading a .hasMany relationship given through &quot;links&quot; in payload 
TITLE;
        $question->content = <<<'CONTENT'
        <p>Say I have two models, Topic and Post:</p>

        <pre class="language-javascript"><code>
        App.Topic = DS.Model.extend;
        posts: DS.hasMany('post', { async: true, inverse: 'post' });
        App.Post = DS.Model.extend;topic: DS.belongsTo('topic', { async: true }); </code> </pre>
        <p>Topic hasMany Posts, and a Post belongsTo a Topic.To load the data from the API, one initial call is made (which fetches a topic... topic ID 2 for example)</p> <pre class="language-javascript"> <code>GET /topics/2 </code></pre>
        <p>After receiving the payload for this GET request, the serializer then appends a links key to the payload. This has the route to load the Posts associated with the topic: topic id": 2 links posts": "/topics/2/posts</p>
        <p>This second request (to /topics/2/posts) is how the Posts are loaded and attached to the topic.;This all works fine when the page is first loaded.</p><p>The problem occurs when a Post is created during a page session. While I can get the topic itself to reload (by calling.reload() on the model object that represents the topic), the Posts associated with the topic are not reloaded. The second API call (to get the posts) is never even made, while the first call (to get just the topic) is made. If I refresh the page, the posts I created on the previous page load will load (but of course, if I then go and make some more posts, they won't show up until the next page load).</p>
        <p>Looking for a solution, I came across this question;How to reload an async with links hasMany relationship? </p>
        <p> However, it appears that the solution no longer works for the current versions of Ember/Ember-Data. The JSFiddle provided does not function.</p>
        <p>So, how can I reload this sort of hasMany relationship? Any help is greatly appreciated.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Knockout js - beforeRemove animation while adding items to observable array 
TITLE;
        $question->content = <<<'CONTENT'
        I have a problem with knockout js and displaying an observable array as a list, When adding an item while the beforeRemove animation is running, the removed element is moved to the bottom of the list instead of staying in its position until the animation has finished and the element is removed.;Here is a jsfiddle to explain the problem a little better: http://jsfiddle.net/bPP5Q/8/;Anyone know how i could solve this?;javascript;jQuery(function ($);var ViewModel = function (data);var self = this;self.data = ko.observableArray(data);self.removeLine = function (elem);if (elem.nodeType === 1) $(elem).fadeOut(3000, function ();$(elem).remove();self.addLine = function (elem);if (elem.nodeType === 1);$(elem).hide().fadeIn(3000);self.removeItem = function();self.data.remove(function(item) { return item.test &&& item.test == 2;self.addItem = function();self.data.splice(1, 0, { test: 9 });self.addremove = function ();self.removeItem();var id = setInterval(function();self.addItem();clearInterval(id);1000);var vm = new ViewModel([{ test: 9 }, { test: 2 }, { test: 1 }, { test: 1 }, { test: 1 }, { test: 1 }, { test: 1 }]);ko.applyBindings(vm);HTML;Click
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Ember js - Hasmany relationships breaks after updating other tables 
TITLE;
        $question->content = <<<'CONTENT'
        I am using ember js with local-storage-adapter. i have a weird problem while updating records.;I have post and comments model with hasmany relationships;App.Post = DS.Model.extend;title: DS.attr('string');comments: DS.hasMany('comment',{async:true});App.Comment = DS.Model.extend;message: DS.attr('string');This is my post and comments controllers;App.PostsController = Ember.ArrayController.extend;newTitle: ';actions;create: function();var title = this.get('newTitle');var post = this.store.createRecord('post;title: 
title;this.set('newTitle', '');post.save();App.CommentsController = Ember.ArrayController.extend;needs: "post;post: Ember.computed.alias("controllers.post.model");newMessage: ';actions;create: function();var message = this.get('newMessage');var comment = this.store.createRecord('comment;message: message;var post = this.get('post');var comments = post.get('comments');if(comments.get('content') == null);comments.set('content', []);comments.pushObject(comment);comment.save();post.save();While creating records hasmany relations updated correctly.;{"App.Post":{"records":{"0v66j":{"id":"0v66j","title":"post1","comments":["p31al","tgjtj"]}}};App.Comment":{"records":{"p31al":{"id":"p31al","message":"comment 1"},"tgjtj":{"id":"tgjtj;message":"comment 2"}}}};I got problem while editing post. The relationships gone after editing post record. I have searched for it and find the code;DS.JSONSerializer.reopen({ serializeHasMany: function(record, json, relationship);var key = relationship.key;var relationshipType = DS.RelationshipChange.determineRelationshipType;record.constructor, relationship);// alert(relationshipType);if (relationshipType === 'manyToNone;relationshipType === 'manyToMany;relationshipType === 'manyToOne');json[key] = Ember.get(record, key).mapBy('id');// TODO support for polymorphic manyToNone and manyToMany;// relationships;This did the trick and it worked fine. But now i got another problem. If i edit any other record, all the id references are replaced by whole object like this;{"App.Post":{"records":{"0v66j":{"id":"0v66j","title":"post2","comments":[**{"message":"comment 1"};{"message":"comment 2"}**]},"8nihs":{"id":"8nihs","title":"post3","comments":["b4v2b","dbki4"]}}};App.Comment":{"records":{"p31al":{"id":"p31al","message":"comment 1"},"tgjtj":{"id":"tgjtj","message":"comment 2"};b4v2b":{"id":"b4v2b","message":"comments3"},"dbki4":{"id":"dbki4";message":"comments4"}}}};Comment refrences should be comments":["p31al","tgjtj"] like this. but the id's are replaces as "comments":[ {"message":"comment 1"},{"message":"comment 2"} ];Please help me to solve this. Thanks in advance.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        Safari Web Inspector doesn't debug JavaScript in iOS 7 Simulator 
TITLE;
        $question->content = <<<'CONTENT'
        I have Safari 6.0.5 (8536.30.1) and WebKit nightly (8536.30.1, 538+) and I'm trying to debug a website in iOS 7 iPad simulator (XCode Version 5.0 (5A1413).;I choose Develop -> iPad simulator in Safari, Web Inspector starts showing me the website's resources and DOM, and I enable few breakpoints in JavaScript file of the website. Then I perform something with the site to reach my breakpoints.;The site freezes, as if it reached the breakpoint but Web Inspector doesn't show that it reached anything and doesn't show any variables. I even do not see the variables pane.;What am I doing wrong?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        How can I disable Javascript syntax checking in NetBeans 7.0 (Linux version for PHP)? 
TITLE;
        $question->content = <<<'CONTENT'
        Maybe I'm blind, but I can't find this option and Google doesn't want to help me.;Sometimes NetBeans tries to check syntax in any file when detects some JS, but many templating frameworks/libraries put JS with PHP or special tags, causing that NetBeans throws syntax error in the file.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to cache query result in ember data 
TITLE;
        $question->content = <<<'CONTENT'
        I want to cache the result of a query in ember-data. (findQuery);To make it clear: I don't want to cache the entire models, just what models are the result of the query. Where is the right place for this?;I was thinking about implementing this in the adapter and cache the result of the AJAX call, but I don't think this is a good solution since I don't wanna override the loaded and maybe newer and/or modified model data.;I don't thinks its possible to just return a list of ID's, and to manipulate the adapter and the serializer for this simple use-case seems to be messy!;Actually I don't want that findQuery is called for specific types of querys. Like the behavior of findAll. Nice would be something like a queryShouldBeCached hook.;Is there a good Solution for this?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Resource structure in Apache Cordova (PhoneGap) and loading the files from the filesystem 
TITLE;
        $question->content = <<<'CONTENT'
        We have a fairly complex JS webapp that loads different resources (HTML templates, extra JS/CSS files, JSON data, images, videos, sounds) in different ways (string, arrayBuffer, base64, binary) online in the browser (just reading no writing). Now we'd like to make changes to it to have everything work offline (resources included) on different platforms as a Cordova mobile app.;Problem #1 - loading files from the local filesystem;It turns XHR requests for local file:// resources work everywhere but with Chrome which is a show stopper now since Android is internally transitioning towards Chrome.;Ok, there were still 2 other options left;fake-load everything within JSONP with script tags, HTML with iframes, etc. - which is not a really nice option because it requires changes to the resources themselves + its kind of hacky and it costs us a lot of functionality (string load only for JS/HTML, arrayBuffer, binary, etc.);use the File API;Plain vanilla File API unfortunately always requires user interaction (like a click on an input box) to get a file reference plus IE10 is a no-no. Okay, so the only option there is to use the customized File API plugin for PhoneGap - which brings us the next problem.;Problem #2 - (cross-platform?) file paths in PhoneGap;I like PhoneGap CLI - you enter a few commands in the terminal and it manages files and builds for different platforms for you. Or does it?;As far as I can tell according to PhoneGap you're supposed to put everything in the WWW folder - however (once you build the app), the crazy thing is - there is no easy way to read those files (via File API plugin) from where PhoneGap puts them.;You'd think that fileSystem.root (LocalFileSystem) is pointing to that folder, but at least on iOS the WWW folder is inside your app but the fileSystem.root reference is pointing to an external Documents folder (still have to test this on Android but I'm guessing its again something different there).;After a bit of tinkering I figured out how to get to the WWW folder but its unflexible, hacky and feels like it shouldn't work (iOS only at the moment);window.requestFileSystem(LocalFileSystem.PERSISTENT, 0, function(fileSystem);fileSystem.root.getDirectory("../HelloWorld.app/www", {create: true}, function(entry);entry.getFile("test.json", {create: false}, function(fileEntry);fileEntry.file(function(file);var reader = new FileReader();reader.onloadend = function(evt);console.log(evt.target.result);reader.readAsText(file);fail);fail);fail);This cannot be the best way to do this. If nothing else, the JS code now needs to now the name of the app to be able to access the WWW folder (BTW is there a system shortcut for this or a system variable that would make accessing the app's folder generic?).;But this would again be something different on other platforms anyway.;I could theoretically "download" the images from the internal WWW folder to the external Documents folder but;download a 50mb app and then internally copy 40mb of its resources to another folder just so that it can be accessed properly doesn't seem that proper to me;is Documents the proper root folder (on iOS) at all?;Problem #3 - best way to organize local resources in PhoneGap?;So why is /Documents the filesystem root in PhoneGap at all? According to Apple's File System Programming Guide Documents folder might even not be a best fit for something like this. It seems that Documents should be used for user-generated content only and app's data files/resources should in fact go into '/Library' folder. This is amongst other things important since some apps seem to get rejected by Apple for doing this wrong + this also of course influences iTunes/cloud backups.;So now that we've established all of that;how do you structure local files/resources properly in PhoneGap?;where/how do I put our resources (JS, JSON, HTML, CSS, media, etc.) so that they could be copied/installed to a proper folder for every platform (like /Library or ok even /Documents on iOS - but not remain app internal). And of course also for other platforms.;how to access all of it properly and cross-platform?;(side question) is cordova.js really needed? we've worked really hard to exclude external libraries and vanilla optimize performance so I'm not too crazy about including another one to again take over events and different things. I realize that there might be some internal hooks used here - but maybe we could just include ourselves what we need?;This turned out to be way more complex than I though it would be.;And as much as I tried not to and I appreciate the effort lots of people have put into PhoneGap - my mind kept drawing parallels between all this illogical cross-platform behavior and browser wars a decade ago. In my mind, other than displaying browser apps full screen cross-platform - the most important feature of PhoneGap should be an easy way to access local files and resources.;Any tidbits of knowledge and feedback is as always greatly appreciated!
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Limiting video record length for input type file on mobile devices 
TITLE;
        $question->content = <<<'CONTENT'
        I'm using the file recording capability for a mobile web app I'm building;I'm wondering if there is a way to somehow limit the length of the video that gets recorded, or to somehow notify the user that their recording is taking too long. The problem is that when you choose to record on a mobile device, you are taken away from the web app, so I don't know of any way to interact with the user while they're in the phone's native recording app.;If anyone's got any ideas, that'd be great. Thanks!
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        php - LinkedIn API: Logout form LinkedIn API 
TITLE;
        $question->content = <<<'CONTENT'
        I have worked with LinkedIn Api and need guidance about logging out from Linkedin Api once I click Logout in my application screen. I have tried the following code;function closeSession();IN.User.logout();Logout In LinkedIn;and also I have tried the following code too.;$('logout-link').click(function();IN.Event.on(IN,'logout', function();window.location.href = [site-logout-url];IN.User.logout();and also tried to destroy the session in a browser by calling session_destroy();also tried the answer I got from stack overflow for this question. I didnt get any right solution, so any one please tell me the solution....
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - JS Monad unit function 
TITLE;
        $question->content = <<<'CONTENT'
        I'm struggling with understanding the unit function in JavaScript. Particularly because the thing that made me 'get' monads (or at least I thought) was the Promise object, and how then always returns a new Promise, regardless of what function you pass to then, which, to my knowledge is equivalent to bind or >>= in haskell. This totally makes sense to me, because it ensures that all of your functions are executed in the 'monad universe', so to speak.;What's tripping me up is the 'Monads and Gonads' talk by Douglas Crockford. In his implementation, bind directly returns the result of the transform function, without checking if the result itself, is a monad. This clashes with Promises's then method, as then ALWAYS returns a new Promise.;One thought was the lift method. His implementation does ensure that 'lift' will always return a monad, and maybe then was lifted on to Promise. However, this would mean that then !== bind, and that Promise has an internal bind somewhere.;My intuition is that there should at least be some sort of type check in the bind function that checks the result of the transformation, and allows a resulting monad to be let through, but will intercept non-monads and pass them through unit again, like 'lift' does.;*EDIT;Also, I'm under the impression that then is equivalent to bind, flatMap, >>= because it has the ability to unwrap other monads, including different ones and ones of it's own type. While looking in to some category theory references in JavaScript, flatMap was used to map over a set of nested arrays, and then flatten them by one dimension. This fits with how then will wait for other promises you give it. But doesn't seem to match up with the original implementation mentioned above. I feel lost.;Can anyone with more FP experience shed some light on what I'm missing, or am I just too off, and need to start from the beginning?;Some code examples...;// Crockford's 'bind;monad.bind = function(transform);// value was passed in through the unit constructor;return transform(value);My trouble area;// Set the 'isMonad' prop to be true, for all;// monads made with the MONAD macroid;monad.isMonad = true;// shouldn't this ALWAYS return a monad?;monad.bind = function(transform);var res = transform(value);return (res && res.isMonad)? res: unit(res);NOTE I know i'm not using the final version of his implementation in full, I'm just focusing in the bind method in particular.;The full implementation can be found at;https://github.com/douglascrockford/monad/blob/master/monad.js;Update;After doing some more research, >>= is not required to return a Monad instance. Bergi's comment shed some light on how Promise.prototype.then is overloaded and acts as a different function depending on what you resolve it with.;Also, a lot of things started to click when I took a step back and looked at how Monads are different from regular functors. The details are still a little fuzzy, but I think I get the big picture.;A few good references that helped clear the haze;This one is highly recommend for a high level overview, in human words;http://adit.io/posts/2013-04-17-functors,_applicatives,_and_monads_in_pictures.html;Don't let the pictures fool you, this one was like gold for me. Not in JavaScript, but still very informative about the overall concepts.;Also, this YouTube series on Category Theory in JavaScript;https://www.youtube.com/watch?v=-FkgOHvNAU8&list=PLwuUlC2HlHGe7vmItFmrdBLn6p0AS8ALX&index=1;This YouTube series called 'Fun Fun Function' is wonderful, the host is one of the best teachers I've found online. This video is about monads and was suggested by MrE.;Highly recommended!.;https://www.youtube.com/watch?v=9QveBbn7t_c&app=desktop;Those two references specifically did wonders for me. Hope that helps everyone else as well.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Is WebGL or Canvas the only way to get SVG Keyframe Animations Hardware Accelerated? 
TITLE;
        $question->content = <<<'CONTENT'
        What I'm looking is a flash alternative for mobile phones using html5.;I was looking into SVG and it seems the only way to get hardware acceleration is to use CSS transforms on it. But CSS transforms aren't enough, I want to animate the actual nodes that make up a vector (ie, points on a path) so I could get more sophisticated character animation. To do this I was looking at some gui based editors.;I checked what adobe has been up to and they seem to have killed Edge Animate and rebranded Flash as "Animate CC" for 2016.;http://blogs.adobe.com/creativecloud/update-about-edge-tools-and-services/;https://blogs.adobe.com/flashpro/welcome-adobe-animate-cc-a-new-era-for-flash-professional/;But reading up on "Animate CC" I see that it exports vector animations to either Canvas or WebGL. Which I think is due to them not getting hardware acceleration with native SVG via SMIL or using javascript.;https://css-tricks.com/guide-svg-animations-smil/;Another one is http://www.animatron.com which converts everything to canvas as well.;So my question is, in order to do keyframe animations on nodes within a vector path, a vector needs to be converted to either WebGL or Canvas for it to be hardware accelerated on mobile?;p.s I prefer using SVG as it's loaded in the DOM and I can manipulate things with jquery. This is for a mobile game that uses vectors (svg) as its base but I'd like to incorporate animations too - beyond the basic css transforms. I wish there was a way to have a.svg file that not only contains the vector information but also the animation info. so I could load this.svg file. and then in javascript go;character1.play('animation1') or something. If SMIL worked fast I'm sure editors like adobe would make it as simple as that.;EDIT: I just read that Chrome 45 killed SMIL in favor of "web animations" and css.;https://developer.mozilla.org/en-US/docs/Web/SVG/SVG_animation_with_SMIL;And as Kaiido mentioned in the comments IE never supported smil so maybe that's why adobe never exported to it (?).;http://caniuse.com/#feat=svg-smil;also I never saw any examples online that show hardware accelerated path animation with smil, if any of you guys find a link pls let me know.;EDIT #2: I'm thinking of giving up my wishful thinking and instead looking at vector to canvas exporters like animatron.com. However, it doesn't seem like canvas is even hardware accelerated or fast like css3 transforms. I loaded some animations from animatron in my old iPhone 4s/iOS 8 and it's jittery and slow for example;https://www.animatron.com/project/1953f3526e5b2ec4eef429c8;whereas css3 transform animations always run very smooth...;I still haven't tested vector to webgl.. but I think that's why adobe eventually chose to use it for their vector animations since canvas is slow and svg is limited.;EDIT #3: sure enough it seems like webgl is the way to go (unless someone finds a way to do this with native svg) http://www.yeahbutisitflash.com/?p=7231.. this works fast in my iphone 4s/ios8.. I currently think this is the only way to do what I want: hardware accelerated vector based animation (however the graphics don't look as crisp as I'd want them.. webgl kinda messed with that I think).;but this is why I think Edge Animate got killed cause they were trying to create a tool that took advantage of css3 transforms, but ppl want to animate vector nodes so they went back to Flash and rebranded it. (another note: the above webgl anim doesn't work so well on my galaxy S4/kitkat android phone.. so this is mainly for newer devices/OSs);EDIT #4: come to think of it. it'd be a pain to have multiple webgl contexts running in my program. so if I had 10 animated characters I'd have to have 10 webgl contexts which would be intense for a mobile device.. unless I chose to do the whole game in flash, and then I'd have one big webgl context after I export it. but I prefer to work in the dom. oh well css3 transforms for the meantime..:/;Other Useful Links I Found;http://www.crmarsh.com/svg-performance/
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        Javascript Google Calendar API Set Calendar to Public 
TITLE;
        $question->content = <<<'CONTENT'
        I am using google calendar's API to show a stripped down version of my company calendar. I'd like for anyone to view my version of the calendar on my site. Currently, only I can view the calendar page and if I were to share the page URL with anyone, it does not work - they can not view anything.;I'm using Google's starting code here;var CLIENT_ID = 'MYID**;var SCOPES = ["https://www.googleapis.com/auth/calendar.readonly"];function checkAuth();gapi.auth.authorize;client_id': CLIENT_ID;scope': SCOPES;immediate': true;handleAuthResult);function handleAuthResult(authResult);var authorizeDiv = document.getElementById('authorize-div');loadCalendarApi();function handleAuthClick(event);gapi.auth.authorize;client_id: CLIENT_ID;scope: SCOPES;immediate: false;handleAuthResult);return false;function loadCalendarApi();gapi.client.load('calendar', 'v3', listUpcomingEvents);function listUpcomingEvents();var request = gapi.client.calendar.events.list;calendarId': 'iorbmkj57ee8ihnko0va1snif8@group.calendar.google.com;timeMin': '2011-06-03T10:00:00-07:00';showDeleted': false;singleEvents': true;maxResults': 1000;orderBy': 'startTime;But I can't seem to find where to make this calendar public. The two examples on stackoverflow do not explain much and I can't seem to connect anything on Google's API Documentation.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - JQuery DataTables - Row Grouping, Sum, Collapsible, Export 
TITLE;
        $question->content = <<<'CONTENT'
        I've been using JQuery DataTables for a long time. This is the first time I'll be working with row grouping. I found a good example of where I want to start. - Grouping;How would I add an extra to the grouped row? What if I wanted to display the sum of the grouped salaries on that grouped row? Right now, it looks like you can only display the name of the group.;Can I make these rows collapsible like they are Here and Here? It looks like this is a different plugin than the original grouping code. This look would be my preference, but working with child rows doesn't seem to be the same as grouping.;Additional Info;I will be returning data from an Ajax source.;UPDATE 1;So, I built a table with row grouping and found this example of how to sum up a column. I'm plugging that value into a in that group row. All I need now is how to break that sum amount up into the groups instead of the sum of the entire column. I need help with this.;drawCallback": function (settings);var api = this.api(), data;var rows = api.rows({ page: 'current' }).nodes();var last = null;//Calculates the total of the column;var total = api.column(5) //the salary column.data().reduce(function (a, b);return a + b;0);//Groups the Office column;api.column(2, { page: 'current' }).data().each(function (group, i);if (last !== group);$(rows).eq(i).before; + group;+ ' ;+ total + ';last = group;UPDATE 2;It doesn't look to me like DataTables can provide all the functionality I need.;Row grouping doesn't have built in subtotals or collapsiblity. Even if I'm able to create something custom to do that, it looks like these group rows aren't picked up during exports, which is another requirement I need. I'll probably have to go another route. Unless someone can fulfill all of these needs, don't bother.;UPDATE 3;I've decided to go with Kendo Grids instead. All of this functionality is built in already.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        javascript - Why does gulp-useref does not seem to work with a comment in the replacement section? 
TITLE;
        $question->content = <<<'CONTENT'
        I am trying to build a gulp pipeline - I want to inject some CSS into my index.html (this works fine) and then grab all the other links from source index.html and replace them in the outputted version.;I noticed that the useref task is mangling the output IF the templated section to replace includes an html comment (see example below for the line COMMENT). It's easiest to demonstrate with code;index.html (source file)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Chrome DevTools script blackboxing not working 
TITLE;
        $question->content = <<<'CONTENT'
        I am trying to use the new feature of chrome devtools "blackboxing a script".;This Chrome Devtools article lists script blackboxing functionality;What happens when you blackbox a script?;Exceptions thrown from library code will not pause (if Pause on;exceptions is enabled);Stepping into/out/over bypasses the library code;Event listener breakpoints don't break in library code;The debugger will not pause on any breakpoints set in library code.;The end result is you are debugging your application code instead of third party resources.;I have tried to blackbox the file directly by right clicking the file from source tab and everything goes right the yellow notification shows at the top of file "This script is blackboxed in debugger". Strangely none of the above listed points work, debugger goes through blackboxed script also event listeners reference the blackboxed script. I have also enabled Developer Tools experiments at chrome://flags/;With these options set i thought i would have been ok, i also have the latest chrome at this time 39.0 beta,i have no idea what i'm missing. Did anybody go through this?;Thnx!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Soundcloud API Error NS_ERROR_DOM_BAD_URI: Access to restricted URI denied (JavaScript) 
TITLE;
        $question->content = <<<'CONTENT'
        I am just getting myself acquainted with Soundcloud's API and I am having some trouble. As far as I can tell, all I need in SC.initialize is a client_id. I have used the tutorials at Code Academy to get started and it was great. Now that I am actually trying to implement something I am running into some trouble.;When I ran my code in Code Academy, it did exactly what I wanted it to do. Now that I am trying to run it in a browser, I am getting a blank screen and this error;NS_ERROR_DOM_BAD_URI: Access to restricted URI denied @ http://connect.soundcloud.com/sdk;After doing some research, I have found that those errors are related to domain prefixes. So I tried changing it to http:// www. connect.soundcloud.com/sdk. But when I do that, I get a different error;SC is not defined;AHHHH What am I doing wrong?!;I am new to using API's, and any help at all would be very greatly appreciated.;Here is what I am doing;(JavaScript);SC.initialize;client_id: 'hidden for privacy;$(document).ready(function();SC.get('/users/5577686/tracks', {limit:7}, function(tracks);$(tracks).each(function(index, track);$('#tracktitle').append($(;).html(track.title));$('#trackimage').append(" ");$('#play').append(" " + "Play" + " ");(HTML);<!DOCTYPE HTML>;I don't really think there is anything wrong with the code, as everything seemed to be working fine in Code Academy. I think it is more of an issue with familiarizing myself with the API. Do I need to do some further authentication? Do I need something more than just the client ID? Again I am very stuck and would appreciate any amount of help on this. Thanks for reading.;(I also followed along with Coding for GOOD's Soundcloud API Integration tutorial step-by-step and I am getting the same exact errors, so this further confirms that the code is probably not the problem, but connecting to the API may be)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to change the cursor icon when dragging in HTML5? 
TITLE;
        $question->content = <<<'CONTENT'
        I need to set the icon for cursor when a user is dragging DIV (red div in the following example).;I have tried several attempt, including using CSS cursor:move and event.dataTransfer.dropEffect with no success, as the icon always show up a "crossed circle".;Any ideas how to solve this issue using HTML5 drag-and-drop API?;http://jsbin.com/hifidunuqa/1/
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Limiting parallel browser instance in Karma 
TITLE;
        $question->content = <<<'CONTENT'
        I want to run some tests with Karma using multiple browsers. However, the tests are integration tests that interact with the database (get and update data). Since the same tests are run in multiple browsers, they all interact with the same test data.;Therefore, if the tests are run concurrently in multiple browsers, one test may impact other tests running in other browsers.;How can I limit the number of concurrent browsers, while still testing with multiple browsers? (for example, setting a limit to 1 would result in running tests for each browser in sequence instead of in parallel)
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Trouble loading PDF on Chrome IOS 
TITLE;
        $question->content = <<<'CONTENT'
        We're getting the following message from Chrome when downloading (or attempting to download) a pdf in our mobile web application.;Warning: Something's not right here!... The site you are trying to access is acting strangely, and Chrome is unable to verify that the URL is correct.;This is working fine in Safari and essentially we are doing this.;On load do a call to verify that the document that we want to show is OK.;if the document is not ok message the user and then close the tab;Direct the tab to navigate to an address which downloads the PDF.;Without posting too much code the Javascript is something like this;DoRequest ("print_report;VALIDATE;mycallback);function mycallback (data,error);var h_href = ";var h_widget = ";if(error == true);window.close();return;h_href = GenerateHREF("print_report", "PRINT");window.location.href = h_href;The URL provided by GenerateHREF is for the same originating site and is relative to the original.;the mime type is set to application/pdf.;The content-disposition is set to inline. I've tried setting the content-size header as well but it doesn't seem to have any effect.;Content-Disposition: attachment, filename="pp66.26.pdf;Content-Length: 31706;Content-Type: application/pdf;I'm missing something... just what?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        javascript - Detecting Custom Protocol Handler in Windows 8+ with Chrome 
TITLE;
        $question->content = <<<'CONTENT'
        I am trying to detect if my application to handle a custom protocol is installed and working using the different browsers. I have looked at other questions on this site such as;How to detect browser's protocol handlers?;and have looked at resources like this to make it work on most platforms in most browsers.;Before you flag this as duplicate, hear me out...;I was able to get my function working on everything except Chrome on Windows 8+. I cannot use the window focus method on Chrome like I can on Windows 7 because it pops up the message that asks me to find an app in the store.;Is there any way (short of an extension) to detect a custom protocol handler in Windows 8+ on Chrome?;UPDATE;Using an onBlur to detect it only works on Windows 7, because in 8+, if it doesn't find something to open your protocol, it opens the 'find something from the app store' dialog that makes the browser lose focus.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Touchstart event never be triggered on Android Chrome at the first time of page loading 
TITLE;
        $question->content = <<<'CONTENT'
        On Android Chrome, when you create a new tab and access to a page with the content below, your touches to #touch div have never triggered touch-start events. Once you reload the page, you can trigger the event.;Why? and How can I avoid this situation?;<!DOCTYPE html>;touch start on Android;Touch;Click;My environment is;Nexus 7 (2013);Android 4.30 build number JSS15Q;Chrome 29.0.1547.72 (WebKit version 537.36(@156722), JavaScript version V8 3.19.18.21)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Animated directional arrows &quot;aroundMe&quot; style using ngCordova 
TITLE;
        $question->content = <<<'CONTENT'
        I wish to create the compass / arrow exactly like the one we see in AroundMe Mobile App that point exactly to a pin to the map accordingly with my mobile position and update the arrow when I move the phone.;I'm getting crazy to understand exactly how to do that and I can not find any guide or tutorial that explain a bit it.;What I found online is a bearing function and I created a directive around it;app.directive('arrow', function ();function bearing(lat1, lng1, lat2, lng2);var dLon = (lng2 - lng1);var y = Math.sin(dLon) * Math.cos(lat2);var x = Math.cos(lat1) * Math.sin(lat2) - Math.sin(lat1) * Math.cos(lat2) * Math.cos(dLon);var rad = Math.atan2(y, x);var brng = toDeg(rad);return (brng + 360) % 360;function toRad(deg);return deg * Math.PI / 180;function toDeg(rad);return rad * 180 / Math.PI;return;restrict: 'E;link: function (scope, element, attrs);var arrowAngle = bearing(scope.user.position.lat, scope.user.position.lng, attrs.lat, attrs.lng);element.parent().css('transform', 'rotate(' + arrowAngle + 'deg)');It seems to update the arrow in a direction but unfortunately it is not the right direction because it is not calculated using also the mobile magneticHeading position.;So I added the ngCordova plugin for Device Orientation to get the magneticHeading and now I don't know exactly how to use it and where in the bearing function.;$cordovaDeviceOrientation.getCurrentHeading().then(function(result);var magneticHeading = result.magneticHeading;var arrowAngle = bearing(scope.user.position.lat, scope.user.position.lng, attrs.lat, attrs.lng, magneticHeading);element.parent().css('transform', 'rotate(' + arrowAngle + 'deg)');I tried to add it in the return statement;return (brng - heading) % 360;or;return (heading - ((brng + 360) % 360));Implementing this code with a watcher I see the arrow moving but not in the exact position... For example from my position and the pin the arrow should point to N and it is pointing to E.;Always looking online I can not find any tutorial / question to find the bearing between a lat/lng point and a magnetingHeading.;Maybe I'm close to the solution but I can not go ahead alone.;I also tried to search for a mathematical formulas but even there is a huge pain to understand and implement it.;I hope you can help.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Flexbox, canvas &amp; dynamic resizing 
TITLE;
        $question->content = <<<'CONTENT'
        I have trouble with my canvas-based application.;I have 4 (or more) canvas, each one wrapped into div with aside content. Those wrapper are themselves wrapped into "hbox". The goal is to make a dynamic grid of canvasses using flexbox.;With css:.scene;display: -webkit-flex;display: flex;-webkit-flex-flow: column;flex-flow: column;overflow: hidden;hbox;min-height: 0;-webkit-flex: 1 1 0%;flex: 1 1 0%;display: -webkit-flex;display: flex;position: relative;viewWrapper;min-height: 0;-webkit-flex: 1 1 0%;flex: 1 1 0%;position: relative;margin: 0 2px 2px 0;canvasView;display: block;canvasView;position: absolute;sid
Content;max-width: 120px;overflow-x: hidden;overflow-y: auto;margin-right: 6px;Because I need some resize events, I don't use the CSS property resize: both;Troubles append when I try to add.sideContent because I want them at the right of each canvas.;Before that, with the canvas in absolute, I just needed to dynamically update width and height with {.viewWrapper}.getBoundingClientRect().width|height;(beside the fact that they are flex:1, viewWrapper and hbox are manually resized with flex-grow like showed in the code above).;Now, when I switch the canvas to flex:1, and remove the absolute property, they do not shrink anymore. I also get different values from {oneCanvas}.getBoundingClientRect() between Chrome and Firefox (didn't test on IE) so I can't use this either.;What can I do? Tell me if you need more information.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Add a new native class to WebWorker&#39;s context in JavaScriptCore 
TITLE;
        $question->content = <<<'CONTENT'
        I have an application that extends JavaScript via JavaScriptCore, in a webkit-gtk browser. Right now I have several classes that I add to the global context like so;void create_js(gpointer context, char* className, JSClassDefinition clasDefinition);JSClassRef classDef = JSClassCreate(&&clasDefinition);JSObjectRef classObj = JSObjectMake(context, classDef, context);JSObjectRef globalObj = JSContextGetGlobalObject(context);JSStringRef str = JSStringCreateWithUTF8CString(className);JSObjectSetProperty(context, globalObj, str, classObj, kJSPropertyAttributeNone, NULL);JSStringRelease(str);Now, I'd like to also add those classes to the WebWorker's context, so I can call them from workers instantiated in JS.;I've tried getting the Worker object like so;JSStringRef workerStr = JSStringCreateWithUTF8CString("Worker");JSObjectRef worker = JSObjectGetProperty(context, globalObj, workerStr, NULL);JSObjectSetProperty(context, worker, str, classObj, kJSPropertyAttributeNone, NULL);JSStringRelease(workerStr);But that adds it to the WorkerConstructor object, and when a new Worker() is called, the classes are not available.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Loading dependencies outside of project directory in the Intern 
TITLE;
        $question->content = <<<'CONTENT'
        The answer to this question does not answer my question.;I'd like to load dependencies from outside my project root using the Intern as my testing framework. I'm currently working with the following directory structure;www/;project1/;app/;lib/;project2/;app/;lib/;intern-tests/;node_modules/;tests/;functional/;project1-tests/;project2-tests/;unit/;project1-tests/;project2-tests/;intern.js;Gruntfile.js;As you can see, I am making intern-tests its own project, and want this directory to hold all my tests for all of my projects. I've already set up my Gruntfile to execute tests with the grunt exec library converting the grunt projectName command to grunt test --project=projectName. All that works fine, but my unit tests cannot load the dependencies in the project1/ and project2/ directories.;For example, this is one of my unit tests;define;intern!object;intern/chai!assert;jquery;../../../../project2/lib/js/var/document;../../../../project2/lib/js/exports/file/functions/resizeInput;function(registerSuite, assert, $, document, resizeInput);registerSuite;name: 'functions;resizeInput: function();var $input = $(document.createElement('input'));resizeInput($input, 8, 20, 450, 200);assert.equal($input.width(), 450);and running that test gives me the following error;SUITE ERROR;Error: Failed to load module../project2/lib/js/var/document from;project2/lib/js/var/document.js (parent: tests/unit/project2/functions);at HTMLScriptElement.handler;How can I include these external files from my other projects?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - OSX Safari Frame Load Interrupted 
TITLE;
        $question->content = <<<'CONTENT'
        I have a basic HTML website (with some javascript) using a simple anchor tag to download a file like so;Mexml Samples 1.0;In order to track the number of downloads, I have an onclick handler that passes an event to Google Analytics like so;$('#mybutton').click(function(e){ga('send','event','Download','MexmlSample','MexmlSample-1.0'),});This works as expected when downloading the file using Chrome on OS X, and IE on Windows 7. The file downloads and I see the event in my GA account.;When I test it in Safari 8 on Yosemite, the file does download, but GA only rarely sees the event. And of course I get the dreaded Failed to load resource: Frame load interrupted in the Safari error console.;I assume that I get the GA event sometimes because of a race condition between when Safari interrupts the action and when the GA code fires.;So can anything be done to fix this in Safari so that I always get the GA events?;Note that my question probably has the same root cause as this unanswered question: Frame load interrupted when downloading excel files;Update June 6;I am now thoroughly confused. I just noticed that if I open up a new browser page to my site (in Safari), and click on the download, then it gets logged by GA. However subsequent clicks download still the file, but don't get logged by GA.;If I close that window, and open a new one, then again the first download gets logged by GA.;In contrast, when using Chrome every download gets logged by GA.;I am now thinking that I may be looking at the wrong problem. The behavior I am seeing is telling me that Safari is maintaining a state in JavaScript that allows the first GA call to go through, but blocks all subsequent calls.;But this is the same code being run by Chrome, so I don't know where to how to even start debugging the problem.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - &quot;getUnComputedStyle&quot; of element 
TITLE;
        $question->content = <<<'CONTENT'
        I found differencies between browsers how they report computed style dimensions when browser window is zoomed. The JSBIN example is in http://jsbin.com/pilohonevo/2/. The code is as follows;$(window).resize(function();var width1=$(".class1").css("width");$(".class1").css("width",width1);var width2="200px;$(".class2").css("width",width2);var width3=$(".class3").css("width");$("#width1").html(width1);$("#width2").html(width2);$("#width3").html(width3);$("#overflow1").html($(".overflow1")[0].scrollWidth);$("#overflow2").html($(".overflow2")[0].scrollWidth);$("#overflow3").html($(".overflow3")[0].scrollWidth);When you zoom to minimum by pressing CMD- few times and then back to 100% by pressing CMD+ few times, in Chrome (Mac Version 38.0.2125.111), you get the following values;The white DIV 1 reports its width as 203px, although DIV 2 and 3 reports 200px. Also scrollWidth is 203, which is wrong as well. This means that you cannot use getComputedStyle or jQuerys.css() to get dimensions if you are not sure that browser window is not zoomed. And because zooming is not cancelable you can never be sure and you can never trust to those dimensions. I tested also $(elem).scrollLeft() and $(elem).scrollTop() and those are unreliable as well when zoomed.;So a workaround can be to use "raw" values, not "computed" values.;Is there a cross-browser javascript or jQuery method to get something like getUnComputedStyle() which determines dimensions using raw values from stylesheets and/or style attribute, because they are the only ones that are zoom-safe?;Determining zoom level and make corrections based on that is unreliable according to my tests, because there are browser differencies and error levels in different style properties are not consistently related to zoom level.;(Firefox Mac 33.1 and Safari Mac version 7.1 (9537.85.10.17.1) and IE 11 Win and emulated modes down to version 7 report correct values.;Opera Mac 25.0.1614.68, Safari Win 5.1.7 and the above reported Chrome report wrong values.)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - SVG with viewBox and width is not scaling height correctly in IE 
TITLE;
        $question->content = <<<'CONTENT'
        I'm trying to construct inline SVGs with viewBox attributes, but no explicit width or height attributes. I'm setting the SVG's width to 100% using CSS. This should let the SVG scale to its wrapping container, maintaining the aspect ratio set up by the viewBox. In Chrome and Firefox, this works perfectly!;Here's a minimal codepen example of what I'm talking about;http://codepen.io/pcorey/pen/amkGl;HTML;hello;CSS;div;width: 400px;svg;width: 100%;max-height: 100%;outline: 1px solid tomato;text;font-size: 10px;The viewBox is 100x10. The outer div is set to have a 400px width. That means that the SVG's height should be (and is in Chrome/Firefox) 40px. BUT, in IE 11, the width is ALWAYS 150px (even when the div's width exceeds 1500px...);Is there a nice way to fix this in IE? Why can't IE handle the unknown height correctly? I can use the " intrinsic aspect ratio " trick, but that is super ugly, requires another DOM element, and requires that I recompute the padding-top every time the wrapper resizes.;For more info on why I want to do this, I wrote a quick blog post about it: http://1pxsolidtomato.com/2014/10/08/quest-for-scalable-svg-text/;Thanks for the help!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Creating audio spectrum of youtube stream HTML5 
TITLE;
        $question->content = <<<'CONTENT'
        createMediaElementSource in HTML5 (Draw visualization of youtube video). Is that possible?;Could you show me a example if it is? I just want to add a traditional youtube player and under it the spectrum/visualization, I found a mp3 version on the internet.;Here is a audio/mp3 version of it, I just have no idea if this could work with a youtube video stream.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - FabricJS prevent canvas.clipTo from clipping canvas.backgroundImage 
TITLE;
        $question->content = <<<'CONTENT'
        I want to set a global clipTo in my Fabric-powered Canvas that will affect all user-added layers. I want a background image and an overlay image, which are unaffected by this clip mask.;Example;Here's what's happening in this photo;A canvas overlay image makes the t-shirt look naturally wrinkled. This overlay image is mostly transparent;A background image in the exact shape of the t-shirt was added, which is supposed to make the t-shirt look blue;A canvas.clipTo function was added, which clips the canvas to a rectangular shape;A user-added image (the famous Fabric pug) was added;I want the user-added image (the pug) to be limited to the rectangular area.;I do not want the background image (the blue t-shirt shape) affected by the clip area.;Is there a simple way to accomplish this? I really don't want to have to add a clipTo on every single user layer rather than one tidy global clipTo.;You can play with a JS fiddle showing the problem here.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Optimizing SVG markers in Google Maps 
TITLE;
        $question->content = <<<'CONTENT'
        Are there good ways to optimize how Google Maps API v3 draw markers to the HTML document when using SVG symbols for the icons? Here is an example of a marker using SVG symbols;var star =;path: 'M 125,5 155,90 245,90 175,145 200,230 125,180 50,230 75,145 5,90 95,90 z;fillColor: 'yellow;var marker = new google.maps.Marker;position: map.getCenter();icon: star;map: map;optimized: true //Does not seem to do anything..;Google has this property called "optimized" that can be set on markers, and when using for instance PNG icons instead of SVG drawings this works fine: Google creates one single canvas per tile instead of one img per icon, which is obviously scaling much better.;The "optimized" property does however not seem to do anything when using SVG markers: They always seems to be drawn in one single canvas per marker. When I have many markers, certain browsers start having performance issues. Chrome usually handles it fine, but IE9 for instance, does not handle many markers before showing significant performance issues. Clustering is not an option in this case.;Does anyone know any good ways of optimizing this, so that the browsers can handle more SVG markers at the same time?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        ajax - IE not marking links as "visited" when rendered via javascript 
TITLE;
        $question->content = <<<'CONTENT'
        I am working with a site where all content is rendered via ajax postbacks using jquery. I am using Ben Alman's hashchange (http://benalman.com/projects/jquery-hashchange-plugin/) to manage the hash history which allows me to bookmark pages, use the back button etc... Everything works perfectly on everything but IE 9 of course. In IE there is a small issue with "visited" links not being marked as visited. You can see that the link turns purple(visited) for a split second after you click it before the new content is loaded. But once you click the back button the link appears as though it has never been visited. Here is a jfiddle example of what I am talking about;http://jsfiddle.net/7nj3x/3/;Here is the jsfiddle code assuming you have jquery and the hashchange plugin referenced in head;$(function();// Bind an event to window.onhashchange that, when the hash changes, gets the;// hash and adds the class "selected" to any matching nav link.;$(window).hashchange(function();alert("Hash changed to:"+location.hash);var hash = location.hash;// Set the page title based on the hash.;document.title = 'The hash is ' + (hash.replace(/^#/, '') || 'blank') + '.;//simulate body being rendered by ajax callback;if(hash == "");$("body").html(;test 1 test 2 test 3 ");else;$("body").html("Right click within this pane and select \"Back\".");// Since the event is only triggered when the hash changes, we need to trigger;// the event now, to handle the hash the page may have loaded with.;$(window).hashchange()
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Three.js - label on AxisHelper withTextGeometry and rotation issue 
TITLE;
        $question->content = <<<'CONTENT'
        I have a main scene with a sphere and another subwindow (in right bottom) where I have drawn the (x,y,z) axis of main scene.;In this subwindow, I would like to draw the labels "X" "Y" and "Z" on each axis (more precisely located on the end of each AxisHelper). I know how to use TextGeometry but the issue is that I can't get to make rotate these labels in order to make them appear always in face on the user.;You can see the problem on the following link: label "X" is fixed relatively to axis and is rotating with camera, so it is not always in face of user.;From these two links link1 and link2, I tried to add (in my example, I tried with only "X" label);function addLabelAxes();// Axes label;var loader = new THREE.FontLoader();loader.load('js/helvetiker_regular.typeface.js', function (font);var textGeo1 = new THREE.TextGeometry('X;font: font;size: 5;height: 0.1;bevelThickness: 0.1;bevelSize: 0.1;bevelEnabled: true;var color = new THREE.Color();color.setRGB(255, 255, 255);textMaterial = new THREE.MeshBasicMaterial({ color: color });var meshText1 = new THREE.Mesh(textGeo1, textMaterial);// Position of axes extremities;var positionEndAxes = axes2.geometry.attributes.position;var label1X = positionEndAxes.getX(0);meshText1.position.x = label1X + axisLength;meshText1.position.y = 0;meshText1.position.z = 0;// Rotation of "X" label;//meshText1.rotation = zoomCamera.rotation;meshText1.lookAt(zoomCamera.position);// Add meshText to zoomScene;zoomScene.add(meshText1);zoomCamera represents a PerspectiveCamera which is the camera of subwindow (i.e zoomScene),I add TextGeometry to zoomScene by doing;zoomScene.add(meshText1);Could anyone see what's wrong in my code? I wonder if I can make rotate the "X" label on itself, i.e the "X" label is rotating like axis but a self (local) orientation is applied as a function of rotation theta angle, so the label is always kept in face of user during camera rotation?;Thanks for your help.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Synchronous Ajax - does Chrome have a timeout on trusted events? 
TITLE;
        $question->content = <<<'CONTENT'
        Situation;We have a situation, where we need to onclick-open a new tab in browsers after performing an XHR / Ajax request.;We do this by setting the Ajax request to be performed synchronously to keep the context of the trusted click event and this works fine.;Problem;However, in the latest Chrome version (36), we experience popup warnings when the Ajax call has some lag... A lag of 2 seconds is enough for Chrome to display a popup warning instead of opening the tab like it is supposed to. The code itself is working, I can click that button multiple times and it works all the time until the request experiences some lag. Then I get the popup warning...;Question;Is there a timeout applied to synchronous Ajax requests during which it needs to be finished for the trusted event to still be available?;Is there any way to circumvent that? After all, the call is already synchronous and freezing everything else until the result arrives.;Thanks.;Update JSFiddle;Update: I've created a JSFiddle to demonstrate the problem: http://jsfiddle.net/23JNw/9/;/**;* This method will give open the popup without a warning.;*/;function performSlowSyncronousRequest();$.ajax;url: '/echo/html;data: {delay: 2}, //JSfiddle will delay the answer by 2 seconds;success: function();window.open('http://www.thirtykingdoms.com'), //this causes the popup warning in Chrome;async: false
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Phonegap-(Android/iphone) Image gallery with multiple images is giving problems? 
TITLE;
        $question->content = <<<'CONTENT'
        I have made an image gallery in HTML5, JavaScript and CSS by using jQuery mobile. IE Phonegap platform ok.;The images are coming dynamically and are loaded in it, like this;http://torontographic.com/wordpress/mouseSwipe/mouseSwipe.html;Above mouseSwipe Slider;TYPE: 'mouseSwipe;HORIZ: true;plugin available at;torontographic.wordpress.com;The problem coming with it is that I cannot click on the image and go to next page, because two events are occurring together.;The second problem is that I cannot swipe the page up down, from the place where gallery is placed, except the other area where gallery is not present.;To make it more clear, I am making news application in which I have added 5 - 10 gallery like Pulse news application.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - XMLHttpRequest in google-chrome is not reporting progress events 
TITLE;
        $question->content = <<<'CONTENT'
        Hi all I have this code;function test();req = new XMLHttpRequest();req.upload.addEventListener("progress", updateProgress, false);req.addEventListener("readystatechange", updateProgress, false);req.addEventListener("error", uploadFailed, false);req.addEventListener("abort", uploadCanceled, false);var data = generateRandomData(currentPayloadId);totalSize = data.length;req.open("POST", "www.mydomain.com/upload.aspx");start = (new Date()).getTime();req.send(data);function updateProgress(evt);if (evt.lengthComputable);total = totalSize = evt.total;loaded = evt.loaded;else;total = loaded = totalSize;Also, my server responds to the initial OPTIONS request for upload.aspx with 200 and the Access-Control-Allow-Origin: *;and then the second request POST happens;Everything seems in place and it's working great on FireFox but on G Chrome the updateProgress handler is not getting called but only once and then the lengthComputable is false.;I needed the Access-Control-Allow-Origin: * because this is a cross-domain call, the script parent is a resource on a different server then the upload.aspx domain;Anyone can give me some clues, hints, help please? is this a known issue with G Chrome?;Thank you!;Ova
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Stop javascript Date function from changing timezone offset 
TITLE;
        $question->content = <<<'CONTENT'
        So I have iso date time that need to be converted from a string to date object. How do I keep date from converting it to local browser timezone.;new Date('2013-07-18T17:00:00-05:00');Thu Jul 18 2013 18:00:00 GMT-0400 (EDT);I want to get;Thu Jul 18 2013 17:00:00 GMT-0500 (XX)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        screen scraping - PhantomJS download using a javascript link 
TITLE;
        $question->content = <<<'CONTENT'
        I am attempting to scrape the below website;http://www.fangraphs.com/leaders.aspx?pos=all&stats=bat&lg=all&qual=0&type=8&season=2011&month=0&season1=2011&ind=0&team=0&rost=0&players=0;If you click the small button at the top-right of the table titled "export data", a javascript script runs and my browser downloads the file in.csv form. I'd like to be able to write a PhantomJS script that can do this automatically. Any ideas?;The above button is coded into HTML as such;Export Data;I also found this function in the HTML source code;I'm very new to PhantomJS/Javascript and could use some pointers here. I think I've found all the info I need to do this automatically (correct me if I'm wrong), but just not sure where to start on coding it. Thanks for any help.;EDIT - This is what my script looks like right now;var page = new WebPage();url = 'http://www.fangraphs.com/leaders.aspx?pos=all&stats=bat&lg=all&qual=0&type=8&season=2011&month=0&season1=2011&ind=0&team=0&rost=0&& players=0';page.open(encodeURI(url), function (status);if (status !== "success");console.log("Unable to access website");else;page.evaluate(function();doPostBack('LB$cmdCSV', '');phantom.exit(0)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        javascript - Using epilogue, is it possible to get back a resource without associations? 
TITLE;
        $question->content = <<<'CONTENT'
        I have;epilogue.resource;model: db.Question;endpoints: ['/api/questions', '/api/questions/:id'];associations: true;So when I hit /api/questions, I get back all the associations with the resources. Is there something I can pass to not get the associations in certain cases? Or should I create a new endpoint;epilogue.resource;model: db.Question;endpoints: ['/api/questions2', '/api/questions2/:id']
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        javascript - unwrapKey function with AES-KW not working in IE11 
TITLE;
        $question->content = <<<'CONTENT'
        On MS Edge following unwrapping code works;window.crypto.subtle.unwrapKey;raw;wrappedKey;derivedKey;{ "name": "AES-KW", iv: iv };{ "name": "AES-CBC", iv: iv };false;["decrypt"];The IE11 implementation is based on a unfinished version of the W3C WebCrypto APIs, there is a documentation but there isn't any example code available and my tries have not worked so far. Following does not throw an error on IE11 but the resulting key is null;window.msCrypto.subtle.unwrapKey;wrappedKey;name": "AES-KW;iv: iv;e.target.result;false;["decrypt"];Here is the JSFiddle that you can run.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How append new Document in complicated Collection-Object using Java and MongoDB? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a collection;_id": ObjectId("503b83dfad79cc8d26000004");uid": "9a8a2c5b9418cc1baadfa41255791414";link": "http://stackoverflow.com/questions;tasks;query": "lorem lorem;list;timestamp": "159";provider": "Lor Em;Each collection element consist array of TASKS. Each TASK-element consist Query + List-array.;I must append if is possible new TASK[index].LIST-object (see diagram);But I can not understand, how can I check all in CASE_TO_FIND_ELEMENT;db.myCollection.update;{ };$push;list;timestamp: "1233";provider: "myNewProvier;upsert: true;multi: false;Update;newQuery -> any string (for example from server) for using in document.tasks[index].query;This values i make in my code and must check if they exist in DB;uid + link + (query + (TIMESTAMP + PROVIDER));Update v2;db.demo.find().pretty();_id": ObjectId("564f04f4be5d6f2f98c77dcd");uid": "id3";task;list;lid": "lX;ltext": "demoX;Search UID=="id3" and in task-array in list-array "lid"=="lX", and if not found, push new doc in task.list-array;db.demo.update;uid": "id3";task.list.lid": "lX;$push;task;list;lid": "lX2";ltext": "demoX2";true, false);But in this case mongo insert a new doc in array;db.demo.find().pretty();_id": ObjectId("564f04f4be5d6f2f98c77dcd");uid": "id3";task;list;lid": "lX;ltext": "demoX;list;lid": "lX2";ltext": "demoX2";list;lid": "lX2";ltext": "demoX2";Can you help me please to add some data in MongoDB collection?;Thank you!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Open Graph Protocol in Backbone Application 
TITLE;
        $question->content = <<<'CONTENT'
        I have a backbone application built on an Express JS API and Backbone JS frontend.;Every model and collection, thus consumes from the API, and I render them into the templates provided by a backbone view.;My attempt is this: Everytime the route changes (In turn, rendering a new view) I would like to change contents of the header tag - OGP related content, twitter cards, meta tags that help in SEO. I am not asking how to implement this, but this is the plan.;Are rumors true that OGP will not work this way? Do client side apps have no chance of having OGP entries which are dynamically changed by routes?;If yes, how should I change the way the app behaves without completely changing to server side rendering?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - how to prevent overlapping of link in force directed graph? 
TITLE;
        $question->content = <<<'CONTENT'
        I am following Force directed Graph. How to prevent overlapping of link (line) in force directed graph. Expected output should be like;this. Current JSON data does not contain any parent child relation ship.;Here is my Code;var width = 960;height = 500;var color = d3.scale.category20();var force = d3.layout.force().charge(-120).linkDistance(30).size([width, height]);var svg = d3.select("body").append("svg").attr("width", width).attr("height", height);var graph =;nodes;{"name":"Myriel","group":1};{"name":"Napoleon","group":1};{"name":"Mlle.Baptistine","group":1};{"name":"Mme.Magloire","group":1};{"name":"CountessdeLo","group":1};{"name":"Geborand","group":1};{"name":"Champtercier","group":1};{"name":"Cravatte","group":1};{"name":"Count","group":1};{"name":"OldMan","group":1};{"name":"Labarre","group":2};{"name":"Valjean","group":2};{"name":"Marguerite","group":3};{"name":"Mme.deR","group":2};{"name":"Isabeau","group":2};{"name":"Gervais","group":2};{"name":"Tholomyes","group":3};{"name":"Listolier","group":3};{"name":"Fameuil","group":3};{"name":"Blacheville","group":3};{"name":"Favourite","group":3};{"name":"Dahlia","group":3};{"name":"Zephine","group":3};{"name":"Fantine","group":3};{"name":"Mme.Thenardier","group":4};{"name":"Thenardier","group":4};{"name":"Cosette","group":5};{"name":"Javert","group":4};{"name":"Fauchelevent","group":0};{"name":"Bamatabois","group":2};{"name":"Perpetue","group":3};{"name":"Simplice","group":2};{"name":"Scaufflaire","group":2};{"name":"Woman1","group":2};{"name":"Judge","group":2};{"name":"Champmathieu","group":2};{"name":"Brevet","group":2};{"name":"Chenildieu","group":2};{"name":"Cochepaille","group":2};{"name":"Pontmercy","group":4};{"name":"Boulatruelle","group":6};{"name":"Eponine","group":4};{"name":"Anzelma","group":4};{"name":"Woman2","group":5};{"name":"MotherInnocent","group":0};{"name":"Gribier","group":0};{"name":"Jondrette","group":7};{"name":"Mme.Burgon","group":7};{"name":"Gavroche","group":8};{"name":"Gillenormand","group":5};{"name":"Magnon","group":5};{"name":"Mlle.Gillenormand","group":5};{"name":"Mme.Pontmercy","group":5};{"name":"Mlle.Vaubois","group":5};{"name":"Lt.Gillenormand","group":5};{"name":"Marius","group":8};{"name":"BaronessT","group":5};{"name":"Mabeuf","group":8};{"name":"Enjolras","group":8};{"name":"Combeferre","group":8};{"name":"Prouvaire","group":8};{"name":"Feuilly","group":8};{"name":"Courfeyrac","group":8};{"name":"Bahorel","group":8};{"name":"Bossuet","group":8};{"name":"Joly","group":8};{"name":"Grantaire","group":8};{"name":"MotherPlutarch","group":9};{"name":"Gueulemer","group":4};{"name":"Babet","group":4};{"name":"Claquesous","group":4};{"name":"Montparnasse","group":4};{"name":"Toussaint","group":5};{"name":"Child1","group":10};{"name":"Child2","group":10};{"name":"Brujon","group":4};{"name":"Mme.Hucheloup","group":8};links;{"source":1,"target":0,"value":1};{"source":2,"target":0,"value":8};{"source":3,"target":0,"value":10};{"source":3,"target":2,"value":6};{"source":4,"target":0,"value":1};{"source":5,"target":0,"value":1};{"source":6,"target":0,"value":1};{"source":7,"target":0,"value":1};{"source":8,"target":0,"value":2};{"source":9,"target":0,"value":1};{"source":11,"target":10,"value":1};{"source":11,"target":3,"value":3};{"source":11,"target":2,"value":3};{"source":11,"target":0,"value":5};{"source":12,"target":11,"value":1};{"source":13,"target":11,"value":1};{"source":14,"target":11,"value":1};{"source":15,"target":11,"value":1};{"source":17,"target":16,"value":4};{"source":18,"target":16,"value":4};{"source":18,"target":17,"value":4};{"source":19,"target":16,"value":4};{"source":19,"target":17,"value":4};{"source":19,"target":18,"value":4};{"source":20,"target":16,"value":3};{"source":20,"target":17,"value":3};{"source":20,"target":18,"value":3};{"source":20,"target":19,"value":4};{"source":21,"target":16,"value":3};{"source":21,"target":17,"value":3};{"source":21,"target":18,"value":3};{"source":21,"target":19,"value":3};{"source":21,"target":20,"value":5};{"source":22,"target":16,"value":3};{"source":22,"target":17,"value":3};{"source":22,"target":18,"value":3};{"source":22,"target":19,"value":3};{"source":22,"target":20,"value":4};{"source":22,"target":21,"value":4};{"source":23,"target":16,"value":3};{"source":23,"target":17,"value":3};{"source":23,"target":18,"value":3};{"source":23,"target":19,"value":3};{"source":23,"target":20,"value":4};{"source":23,"target":21,"value":4};{"source":23,"target":22,"value":4};{"source":23,"target":12,"value":2};{"source":23,"target":11,"value":9};{"source":24,"target":23,"value":2};{"source":24,"target":11,"value":7};{"source":25,"target":24,"value":13};{"source":25,"target":23,"value":1};{"source":25,"target":11,"value":12};{"source":26,"target":24,"value":4};{"source":26,"target":11,"value":31};{"source":26,"target":16,"value":1};{"source":26,"target":25,"value":1};{"source":27,"target":11,"value":17};{"source":27,"target":23,"value":5};{"source":27,"target":25,"value":5};{"source":27,"target":24,"value":1};{"source":27,"target":26,"value":1};{"source":28,"target":11,"value":8};{"source":28,"target":27,"value":1};{"source":29,"target":23,"value":1};{"source":29,"target":27,"value":1};{"source":29,"target":11,"value":2};{"source":30,"target":23,"value":1};{"source":31,"target":30,"value":2};{"source":31,"target":11,"value":3};{"source":31,"target":23,"value":2};{"source":31,"target":27,"value":1};{"source":32,"target":11,"value":1};{"source":33,"target":11,"value":2};{"source":33,"target":27,"value":1};{"source":34,"target":11,"value":3};{"source":34,"target":29,"value":2};{"source":35,"target":11,"value":3};{"source":35,"target":34,"value":3};{"source":35,"target":29,"value":2};{"source":36,"target":34,"value":2};{"source":36,"target":35,"value":2};{"source":36,"target":11,"value":2};{"source":36,"target":29,"value":1};{"source":37,"target":34,"value":2};{"source":37,"target":35,"value":2};{"source":37,"target":36,"value":2};{"source":37,"target":11,"value":2};{"source":37,"target":29,"value":1};{"source":38,"target":34,"value":2};{"source":38,"target":35,"value":2};{"source":38,"target":36,"value":2};{"source":38,"target":37,"value":2};{"source":38,"target":11,"value":2};{"source":38,"target":29,"value":1};{"source":39,"target":25,"value":1};{"source":40,"target":25,"value":1};{"source":41,"target":24,"value":2};{"source":41,"target":25,"value":3};{"source":42,"target":41,"value":2};{"source":42,"target":25,"value":2};{"source":42,"target":24,"value":1};{"source":43,"target":11,"value":3};{"source":43,"target":26,"value":1};{"source":43,"target":27,"value":1};{"source":44,"target":28,"value":3};{"source":44,"target":11,"value":1};{"source":45,"target":28,"value":2};{"source":47,"target":46,"value":1};{"source":48,"target":47,"value":2};{"source":48,"target":25,"value":1};{"source":48,"target":27,"value":1};{"source":48,"target":11,"value":1};{"source":49,"target":26,"value":3};{"source":49,"target":11,"value":2};{"source":50,"target":49,"value":1};{"source":50,"target":24,"value":1};{"source":51,"target":49,"value":9};{"source":51,"target":26,"value":2};{"source":51,"target":11,"value":2};{"source":52,"target":51,"value":1};{"source":52,"target":39,"value":1};{"source":53,"target":51,"value":1};{"source":54,"target":51,"value":2};{"source":54,"target":49,"value":1};{"source":54,"target":26,"value":1};{"source":55,"target":51,"value":6};{"source":55,"target":49,"value":12};{"source":55,"target":39,"value":1};{"source":55,"target":54,"value":1};{"source":55,"target":26,"value":21};{"source":55,"target":11,"value":19};{"source":55,"target":16,"value":1};{"source":55,"target":25,"value":2};{"source":55,"target":41,"value":5};{"source":55,"target":48,"value":4};{"source":56,"target":49,"value":1};{"source":56,"target":55,"value":1};{"source":57,"target":55,"value":1};{"source":57,"target":41,"value":1};{"source":57,"target":48,"value":1};{"source":58,"target":55,"value":7};{"source":58,"target":48,"value":7};{"source":58,"target":27,"value":6};{"source":58,"target":57,"value":1};{"source":58,"target":11,"value":4};{"source":59,"target":58,"value":15};{"source":59,"target":55,"value":5};{"source":59,"target":48,"value":6};{"source":59,"target":57,"value":2};{"source":60,"target":48,"value":1};{"source":60,"target":58,"value":4};{"source":60,"target":59,"value":2};{"source":61,"target":48,"value":2};{"source":61,"target":58,"value":6};{"source":61,"target":60,"value":2};{"source":61,"target":59,"value":5};{"source":61,"target":57,"value":1};{"source":61,"target":55,"value":1};{"source":62,"target":55,"value":9};{"source":62,"target":58,"value":17};{"source":62,"target":59,"value":13};{"source":62,"target":48,"value":7};{"source":62,"target":57,"value":2};{"source":62,"target":41,"value":1};{"source":62,"target":61,"value":6};{"source":62,"target":60,"value":3};{"source":63,"target":59,"value":5};{"source":63,"target":48,"value":5};{"source":63,"target":62,"value":6};{"source":63,"target":57,"value":2};{"source":63,"target":58,"value":4};{"source":63,"target":61,"value":3};{"source":63,"target":60,"value":2};{"source":63,"target":55,"value":1};{"source":64,"target":55,"value":5};{"source":64,"target":62,"value":12};{"source":64,"target":48,"value":5};{"source":64,"target":63,"value":4};{"source":64,"target":58,"value":10};{"source":64,"target":61,"value":6};{"source":64,"target":60,"value":2};{"source":64,"target":59,"value":9};{"source":64,"target":57,"value":1};{"source":64,"target":11,"value":1};{"source":65,"target":63,"value":5};{"source":65,"target":64,"value":7};{"source":65,"target":48,"value":3};{"source":65,"target":62,"value":5};{"source":65,"target":58,"value":5};{"source":65,"target":61,"value":5};{"source":65,"target":60,"value":2};{"source":65,"target":59,"value":5};{"source":65,"target":57,"value":1};{"source":65,"target":55,"value":2};{"source":66,"target":64,"value":3};{"source":66,"target":58,"value":3};{"source":66,"target":59,"value":1};{"source":66,"target":62,"value":2};{"source":66,"target":65,"value":2};{"source":66,"target":48,"value":1};{"source":66,"target":63,"value":1};{"source":66,"target":61,"value":1};{"source":66,"target":60,"value":1};{"source":67,"target":57,"value":3};{"source":68,"target":25,"value":5};{"source":68,"target":11,"value":1};{"source":68,"target":24,"value":1};{"source":68,"target":27,"value":1};{"source":68,"target":48,"value":1};{"source":68,"target":41,"value":1};{"source":69,"target":25,"value":6};{"source":69,"target":68,"value":6};{"source":69,"target":11,"value":1};{"source":69,"target":24,"value":1};{"source":69,"target":27,"value":2};{"source":69,"target":48,"value":1};{"source":69,"target":41,"value":1};{"source":70,"target":25,"value":4};{"source":70,"target":69,"value":4};{"source":70,"target":68,"value":4};{"source":70,"target":11,"value":1};{"source":70,"target":24,"value":1};{"source":70,"target":27,"value":1};{"source":70,"target":41,"value":1};{"source":70,"target":58,"value":1};{"source":71,"target":27,"value":1};{"source":71,"target":69,"value":2};{"source":71,"target":68,"value":2};{"source":71,"target":70,"value":2};{"source":71,"target":11,"value":1};{"source":71,"target":48,"value":1};{"source":71,"target":41,"value":1};{"source":71,"target":25,"value":1};{"source":72,"target":26,"value":2};{"source":72,"target":27,"value":1};{"source":72,"target":11,"value":1};{"source":73,"target":48,"value":2};{"source":74,"target":48,"value":2};{"source":74,"target":73,"value":3};{"source":75,"target":69,"value":3};{"source":75,"target":68,"value":3};{"source":75,"target":25,"value":3};{"source":75,"target":48,"value":1};{"source":75,"target":41,"value":1};{"source":75,"target":70,"value":1};{"source":75,"target":71,"value":1};{"source":76,"target":64,"value":1};{"source":76,"target":65,"value":1};{"source":76,"target":66,"value":1};{"source":76,"target":63,"value":1};{"source":76,"target":62,"value":1};{"source":76,"target":48,"value":1};{"source":76,"target":58,"value":1};//d3.json("miserables.json", function(error, graph);force.nodes(graph.nodes).links(graph.links).start();var link = svg.selectAll(".link").data(graph.links).enter().append("line").attr("class", "link").style("stroke-width", function(d) { return Math.sqrt(d.value), });var node = svg.selectAll(".node").data(graph.nodes).enter().append("circle").attr("class", "node").attr("r", 5).style("fill", function(d) { return color(d.group), }).call(force.drag);node.append("title").text(function(d) { return d.name, });force.on("tick", function();link.attr("x1", function(d) { return d.source.x, }).attr("y1", function(d) { return d.source.y, }).attr("x2", function(d) { return d.target.x, }).attr("y2", function(d) { return d.target.y, });node.attr("cx", function(d) { return d.x, }).attr("cy", function(d) { return d.y, });//}),.node;stroke: #fff;stroke-width: 1.5px;link;stroke: #999;stroke-opacity:.6
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - JQuery AJAX, different behaviour in I.E. And Firefox 
TITLE;
        $question->content = <<<'CONTENT'
        I'm using jQuery to read a XML file. Sometimes the XML is empty, and I'm expect the error function (no_info) is executed because the file is not formatted according the dataType.;In I.E. 10 the Error function is executed. But in Firefox (40.0.2) the success function (parse) is executed. Why both browsers behave different and which one is correct?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Why does HTML think “chucknorris” is a color? 
TITLE;
        $question->content = <<<'CONTENT'
        How come certain random strings produce various colors when entered as background colors in HTML? For example;test
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - Href attribute for JavaScript links: "#" or "javascript:void(0)"? 
TITLE;
        $question->content = <<<'CONTENT'
        The following are two methods of building a link that has the sole purpose of running JavaScript code. Which is better, in terms of functionality, page load speed, validation purposes, etc.?;function myJsFunc();alert("myJsFunc");Run JavaScript Code
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - Change an input's HTML5 placeholder color with CSS 
TITLE;
        $question->content = <<<'CONTENT'
        Chrome supports the placeholder attribute on input[type=text] elements (others probably do too).;But the following CSS doesn't do diddly squat to the placeholder's value;input[placeholder], [placeholder], *[placeholder];color: red !important;Value will still remain grey instead of red.;Is there a way to change the color of the placeholder text?;I'm already using the jQuery placeholder plugin for the browsers that don't support the placeholder attribute natively.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - Horizontally center a div in a div 
TITLE;
        $question->content = <<<'CONTENT'
        How can I horizontally center a div within a div using CSS (if it's even possible)?;The outer div has width:100%;Foo foo
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        html - Set cellpadding and cellspacing in CSS? 
TITLE;
        $question->content = <<<'CONTENT'
        In an HTML table, the cellpadding and cellspacing can be set like this;How can the same be accomplished using CSS?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        javascript - Is it possible to apply CSS to half of a character? 
TITLE;
        $question->content = <<<'CONTENT'
        What I am looking for;A way to style one HALF of a character. (In this case, half the letter being transparent);What I have currently searched for and tried (With no luck);Methods for styling half of a character/letter;Styling part of a character with CSS or JavaScript;Apply CSS to 50% of a character;Below is an example of what I am trying to obtain.;Does a CSS or JavaScript solution exist for this, or am I going to have to resort to images? I would prefer not to go the image route as this text will end up being generated dynamically.;UPDATE;Since many have asked why I would ever want to style half of a character, this is why. My city had recently spent $250,000 to define a new "brand" for itself. This logo is what they came up with. Many people have complained about the simplicity and lack of creativity and continue to do so. My goal was to come up with this website as a joke. Type in 'Halifax' and you will see what I mean.:)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        html - Change an element's class with JavaScript 
TITLE;
        $question->content = <<<'CONTENT'
        How can I change a class of an HTML element in response to an onClick event using JavaScript?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How do I give text or an image a transparent background using CSS? 
TITLE;
        $question->content = <<<'CONTENT'
        Is it possible, using CSS only, to make the background of an element semi-transparent but have the content (text & images) of the element opaque?;I'd like to accomplish this without having the text and the background as two separate elements.;When trying;p;position: absolute;background-color: green;filter: alpha(opacity=60);opacity: 0.6;span;color: white;filter: alpha(opacity=100);opacity: 1;Hello world
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How do you disable browser Autocomplete on web form field / input tag? 
TITLE;
        $question->content = <<<'CONTENT'
        How do you disable autocomplete in the major browsers for a specific input (or form field)?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - RegEx match open tags except XHTML self-contained tags 
TITLE;
        $question->content = <<<'CONTENT'
        I need to match all of these opening tags;But not these;I came up with this and wanted to make sure I've got it right. I am only capturing the a-z.;I believe it says;Find a less-than, then;Find (and capture) a-z one or more times, then;Find zero or more spaces, then;Find any character zero or more times, greedy, except /, then;Find a greater-than;Do I have that right? And more importantly, what do you think?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        html - How to disable resizable property of textarea? 
TITLE;
        $question->content = <<<'CONTENT'
        I want to disable the resizable property of a textarea.;Currently, I can resize a textarea by clicking on the bottom right corner of the textarea and dragging the mouse. How can I disable this?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        What are valid values for the id attribute in HTML? 
TITLE;
        $question->content = <<<'CONTENT'
        When creating the id attributes for HTML elements, what rules are there for the value?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        html - Need an unordered list without any bullets 
TITLE;
        $question->content = <<<'CONTENT'
        I have created an unordered list, and I am appending and removing list items using jQuery.. I feel the bullets in the unordered list are bothersome, so I want to remove them. Is it possible to have a list without bullets?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        html - How to align checkboxes and their labels consistently cross-browsers 
TITLE;
        $question->content = <<<'CONTENT'
        This is one of the minor CSS problems that plagues me constantly. How do folks around StackOverflow vertically align checkboxes and their labels consistently cross-browser? Whenever I align them correctly in Safari (usually using vertical-align: baseline on the input), they're completely off in Firefox and IE. Fix it in Firefox, and Safari and IE are inevitably messed up. I waste time on this every time I code a form.;Here's the standard code that I work with
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Modify the URL without reloading the page 
TITLE;
        $question->content = <<<'CONTENT'
        Is there any way I can modify the URL of the current page without reloading the page?;I would like to access the portion before the # hash if possible.;I only need to change the portion after the domain, so its not like I'm violating cross-domain policies.;window.location.href = "www.mysite.com/page2.php", // sadly this reloads
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        html5 - HTML 5: Is it,, or;? 
TITLE;
        $question->content = <<<'CONTENT'
        I've tried checking other answers, but I'm still confused--especially after seeing W3schools HTML 5 reference.;I thought HTML 4.01 was supposed to "allow" single-tags to just be and. Then XHTML came along with and;(where someone said that the space is there for older browsers).;Now I'm wondering how I'm supposed to format my code when practicing HTML 5.;<!DOCTYPE HTML>;Is it;or;?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        html - How to make div not larger than its contents? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a layout similar to;I would like for the div to only expand to as wide as my table becomes.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        html - vs.. Which to use? 
TITLE;
        $question->content = <<<'CONTENT'
        When looking at most sites (including SO), most of them use;instead of;What are the main differences between the two, if any?;Are there valid reasons to use one instead of the other?;Are there valid reasons to use combine them?;Does using come with compatibility issues, seeing it is not very widely used?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Creating a div element in jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        How do I create a div element in jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to move an element into another element? 
TITLE;
        $question->content = <<<'CONTENT'
        I would like to move one DIV element inside another. For example, I want to move this (including all children):...;into this:...;so that I have this:...
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - Make div 100% height of browser window 
TITLE;
        $question->content = <<<'CONTENT'
        I have a layout with two columns - a left div and a right div.;The right div has a grey background-color, and I need it to expand vertically depending on the height of the user's browser window. Right now the background-color ends at the last piece of content in that div.;I've tried height:100%, min-height:100%, etc.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Convert HTML + CSS to PDF with PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        Ok, I'm now banging my head against a brick wall with this one.;I have an HTML (not XHTML) document that renders fine in Firefox 3 and IE 7. It uses fairly basic CSS to style it and renders fine in HTML.;I'm now after a way of converting it to PDF. I have tried;DOMPDF: it had huge problems with tables. I factored out my large nested tables and it helped (before it was just consuming up to 128M of memory then dying--thats my limit on memory in php.ini) but it makes a complete mess of tables and doesn't seem to get images. The tables were just basic stuff with some border styles to add some lines at various points;HTML2PDF and HTML2PS: I actually had better luck with this. It rendered some of the images (all the images are Google Chart URLs) and the table formatting was much better but it seemed to have some complexity problem I haven't figured out yet and kept dying with unknown node_type() errors. Not sure where to go from here, and;Htmldoc: this seems to work fine on basic HTML but has almost no support for CSS whatsoever so you have to do everything in HTML (I didn't realize it was still 2001 in Htmldoc-land...) so it's useless to me.;I tried a Windows app called Html2Pdf Pilot that actually did a pretty decent job but I need something that at a minimum runs on Linux and ideally runs on-demand via PHP on the Webserver.;I really can't believe I'm this stuck. Am I missing something?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        sublimetext2 - How do I reformat HTML code using Sublime Text 2? 
TITLE;
        $question->content = <<<'CONTENT'
        I've got some poorly-formatted HTML code that I'd like to reformat. Is there a command that will automatically reformat HTML code in Sublime Text 2 so it looks better and is easier to read?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - jQuery document.createElement equivalent? 
TITLE;
        $question->content = <<<'CONTENT'
        I'm refactoring some old JavaScript code and there's a lot of DOM manipulation going on.;var d = document;var odv = d.createElement("div");odv.style.display = "none;this.OuterDiv = odv;var t = d.createElement("table");t.cellSpacing = 0;t.className = "text;odv.appendChild(t);I would like to know if there is a better way to do this using jQuery. I've been experimenting with;var odv = $.create("div");$.append(odv);// And many more;But I'm not sure if this is any better.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How to vertically center text with CSS? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a div tag which contains text, and I want to align the contents of this div vertically center.;Here is my div style;#box;height: 90px;width: 270px;background: #000;font-size: 48px;font-style: oblique;color: #FFF;text-align: center;margin-top: 20px;margin-left: 5px;Lorem ipsum dolor sit amet, consectetur adipiscing elit.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Why don&#39;t self-closing script tags work? 
TITLE;
        $question->content = <<<'CONTENT'
        What is the reason browsers do not correctly recognize;Only this is recognized;Does this break the concept of XHTML support?;Note: This statement is correct at least for all IE (6-8 beta 2).
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Redirect from an HTML page? 
TITLE;
        $question->content = <<<'CONTENT'
        Is it possible to set up a basic HTML page to redirect to another page on load?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        unicode - What characters can be used for up/down triangle (arrow without stem) for display in HTML? 
TITLE;
        $question->content = <<<'CONTENT'
        I'm looking for a HTML or ASCII character which is a triangle pointing up or down so that I can use it as a toggle switch.;I found ↑ (&&uarr;and ↓ (&&darr;- but those have a narrow stem. I'm looking just for the HTML arrow "head".
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - When to use IMG vs. CSS background-image? 
TITLE;
        $question->content = <<<'CONTENT'
        In what situations is it more appropriate to use an HTML IMG tag to display an image, as opposed to a CSS background-image, and vice-versa?;Factors may include accessibility, browser support, dynamic content, or any kind of technical limits or usability principles.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        css - Make a div fill the height of the remaining screen space 
TITLE;
        $question->content = <<<'CONTENT'
        I am currently working on a web application, where I want the content to fill the height of the entire screen.;The page has a header, which contains a logo, and account information. This could be an arbitrary height. I want the content div to fill the rest of the page to the bottom.;I have a header div and a content div. At the moment I am using a table for the layout like so;CSS and HTML;#page;height: 100%, width: 100%;#t
content;height: 100%;
content;overflow: auto, /* or overflow: hidden, */
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Recommended way to embed PDF in HTML? 
TITLE;
        $question->content = <<<'CONTENT'
        What is the recommended way to embed PDF in HTML?;iFrame?;Object?;Embed?;What does Adobe say itself about it?;In my case, the PDF is generated on the fly, so it can't be uploaded to a third-party solution prior to flushing it.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How to style a dropdown with CSS only without JavaScript? 
TITLE;
        $question->content = <<<'CONTENT'
        Is there a CSS-only way to style a dropdown?;I need to style a form as much as humanly possible, without any JavaScript. What are the properties I can use to do so in CSS?;This code needs to be compatible with all major browsers;Internet Explorer 6,7 and 8;Firefox;Safari;I know I can make it with JavaScript: Example.;And I'm not talking about simple styling. I want to know, what the best we can do with CSS only.;I found similar questions on Stack Overflow.;And this one on Doctype.com.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to create an HTML button that acts like a link? 
TITLE;
        $question->content = <<<'CONTENT'
        I would like to create an HTML button that acts like a link. So, when you click the button, it redirects to a page. I would like it to be as accessible as possible.;I would also like it so there aren't any extra characters, or parameters in the URL.;How can I achieve this?;Based on the answers posted so far, I am currently doing this;but the problem with this is that in Safari and Internet Explorer, it adds a question mark character to the end of the URL. I need to find a solution that doesn't add any characters to the end of the URL.;There are two other solutions to this: using JavaScript or styling a link to look like a button.;Using JavaScript;Continue;But this obviously requires JavaScript, and for that reason it is less accessible to screen readers. The point of a link is to go to another page. So trying to make a button act like a link is the wrong solution. My suggestion is that you should use a link and style it to look like a button.;Continue
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Adding HTML entities using CSS content 
TITLE;
        $question->content = <<<'CONTENT'
        How do you use the CSS content property to add html entities?;I have a number of links which I make into a breadcrumb style list by adding an arrow before each.;One;Two;Three;Which has the following style applied to it:.breadcrumbs a:before;content: '>;The problem is that when the breadcrumb list gets long and wraps to the next line, the arrow is left on the preceding line. The obvious solution is to change the space into a non-breaking space, but this doesn't work:.breadcrumbs a:before;content: '>&&nbsp;It actually outputs &&nbsp;onto the screen. I've got around this with other strange characters (like ») by pasting the character in directly, but how do you paste a &&nbsp;?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - When is a CDATA section necessary within a script tag? 
TITLE;
        $question->content = <<<'CONTENT'
        Are CDATA tags ever necessary in script tags and if so when?;In other words, when and where is this;preferable to this
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        css - Why not use tables for layout in HTML? 
TITLE;
        $question->content = <<<'CONTENT'
        It seems to be the general opinion that tables should not be used for layout in HTML.;Why?;I have never (or rarely to be honest) seen good arguments for this. The usual answers are;It's good to separate content from layout;But this is a fallacious argument, Cliche Thinking. I guess it's true that using the table element for layout has little to do with tabular data. So what? Does my boss care? Do my users care?;Perhaps me or my fellow developers who have to maintain a web page care... Is a table less maintainable? I think using a table is easier than using divs and CSS.;By the way... why is using a div or a span good separation of content from layout and a table not? Getting a good layout with only divs often requires a lot of nested divs.;Readability of the code;I think it's the other way around. Most people understand HTML, few understand CSS.;It's better for SEO not to use tables;Why? Can anybody show some evidence that it is? Or a statement from Google that tables are discouraged from an SEO perspective?;Tables are slower.;An extra tbody element has to be inserted. This is peanuts for modern web browsers. Show me some benchmarks where the use of a table significantly slows down a page.;A layout overhaul is easier without tables, see css Zen Garden.;Most web sites that need an upgrade need new content (HTML) as well. Scenarios where a new version of a web site only needs a new CSS file are not very likely. Zen Garden is a nice web site, but a bit theoretical. Not to mention its misuse of CSS.;I am really interested in good arguments to use divs + CSS instead of tables.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Where is the best place to put &lt;script&gt; tags in HTML markup? 
TITLE;
        $question->content = <<<'CONTENT'
        When embedding JavaScript in an HTML document, where is the best place to put the tags and included JavaScript? I seem to recall that you are not supposed to place these in the section, but placing at the beginning of the section is bad, too, since the JavaScript will have to be parsed before the page is rendered completely (or something like that). This seems to leave the end of the section as a logical place for tags.;So, where is the best place to put the tags?;(This question references this question, in which it was suggested that JavaScript function calls should be moved from tags to tags. I'm specifically using JQuery, but more general answers are also appropriate.)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How to apply CSS to iframe? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a simple page that has some iframe sections (to display RSS links). How can I apply the same CSS format from the main page to the page displayed in the iframe?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to allow only numeric (0-9) in HTML inputbox using jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        I am creating a web page where I have an input text field in which I want to allow only numeric characters like (0,1,2,3,4,5...9) 0-9.;How can I do this using jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How do you keep parents of floated elements from collapsing? 
TITLE;
        $question->content = <<<'CONTENT'
        This question already has an answer here;What methods of ‘clearfix’ can I use?;27 answers
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - How to remove close button on the jQuery UI dialog? 
TITLE;
        $question->content = <<<'CONTENT'
        How do I remove the close button (the X in the top-right corner) on a dialog box created by jQuery UI?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - Use jQuery to hide a DIV when the user clicks outside of it 
TITLE;
        $question->content = <<<'CONTENT'
        I am using this code;$('body').click(function();$('.form_wrapper').hide();$('.form_wrapper').click(function(event);event.stopPropagation();And this HTML;I Agree;Disagree;The problem is that I have links inside the DIV and when they no longer work when clicked.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Using jQuery to center a DIV on the screen 
TITLE;
        $question->content = <<<'CONTENT'
        How do I go about setting a in the center of the screen using jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How can I select an element by name with jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        Have a table column I'm trying to expand and hide;jQuery seems to hide the td elements when I select it by class but not by element name.;For example, why does;$(".bold").hide(), // selecting by class works;$("tcol1").hide(), // select by element name does not work;Note the HTML below, the second column has the same name for all rows. How could I create this collection using the name attribute?;data1;data2;data1;data2;data1;data2
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        html - What does enctype='multipart/form-data' mean? 
TITLE;
        $question->content = <<<'CONTENT'
        What does enctype='multipart/form-data' mean in an HTML form and when should we use it?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How can I make a page redirect using jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        How can I redirect the user from one page to another using jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Checking if an element is hidden 
TITLE;
        $question->content = <<<'CONTENT'
        In jQuery, it is possible to toggle the visibility of an element, using the functions.hide(),.show() or.toggle().;Using jQuery, how would you test if an element is visible or hidden?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - &quot;Thinking in AngularJS&quot; if I have a jQuery background? 
TITLE;
        $question->content = <<<'CONTENT'
        Suppose I'm familiar with developing client-side applications in jQuery, but now I'd like to start using AngularJS. Can you describe the paradigm shift that is necessary? Here are a few questions that might help you frame an answer;How do I architect and design client-side web applications differently? What is the biggest difference?;What should I stop doing/using, What should I start doing/using instead?;Are there any server-side considerations/restrictions?;I'm not looking for a detailed comparison between jQuery and AngularJS.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How do I check if a checkbox is checked? 
TITLE;
        $question->content = <<<'CONTENT'
        I need to check the checked property of a checkbox and perform an action based on the checked property using jQuery.;For example, if the age checkbox is checked, then I need to show a textbox to enter age, else hide the textbox.;But the following code returns false by default;if($('#isAgeSelected').attr('checked'));$("#txtAge").show();else;$("#txtAge").hide();How do I successfully query the checked property?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Setting &quot;checked&quot; for a checkbox with jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        I'd like to do something like this to tick a checkbox using jQuery;$(".myCheckBox").checked(true);or;$(".myCheckBox").selected(true);Does such a thing exist?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How do I return the response from an asynchronous call? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a function foo which makes an Ajax request. How can I return the response from foo?;I tried to return the value from the success callback as well as assigning the response to a local variable inside the function and return that one, but none of those ways actually return the response.;function foo();var result;$.ajax;url: '...;success: function(response);result = response;// return response, // <- I tried that one as well;return result;var result = foo(), // It always ends up being `undefined`.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        javascript - event.preventDefault() vs. return false 
TITLE;
        $question->content = <<<'CONTENT'
        When I want to prevent other event handlers from executing after a certain event is fired, I can use one of two techniques. I'll use jQuery in the examples, but this applies to plain-JS as well;1. event.preventDefault();$('a').click(function (e);// custom handling here;e.preventDefault();2. return false;$('a').click(function ();// custom handling here;return false;Is there any significant difference between those two methods of stopping event propagation?;For me, return false, is simpler, shorter and probably less error prone than executing a method. With the method, you have to remember about correct casing, parenthesis, etc.;Also, I have to define the first parameter in callback to be able to call the method. Perhaps, there are some reasons why I should avoid doing it like this and use preventDefault instead? What's the better way?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How can I upload files asynchronously? 
TITLE;
        $question->content = <<<'CONTENT'
        I would like to upload a file asynchronously with jQuery. This is my HTML;File;And here my Jquery code;$(document).ready(function ();$("#uploadbutton").click(function ();var filename = $("#file").val();$.ajax;type: "POST;url: "addFile.do;enctype: 'multipart/form-data;data;file: filename;success: function ();alert("Data Uploaded: ");Instead of the file being uploaded, I am only getting the filename. What can I do to fix this problem?;Current Solution;I am using the jQuery Form Plugin to upload files.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - $(this) selector and children? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a layout similar to this;and would like to use a jQuery selector to select the child img inside the div on click.;To get the div, I've got this selector;$(this);How can I get the child img using a selector?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How can I know which radio button is selected via jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        I have two radio buttons and want to post the value of the selected one.;How can I get the value with jQuery?;I can get all of them like this;$("form:radio");How do I know which one is selected?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Is there an &quot;exists&quot; function for jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        How can I check the existence of an element in jQuery?;The current code that I have is this;if ($(selector).length>0);// Do something;Is there is a more elegant way to approach this? Perhaps a plugin or a function?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Add table row in jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        What is the best method in jQuery to add an additional row to a table as the last row?;Is this acceptable?;$('#myTable').append(;my data more data ');Are there limitations to what you can add to a table like this (such as inputs, selects, number of rows)?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - .prop() vs .attr() 
TITLE;
        $question->content = <<<'CONTENT'
        So jQuery 1.6 has the new function prop().;$(selector).click(function();//instead of;this.getAttribute('style');//do i use;$(this).prop('style');//or;$(this).attr('style');or in this case do they do the same thing?;And if I do have to switch to using prop(), all the old attr() calls will break if i switch to 1.6?;UPDATE;See this fiddle: http://jsfiddle.net/maniator/JpUF2/;The console logs the getAttribute as a string, and the attr as a string, but the prop as a CSSStyleDeclaration, Why? And how does that affect my coding in the future?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        jquery - How to format a Microsoft JSON date? 
TITLE;
        $question->content = <<<'CONTENT'
        I'm taking my first crack at Ajax with jQuery. I'm getting my data onto my page, but I'm having some trouble with the JSON data that is returned for Date data types. Basically, I'm getting a string back that looks like this;/Date(1224043200000)/;From someone totally new to JSON - How do I format this to a short date format? Should this be handled somewhere in the jQuery code? I've tried the jQuery.UI.datepicker plugin using $.datepicker.formatDate() without any success.;FYI: Here's the solution I came up with using a combination of the answers here;function getMismatch(id);$.getJSON("Main.aspx?Callback=GetMismatch;{ MismatchId: id };function (result);$("#AuthMerchId").text(result.AuthorizationMerchantId);$("#SttlMerchId").text(result.SettlementMerchantId);$("#CreateDate").text(formatJSONDate(Date(result.AppendDts)));$("#ExpireDate").text(formatJSONDate(Date(result.ExpiresDts)));$("#LastUpdate").text(formatJSONDate(Date(result.LastUpdateDts)));$("#LastUpdatedBy").text(result.LastUpdateNt);$("#ProcessIn").text(result.ProcessIn);return false;function formatJSONDate(jsonDate);var newDate = dateFormat(jsonDate, "mm/dd/yyyy");return newDate;This solution got my object from the callback method and displayed the dates on the page properly using the date format library.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How can I refresh a page with jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        How can I refresh a page with jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Get selected text from a drop-down list (select box) using jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        How can I get a drop-down list selected text in jQuery, not using the selected value?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Disable/enable an input with jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
          $ 'input.disabled = true;or;$input.disabled = "disabled;Which is the standard way? And, conversely, how do you enable a disabled input?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        jquery - How can I select an element with multiple classes? 
TITLE;
        $question->content = <<<'CONTENT'
        I want to select all the elements that have the two classes a and b.;So, only the elements that have both classes.;When I use $(".a,.b") it gives me the union, but I want the intersection.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to detect a click outside an element? 
TITLE;
        $question->content = <<<'CONTENT'
        I have some HTML menus, which I show completely when a user clicks on the head of these menus. I would like to hide these elements when the user clicks outside the menus' area.;Is something like this possible with jQuery?;$("#menuscontainer").clickOutsideThisElement(function();// hide the menus
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Abort Ajax requests using jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        Using jQuery, how can I cancel/abort an Ajax request that I have not yet received the response from?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        jQuery scroll to element 
TITLE;
        $question->content = <<<'CONTENT'
        I have this input element;Then I have some other elements, like other text inputs, textareas, etc.;When the user clicks on that input with #subject, the page should scroll to the last element of the page with a nice animation. It should be a scroll to bottom and not to top.;The last item of the page is a submit button with #submit;The animation should not be too fast and should be fluid.;I am running the latest jQuery version. I prefer to not install any plugin but to use the default jQuery features to achieve this.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        jquery - Get current URL in JavaScript? 
TITLE;
        $question->content = <<<'CONTENT'
        I am using jQuery. How do I get the path of the current URL and assign it to a variable?;Example URL;http://localhost/menuname.de?foo=bar&&amp;number=0
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        json - Convert form data to JavaScript object with jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        How do I convert all elements of my form to a JavaScript object?;I'd like to have some way of automatically building a JavaScript object from my form, without having to loop over each element. I do not want a string, as returned by $('#formid').serialize(),, nor do I want the map returned by $('#formid').serializeArray()
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - $(document).ready equivalent without jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        I have a script that uses $(document).ready, but it doesn't use anything else from jQuery. I'd like to lighten it up by removing the jQuery dependency.;How can I implement my own $(document).ready functionality without using jQuery? I know that using window.onload will not be the same, as window.onload fires after all images, frames, etc. have been loaded.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Is Safari on iOS 6 caching $.ajax results? 
TITLE;
        $question->content = <<<'CONTENT'
        Since the upgrade to iOS 6, we are seeing Safari's web view take the liberty of caching $.ajax calls. This is in the context of a PhoneGap application so it is using the Safari WebView. Our $.ajax calls are POST methods and we have cache set to false {cache:false}, but still this is happening. We tried manually adding a TimeStamp to the headers but it did not help.;We did more research and found that Safari is only returning cached results for web services that have a function signature that is static and does not change from call to call. For instance, imagine a function called something like;getNewRecordID(intRecordType);This function receives the same input parameters over and over again, but the data it returns should be different every time.;Must be in Apple's haste to make iOS 6 zip along impressively they got too happy with the cache settings. Has anyone else seen this behavior on iOS 6? If so, what exactly is causing it?;The workaround that we found was to modify the function signature to be something like this;getNewRecordID(intRecordType, strTimestamp);and then always pass in a TimeStamp parameter as well, and just discard that value on the server side. This works around the issue. I hope this helps some other poor soul who spends 15 hours on this issue like I did!
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Serializing to JSON in jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        I need to serialize an object to JSON. I'm using jQuery. Is there a "standard" way to do this?;My specific situation: I have an array defined as shown below;var countries = new Array();countries[0] = 'ga;countries[1] = 'cd',...;and I need to turn this into a string to pass to $.ajax() like this;$.ajax;type: "POST;url: "Concessions.aspx/GetConcessions;data: "{'countries':['ga','cd']}",...
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - jQuery&#39;s jquery-1.10.2.min.map is triggering a 404 (Not Found) 
TITLE;
        $question->content = <<<'CONTENT'
        I'm seeing error messages about a file, min.map, being not found;GET jQuery's jquery-1.10.2.min.map is triggering a 404 (Not Found);Screenshot;Where is this coming from?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - What is the best way to add options to a select from an array with jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        What is the best method for adding options to a select from a JSON object using jQuery?;I'm looking for something that I don't need a plugin to do, but would also be interested in the plugins that are out there.;This is what I did;selectValues = { "1": "test 1", "2": "test 2" };for (key in selectValues);if (typeof (selectValues[key] == 'string');$('#mySelect').append(' ');A clean/simple solution;This is a cleaned up and simplified version of matdumsa's;$.each(selectValues, function(key, value);$('#mySelect').append($(' ', { value: key }).text(value));Changes from matdumsa's: (1) removed the close tag for the option inside append() and (2) moved the properties/attributes into an map as the second parameter of append().
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - jQuery get specific option tag text 
TITLE;
        $question->content = <<<'CONTENT'
        All right, say I have this;What would the selector look like if I wanted to get "Option B" when I have the value '2'?;Please note that this is not asking how to get the selected text value, but just any one of them, whether selected or not, depending on the value attribute. I tried;$("#list[value='2']").text();But it is not working.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        cdn - Best way to use Google's hosted jQuery, but fall back to my hosted library on Google fail 
TITLE;
        $question->content = <<<'CONTENT'
        What would be a good way to attempt to load the hosted jQuery at Google (or other Google hosted libs), but load my copy of jQuery if the Google attempt fails?;I'm not saying Google is flaky. There are cases where the Google copy is blocked (apparently in Iran, for instance).;Would I set up a timer and check for the jQuery object?;What would be the danger of both copies coming through?;Not really looking for answers like "just use the Google one" or "just use your own." I understand those arguments. I also understand that the user is likely to have the Google version cached. I'm thinking about fallbacks for the cloud in general.;Edit: This part added...;Since Google suggests using google.load to load the ajax libraries, and it performs a callback when done, I'm wondering if that's the key to serializing this problem.;I know it sounds a bit crazy. I'm just trying to figure out if it can be done in a reliable way or not.;Update: jQuery now hosted on Microsoft's CDN.;http://www.asp.net/ajax/cdn/
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to determine if variable is &#39;undefined&#39; or &#39;null&#39;? 
TITLE;
        $question->content = <<<'CONTENT'
        How do I determine if variable is undefined or null? My code is as follows;var EmpName = $("div#esd-names div#name").attr('class');if(EmpName == 'undefined');//DO SOMETHING;But if I do this, the JavaScript interpreter halts execution.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Event binding on dynamically created elements? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a bit of code where I am looping though all the select boxes on a page and binding a.hover event to them to do a bit of twiddling with their width on mouseon/off.;This happens on page ready and works just fine.;The problem I have is that any select boxes I add via Ajax or DOM after the initial loop won't have the event bound.;I have found this plugin (jQuery Live Query Plugin), but before I add another 5k to my pages with a plugin, I want to see if anyone knows a way to do this, either with jQuery directly or by another option.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        How do I set/unset cookie with jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        How do I set and unset a cookie using jQuery, for example create a cookie named test and set the value to 1?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to manage a redirect request after a jQuery Ajax call 
TITLE;
        $question->content = <<<'CONTENT'
        I'm using $.post() to call a servlet using Ajax and then using the resulting HTML fragment to replace a div element in the user's current page. However, if the session times out, the server sends a redirect directive to send the user to the login page. In this case, jQuery is replacing the div element with the contents of the login page, forcing the user's eyes to witness a rare scene indeed.;How can I manage a redirect directive from an Ajax call with jQuery 1.2.6?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How to change the href for a hyperlink using jQuery 
TITLE;
        $question->content = <<<'CONTENT'
        How can you change the href for a hyperlink using jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        input - Best way to remove an event handler in jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        I have an input type="image". This acts like the cell notes in Microsoft Excel. If someone enters a number into the text box that this input-image is paired with, I setup an event handler for the input-image. Then when the user clicks the image, they get a little popup to add some notes to the data.;My problem is that when a user enters a zero into the text box, I need to disable the input-image 's event handler. I have tried the following, but to no avail.;$('#myimage').click(function { return false, })
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        Scroll to the top of the page using JavaScript/jQuery? 
TITLE;
        $question->content = <<<'CONTENT'
        I've a on the page, when this button is pressed a hidden is shown using jQuery.;My question is, how do I scroll to the top of the page using a JavaScript/jQuery command in that function? It is desirable even if the scroll bar instantly jumps to the top. I'm not looking for a smooth scrolling.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - window.onload vs $(document).ready() 
TITLE;
        $question->content = <<<'CONTENT'
        What are the differences between JavaScript's window.onload and jQuery's $(document).ready() method?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - How can I get jQuery to perform a synchronous, rather than asynchronous, Ajax request? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a JavaScript widget which provides standard extension points. One of them is the beforecreate function. It should return false to prevent an item from being created.;I've added an Ajax call into this function using jQuery;beforecreate: function (node, targetNode, type, to);jQuery.get('http://example.com/catalog/create/' + targetNode.id + '?name=' + encode(to.inp[0].value);function (result);if (result.isOk == false);alert(result.message);But I want to prevent my widget from creating the item, so I should return false in the mother-function, not in the callback. Is there a way to perform a synchronized Ajax request using jQuery or any other API?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Check if element is visible after scrolling 
TITLE;
        $question->content = <<<'CONTENT'
        I'm loading elements via AJAX. Some of them are only visible if you scroll down the page.;Is there any way I can know if an element is now in the visible part of the page?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        jquery - Find object by id in an array of JavaScript objects 
TITLE;
        $question->content = <<<'CONTENT'
        I've got an array;myArray = [{'id':'73','foo':'bar'},{'id':'45','foo':'bar'}, etc.];I'm unable to change the structure of the array. I'm being passed an id of 45, and I want to get 'bar' for that object in the array.;How do I do this in JavaScript or using jQuery?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        javascript - Is there a link to the &quot;latest&quot; jQuery library on Google APIs? 
TITLE;
        $question->content = <<<'CONTENT'
        This question already has an answer here;Latest jQuery version on Google's CDN;3 answers
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        php - Using a regular expression to validate an email address 
TITLE;
        $question->content = <<<'CONTENT'
        Over the years I have slowly developed a regular expression that validates MOST email addresses correctly, assuming they don't use an IP address as the server part.;I use it in several PHP programs, and it works most of the time. However, from time to time I get contacted by someone that is having trouble with a site that uses it, and I end up having to make some adjustment (most recently I realized that I wasn't allowing 4-character TLDs).;What's the best regular expression you have or have seen for validating emails?;I've seen several solutions that use functions that use several shorter expressions, but I'd rather have one long complex expression in a simple function instead of several short expression in a more complex function.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        php - Check if string contains specific words? 
TITLE;
        $question->content = <<<'CONTENT'
        Consider;$a = 'How are you?;if ($a contains 'are');echo 'true;Suppose I have the code above, what is the correct way to write the statement if ($a contains 'are')?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        parsing - How do you parse and process HTML/XML in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        How can one parse HTML/XML and extract information from it?;This is a General Reference question for the php tag
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - Why shouldn't I use mysql_* functions in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        What are the technical reasons why I shouldn't use mysql_* functions? (e.g. mysql_query(), mysql_connect() or mysql_real_escape_string())?;Why should I use something else even if they work on my site?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        php - When to use self over $this? 
TITLE;
        $question->content = <<<'CONTENT'
        In PHP 5, what is the difference between using self and $this?;When is each appropriate?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        php - How do I get a YouTube video thumbnail from the YouTube API? 
TITLE;
        $question->content = <<<'CONTENT'
        If I have a YouTube video URL, is there any way to use PHP and cURL to get the associated thumbnail from the YouTube API?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - How should I ethically approach user password storage for later plaintext retrieval? 
TITLE;
        $question->content = <<<'CONTENT'
        As I continue to build more and more websites and web applications I am often asked to store user's passwords in a way that they can be retrieved if/when the user has an issue (either to email a forgotten password link, walk them through over the phone, etc.) When I can I fight bitterly against this practice and I do a lot of ‘extra’ programming to make password resets and administrative assistance possible without storing their actual password.;When I can’t fight it (or can’t win) then I always encode the password in some way so that it at least isn’t stored as plaintext in the database—though I am aware that if my DB gets hacked that it won’t take much for the culprit to crack the passwords as well—so that makes me uncomfortable.;In a perfect world folks would update passwords frequently and not duplicate them across many different sites—unfortunately I know MANY people that have the same work/home/email/bank password, and have even freely given it to me when they need assistance. I don’t want to be the one responsible for their financial demise if my DB security procedures fail for some reason.;Morally and ethically I feel responsible for protecting what can be, for some users, their livelihood even if they are treating it with much less respect.;I am certain that there are many avenues to approach and arguments to be made for salting hashes and different encoding options, but is there a single ‘best practice’ when you have to store them? In almost all cases I am using PHP and MySQL if that makes any difference in the way I should handle the specifics.;Additional Information for Bounty;I want to clarify that I know this is not something you want to have to do and that in most cases refusal to do so is best. I am, however, not looking for a lecture on the merits of taking this approach I am looking for the best steps to take if you do take this approach.;In a note below I made the point that websites geared largely toward the elderly, mentally challenged, or very young can become confusing for people when they are asked to perform a secure password recovery routine. Though we may find it simple and mundane in those cases some users need the extra assistance of either having a service tech help them into the system or having it emailed/displayed directly to them.;In such systems the attrition rate from these demographics could hobble the application if users were not given this level of access assistance, so please answer with such a setup in mind.;Thanks to Everyone;This has been a fun questions with lots of debate and I have enjoyed it. In the end I selected an answer that both retains password security (I will not have to keep plain text or recoverable passwords), but also makes it possible for the user base I specified to log into a system without the major drawbacks I have found from normal password recovery.;As always there were about 5 answers that I would like to have marked correct for different reasons, but I had to choose the best one--all the rest got a +1. Thanks everyone!;Also, thanks to everyone in the Stack community who voted for this question and/or marked it as a favorite. I take hitting 100 up votes as a compliment and hope that this discussion has helped someone else with the same concern that I had.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Delete an element from an array 
TITLE;
        $question->content = <<<'CONTENT'
        Is there an easy way to delete an element from a PHP array, such that foreach ($array) no longer includes that element?;I thought that setting it to null would do it, but apparently not.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How do you use bcrypt for hashing passwords in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        Every now and then I hear the advice "Use bcrypt for storing passwords in PHP, bcrypt rules".;But what is bcrypt? PHP doesn't offer any such functions, Wikipedia babbles about a file-encryption utility and Web searches just reveal a few implementations of Blowfish in different languages. Now Blowfish is also available in PHP via mcrypt, but how does that help with storing passwords? Blowfish is a general purpose cipher, it works two ways. If it could be encrypted, it can be decrypted. Passwords need a one-way hashing function.;What is the explanation?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        regex - startsWith() and endsWith() functions in PHP 
TITLE;
        $question->content = <<<'CONTENT'
        How can I write two functions that would take a string and return if it starts with the specified character/string or ends with it?;For example;$str = '|apples};echo startsWith($str, '|'), //Returns true;echo endsWith($str, '}'), //Returns true
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        How to fix "Headers already sent" error in PHP 
TITLE;
        $question->content = <<<'CONTENT'
        When running my script, I am getting several errors like this;Warning: Cannot modify header information - headers already sent by (output started at /some/file.php:12) in /some/file.php on line 23;The lines mentioned in the error messages contain header() and setcookie() calls.;What could be the reason for this? And how to fix it?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        security - Secure hash and salt for PHP passwords 
TITLE;
        $question->content = <<<'CONTENT'
        It is currently said that MD5 is partially unsafe. Taking this into consideration, I'd like to know which mechanism to use for password protection.;This question, Is “double hashing” a password less secure than just hashing it once?;suggests that hashing multiple times may be a good idea, whereas How to implement password protection for individual files? suggests using salt.;I'm using PHP. I want a safe and fast password encryption system. Hashing a password a million times may be safer, but also slower. How to achieve a good balance between speed and safety? Also, I'd prefer the result to have a constant number of characters.;The hashing mechanism must be available in PHP;It must be safe;It can use salt (in this case, are all salts equally good? Is there any way to generate good salts?);Also, should I store two fields in the database (one using MD5 and another one using SHA, for example)? Would it make it safer or unsafer?;In case I wasn't clear enough, I want to know which hashing function(s) to use and how to pick a good salt in order to have a safe and fast password protection mechanism.;Related questions that don't quite cover my question;What's the difference between SHA and MD5 in PHP;Simple Password Encryption;Secure methods of storing keys, passwords for asp.net;How would you implement salted passwords in Tomcat 5.5
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        PHP and Enumerations 
TITLE;
        $question->content = <<<'CONTENT'
        I know that PHP doesn't have native Enumerations. But I have become accustomed to them from the Java world. I would love to use enums as a way to give predefined values which IDEs' auto completion features could understand.;Constants do the trick, but there's the namespace collision problem and (or actually because) they're global. Arrays don't have the namespace problem, but they're too vague, they can be overwritten at runtime and IDEs rarely (never?) know how to autofill their keys.;Are there any solutions/workarounds you commonly use? Does anyone recall whether the PHP guys have had any thoughts or decisions around enums?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        security - What's the best method for sanitizing user input with PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        Is there a catchall function somewhere that works well for sanitizing user input for SQL injection and XSS attacks, while still allowing certain types of html tags?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        What is stdClass in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        Please define what stdClass is.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How do I expire a PHP session after 30 minutes? 
TITLE;
        $question->content = <<<'CONTENT'
        I need to keep a session alive for 30 minutes and then destroy it.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - How do I implement basic "Long Polling"? 
TITLE;
        $question->content = <<<'CONTENT'
        I can find lots of information on how Long Polling works (For example, this, and this), but no simple examples of how to implement this in code.;All I can find is cometd, which relies on the Dojo JS framework, and a fairly complex server system..;Basically, how would I use Apache to serve the requests, and how would I write a simple script (say, in PHP) which would "long-poll" the server for new messages?;The example doesn't have to be scaleable, secure or complete, it just needs to work!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        environment variables - How to get the client IP address in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        How can I get the client IP address using PHP?;I want to keep record of the user who logged into my website through his/her IP address.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        debugging - Reference - What does this error mean in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        What is this?;This is a number of answers about warnings, errors and notices you might encounter while programming PHP and have no clue how to fix. This is also a Community Wiki, so everyone is invited to participate in adding to and maintaining this list.;Why is this?;Questions like "Headers already sent" or "Calling a member of a non-object" pop up frequently on Stack Overflow. The root cause of those questions is always the same. So the answers to those questions typically repeat them and then show the OP which line to change in his/her particular case. These answers do not add any value to the site because they only apply to the OP's particular code. Other users having the same error can not easily read the solution out of it because they are too localized. That is sad, because once you understood the root cause, fixing the error is trivial. Hence, this list tries to explain the solution in a general way to apply.;What should I do here?;If your question has been marked as a duplicate of this, please find your error message below and apply the fix to your code. The answers usually contain further links to investigate in case it shouldn't be clear from the general answer alone.;If you want to contribute, please add your "favorite" error message, warning or notice, one per answer, a short description what it means (even if it is only highlighting terms to their manual page), a possible solution or debugging approach and a listing of existing Q&A that are of value. Also, feel free to improve any existing answers.;The List;Nothing is seen. The page is empty and white. (also known as White Page/Screen Of Death);Code doesn't run/what looks like parts of my PHP code are output;Warning: Cannot modify header information - headers already sent;Warning: mysql_fetch_array() expects parameter 1 to be resource, boolean given a.k.a.;Warning: mysql_fetch_array(): supplied argument is not a valid MySQL result resource a.k.a.;Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result, boolean given (or similar variations);Warning: [function] expects parameter 1 to be resource, boolean given;Warning: [function]: failed to open stream: [reason];Warning: open_basedir restriction in effect;Warning: Division by zero;Warning: Illegal string offset 'XXX;Parse error: syntax error, unexpected '[;Parse error: syntax error, unexpected T_XXX;Parse error: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE;Parse error: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM;Parse error: syntax error, unexpected T_VARIABLE;Fatal error: Allowed memory size of XXX bytes exhausted (tried to allocate XXX bytes);Fatal error: Call to a member function... on a non-object;Fatal Error: Call to Undefined function XXX;Fatal Error: Cannot redeclare XXX;Fatal error: Can't use function return value in write context;Fatal error: Declaration of AAA::BBB() must be compatible with that of CCC::BBB();Fatal error: Using $this when not in object context;Notice: Array to string conversion;Notice: Trying to get property of non-object error;Notice: Undefined variable;Notice: Undefined Index;Notice: Undefined offset XXX [Reference];Notice: Uninitialized string offset: XXX;Notice: Use of undefined constant XXX - assumed 'XXX;MySQL: You have an error in your SQL syntax, check the manual that corresponds to your MySQL server version for the right syntax to use near... at line...;Strict Standards: Non-static method [:: ] should not be called statically;Also see;Reference - What does this symbol mean in PHP?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - What are Long-Polling, Websockets, Server-Sent Events (SSE) and Comet? 
TITLE;
        $question->content = <<<'CONTENT'
        I have tried reading some articles, but I am not very clear on the concepts yet.;Would someone like to take a shot at explaining to me what these technologies are;Long Polling;Server-Sent Event;Websockets;Comet;One thing that I came across every time was, the server keeps a connection open and pushes data to the client. How is the connection kept open, and how does the client get the pushed data? (how does the client use the data, maybe some code might help?);Now, which one of them should I use for a real-time app. I have been hearing a lot about websockets (with socket.io [a node.js library]) but why not PHP?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - UTF-8 all the way through 
TITLE;
        $question->content = <<<'CONTENT'
        I'm setting up a new server, and want to support UTF-8 fully in my web application. I have tried in the past on existing servers and always seem to end up having to fall back to ISO-8859-1.;Where exactly do I need to set the encoding/charsets? I'm aware that I need to configure Apache, MySQL and PHP to do this - is there some standard checklist I can follow, or perhaps troubleshoot where the mismatches occur?;This is for a new Linux server, running MySQL 5, PHP 5 and Apache 2.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - When should I use require_once vs include? 
TITLE;
        $question->content = <<<'CONTENT'
        In PHP;When should I use require vs. include?;When should I use require_once vs. require?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Sort Multi-dimensional Array by Value 
TITLE;
        $question->content = <<<'CONTENT'
        Possible Duplicate;How do I Sort a Multidimensional Array in PHP;How can I sort this array by the value of the "order" key? Even though the values are currently sequential, they will not always be.;Array;[0] => Array;[hashtag] => a7e87329b5eab8578f4f1098a152d6f4;[title] => Flower;[order] => 3;[1] => Array;[hashtag] => b24ce0cd392a5b0b8dedc66c25213594;[title] => Free;[order] => 2;[2] => Array;[hashtag] => e7d31fc0602fb2ede144d18cdffd816b;[title] => Ready;[order] => 1
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        Detecting request type in PHP (GET, POST, PUT or DELETE) 
TITLE;
        $question->content = <<<'CONTENT'
        How can I detect which request type was used (GET, POST, PUT or DELETE) in PHP?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        How do I get PHP Errors to display? 
TITLE;
        $question->content = <<<'CONTENT'
        I have checked my PHP ini file and display errors is set and also error reporting is E_ALL. I have restarted my apache web server. I have even put these lines at the top of my script and it doesn't even catch simple parse errors. For example, I declare variables with a "$" and I don't close statements ",". But all my scripts show a blank page on these errors, but i want to actually see the errors in my browser output.;error_reporting(E_ALL);ini_set('display_errors', 1);What is left to do?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        php - Get the first element of an array 
TITLE;
        $question->content = <<<'CONTENT'
        I have an array;array(4 => 'apple', 7 => 'orange', 13 => 'plum');I would like to get the first element of this array. Expected result: string apple;One requirement: it cannot be done with passing by reference, so array_shift is not a good solution.;How can I do this?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        oop - PHP: Public, Private, Protected 
TITLE;
        $question->content = <<<'CONTENT'
        When and why should I use and what's the difference between, public, private and protected functions and variables inside a class?;Examples;// Public;public $variable;public function doSomething(){...code...;// Private;private $variable;private function doSomething(){...code...;// Protected;protected $variable;protected function doSomething(){...code...
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        How to make a redirect in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        Is it possible to redirect a user to a different page through the use of PHP?;Say the user goes to www.example.com/page.php and I want to redirect them to www.example.com/index.php, how would I do so without the use of a meta refresh? Possible?;This could even protect my pages from unauthorized users.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        multithreading - What is thread safe or non thread safe in PHP 
TITLE;
        $question->content = <<<'CONTENT'
        I saw different binaries for PHP, like non thread or thread safe? What does this mean? What is the difference between these packages?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        What is the best collation to use for MySQL with PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        I'm wondering if there is a "best" choice for collation in MySQL for a general website where you aren't 100% sure of what will be entered? I understand that all the encodings should be the same, such as MySQL, Apache, the HTML and anything inside PHP.;In the past I have set PHP to output in "UTF-8", but which collation does this match in MySQL? I'm thinking it's one of the UTF-8 ones, but I have used utf8_unicode_ci, utf8_general_ci, and utf8_bin before.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        datetime - How to calculate the difference between two dates using PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        I have two dates of the form;Start Date: 2007-03-24;End Date: 2009-06-26;Now I need to find the difference between these two in the following form;2 years, 3 months and 2 days;How can I do this in PHP?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        date - How do I use PHP to get the current year? 
TITLE;
        $question->content = <<<'CONTENT'
        I want to put a copyright notice in the footer of a web site, but I think it's incredibly tacky for the year to be out-of-date. How would I make the year update automatically with PHP 4 and PHP 5?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to check if PHP array is associative or sequential? 
TITLE;
        $question->content = <<<'CONTENT'
        PHP treats all arrays as associative, so there aren't any built in functions. Can anyone recommend a fairly efficient way to check if an array contains only numeric keys?;Basically, I want to be able to differentiate between this;$sequentialArray = array('apple', 'orange', 'tomato', 'carrot');and this;$assocArray = array('fruit1' => 'apple;fruit2' => 'orange;veg1' => 'tomato;veg2' => 'carrot')
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        php - How to 'insert if not exists' in MySQL? 
TITLE;
        $question->content = <<<'CONTENT'
        I started by googling, and found this article which talks about mutex tables.;I have a table with ~14 million records. If I want to add more data in the same format, is there a way to ensure the record I want to insert does not already exist without using a pair of queries (ie, one query to check and one to insert is the result set is empty)?;Does a unique constraint on a field guarantee the insert will fail if it's already there?;It seems that with merely a constraint, when I issue the insert via php, the script croaks.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        performance - Preferred method to store PHP arrays (json_encode vs serialize) 
TITLE;
        $question->content = <<<'CONTENT'
        I need to store a multi-dimensional associative array of data in a flat file for caching purposes. I might occasionally come across the need to convert it to JSON for use in my web app but the vast majority of the time I will be using the array directly in PHP.;Would it be more efficient to store the array as JSON or as a PHP serialized array in this text file? I've looked around and it seems that in the newest versions of PHP (5.3), json_decode is actually faster than unserialize.;I'm currently leaning towards storing the array as JSON as I feel its easier to read by a human if necessary, it can be used in both PHP and JavaScript with very little effort, and from what I've read, it might even be faster to decode (not sure about encoding, though).;Does anyone know of any pitfalls? Anyone have good benchmarks to show the performance benefits of either method?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Get first key in a (possibly) associative array? 
TITLE;
        $question->content = <<<'CONTENT'
        What's the best way to determine the first key in a possibly associative array? My first thought it to just foreach the array and then immediately breaking it, like this;foreach ($an_array as $key => $val) break;Thus having $key contain the first key, but this seems inefficient. Does anyone have a better solution?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        coding style - Are PHP short tags acceptable to use? 
TITLE;
        $question->content = <<<'CONTENT'
        Here's the information according to the official documentation;There are four different pairs of;opening and closing tags which can be;used in PHP. Two of those;and;are always available. The other two;are short tags and ASP style tags, and;can be turned on and off from the;php.ini configuration file. As such;while some people find short tags and;ASP style tags convenient, they are;less portable, and generally not;recommended.;In my experience most servers do have short tags enabled. Typing;<?=;is far more convenient than typing;<?php echo;The programmers convenience is an important factor, so why are they not recommended?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        How to extract a file extension in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        This is a question you can read everywhere on the web with various answers;$ext = end(explode('.', $filename));$ext = substr(strrchr($filename, '.'), 1);$ext = substr($filename, strrpos($filename, '.') + 1);$ext = preg_replace('/^.*\.([^.]+)$/D', '$1', $filename);$exts = split("[/\\.]", $filename);$n = count($exts)-1;$ext = $exts[$n];etc.;However, there is always "the best way" and it should be on stackoverflow.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - Should I use field 'datetime' or 'timestamp'? 
TITLE;
        $question->content = <<<'CONTENT'
        Would you recommend using a datetime or a timestamp field, and why (using MySQL)?;I'm working with PHP on the server side.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        mysql5 - How to get a list of MySQL user accounts 
TITLE;
        $question->content = <<<'CONTENT'
        I'm using the MySQL command line utility and can navigate through a database. Now I need to see a list of user accounts. How can I do this?;I'm using MySQL version 5.4.1.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        Which MySQL Datatype to use for storing boolean values? 
TITLE;
        $question->content = <<<'CONTENT'
        Since MySQL doesn't seem to have any 'boolean' datatype, which datatype do you 'abuse' for storing true/false information in MySQL? Especially in the context of writing and reading from/to a PHP-Script.;Over time I have used and seen several approaches;tinyint, varchar fields containing the values 0/1;varchar fields containing the strings '0'/'1' or 'true'/'false;and finally enum Fields containing the two options 'true'/'false'.;None of the above seems optimal, I tend to prefer the tinyint 0/1 variant, since automatic type conversion in PHP gives me boolean values rather simply.;So which datatype do you use, is there a type designed for boolean values which I have overlooked? Do you see any advantages/disadvantages by using one type or another?
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - MyISAM versus InnoDB 
TITLE;
        $question->content = <<<'CONTENT'
        I'm working on a projects which involves a lot of database writes, I'd say (70% inserts and 30% reads). This ratio would also include updates which I consider to be one read and one write. The reads can be dirty (e.g. I don't need 100% accurate information at the time of read).;The task in question will be doing over 1 million database transactions an hour.;I've read a bunch of stuff on the web about the differences between MyISAM and InnoDB, and MyISAM seems like the obvious choice to me for the particular database/tables that I'll be using for this task. From what I seem to be reading, InnoDB is good if transactions are needed since row level locking is supported.;Does anybody have any experience with this type of load (or higher)? Is MyISAM the way to go?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        How do I connect to a MySQL Database in Python? 
TITLE;
        $question->content = <<<'CONTENT'
        How do I connect to a MySQL database using a python program?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - What's the difference between INNER JOIN, LEFT JOIN, RIGHT JOIN and FULL JOIN? 
TITLE;
        $question->content = <<<'CONTENT'
        This question already has an answer here;Difference between INNER and OUTER joins;24 answers
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        bash - How to output MySQL query results in CSV format? 
TITLE;
        $question->content = <<<'CONTENT'
        Is there an easy way to run a MySQL query from the Linux command line and output the results in CSV format?;Here's what I'm doing now;mysql -u uid -ppwd -D dbname << EOQ | sed -e 's/ /,/g' | tee list.csv;select id, concat("\"",name,"\"") as name;from students;EOQ;It gets messy when there are a lot of columns that need to be surrounded by quotes, or if there are quotes in the results that need to be escaped.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        sql - Can I concatenate multiple MySQL rows into one field? 
TITLE;
        $question->content = <<<'CONTENT'
        Using MySQL, I can do something like;SELECT hobbies FROM peoples_hobbies WHERE person_id = 5;and get;shopping;fishing;coding;but instead I just want 1 row, 1 col;shopping, fishing, coding;The reason is that I'm selecting multiple values from multiple tables, and after all the joins I've got a lot more rows than I'd like.;I've looked for a function on MySQL Doc and it doesn't look like the CONCAT or CONCAT_WS functions accept result sets, so does anyone here know how to do this?
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        How do you set a default value for a MySQL Datetime column? 
TITLE;
        $question->content = <<<'CONTENT'
        How do you set a default value for a MySQL Datetime column?;In SQL Server it's getdate(). What is the equivalant for MySQL? I'm using MySQL 5.x if that is a factor.
CONTENT;
        $question->user_id = $user_id;
        $question->save();


        $question = new Question();
        $question->title = <<<'TITLE'
        MySQL: Large VARCHAR vs. TEXT? 
TITLE;
        $question->content = <<<'CONTENT'
        I've got a messages table in MySQL which records messages between users. Apart from the typical ids and message types (all integer types) I need to save the actual message text as either VARCHAR or TEXT. I'm setting a front-end limit of 3000 characters which means the messages would never be inserted into the db as longer than this.;Is there a rationale for going with either VARCHAR(3000) or TEXT? There's something about just writing VARCHAR(3000) that feels somewhat counter-intuitive. I've been through other similar posts on Stack Overflow but would be good to get views specific to this type of common message storing.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        sql - How to reset AUTO_INCREMENT in MySQL? 
TITLE;
        $question->content = <<<'CONTENT'
        How can I reset the auto-increment of a field? I want it to start counting from 1 again.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        How do I quickly rename a MySQL database (change schema name)? 
TITLE;
        $question->content = <<<'CONTENT'
        The MySQL manual at MySQL covers this.;Usually I just dump the database and reimport it with a new name. This is not an option for very big databases. Apparently RENAME {DATABASE | SCHEMA} db_name TO new_db_name, does bad things, exist only in a handful of versions, and is a bad idea overall.;This needs to work with InnoDB, which stores things very differently than MyISAM.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - "INSERT IGNORE" vs "INSERT... ON DUPLICATE KEY UPDATE" 
TITLE;
        $question->content = <<<'CONTENT'
        While executing an INSERT statement with many rows, I want to skip duplicate entries that would otherwise cause failure. After some research, my options appear to be the use of either;ON DUPLICATE KEY UPDATE which implies an unnecessary update at some cost, or;INSERT IGNORE which implies an invitation for other kinds of failure to slip in unannounced.;Am I right in these assumptions? What's the best way to simply skip the rows that might cause duplicates and just continue on to the other rows?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - What's the difference between utf8_general_ci and utf8_unicode_ci 
TITLE;
        $question->content = <<<'CONTENT'
        Between utf8_general_ci and utf8_unicode_ci, are there any differences in terms of performance?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How do I specify unique constraint for multiple columns in MySQL? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a table;table votes;id;user;email;address;primary key(id);Now I want to make the columns user, email, address unique (together).;How do I do this in MySql?;Of course the example is just... an example. So please don't worry about the semantics.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        sql - INNER JOIN ON vs WHERE clause 
TITLE;
        $question->content = <<<'CONTENT'
        For simplicity, assume all relevant fields are NOT NULL.;You can do;SELECT;table1.this, table2.that, table2.somethingelse;FROM;table1, table2;WHERE;table1.foreignkey = table2.primarykey;AND (some other conditions);Or else;SELECT;table1.this, table2.that, table2.somethingelse;FROM;table1 INNER JOIN table2;ON table1.foreignkey = table2.primarykey;WHERE;(some other conditions);Do these two work on the same way in MySQL?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Find duplicate records in MySQL 
TITLE;
        $question->content = <<<'CONTENT'
        I want to pull out duplicate records in a MySQL Database. This can be done with;SELECT address, count(id) as cnt FROM list;GROUP BY address HAVING cnt > 1;Which results in;100 MAIN ST 2;I would like to pull it so that it shows each row that is a duplicate. Something like;JIM JONES 100 MAIN ST;JOHN SMITH 100 MAIN ST;Any thoughts on how this can be done? I'm trying to avoid doing the first one then looking up the duplicates with a second query in the code.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - SQL Select only rows with Max Value on a Column 
TITLE;
        $question->content = <<<'CONTENT'
        I have this table for documents (simplified version here);+------+-------+--------------------------------------+;id | rev |
content;+------+-------+--------------------------------------+;1 | 1 |...;2 | 1 |...;1 | 2 |...;1 | 3 |...;+------+-------+--------------------------------------+;How do I select one row per id and only the greatest rev?;With the above data, the result should contain two rows: [1, 3,...] and [2, 1,..]. I'm using MySQL.;Currently I use checks in the while loop to detect and over-write old revs from the resultset. But is this the only method to achieve the result? Isn't there a SQL solution?;Update;As the answers suggest, there is a SQL solution, and here a sqlfiddle demo.;Update 2;I noticed after adding the above sqlfiddle, the rate at which the question is upvoted has surpassed the upvote rate of the answers. That has not been the intention! The fiddle is based on the answers, especially the accepted answer.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        python - Installing specific package versions with pip 
TITLE;
        $question->content = <<<'CONTENT'
        I'm trying to install version 1.2.2 of the MySQL_python adaptor. The current version shown in PyPi is 1.2.3. Is there a way to install the older version? I found an article stating that this should do it;pip install MySQL_python==1.2.2;When installed, however, it still shows MySQL_python-1.2.3-py2.6.egg-info in the site packages. Is this a problem specific to this package, or am I doing something wrong?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        information schema - How to find all the tables in MySQL with specific column names in them? 
TITLE;
        $question->content = <<<'CONTENT'
        I have 2-3 different column names that I want to look up in the entire DB and list out all tables which have those columns. Any easy script?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        mysql - How can I SELECT rows with MAX(Column value), DISTINCT by another column in SQL? 
TITLE;
        $question->content = <<<'CONTENT'
        My table is;id home datetime player resource;---|-----|------------|--------|---------;1 | 10 | 04/03/2009 | john | 399;2 | 11 | 04/03/2009 | juliet | 244;5 | 12 | 04/03/2009 | borat | 555;3 | 10 | 03/03/2009 | john | 300;4 | 11 | 03/03/2009 | juliet | 200;6 | 12 | 03/03/2009 | borat | 500;7 | 13 | 24/12/2008 | borat | 600;8 | 13 | 01/01/2009 | borat | 700;I need to select each distinct home holding the maximum value of datetime.;Result would be;id home datetime player resource;---|-----|------------|--------|---------;1 | 10 | 04/03/2009 | john | 399;2 | 11 | 04/03/2009 | juliet | 244;5 | 12 | 04/03/2009 | borat | 555;8 | 13 | 01/01/2009 | borat | 700;I have tried;-- 1..by the MySQL manual;SELECT DISTINCT home, id, datetime as dt, player, resource;FROM topten t1;WHERE datetime = (SELECT MAX(t2.datetime) FROM topten t2;GROUP BY home);GROUP BY datetime;ORDER BY datetime DESC;Doesn't work. Result-set has 130 rows although database holds 187.;Result includes some duplicates of home.;-- 2..join;SELECT s1.id, s1.home, s1.datetime, s1.player, s1.resource;FROM topten s1 JOIN;(SELECT id, MAX(datetime) AS dt;FROM topten;GROUP BY id) AS s2;ON s1.id = s2.id;ORDER BY datetime;Nope. Gives all the records.;-- 3..something exotic;With various results.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to import an SQL file using the command line in MySQL? 
TITLE;
        $question->content = <<<'CONTENT'
        I have a.sql file with an export from phpMyAdmin. I want to import it into a different server using the command line.;I have a Windows Server 2008 R2 installation. I placed the.sql file on the C drive, and I tried this command;database_name < file.sql;It is not working I get syntax errors.;How can I import this file without a problem?;Do I need to create a database first?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        sql - Join vs. sub-query 
TITLE;
        $question->content = <<<'CONTENT'
        I am an old-school MySQL user and have always preferred JOIN over sub-query. But nowadays everyone uses sub-query and I hate it, I don't know why.;I lack the theoretical knowledge to judge for myself if there is any difference.;Is a sub-query as good as a JOIN and therefore there is nothing to worry about?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        database - How to shrink/purge ibdata1 file in MySQL 
TITLE;
        $question->content = <<<'CONTENT'
        I am using MySQL in localhost as a "query tool" for performing statistics in R, that is, everytime I run a R script, I create a new database (A), create a new table (B), import the data into B, submit a query to get what I need, and then I drop B and drop A.;It's working fine for me, but I realize that the ibdata file size is increasing rapidly, I stored nothing in MySQL, but the ibdata1 file already exceeded 100 MB.;I am using more or less default MySQL setting for the setup, is there a way for I can automatically shrink/purge the ibdata1 file after a fixed period of time?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        sql - Retrieving the last record in each group 
TITLE;
        $question->content = <<<'CONTENT'
        There is a table messages that contains data as shown below;Id Name Other_Columns;-------------------------;1 A A_data_1;2 A A_data_2;3 A A_data_3;4 B B_data_1;5 B B_data_2;6 C C_data_1;If I run a query select * from messages group by name, I will get the result as;1 A A_data_1;4 B B_data_1;6 C C_data_1;What query will return the following result?;3 A A_data_3;5 B B_data_2;6 C C_data_1;That is, the last record in each group should be returned.;At present, this is the query that I use;select * from (select * from messages ORDER BY id DESC) AS x GROUP BY name;But this looks highly inefficient. Any other ways to achieve the same result?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        table - Differences between INDEX, PRIMARY, UNIQUE, FULLTEXT in MySQL? 
TITLE;
        $question->content = <<<'CONTENT'
        What are the differences between PRIMARY, UNIQUE, INDEX and FULLTEXT when creating MySQL tables?;How would I use them?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - 'IF' in 'SELECT' statement - choose output value based on column values 
TITLE;
        $question->content = <<<'CONTENT'
        SELECT id, amount FROM report;I need amount to be amount if report.type='P' and -amount if report.type='N'. How do I add this to the above query?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        sql - MySQL Query GROUP BY day / month / year 
TITLE;
        $question->content = <<<'CONTENT'
        Is it possible I make a simple query to count how many records I have in a determined period of time like a Year, month or day, having a TIMESTAMP field, like;SELECT COUNT(id);FROM stats;WHERE record_date.YEAR = 2009;GROUP BY record_date.YEAR;Or even;SELECT COUNT(id);FROM stats;GROUP BY record_date.YEAR, record_date.MONTH;To have a monthly statistic.;Thanks!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        mysql - Error installing mysql2: Failed to build gem native extension 
TITLE;
        $question->content = <<<'CONTENT'
        I am having some problems when trying to install mysql2 gem for Rails. When I try to install it by running bundle install or gem install mysql2 it gives me the following error;Error installing mysql2: ERROR: Failed to build gem native extension.;How can I fix this and successfully install mysql2?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        Compare two MySQL databases 
TITLE;
        $question->content = <<<'CONTENT'
        I'm currently developing an application using a MySQL database.;The database-structure is still in flux and changes while development progresses (I change my local copy, leaving the one on the test-server alone).;Is there a way to compare the two instances of the database to see if there were any changes?;While currently simply discarding the previous test server database is fine, as testing starts entering test data it could get a bit tricky.;The same though more so will happen again later in production...;Is there an easy way to incrementally make changes to the production database, preferably by automatically creating a script to modify it?;Tools mentioned in the answers;Red-Gate's MySQL Schema & Data Compare (Commercial);Maatkit (now Percona);liquibase;Toad;Nob Hill Database Compare (Commercial);MySQL Diff;SQL EDT (Commercial)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        MySQL copy/duplicate database 
TITLE;
        $question->content = <<<'CONTENT'
        Without local access to the server, is there any way to duplicate/clone a MySQL db (with content and without content) into another without using mysqldump?;I am currently using MySQL 4.0.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        mysql - TINYTEXT, TEXT, MEDIUMTEXT, and LONGTEXT maximum storage sizes 
TITLE;
        $question->content = <<<'CONTENT'
        Per the docs, there are four TEXT types;TINYTEXT;TEXT;MEDIUMTEXT;LONGTEXT;What is the maximum length that I can store in a column of each data type assuming the character encoding is UTF-8?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - mysqli or PDO - what are the pros and cons? 
TITLE;
        $question->content = <<<'CONTENT'
        In our place we're split between using mysqli and PDO for stuff like prepared statements and transaction support. Some projects use one, some the other. There is little realistic likelihood of us ever moving to another RDBMS.;I prefer PDO for the single reason that it allows named parameters for prepared statements, and as far as I am aware mysqli does not.;Are there any other pros and cons to choosing one over the other as a standard as we consolidate our projects to use just one approach?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        sql - Skip certain tables with mysqldump 
TITLE;
        $question->content = <<<'CONTENT'
        Is there a way to restrict certain tables from the mysqldump command?;For example, I'd use the following syntax to dump only table1 and table2;mysqldump -u username -p database table1 table2 > database.sql;But is there a similar way to dump all the tables except table1 and table2? I haven't found anything in the mysqldump documentation, so is brute-force (specifying all the table names) the only way to go?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        sql - MySQL: @variable vs. variable. Whats the difference? 
TITLE;
        $question->content = <<<'CONTENT'
        In another question I posted someone told me that there is a difference between;@variable;and;variable;in MySQL. He also mentioned how MSSQL has batch scope and MySQL has session scope. Can someone elaborate on this for me?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        sql - Insert into a MySQL table or update if exists 
TITLE;
        $question->content = <<<'CONTENT'
        I want to add a row to a database table, but if a row exists with the same unique key I want to update the row.;For example;insert into table (id, name, age) values(1, "A", 19);Let’s say the unique key is id, and in my database there is a row with id = 1. In that case I want to update that row with these values. Normally this gives an error. If I use insert IGNORE it will ignore the error but still won’t update.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        mariadb - MySQL: Grant **all** privileges on database 
TITLE;
        $question->content = <<<'CONTENT'
        I've created database, for example 'mydb'.;CREATE DATABASE mydb CHARACTER SET utf8 COLLATE utf8_bin;CREATE USER 'myuser'@'%' IDENTIFIED BY PASSWORD '*HASH;GRANT ALL ON mydb.* TO 'myuser'@'%;GRANT ALL ON mydb TO 'myuser'@'%;GRANT CREATE ON mydb TO 'myuser'@'%;FLUSH PRIVILEGES;Now i can login to database from everywhere, but can't create tables.;How to grant all privileges on that database and (in the future) tables. I can't create tables in 'mydb' database. I always get;CREATE TABLE t (c CHAR(20) CHARACTER SET utf8 COLLATE utf8_bin);ERROR 1142 (42000): CREATE command denied to user 'myuser'@'...' for table 't
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to get the sizes of the tables of a mysql database? 
TITLE;
        $question->content = <<<'CONTENT'
        I can run this query to get the sizes of all tables in a mysql database;show table status from myDatabaseName;I would like some help in understanding the results. I am looking for tables with the largest sizes.;Which column should I look at?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Get the query executed in Laravel 3/4 
TITLE;
        $question->content = <<<'CONTENT'
        How can I get the executed query in Laravel 3/4, using Fluent Query Builder or Eloquent ORM.;For example;DB::table('users')->where_status(1)->get();Or (posts (id, user_id,...));User::find(1)->posts->get();Or... How I can save in log, all queries executed.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        database - Proper Repository Pattern Design in PHP? 
TITLE;
        $question->content = <<<'CONTENT'
        Preface: I'm attemping to use the repository pattern in a MVC architecture with relational databases.;I've recently started learning TDD in PHP, and I'm realizing that my database is coupled much too closely with the rest of my application. I've read about repositories, and using an IoC container to "inject" it into my controllers. Very cool stuff. But now have some practical questions about repository design. Consider the follow example.;db = $db;public function findAll();public function findById($id);public function findByName($name);public function create($user);public function remove($user);public function update($user);Issue #1: Too many fields;All of these find methods use a select all fields (SELECT *) approach. However, in my apps I'm always trying to limit the number of fields I get, as this often adds overhead and slows things down. For those using this pattern, how do you deal with this?;Issue #2: Too many methods;While this class looks nice right now, I know that in a real world app I need a lot more methods. For example;findAllByNameAndStatus;findAllInCountry;findAllWithEmailAddressSet;findAllByAgeAndGender;findAllByAgeAndGenderOrderByAge;Etc.;As you can see, there could be very, very long list of possible methods. And then if you add in the field selection issue above, the problem worsens. In the past I'd normally just put all this logic right in my controller;byCountry('Canada')->orderBy('name')->rows();return View::make('users', array('users' => $users));With my repository approach, I don't want to end up with this;repo->get_first_name_last_name_email_username_status_by_country_order_by_name('Canada');return View::make('users', array('users' => $users));Issue #3: Impossible to match an interface;I see the benefit in using interfaces for repositories, so I can swap out my implementation (for testing purposes or other). My understanding of interfaces is that they define a contract that an implementation must follow. This is great until you start adding additional methods to your repositories like findAllInCountry(). Now I need to update my interface to also have this method, otherwise other implementations may not have it, and that could break my application. By this feels insane...a case of the tail wagging the dog.;Specification Pattern?;This leads me to believe that repository should only have a fixed number of methods (like save(), remove(), find(), findAll(), etc). But then how do I run specific lookups? I've heard of the Specification Pattern, but it seems to me that this only reduces an entire set of records (via IsSatisfiedBy()), which clearly has major performance issues if you're pulling from a database.;Help?;Clearly I need to rethink things a little when working with repositories. Can anyone enlighten on how this is best handled?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        What are the best practices and best places for laravel 4 helpers or basic functions? 
TITLE;
        $question->content = <<<'CONTENT'
        So I'm trying to understand the best place to put a global function in laravel 4. For example: date formatting. I don't think making a facade is worth it, facades are too modular. I've read articles about creating a library folder and storing classes there, but that also seems like a lot for a simple function. Also, shouldn't a 'tool' like this be available in blade templates?;What are the best practices for something like this? And how do i make it available to the blade templates?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        laravel - How do I get the query builder to output its raw SQL query as a string? 
TITLE;
        $question->content = <<<'CONTENT'
        Given the following code;DB::table('users')->get();I want to get the raw SQL query string that the query builder above will generate, so in this example it would be SELECT * FROM users.;How do I do this?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Best practices for custom helpers on Laravel 5 
TITLE;
        $question->content = <<<'CONTENT'
        I would like to create some helpers (functions) to avoid repeating code between some views, in L5 style;view.blade.php;Foo Formated text: {{ fooFormatText($text) }};They are basically text formatting functions. Where and how can I put a file with these functions?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to get the current URL inside @if statement (blade) in Laravel 4? 
TITLE;
        $question->content = <<<'CONTENT'
        I am using laravel 4. I would like to access to the current URL inside an @if condition in a view using the Laravel's Blade templating engine but I don't know how to do it.;I know that it can be done using something like but It's not possible inside an @if blade statement.;Any suggestion?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Laravel 4 eloquent WHERE with OR AND OR? 
TITLE;
        $question->content = <<<'CONTENT'
        How do I say WHERE (a=1 OR b=1) AND (c=1 OR d=1);For more complicated queries am I supposed to use raw SQL?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        apache - Error in exception handler. - Laravel 
TITLE;
        $question->content = <<<'CONTENT'
        It's a Laravel-install related question. I have a public-facing Unix server setup;ServerAdmin webmaster@mydomain.org;DocumentRoot "/var/www/mydomain;ServerName mydomain.org;ServerAlias www.mydomain.org;ErrorLog "/var/log/mydomain.org-error_log;CustomLog "/var/log/mydomain.org-access_log" common;I can serve documents fine out of /var/www/mydomain i.e. http://mydomain.org/test.php with test.php containing;<?php echo 'test;works fine.;In bash, with Laravel installed through Composer and looking at the files;# ls /var/www/mydomain/my-laravel-project.gitattributes CONTRIBUTING.md artisan composer.json phpunit.xml readme.md vendor.gitignore app bootstrap composer.lock public server.php;So when I browse to;http://mydomain.org/my-laravel-project/public/;why does my application report;Error in exception handler.;in the browser - on a blank white screen? I'm expecting to see the Laravel splash screen.;Moreover, the log files don't reveal anything either.
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        laravel - What are differences between "php artisan dump-autoload" and "composer dump-autoload" 
TITLE;
        $question->content = <<<'CONTENT'
        I am pretty new to Laravel4 and Composer. While I do laravel 4 tutorials, I couldn't understand between those two commands, php artisan dump-autoload and composer dump-autoload What are difference between them??
CONTENT;
        $question->user_id = $user_id;
        $question->save();



        $question = new Question();
        $question->title = <<<'TITLE'
        oop - Managing relationships in Laravel, adhering to the repository pattern 
TITLE;
        $question->content = <<<'CONTENT'
        While creating an app in Laravel 4 after reading T. Otwell's book on good design patterns in Laravel I found myself creating repositories for every table on the application.;I ended up with the following table structure;Students: id, name;Courses: id, name, teacher_id;Teachers: id, name;Assignments: id, name, course_id;Scores (acts as a pivot between students and assignments): student_id, assignment_id, scores;I have repository classes with find, create, update and delete methods for all of these tables. Each repository has an Eloquent model which interacts with the database. Relationships are defined in the model per Laravel's documentation: http://laravel.com/docs/eloquent#relationships.;When creating a new course, all I do is calling the create method on the Course Repository. That course has assignments, so when creating one, I also want to create an entry in the score's table for each student in the course. I do this through the Assignment Repository. This implies the assignment repository communicates with two Eloquent models, with the Assignment and Student model.;My question is: as this app will probably grow in size and more relationships will be introduced, is it good practice to communicate with different Eloquent models in repositories or should this be done using other repositories instead (I mean calling other repositories from the Assignment repository) or should it be done in the Eloquent models all together?;Also, is it good practice to use the scores table as a pivot between assignments and students or should it be done somewhere else?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Laravel 4: how to "order by" using Eloquent ORM 
TITLE;
        $question->content = <<<'CONTENT'
        This question already has an answer here;Laravel Eloquent: Ordering results of all();4 answers
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Laravel's Blade: how can I set variables in a template? 
TITLE;
        $question->content = <<<'CONTENT'
        I'm reading Laravel Blade's templating docs and I can't find how I can assign variables inside a template for use later in the template. I can't do {{ $old_section = "whatever" }} because that will echo "whatever" and I don't want that.;I see that I can do, but that's not elegant.;Is there an elegant way to do that in Blade?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - How to use order by for multiple columns in laravel 4? 
TITLE;
        $question->content = <<<'CONTENT'
        I want to sort for multiple columns in Laravel 4 by use method orderBy() of Eloquent. The query will generate by Eloquent like this;SELECT *;FROM mytable;ORDER BY;coloumn1 DESC, coloumn2 ASC;How can I do?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        bash - Laravel installation: How to place the ~/.composer/vendor/bin directory in your PATH? 
TITLE;
        $question->content = <<<'CONTENT'
        I'm on Ubuntu 14.04 and I've been trying all possible methods to install Laravel to no avail. Error messages everything I try. I'm now trying the first method in the quickstart documentation, that is, via Laravel Installer, but it says to "Make sure to place the ~/.composer/vendor/bin directory in your PATH so the laravel executable is found when you run the laravel command in your terminal." so my question is, how do I do that? This may be a simple question but I'm really frustrated and would appreciate any help.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - What is the difference between PSR-0 and PSR-4? 
TITLE;
        $question->content = <<<'CONTENT'
        I've recently read about namespaces and how they are beneficial.;I'm creating a project in Laravel and was trying to move from class map autoloading to namespacing.;I can't seem to grasp what the actual difference is between PSR-0 and PSR-4.;Some resources that I've read from are;Battle of the Autoloaders;Laracasts PSR-4 autoloading;PSR-0;PSR-4;What I understand;PSR-4 does not convert underscores to directory separators;Certain specific rules of composer cause the directory structure to become complex which in turn makes PSR-0 namespacing verbose and thus PSR-4 was created;Examples explaining the difference would be appreciated.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Laravel unexpected error "class user contains 3 abstract methods..." 
TITLE;
        $question->content = <<<'CONTENT'
        While programming my Authentication app on Laravel, I came across to an error I've never seen before. I've been brainstorming for almost an hour for the cause of this problem but yet I can't find a solution.;Error;Class User contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Illuminate\Auth\UserInterface::getRememberToken, Illuminate\Auth\UserInterface::setRememberToken, Illuminate\Auth\UserInterface::getRememberTokenName);User.php Model;getKey();/**;* Get the password for the user.;*;* @return string;*/;public function getAuthPassword();return $this->password;/**;* Get the e-mail address where password reminders are sent.;*;* @return string;*/;public function getReminderEmail();return $this->email;And the RegisterController.php;required|email|max:50|unique:users;username" => "required|max:50|min:5|unique:users;password" => "required|max:50|min:6";password_again"=> "required|same:password;$messages = ["required" => "This field is required." ];$validator = Validator::make(Input::all(), $rules, $messages);if($validator->fails());return Redirect::route('register')->withErrors($validator)->withInput();else;$email = Input::get('email');$username = Input::get('username');$password = Input::get('password');$code = str_random(60);$user = User::create;email' => $email;username' => $username;password' => Hash::make($password);code' => $code;activated' => 0;banned' => 0;if ($user);Mail::send('template.email.activate', ['link' => URL::route('activate', $code), 'username' => $username], function($message) use ($user);$message->to($user->email, $user->username)->subject('Account Registration');return Redirect::route('register')->with('homeError', 'There was a problem creating your account.');return Redirect::route('register')->with('homeError', 'Account could not be created.')
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Passing data to a closure in Laravel 4 
TITLE;
        $question->content = <<<'CONTENT'
        I'm trying to use the Mail Class in Laravel 4, and I'm not able to pass variables to the $m object.;the $team object contains data I grabbed from the DB with eloquent.;Mail::send('emails.report', $data, function($m);$m->to($team->senior->email, $team->senior->first_name. ' '. $team->senior->last_name);$m->cc($team->junior->email, $team->junior->first_name. ' '. $team->junior->last_name);$m->subject('Monthly Report');$m->from('info@website.com', 'Sender');For some reason I get an error where $team object is not available. I suppose it has something to do with the scope.;Any ideas?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Laravel 4 migrate rollback problems 
TITLE;
        $question->content = <<<'CONTENT'
        I can easily run the artisan migrate etc, but when i try to roll it back, with migration:rollback i keep getting this error;c:\xampp\htdocs\laravel>php artisan migrate:rollback;{"error":{"type":"Symfony\\Component\\Debug\\Exception\\FatalErrorException","message":"Class 'CreateCodesnippetsTable' not found","file":"C:\\xampp\\htdocs\\laravel\\vendor\\laravel\\framework\\src\\Illum;inate\\Database\\Migrations\\Migrator.php","line":301}};Is this a bug? or how should i debug this?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        Laravel redirect back to original destination after login 
TITLE;
        $question->content = <<<'CONTENT'
        This seems like a pretty basic flow, and Laravel has so many nice solutions for basic things, I feel like I'm missing something.;A user clicks a link that requires authentication. Laravel's auth filter kicks in and routes them to a login page. User logs in, then goes to the original page they were trying to get to before the 'auth' filter kicked in.;Is there a good way to know what page they were trying to get to originally? Since Laravel is the one intercepting the request, I didn't know if it keeps track somewhere for easy routing after the user logs in.;If not, I'd be curious to hear how some of you have implemented this manually.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Laravel Eloquent: multiple where clause query 
TITLE;
        $question->content = <<<'CONTENT'
        I'm using the Laravel Eloquent query builder and I have query where I want a WHERE clause on multiple things. It works, but it is not elegant.;Example;$results = User;where('this', '=', 1);->where('that', '=', 1);->where('this_too', '=', 1);->where('that_too', '=', 1);->where('this_as_well', '=', 1);->where('that_as_well', '=', 1);->where('this_one_too', '=', 1);->where('that_one_too', '=', 1);->where('this_one_as_well', '=', 1);->where('that_one_as_well', '=', 1);->get();Is there a better way to do this, or should I stick with this method?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Laravel Eloquent: Ordering results of all() 
TITLE;
        $question->content = <<<'CONTENT'
        I'm stuck on a simple task.;I just need to order results coming from this call;$results = Project::all();Where Project is a model. I've tried this;$results = Project::all()->orderBy("name");But it didn't work. Which is the better way to obtain all data from a table and get them ordered?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Add a custom attribute to a Laravel / Eloquent model on load? 
TITLE;
        $question->content = <<<'CONTENT'
        I'd like to be able to add a custom attribute/property to an Laravel/Eloquent model when it is loaded, similar to how that might be achieved with RedBean's $model->open() method.;For instance, at the moment, in my controller I have;public function index();$sessions = EventSession::all();foreach ($sessions as $i => $session);$sessions[$i]->available = $session->getAvailability();return $sessions;It would be nice to be able to omit the loop and have the 'available' attribute already set and populated.;I've tried using some of the model events described in the documentation to attach this property when the object loads, but without success so far.;Notes;available' is not a field in the underlying table.;$sessions is being returned as a JSON object as part of an API, and therefore calling something like $session->available() in a template isn't an option
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        laravel - Eloquent collection: counting and detect empty 
TITLE;
        $question->content = <<<'CONTENT'
        This maybe a trivial question but I am wondering if Laravel recommends a certain way to check whether an Eloquent collection returned from $result = Model::where(...)->get() is empty, as well as counting the number of elements.;We are currently using !$result to detect empty result, is that sufficient? As for count($result), does it actually cover all cases, including empty result?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        php - Can I Install Laravel without using Composer? 
TITLE;
        $question->content = <<<'CONTENT'
        I'd like to know if I can install or use the Laravel PHP framework on any webserver without using Composer (PHP package/dependency manager) every time?;I am learning PHP and frameworks and I am working on a CMS based on Laravel for practice.;I would like to be able to drop it onto any webserver without having to use composer every time.;If I run $ composer install the first time (locally), then all the dependencies should be present, correct?;Then, I should be able to drop it onto any server with all of the files (including the vendor directory)?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Safely remove migration In Laravel 4 
TITLE;
        $question->content = <<<'CONTENT'
        In Laravel 4, there appears to be a command for creating a migration, but not removing.;Create migration command;php artisan migrate:make create_users_table;If I want to delete the migration, can I just safely delete the corresponding migrations file within the database/migrations folder?;Migrations file;2013_05_31_220658_create_users_table
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        mysql - Is there a way to "limit" the result with ELOQUENT ORM of Laravel? 
TITLE;
        $question->content = <<<'CONTENT'
        Is there a way to "limit" the result with ELOQUENT ORM of Laravel?;SELECT * FROM `games` LIMIT 30, 30;And with Eloquent?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Differences and Similarities Between Lumen and Laravel 
TITLE;
        $question->content = <<<'CONTENT'
        I read the documentation and it seems Lumen is Laravel with less features. I must be missing something.;I am looking for a comparison table of the components and features of both Laravel and Lumen. Does anyone know the differences?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - How to install Laravel 5.0 
TITLE;
        $question->content = <<<'CONTENT'
        I'm having trouble getting a test instance of Laravel 5.0 up and running so I can assist with this transition.;1) Creating a new app from https://github.com/laravel/laravel/tree/develop leads to the following error when running composer install.;{"error;{"type":"ErrorException;message":"Undefined index: timezone;file":"\/Projects\/indatus\/dispatcher-test-app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/start.php;line":167};{"error;{"type":"ErrorException;message":"Undefined index: timezone;file":"\/Projects\/indatus\/dispatcher-test-app\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/start.php;line":167}};Am I completely missing something?;UPDATE: This question/answer was only relevant when Laravel 5 was in the development stage. You should now reference the Laravel Documentation for how to install Laravel
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        composer php - Laravel 5 - artisan seed [ReflectionException] Class SongsTableSeeder does not exist 
TITLE;
        $question->content = <<<'CONTENT'
        When I run php artisan db:seed I am getting the following error;[ReflectionException] Class SongsTableSeeder does not exist;What is going on?;My DatabaseSeeder class;call('SongsTableSeeder');My SongsTableSeeder class;$faker->words(rand(1,4))];DB::table('songs')->insert($songs)
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Add new methods to a resource controller in Laravel 
TITLE;
        $question->content = <<<'CONTENT'
        I want to know if it is possible to add new methods to a resource controller in Laravel and how you do it.;I know that these methods are the default (index, create, store, edit, update, destroy). Now I want to add additional methods and routes to the same controller.;Is that possible?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Using CSS in Laravel views? 
TITLE;
        $question->content = <<<'CONTENT'
        I've just began learning Laravel, and can do the basics of a controller and routing.;My OS is Mac OS X Lion, and it's on a MAMP server.;My code from routes.php;Route::get('/', function();return View::make('home.index');Route::get('businesses', function();return View::make('businesses.index');Route::get('testing', function();return View::make('testing.index');Route::get('hello', function();return;Hello world!;That works, the views display perfectly, ''however'' what I want to try and do is include CSS within the views, I tried adding in a link to a stylesheet within the directory but the page displayed it as the default browser font even though the css was in the HTML!;This is index.php from businesses within the views folder;Business is a varied term. My content here.;I tried using the Blade template engine in my other views folder (testing) to display CSS but again the CSS did not show despite it being in the testing folder!;How can I overcome this problem, and get better - as I'm slowly learning this framework.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Laravel blank white screen 
TITLE;
        $question->content = <<<'CONTENT'
        My laravel site was working before, I recently upgraded to Apache 2.4 and PHP 5.5.7.;Now I'm getting a white blank screen when I go to laravel.mydomain.com, nothing in apache error logs, routes and etc. should be fine as it worked before..htaccess is loading as I get a 500 when I insert an invalid line to /var/sites/laravel/public/.htaccess.;Heres my.htaccess;$ cat /var/sites/laravel/public/.htaccess;Options -MultiViews;RewriteEngine On;# Redirect Trailing Slashes...;RewriteRule ^(.*)/$ /$1 [L,R=301];# Handle Front Controller...;RewriteCond %{REQUEST_FILENAME} !-d;RewriteCond %{REQUEST_FILENAME} !-f;RewriteRule ^ index.php [L];Heres my virtual host directive;DocumentRoot "/var/sites/laravel/public;ServerName laravel.mydomain.com;AllowOverride All;allow from all;Options +Indexes;Require all granted;And apachectl -S;$ /usr/local/apache2/bin/apachectl -S;VirtualHost configuration;*:* is a NameVirtualHost;default server mydomain.com (/usr/local/apache2/conf/extra/httpd-vhosts.conf:25);port * namevhost mydomain.com (/usr/local/apache2/conf/extra/httpd-vhosts.conf:25);port * namevhost laravel.mydomain.com (/usr/local/apache2/conf/extra/httpd- vhosts.conf:34);ServerRoot: "/usr/local/apache2";Main DocumentRoot: "/var/www;Main ErrorLog: "/usr/local/apache2/logs/error_log;Mutex rewrite-map: using_defaults;Mutex default: dir="/usr/local/apache2/logs/" mechanism=default;PidFile: "/usr/local/apache2/logs/httpd.pid;Define: DUMP_VHOSTS;Define: DUMP_RUN_CFG;User: name="daemon" id=1 not_used;Group: name="daemon" id=1 not_used
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        Using Eloquent ORM in Laravel to perform search of database using LIKE 
TITLE;
        $question->content = <<<'CONTENT'
        I want to use Eloquent's active record building to build a search query, but it is going to be a LIKE search. I have found the User::find($term) or User::find(1), but this is not generating a like statement. I'm not looking for a direct answer, but if someone could at least give me a direction to look in that'd be great!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - 'Failed to open stream: Permission denied' error - Laravel 
TITLE;
        $question->content = <<<'CONTENT'
        I am new to laravel. I was trying to open http://localhost/test/public/ and I got Error in exception handler. I googled around and changed the permission of storage directory using chmod -R 777 app/storage but to no avail.;I changed debug=>true in app.php and visited the page and got Error in exception handler: The stream or file " /var/www/html/test/app/storage/logs/laravel.log" could not be opened: failed to open stream: Permission denied in /var/www/html/test/bootstrap/compiled.php:8423;Then I changed the permissions of storage directory using the command chmod -R 644 app/storage and the 'Error in exception handler' error was gone and a page is loaded. But in there I am getting this: ' file_put_contents(/var/www/html/laravel/app/storage/meta/services.json): failed to open stream: Permission denied`
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        How to install Laravel 4 to a web host subfolder without publicly exposing /app/ folder? 
TITLE;
        $question->content = <<<'CONTENT'
        I was wondering if any of you know of a way to install Laravel 4 in a web host SUBDIRECTORY / subfolder while not exposing the /app/ folder and other sensible files to the publicly accesible part of the host.;The idea is, I'd be able to access http://mydomain.com/mylaravel/ to be able to use Laravel, but at the same time I want to avoid anyone doing something like going to http://mydomain.com/app/ or http://mydomain.com/mylaravel/app/ and basically being able to see my config files and other code.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Laravel stylesheets and javascript don't load for non-base routes 
TITLE;
        $question->content = <<<'CONTENT'
        Okay--I know this is a really elementary issue, but I can't figure it out. This is a question regarding Laravel.;Basically, I have my stylesheets embedded in my default layout view. I'm currently just using regular css to link them, such as;It works great when I am at a single level route such as /about, but stops working when I go deeper, such as /about/me.;If I look at Chrome's developer console I see some of the following errors (only for the deeper routes);Resource interpreted as Stylesheet but transferred with MIME type text/html: "http://example.dev/about/css/app.css".;So clearly it is now looking for the css inside the "about" folder--which of course isn't a folder at all.;I just want it to look in the same place for the assets regardless of the route.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        Laravel 4: how to run a raw SQL? 
TITLE;
        $question->content = <<<'CONTENT'
        I want to rename a table in Laravel 4, but don't know how to do that.;The SQL is alter table photos rename to images. If there is an Eloquent solution, I'd also like to know how to run a raw SQL, cause sometimes there's just no alternative.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        laravel - How do you check "if not null" with Eloquent? 
TITLE;
        $question->content = <<<'CONTENT'
        How do you check if a field is not null with Eloquent?;I tried Model::where('sent_at', 'IS NOT', DB::raw('null'))->... but it gives IS NOT as a binding instead of a comparison.;This is what DB::getQueryLog() says about it;query' => string 'select * from my_table where sent_at =? and profile_id in (?,?) order by created_at desc' (length=101);bindings' =>;array (size=3);0 => string 'IS NOT' (length=6);1 => int 1;2 => int 4
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Laravel - Eloquent or Fluent random row 
TITLE;
        $question->content = <<<'CONTENT'
        How can I select a random row using Eloquent or Fluent in Laravel framework.;I know by using SQL you can do order by RAND(). And I would prefer to do this without doing a count on the number of records prior to the initial query.;Any ideas?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Laravel Eloquent: How to get only certain columns from joined tables 
TITLE;
        $question->content = <<<'CONTENT'
        I have got 2 joined tables in Eloquent namely themes and users.;theme model;public function user();return $this->belongs_to('User');user model;public function themes();return $this->has_many('Theme');My Eloquent api call looks as below;return Response::eloquent(Theme::with('user')->get());Which returns all columns from theme (that's fine), and all columns from user (not fine). I only need the 'username' column from the user model, how can I limit the query to that?
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - How to get the query executed in Laravel 5? DB::getQueryLog returning empty array 
TITLE;
        $question->content = <<<'CONTENT'
        DB::getQueryLog returning empty array;$user = User::find(5);print_r(DB::getQueryLog());result is empty array;Array
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $user_id++;

        $question = new Question();
        $question->Premium = "Yes";
        $question->title = <<<'TITLE'
        How do I catch exceptions / missing pages in Laravel 5? 
TITLE;
        $question->content = <<<'CONTENT'
        In Laravel 5, App::missing and App::error is not available, so how do your catch exceptions and missing pages now?;I could not find any information regarding this in the documentation.
CONTENT;
        $question->user_id = $user_id;
        $question->save();

        $question = new Question();
        $question->title = <<<'TITLE'
        php - Flush all cache in Laravel 4 
TITLE;
        $question->content = <<<'CONTENT'
        Is there a way to flush all cache in Laravel 4? I'm using file for caching. I read on the docs that you can use Cache::forget('key'), but what if I need to delete all the cache?;An artisan command can also be useful, I think there's an issue on the repo, but not sure if it's implemented yet. Thanks!
CONTENT;
        $question->user_id = $user_id;
        $question->save();

    }
}