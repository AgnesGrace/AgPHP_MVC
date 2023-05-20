<?php require APPROOT . '/views/includes/header.php';?>
<h1><?php echo $data['title'];?></h1>
<h3>Hello ⭐️ this is the AgmercyMVC PHP framework, built from scratch</h3>
<h4>Understanding how this works will help you to easily understand how any <span>PHP framwork</span> works</h4>
<P>Kindly visit the documentation on how to use it</P>
<ul>
    <?php foreach($data['post'] as $post):?>
        <li><?php echo $post->title; ?></li>

    <?php endforeach;?>
</ul>
<?php require APPROOT . '/views/includes/footer.php';?>