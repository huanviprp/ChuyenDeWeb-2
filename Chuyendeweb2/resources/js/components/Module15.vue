<template>
   <div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <a href=""></a>
    </div>
    <ul>
      <li><a href="#dashboard" id="targeted">dashboard</a></li>
      <li><a href="#posts">posts</a></li>
    </ul>
  </div>
  <div class="main">
    <div class="mainContent clearfix">
      <div id="dashboard">
        <h2 class="header"><span class="icon"></span>Dashboard</h2> 
       </div>
       <div id="posts">
         <h2 class="header">Posts</h2>
       </div>
     </div>
   </div>
</div>
</template>
<script>
export default {
    
}
</script>
<style>
body {
	background-color: rgb(220,220,220);
	padding: 0;
	margin: 0;
	font-size: 16px;
	font-family: sans-serif;
}

.admin-panel {
	width: 990px;
	margin: 50px auto;
}
/*slidebar*/
.slidebar {
	width: 20%;
	min-height: 690px;
	float: left;
	border-right: 1px solid rgb(235,235,235);
	background-color: rgb(247,247,247);
}
.slidebar .logo {
	height: 145px;
	border-bottom: 1px solid rgb(235,235,235);
}
.slidebar ul {
	padding: 0;
	margin:0;
}
.slidebar li {
	list-style-type: none;
	margin: 0;
	position: relative;
}

.slidebar ul a {
	color: rgb(140,140,140);
	text-decoration: none;
	font:16px/40px helvetica,verdana,sans-serif;
	box-sizing:border-box;
	border-bottom: 1px solid rgb(235,235,235);
	display: block;
	box-shadow:inset 0 1px 0 rgb(255,255,255);
	text-indent: 20px;
	text-transform: capitalize;
}
.slidebar li:hover a {
	background-color: rgb(255,255,255);
	box-shadow: 1px 0 0 rgb(255,255,255),inset 5px 0 0 -1px rgb(234,83,63);
}
/*main*/
.main {
	float: left;
	width: 79%;
	height: 690px;
	background-color: rgb(255,255,255);
	position: relative;
	font-family: helvetica,verdana,sans-serif;
}
.main .topbar {
	border-bottom: 1px solid rgb(235,235,235);
	margin: 0;
	padding: 0;
}

/*mainContent*/
 
.mainContent>div {
	position: absolute;
	opacity: 0;
	transition:opacity 200ms linear;
}
/*通过opacity来切换不同的选项卡*/
.mainContent>div:target {
	opacity: 1;
}
.mainContent h2 {
	margin:1em 30px;
	color: rgb(234,83,63);
	font-size: 20px;
}

 #dashboard>div {
	border: 1px solid rgb(235,235,235);
	margin-left: 30px;
	border-radius: 5px;
	min-width: 345px;
	height: 262px;
	display: inline-block;
}
/*logo*/
.logo a {
	width: 88px;
	height: 88px;
	display: inline-block;
	position: relative;
	left: 50%;
	top: 50%;
	margin: -45px 0 0 -45px;
	border: 1px solid rgb(200,200,200);
	border-radius: 50%;
	background-color: rgb(214,214,214);
}
.logo a:before {
	content: "A";
	width: 70px;
	height: 70px;
	font: 50px/70px helvetica,verdana,sans-serif;
	text-align: center;
	position: absolute;
	top: 8px;
	left: 8px;
	border-radius: 35px;
	border: 1px solid rgb(210,210,210);
	display: inline-block;
	background: linear-gradient(top,rgb(255,255,255),rgb(245,245,245));
}
</style>