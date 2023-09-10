<?php
    function testFun($name1, $name2) {
        echo "<p>This is Blog Site Theme</p>";
        echo "<p>This is $name1 Theme and $name2.</p>";
    }

    testFun("test one", "test two");
?>

<h1><?php bloginfo("name"); ?></h1>
<p><?php bloginfo("description"); ?></p>

<?php 

    $names = ['bob', 'joy', 'tom'];
    $count = 0;

    while($count < count($names)){
        echo "<li>This is $names[$count]</li>";
        $count++;
    };

?>

<?php 
    get_header();

    while(have_posts()){
    the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php the_content(); ?></p>
    <?php }

    get_footer();
?>