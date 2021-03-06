<!DOCTYPE html>
<html lang="en">
  
  <head>
    
    <link href="localhost/css/fullcalendar_002.css" rel="stylesheet">
    <link href="localhost/css/fullcalendar.css" rel="stylesheet" media="print">
    <link href="localhost/css/bootstrap4.css" rel="stylesheet" media="print">
	
    <!--jQuery-->
    <script src="localhost/js/jquery-1.js"></script>
    <script src="localhost/js/jquery-ui-1.js"></script>
    
	<!--FullCalendar-->
    <script src="localhost/js/fullcalendar.js"></script>
	
	<style type="text/css">
		
		#calendar
		{
			width: 900px;
			margin: 0 auto;
		}
		
		#calendar
		{
			width: 900px;
			margin: 0 auto;
		}
.nav-tabs .dropdown-menu {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    margin-top: -1px;
}
.navbar {
    border: 1px solid transparent;
    margin-bottom: 20px;
    min-height: 50px;
    position: relative;
}
@media (min-width: 768px) {
.navbar {
    border-radius: 4px;
}
}
@media (min-width: 768px) {
.navbar-header {
    float: left;
}
}
.navbar-collapse {
    border-top: 1px solid transparent;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1) inset;
    overflow-x: visible;
    padding-left: 15px;
    padding-right: 15px;
}
.navbar-collapse.in {
    overflow-y: auto;
}
@media (min-width: 768px) {
.navbar-collapse {
    border-top: 0 none;
    box-shadow: none;
    width: auto;
}
.navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    overflow: visible !important;
    padding-bottom: 0;
}
.navbar-collapse.in {
    overflow-y: visible;
}
.navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
}
}
.navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
    max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
