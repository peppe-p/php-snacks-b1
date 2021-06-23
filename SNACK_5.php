<!-- 
Prendere un paragrafo abbastanza lungo contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
 -->

<?php
    $p = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum dolorem sit debitis hic a fuga, voluptatibus totam blanditiis nobis nemo nesciunt nisi iusto corrupti exercitationem eos placeat unde, quae fugiat aliquid culpa adipisci, enim officia laudantium? Minus rerum assumenda blanditiis magnam suscipit omnis dolorem, tempore veniam, officiis saepe sequi exercitationem quas illum cumque animi veritatis nulla? Amet libero, maxime ullam saepe dolore nesciunt. Ex et cupiditate corrupti dolore inventore? Vitae perferendis necessitatibus nobis veritatis, iste maxime, exercitationem modi fugiat perspiciatis voluptatibus aliquid, incidunt eligendi tempore placeat? Quaerat inventore molestias voluptas ex qui velit illo veniam et nisi ab nihil repellendus exercitationem commodi sequi quod, accusantium vel est a earum, ipsa cupiditate. Autem quam neque omnis dolorum sapiente eligendi reiciendis, placeat nostrum odit nam nihil est unde cumque eos minus illo cupiditate id quod perferendis dicta magni beatae voluptatum asperiores? Quis veritatis cum commodi odio. Recusandae quod maxime dolor eos maiores repudiandae consectetur quidem aut minus neque. Ut, quo? Fugit nobis quod ipsa tempore, animi corrupti commodi ducimus sit, qui, repudiandae officia temporibus? Animi corporis ad ipsa sit nam? Tempore quo error quae corrupti. Unde corrupti assumenda at eligendi nesciunt recusandae cum veniam repellendus tempora vero aliquid eos ab quibusdam deserunt, vitae quisquam. Ad atque ab sint, facilis minima aut consequatur numquam voluptate dolores veritatis similique, distinctio iste esse vitae doloribus et non reprehenderit a error quis doloremque. A dolor consequuntur non assumenda ipsam minima. Iste fuga ullam perferendis ratione culpa atque est consequatur debitis recusandae molestias perspiciatis, vero ipsum quisquam sint distinctio. Saepe ipsam id consectetur unde iusto error eum officiis perferendis rem molestias laudantium dolores qui quo soluta vel ad, mollitia recusandae delectus iure sint, optio tempore sequi. Molestias ipsum libero totam ut eveniet assumenda! Distinctio, eum corporis tempora dicta consequatur saepe quisquam molestias exercitationem quod incidunt error officia?";

    $ps = explode(".", $p);
    echo var_dump($ps);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        foreach($ps as $phrase){
            ?>
    <p><?php echo $phrase; ?></p>
    <?php
        }
    ?>
</body>

</html>