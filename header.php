<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<title>
<?php 
if (function_exists('is_tag')&& is_tag()){
  single_tag_title("Tag Archive for &quot;"); echo '&quot; -';}
elseif (is_archive()){
  wp_title(''); echo ' Archive - ';
}
elseif (is_search()){
  echo 'Search for &quot;' .wp_specialchars($s). '&quot; - ';
}
elseif (!(is_404()) && (is_single()) || (is_page()))
{
wp_title(''); echo '-';
}
elseif (is_404)) { echo 'Not Found -';}
if (is_home()){
  bloginfo('name'); echo ' - '; bloginfo ('description');
}
else {
  bloginfo ('name');
}
if ($paged>1){echo ' - page'. $paged;}
?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href=""<?php bloginfo('template_directory'); ?>/_/img/favicon/ico">

</head>
<body>
    <header class="container-fluid">
        <div class="container">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">JOSH WHITKIN</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CV</a>
            </li> 

            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li> 
          </ul>
        </div> 
      </nav>

<h1>Games Design For the Future</h1>


    </div> <!---container-->
    </header>
<section class="container-fluid">
<div class="container">
<h2> GAMES & LEVEL DESIGNER</h2>
<p class="particle"> ...... and particle wizard</p>
<P class="about-text"> My  name is josh Whitkin. I’m a professional with more than 7 years of industry experience in Games Design, Level design, Scripting and Visual Effects.  What makes me passionate about games is the combination of technology  and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments.
    I always tell a story.</P>
<div class="blocker"></div>
</div> <!---container-->
<?php wp_head(); ?> <!---very important that I added this-->
</section>