.navbar-fixed-bottom .navbar-collapse, .navbar-fixed-top .navbar-collapse {
    max-height: 200px;
}
}
.container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
    margin-left: -15px;
    margin-right: -15px;
}
@media (min-width: 768px) {
.container-fluid > .navbar-collapse, .container-fluid > .navbar-header, .container > .navbar-collapse, .container > .navbar-header {
    margin-left: 0;
    margin-right: 0;
}
}
.navbar-static-top {
    border-width: 0 0 1px;
    z-index: 1000;
}
@media (min-width: 768px) {
.navbar-static-top {
    border-radius: 0;
}
}
.navbar-fixed-bottom, .navbar-fixed-top {
    left: 0;
    position: fixed;
    right: 0;
    z-index: 1030;
}
@media (min-width: 768px) {
.navbar-fixed-bottom, .navbar-fixed-top {
    border-radius: 0;
}
}
.navbar-fixed-top {
    border-width: 0 0 1px;
    top: 0;
}
.navbar-fixed-bottom {
    border-width: 1px 0 0;
    bottom: 0;
    margin-bottom: 0;
}
.navbar-brand {
    float: left;
    font-size: 18px;
    height: 50px;
    line-height: 20px;
    padding: 15px;
}
.navbar-brand:focus, .navbar-brand:hover {
    text-decoration: none;
}
.navbar-brand > img {
    display: block;
}
@media (min-width: 768px) {
.navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
}
}
.navbar-toggle {
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    float: right;
    margin-bottom: 8px;
    margin-right: 15px;
    margin-top: 8px;
    padding: 9px 10px;
    position: relative;
}
.navbar-toggle:focus {
    outline: 0 none;
}
.navbar-toggle .icon-bar {
    border-radius: 1px;
    display: block;
    height: 2px;
    width: 22px;
}
.navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px;
}
@media (min-width: 768px) {
.navbar-toggle {
    display: none;
}
}
.navbar-nav {
    margin: 7.5px -15px;
}
.navbar-nav > li > a {
    line-height: 20px;
    padding-bottom: 10px;
    padding-top: 10px;
}
@media (max-width: 767px) {
.navbar-nav .open .dropdown-menu {
    background-color: transparent;
    border: 0 none;
    box-shadow: none;
    float: none;
    margin-top: 0;
    position: static;
    width: auto;
}
.navbar-nav .open .dropdown-menu .dropdown-header, .navbar-nav .open .dropdown-menu > li > a {
    padding: 5px 15px 5px 25px;
}
.navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
}
.navbar-nav .open .dropdown-menu > li > a:focus, .navbar-nav .open .dropdown-menu > li > a:hover {
    background-image: none;
}
}
@media (min-width: 768px) {

.navbar-nav {
    float: left;
    margin: 0;
}
.navbar-nav > li {
    float: left;
}
.navbar-nav > li > a {
    padding-bottom: 15px;
    padding-top: 15px;
}
}
.navbar-form {
    border-bottom: 1px solid transparent;
    border-top: 1px solid transparent;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.1);
    margin: 8px -15px;
    padding: 10px 15px;
}
@media (min-width: 768px) {
.navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
}
.navbar-form .form-control {
    display: inline-block;
    vertical-align: middle;
    width: auto;
}
.navbar-form .form-control-static {
    display: inline-block;
}
.navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
}
.navbar-form .input-group .form-control, .navbar-form .input-group .input-group-addon, .navbar-form .input-group .input-group-btn {
    width: auto;
}
.navbar-form .input-group > .form-control {
    width: 100%;
}
.navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
}
.navbar-form .checkbox, .navbar-form .radio {
    display: inline-block;
    margin-bottom: 0;
    margin-top: 0;
    vertical-align: middle;
}
.navbar-form .checkbox label, .navbar-form .radio label {
    padding-left: 0;
}
.navbar-form .checkbox input[type="checkbox"], .navbar-form .radio input[type="radio"] {
    margin-left: 0;
    position: relative;
}
.navbar-form .has-feedback .form-control-feedback {
    top: 0;
}
}
@media (max-width: 767px) {
.navbar-form .form-group {
    margin-bottom: 5px;
}
.navbar-form .form-group:last-child {
    margin-bottom: 0;
}
}
@media (min-width: 768px) {
.navbar-form {
    border: 0 none;
    box-shadow: none;
    margin-left: 0;
    margin-right: 0;
    padding-bottom: 0;
    padding-top: 0;
    width: auto;
}
}
.navbar-nav > li > .dropdown-menu {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    margin-top: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
    border-radius: 4px 4px 0 0;
    margin-bottom: 0;
}
.navbar-btn {
    margin-bottom: 8px;
    margin-top: 8px;
}
.navbar-btn.btn-sm {
    margin-bottom: 10px;
    margin-top: 10px;
}
.navbar-btn.btn-xs {
    margin-bottom: 14px;
    margin-top: 14px;
}
.navbar-text {
    margin-bottom: 15px;
    margin-top: 15px;
}
@media (min-width: 768px) {
.navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
}
}
@media (min-width: 768px) {
.navbar-left {
    float: left !important;
}
.navbar-right {
    float: right !important;
    margin-right: -15px;
}
.navbar-right ~ .navbar-right {
    margin-right: 0;
}
}
.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
    color: #777;
}
.navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
    background-color: transparent;
    color: #5e5e5e;
}
.navbar-default .navbar-text {
    color: #777;
}
.navbar-default .navbar-nav > li > a {
    color: #777;
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #333;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
    background-color: #e7e7e7;
    color: #555;
}
.navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:focus, .navbar-default .navbar-nav > .disabled > a:hover {
    background-color: transparent;
    color: #ccc;
}
.navbar-default .navbar-toggle {
    border-color: #ddd;
}
.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
    background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
    border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
    background-color: #e7e7e7;
    color: #555;
}
@media (max-width: 767px) {
.navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
}
.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
    background-color: transparent;
    color: #333;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover {
    background-color: #e7e7e7;
    color: #555;
}
.navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover {
    background-color: transparent;
    color: #ccc;
}
}
.navbar-default .navbar-link {
    color: #777;
}
.navbar-default .navbar-link:hover {
    color: #333;
}
.navbar-default .btn-link {
    color: #777;
}
.navbar-default .btn-link:focus, .navbar-default .btn-link:hover {
    color: #333;
}
.navbar-default .btn-link[disabled]:focus, .navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:focus, fieldset[disabled] .navbar-default .btn-link:hover {
    color: #ccc;
}
.navbar-inverse {
    background-color: #222;
    border-color: #080808;
}
.navbar-inverse .navbar-brand {
    color: #9d9d9d;
}
.navbar-inverse .navbar-brand:focus, .navbar-inverse .navbar-brand:hover {
    background-color: transparent;
    color: #fff;
}
.navbar-inverse .navbar-text {
    color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
    color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:focus, .navbar-inverse .navbar-nav > li > a:hover {
    background-color: transparent;
    color: #fff;
}
.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover {
    background-color: #080808;
    color: #fff;
}
.navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:focus, .navbar-inverse .navbar-nav > .disabled > a:hover {
    background-color: transparent;
    color: #444;
}
.navbar-inverse .navbar-toggle {
    border-color: #333;
}
.navbar-inverse .navbar-toggle:focus, .navbar-inverse .navbar-toggle:hover {
    background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #fff;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:focus, .navbar-inverse .navbar-nav > .open > a:hover {
    background-color: #080808;
    color: #fff;
}
@media (max-width: 767px) {
.navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
}
.navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
}
.navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
}
.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
    background-color: transparent;
    color: #fff;
}
.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover {
    background-color: #080808;
    color: #fff;
}
.navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover {
    background-color: transparent;
    color: #444;
}
}
.navbar-inverse .navbar-link {
    color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
    color: #fff;
}
.navbar-inverse .btn-link {
    color: #9d9d9d;
}
.navbar-inverse .btn-link:focus, .navbar-inverse .btn-link:hover {
    color: #fff;
}
.navbar-inverse .btn-link[disabled]:focus, .navbar-inverse .btn-link[disabled]:hover, fieldset[disabled] .navbar-inverse .btn-link:focus, fieldset[disabled] .navbar-inverse .btn-link:hover {
    color: #444;
}
.navbar-nav > li {
    float: left;
}
.nav > li {
    display: block;
    position: relative;
}
a {
	text-decoration:none;
}
body {
	padding:0px;
	margin:0px;
	color: #333;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857;
}
.navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
}
.navbar-default .navbar-brand {
    color: #777;
}
.navbar-brand {
    float: left;
    font-size: 18px;
    height: 50px;
    line-height: 20px;
    padding: 15px;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
    background-color: #e7e7e7;
    color: #555;
}
.navbar-default .navbar-nav > li > a {
    color: #777;
}
.navbar-nav > li > a {
    padding-bottom: 15px;
    padding-top: 15px;
}
.navbar-nav > li > a {
    line-height: 20px;
    padding-bottom: 10px;
    padding-top: 10px;
}
.nav > li > a {
    display: block;
    padding: 15px 15px;
    position: relative;
}
.dropdown-menu li {
	display:none;
}
a {
    color: #337ab7;
    text-decoration: none;
}
		
	</style>
  </head>
  
  <body>
    
    
    	
    <div class="container">
    
       @yield('content')
     
      @include('partials._footer')
    </div> <!-- end of .container-->
    

  </body>
</html>